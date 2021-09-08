<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <!-- --------------------- Icons ------------------------- -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- --------------------- Google Font ---------------------- -->
    <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
    <!-- --------------------- style.css ------------------------ -->
    <link rel="stylesheet" href="css/sign.css">
</head>
<body>
    
    <div class="container">
        <div class="left-side">
            <div class="logo">
                <div class="xtreme">
                    <img src="image/xtreme1.png" alt="">
                </div>
                <div class="kick">
                    <img src="image/kick.png" alt="">
                </div>
            </div>
            <div class="img">
                <img src="image/wallpaper.jpg" alt="">
            </div>
        </div>
        <div class="right-side">
            <div class="header">
                <h1>Sign Up</h1>
            </div>
            <div class="contents">
                <form action="actions/register.php" method="post">
                    <div class="input-box">
                        <input type="text" name='fname' required>
                        <label>First Name</label>
                    </div>
                    <div class="input-box">
                        <input type="text" name='lname' required>
                        <label>Last Name</label>
                    </div>
                    <div class="input-box">
                        <input type="email" name='email' required>
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <input class="psw1" type="password" name='password' required>
                        <label>Password</label>
                        <span class='visibility'><i class='bx bxs-hide visible'></i></span>
                    </div>
                    <div class="input-box">
                        <input class="psw2" type="password"  required>
                        <label>Confirm Password</label>
                        <span class='visibility'><i class='bx bxs-hide visible'></i></span>
                        <span class="confirm"></span>
                    </div>
                    <div class="input-box">
                        <label>Male</label><input type="radio" name='gender' value='male' checked>
                        <label class='gender'>Female</label><input type="radio" name='gender' value='female'>
                        <label class='gender'>Other</label><input type="radio" name='gender' value='other'>
                    </div>
                    <div class="btn">
                        <input type="submit" class="signup" value="Sign Up">
                        <a href="signin.php">Sign In &#8594;</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!-- --------------------- Jquery --------------------------- -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>