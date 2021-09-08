<?php

include('vendor/autoload.php');

use Helpers\Auth;

Auth::check();

session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing</title>
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
                        <span class='page-no'>1</span>
                        <span class='page-desc'>SHIPPING</span>
                    </div>
                    <div class="billing">
                        <span class='page-no active'>2</span>
                        <span class='page-desc'>BILLING</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-lg-12 ">
                <div class="ship-head mb-2 text-center">
                    <span>Billing Info</span>
                </div>
                <div class="billing-info text-center">
                    <p>Choose a payment option below and fill out <br>
                    the appropriate information</p>
                </div>
                <div class="billing-card mt-3">
                    <span class="credit-card active">
                        <i class='bx bxs-credit-card' ></i>
                        <span>Credit Card</span>
                    </span>
                    <span class="gift-card">
                        <i class='bx bxs-credit-card-front'></i>
                        <span>Gift Card</span>
                    </span>
                    <span class="paypal">
                        <i class='bx bxl-paypal' ></i>
                        <span>Paypal</span>
                    </span>
                </div>
            </div>
        </div>
        <form action="#">
            <div class="row">
                <div class="col-lg-6 col-md-6 ship-padding">
                    <div class="info-head mb-4">
                        <span>1</span>
                        <span>Billing Address</span>
                    </div>
                    <div class="shipping-input-box billing">
                        <input type="text" name='fname' required>
                        <span>First Name</span>
                    </div>
                    <div class="shipping-input-box billing">
                        <input type="text" name='lname' required>
                        <span>Last Name</span>
                    </div>
                    <div class="shipping-input-box billing">
                        <input type="text" name='address' required>
                        <span>Address</span>
                    </div>
                    <div class="shipping-input-box billing">
                        <input type="text" name='township' required>
                        <span>Township</span>
                    </div>
                    <div class="shipping-input-box billing">
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
                    <div class="shipping-input-box billing">
                        <input type="number" name='pcode' maxlength="4" required>
                        <span>Zip Code</span>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 ship-padding">
                    <div class="info-head mb-4">
                        <span>2</span>
                        <span>Card Info</span>
                    </div>
                    <div class="shipping-input-box billing">
                        <input type="text" name='cname' required>
                        <span>Name on Card</span>
                    </div>
                    <div class="shipping-input-box billing">
                        <input type="number" name='cnumber' required>
                        <span>Card Number</span>
                    </div>
                    <div class="billing-input-box">
                        <div class="cvv">
                            <input type="number" name='cnumber' required>
                            <span>CVV Number</span>
                        </div>
                        <div class="exp-month">
                            <input type="month" name='cnumber' required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2 mb-2">
                <div class="col-12">
                    <div class="note text-center">
                        <p>By clicking the 'Place Order' button, you confirm that you have read, 
                            understood and accept our Terms and Conditions of Sale and Returns Policy. 
                            I understand that my order cannot be modified once it is placed.</p>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-12">
                    <div class="order-btn">
                        <button>Place Order</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- --------------------- Jquery --------------------------- -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- --------------------- Bootstrap Javascript ------------- -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
    <!-- --------------------- Boxicons ------------------------- -->
    <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
    <!-- --------------------- main.js -------------------------- -->
    <script src="js/main.js"></script>
</body>
</html>