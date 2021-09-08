<?php

include('vendor/autoload.php');

use Helpers\Auth;

Auth::check();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shipping</title>
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
    
    <div class="container">
        <div class="row mt-4 mb-4">
            <div class="col-lg-12 text-center">
                <div class="page-info">
                    <div class="ship-page">
                        <span class='page-no active'>1</span>
                        <span class='page-desc'>SHIPPING</span>
                    </div>
                    <div class="billing">
                        <span class='page-no'>2</span>
                        <span class='page-desc'>BILLING</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg-12 ">
                <div class="ship-head mb-2 text-center">
                    <span>Shipping Info</span>
                </div>
                <div class="alert-center">
                    <div class="alert alert-warning shipping-alert">
                        <span>&#9888;</span>
                        <div>
                            <strong>There's a temporary delay in order processing that may affect your estimated
                            delivery date for some products.</strong> We'll email you as soon as your products ship.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <form action="billing.php">
            <div class="row">
                <div class="col-lg-6 border-end border-info">
                    <div class="shipping-input-box">
                        <input type="text" name='fname' required>
                        <span>First Name</span>
                    </div>
                    <div class="shipping-input-box">
                        <input type="text" name='lname' required>
                        <span>Last Name</span>
                    </div>
                    <div class="shipping-input-box">
                        <input type="text" name='address' required>
                        <span>Address</span>
                    </div>
                    <div class="shipping-input-box">
                        <input type="text" name='township' required>
                        <span>Township</span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shipping-input-box">
                        <input class="form-control" name="city" list="datalistOptions" id="exampleDataList" placeholder="Type to search city ..." required>
                        <datalist id="datalistOptions">
                            <option value="Yangon">
                            <option value="Mandalay">
                            <option value="Nay Pyi Taw">
                            <option value="Lashio">
                            <option value="Pyin Oo Lwin">
                            <option value="Mawlamyine">
                            <option value="Taunggyi">
                            <option value="Bago">
                            <option value="Monywa">
                            <option value="Pathein">
                            <option value="Pyay">
                            <option value="Myeik">
                            <option value="Mogok">
                            <option value="Dawei">
                            <option value="Shwebo">
                            <option value="Hpa-An">
                        </datalist>
                    </div>
                    <div class="shipping-input-box">
                        <input type="number" name='pcode' maxlength="4" required>
                        <span>Postal Code</span>
                    </div>
                    <div class="shipping-input-box">
                        <input type="email" name='email' required>
                        <span>Email</span>
                    </div>
                    <div class="shipping-input-box">
                        <input type="tel" name='phone' required>
                        <span>Phone</span>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-12">
                    <div class="process justify-content-around">
                        <button>
                            <span>Continue </span> 
                            <i class='bx bx-right-arrow-alt' ></i>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- --------------------- Boxicons ------------------------- -->
    <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
    
</body>
</html>