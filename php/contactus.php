<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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
        <div class="row mt-5 mb-5">
            <div class="col-12">
                <div class="contactus-title">
                    <h1 class="text-center">Contact Us</h1>
                </div>
            </div>
            <div class="col-12">
                <div class="contactus-text mt-3">
                    <p class="text-center">We'd love to hear from you, please drop us a line if you've any query.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="input-box">
                    <input type="text" required="required">
                    <label>Name*</label>
                    <span></span>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="input-box">
                    <input type="email" required="required">
                    <label>Email*</label>
                    <span></span>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="input-box">
                    <input type="phone" required>
                    <label>Phone No.</label>
                    <span></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="input-box">
                    <input type="text" required="required">    
                    <label>Subject*</label>
                    <span></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="text-area">
                    <textarea required="required"></textarea>
                    <label>Type your text here...</label>
                    <span></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="button text-center">
                    <input type="submit" value="Send">
                </div>
            </div>
        </div>

        <div class="row mb-5 mt-5">
            <div class="col-2">
                <div class="contactus-icon ">
                    <i class='bx bxs-map'></i>
                </div>
            </div>
            <div class="col-3">
                <div class="contactus-desc">
                    <span>Location</span>
                </div>
            </div>
            <div class="col-7">
                <div class="contactus-detail text-center">
                    <p>City Mall St john, 11131 Pyay Rd, Yangon</p>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-2">
                <div class="contactus-icon ">
                    <i class='bx bxs-chat'></i>
                </div>
            </div>
            <div class="col-3">
                <div class="contactus-desc">
                    <span>Chat with us</span>
                </div>
            </div>
            <div class="col-7">
                <div class="contactus-detail text-center">
                    <p>Monday to Friday 9:30A.M to 6:00P.M</p>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-2">
                <div class="contactus-icon ">
                    <i class='bx bxs-phone'></i>
                </div>
            </div>
            <div class="col-3">
                <div class="contactus-desc">
                    <span>Give us a call</span>
                </div>
            </div>
            <div class="col-7">
                <div class="contactus-detail text-center">
                    <p>To contact a Xtreme Kick customer service representative for assistance, please call +959 258707327 during Monday to Friday 9:30A.M to 6:00P.M</p>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-2">
                <div class="contactus-icon ">
                <i class='bx bxs-envelope'></i>
                </div>
            </div>
            <div class="col-3">
                <div class="contactus-desc">
                    <span>Email</span>
                </div>
            </div>
            <div class="col-7">
                <div class="contactus-detail text-center">
                    <p>You can also reach us via e-mail, customersupport@xtremekick.com within Monday to Friday 9:30A.M to 6:00P.M. We will reply you as soon as possible</p>
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
</body>
</html>