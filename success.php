<?php
    include('vendor/autoload.php');

    use Helpers\Auth;
    use Helpers\HTTP;
    
    Auth::check();

    if(isset($_POST['order'])){
        session_destroy();
    }
    else{
        HTTP::redirect('/billing.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Success</title>
    <!-- --------------------- Bootstrap ------------------------ -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="order-confirm">
                    <img class='order' src="image/order.svg" alt="">
                </div>
            </div>
        </div>
        <div class="row mt-5 text-center">
            <div class="col">
                <h2 class='mb-4'>YOUR ORDER IS CONFIRMED.</h2>
                <h5>Thanks for shopping with us.</h5>
                <h5>You will receive an order confirmation email with details of your order.</h5>
            </div>
        </div>
        <div class="row mt-3">
            <div class="process justify-content-around">
                <a href="index.php">Continue Shopping</a>
            </div>
        </div>
    </div>
</body>
</html>