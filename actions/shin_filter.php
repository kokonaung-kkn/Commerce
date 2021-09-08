<?php

include('../vendor/autoload.php');

use Libs\Database\MySQL;

$mysql = new MySQL();
$db = $mysql->connect();

if(isset($_POST['action'])){
    $query = "SELECT * FROM products WHERE category_id = 5 ";
    if(isset($_POST['size'])){
        $size_filter = implode("','", $_POST['size']);
        $query .= "AND size IN ('".$size_filter."')";
    }
    if(isset($_POST['color'])){
        $color_filter = implode("','",$_POST['color']);
        $query .= "AND color IN ('".$color_filter."')";
    }
    if(isset($_POST['brand'])){
        $brand_filter = implode("','",$_POST['brand']);
        $query .= "AND brand IN ('".$brand_filter."')";
    }

    $statement = $db->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    $totalRow = $statement->rowCount();
    $output = '';
    if($totalRow > 0){
        foreach($result as $row){
            $output .= '
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                        <div class="product-box">
                            <form action="actions/addCart.php" method="post">
                                <div class="upper">
                                    <div class="shoes">
                                        <img src="image/'.$row->image.'" alt="">
                                    </div>
                                </div>
                                <div class="product-name">
                                    <p>'.$row->name.'</p>
                                </div>
                                <div class="lower">
                                    <div class="product-price">
                                        <span>PRICE</span>
                                        <span>$'.$row->price.'</span>
                                    </div>
                                    <div class="color-size">
                                        <div class="product-color">
                                            <span>COLOR:</span>
                                            <span class="color">'.strtoupper($row->color).'</span>
                                        </div>
                                        <div class="product-size">
                                            <span>SIZE:</span>
                                            <span class="size">'.$row->size.'</span>
                                        </div>
                                    </div>
                                    <input type="hidden" name="image" value="'.$row->image.'">
                                    <input type="hidden" name="name" value="'.$row->name.'">
                                    <input type="hidden" name="price" value="'.$row->price.'">
                                    <input type="hidden" name="qty" value=1>
                                    <input type="hidden" name="pid" value="'.$row->id.'">
                                    <div class="add-to-cart">
                                        <button><i class="bx bxs-cart-add"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            ';
        }
    }else{
        $output = '<h3>No data found';
    }
    echo $output;
}