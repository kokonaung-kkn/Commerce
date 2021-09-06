<?php 

session_start(); 
$total = 0;
$subtotal = 0;
$user = null;
if(isset($_SESSION['user'])){
    $user = $_SESSION['user'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <!-- --------------------- Bootstrap ------------------------ -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <!-- --------------------- Icons ------------------------- -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- --------------------- Google Font ---------------------- -->
    <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
    <!-- --------------------- style.css ------------------------ -->
    <link rel="stylesheet" href="../css/style1.css">
</head>
<body>
    
    <!-- --------------------- Header --------------------------- -->
    <?php include("head.php") ?>
    <!-- --------------------- Header --------------------------- -->

    <!-- --------------------- Body ----------------------------- -->
    <div class="container">
        <form action="signin.php" method="post">
            <div class="row mt-5 mb-5">
                <div class="col-12 text-center">
                    <div class="cart-header">
                        <h1>Your Cart</h1>
                    </div>
                </div>
            </div>
            <table class="table text-light table-borderless mb-3">
                <thead>
                    <tr>
                        <td>Product</td>
                        <td>Price</td>
                        <td>Quantity</td>
                        <td>Total</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody class='cart_table'>
                    <?php foreach($_SESSION as $products): ?>
                        <?php if($products !== $user):?>
                            <tr>
                                <td>
                                    <div class="product">
                                        <span class="product-img me-3">
                                            <img src="../image/<?= $products[0] ?>" alt="">
                                            <input type="hidden" class='image' name="image" value="<?= $products[0] ?>">
                                        </span>
                                        <div class="product-desc">
                                            <?= $products[1] ?>
                                            <input type="hidden" class='name' name="name" value="<?= $products[1] ?>">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span><?= $products[2] ?></span>
                                    <input type="hidden" class='price' name="price" value="<?= $products[2] ?>">
                                </td>
                                <td>
                                    <div class="quantity">
                                        <input type="number" class="form-control qty" id="exampleFormControlInput1" value='<?= $products[3] ?>'>
                                        <input type="hidden" class='pid' name="pid" value="<?= $products[4] ?>">
                                    </div>
                                </td>
                                <td>
                                    <span>
                                        <?php 
                                            $total = $products[2] * $products[3];
                                            $subtotal += $total;
                                            echo $total; 
                                        ?>
                                    </span>
                                </td>
                                <td>
                                    <span class='del'><i class='bx bx-x'></i></span>
                                </td>
                            </tr>
                        <?php else: continue?>
                        <?php endif ?>
                    <?php endforeach ?>    
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan='3' class="text-end pe-5">
                            <span>Subtotal Price:</span>
                        </td>
                        <td colspan='2'>
                            <span>
                                <?php 
                                    echo $subtotal; 
                                ?>
                            </span>
                        </td>
                    </tr>
                </tfoot>
            </table>
            <div class="row mb-5">
                <div class="col-lg-12">
                    <div class="process">
                        <a href="men.php">
                            <i class='bx bx-left-arrow-alt' ></i> 
                            <span> Continue Shopping</span>
                        </a>
                        <input type="submit" name="checkout" value="Checkout &#8594;"> 
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- --------------------- Body ----------------------------- -->

    <!-- --------------------- Footer --------------------------- -->
    <?php require("footer.php") ?>
    <!-- --------------------- Footer --------------------------- -->



    <!-- --------------------- Jquery --------------------------- -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- --------------------- Bootstrap Javascript ------------- -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
    <!-- --------------------- Boxicons ------------------------- -->
    <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
    <!-- --------------------- main.js -------------------------- -->
    <script src="../js/main1.js"></script>
    <script>

        $('.form-control').on("change",function(){
            parent = $(this).parentsUntil('tbody')
            image = $('.image',parent).val();
            name = $('.name',parent).val();
            price = $('.price',parent).val();
            qty = $('.qty',parent).val();
            pid = $('.pid',parent).val();
            action = "update";

            $.ajax({
                url: "../actions/edit_cart.php",
                type: "POST",
                data: {action:action,image:image,name:name,price:price,qty:qty,pid:pid},
                success: function(){
                    location.reload();
                }
            })
        })
        $('.del').on('click',function(){
            parent = $(this).parentsUntil('tbody')
            name = $('.name',parent).val();
            action = "delete";

            $.ajax({
                url: "../actions/edit_cart.php",
                type: "POST",
                data: {action:action,name:name},
                success: function(){
                    location.reload();
                }
            })
        })

    </script>
</body>
</html>