<?php

include('vendor/autoload.php');

use Libs\Database\ProductTable;
use Libs\Database\MySQL;

$product_table = new ProductTable(new MySQL());
$brand = $product_table->brand();
$color = $product_table->color();
$size = $product_table->size();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Women</title>
    <!-- --------------------- Bootstrap ------------------------ -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <!-- --------------------- Icons ------------------------- -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- --------------------- Google Font ---------------------- -->
    <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
    <!-- --------------------- style.css ------------------------ -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    

    <!-- --------------------- Header --------------------------- -->
    <?php include("head.php") ?>
    <!-- --------------------- Header --------------------------- -->

    <!-- --------------------- Body ----------------------------- -->
    <div class="container-fluid p-5 mt-2">
        <div class="row">
            <div class="d-lg-none d-md-none d-sm-block d-block mb-3">
                <button class="btn btn-dark w-100" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions">Filter <i class='bx bx-filter-alt' ></i></button>

                <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Filter</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div class="filter px-5 py-3">

                            <div class="filter-box mb-5">
                                <div class="filter-head mb-3">
                                    <h4>Brand</h4>
                                    <span><i class='bx bxs-down-arrow'></i></span>
                                </div>
                                <ul>
                                    <?php foreach($brand as $value):?>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input brand common" type="checkbox" value="<?= $value->brand ?>" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    <?= $value->brand ?>
                                                </label>
                                            </div>
                                        </li>
                                    <?php endforeach ?>
                                </ul>
                            </div>


                            <div class="filter-box mb-5">
                                <div class="filter-head mb-3">
                                    <h4>Size</h4>
                                    <span><i class='bx bxs-down-arrow'></i></span>
                                </div>
                                <ul>
                                    <?php foreach($size as $value): ?>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input size common" type="checkbox" value="<?= $value->size ?>" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    <?= $value->size ?>
                                                </label>
                                            </div>
                                        </li>
                                    <?php endforeach ?>
                                </ul>
                            </div>


                            <div class="filter-box">
                                <div class="filter-head mb-3">
                                    <h4>Base Color</h4>
                                    <span><i class='bx bxs-down-arrow'></i></span>
                                </div>
                                <ul>
                                    <?php foreach($color as $value): ?>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input color common" type="checkbox" value="<?= $value->color ?>" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    <?= $value->color ?>
                                                </label>
                                            </div>
                                        </li>
                                    <?php endforeach ?>
                                </ul>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 d-lg-block d-md-block d-sm-none  d-none">
                <div class="filter px-5 py-3">

                    <div class="filter-box mb-5">
                        <div class="filter-head mb-3">
                            <h4>Brand</h4>
                            <span><i class='bx bxs-down-arrow'></i></span>
                        </div>
                        <ul>
                            <?php foreach($brand as $value):?>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input brand common" type="checkbox" value="<?= $value->brand ?>" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            <?= $value->brand ?>
                                        </label>
                                    </div>
                                </li>
                            <?php endforeach ?>
                        </ul>
                    </div>


                    <div class="filter-box mb-5">
                        <div class="filter-head mb-3">
                            <h4>Size</h4>
                            <span><i class='bx bxs-down-arrow'></i></span>
                        </div>
                        <ul>
                            <?php foreach($size as $value): ?>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input size common" type="checkbox" value="<?= $value->size ?>" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            <?= $value->size ?>
                                        </label>
                                    </div>
                                </li>
                            <?php endforeach ?>
                        </ul>
                    </div>


                    <div class="filter-box">
                        <div class="filter-head mb-3">
                            <h4>Base Color</h4>
                            <span><i class='bx bxs-down-arrow'></i></span>
                        </div>
                        <ul>
                            <?php foreach($color as $value): ?>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input color common" type="checkbox" value="<?= $value->color ?>" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            <?= $value->color ?>
                                        </label>
                                    </div>
                                </li>
                            <?php endforeach ?>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="col-lg-9 col-md-9">
                <div class="row filter_data">

                                        
                </div>
            </div>
        </div>
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
    <script src="js/main.js"></script>

    <script>
        
        $(document).ready(function(){

            filter_data();

            function filter_data(){
                var action = 'fetch_data';
                var size = get_data('size');
                var brand = get_data('brand');
                var color = get_data('color');

                $.ajax({
                    url: "actions/women_filter.php",
                    type: "POST",
                    data: {action:action,size:size,brand:brand,color:color},
                    success: function(data){
                        $('.filter_data').html(data);
                    }
                })
                
            }

            function get_data(class_name){
                var filter = [];
                $(`.${class_name}:checked`).each(function(){
                    filter.push($(this).val());
                })
                return filter;
            }

            $('.common').on("click",function(){
                filter_data();
            })
        })

    </script>

</body>
</html>