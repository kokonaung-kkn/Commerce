<?php
    session_start();
    if(isset($_SESSION['user'])){
        header('location: ../actions/order.php');
    }
    else{
        if(isset($_POST['checkout'])){   
            $_SESSION['checkout'] = $_POST['checkout'];
        }
    }
    
    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <!-- --------------------- Icons ------------------------- -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- --------------------- Google Font ---------------------- -->
    <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
    <!-- --------------------- style.css ------------------------ -->
    <link rel="stylesheet" href="../css/sign1.css">
</head>
<body>
    
    <div class="container">
        <div class="left-side">
            <div class="logo">
                <div class="xtreme">
                    <img src="../image/xtreme1.png" alt="">
                </div>
                <div class="kick">
                    <img src="../image/kick.png" alt="">
                </div>
            </div>
            <div class="img">
                <img src="../image/login.jpg" alt="">
            </div>
        </div>
        <div class="right-side">
            <div class="header">
                <h1>Sign In</h1>
            </div>
            <div class="contents">
                <form action="../actions/login.php" method="post">
                    <div class="input-box">
                        <input type="email" name='email' required>
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <input type="password" name='password' required>
                        <label>Password</label>
                        <span class='visibility'><i class='bx bxs-hide visible'></i></span>
                    </div>
                    <div class="signin-btn">
                        <input type="submit" value="Sign Up">
                    </div>
                </form>
            </div>
            <div class="others">
                <span>Or Login With</span>
            </div>
            <div class="social">
                <span class="fb">
                    <i class='bx bxl-facebook'></i>
                </span>
                <span class="tw">
                    <i class='bx bxl-twitter' ></i>
                </span>
                <span class="insta">
                    <i class='bx bxl-instagram' ></i>
                </span>
                <span class="whats">
                    <i class='bx bxl-whatsapp' ></i>
                </span>
            </div>
            <div class="register">
                <a href="signup.php">Create my login account &#8594;</a>
            </div>
        </div>
    </div>

    <!-- --------------------- Jquery --------------------------- -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../js/main1.js"></script>
</body>
</html>