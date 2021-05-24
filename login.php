<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HRsoft | Login</title>
    <!-- css files imports/logo -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/hamburgers.min.css">
    <!-- logo icon image for browser tabs -->
    <link rel="icon" href="assets/img/logo.png">
</head>

<body style="background-color: black;">
    <section class="mt-100 payment-box" id="form">
        <!-- header design box... -->
        <div class="header-box d-block justify-content-center w-100">
            <h6 class="sub-topic w-100">HRsoft</h6>
            <div class="d-flex w-100 justify-content-center mt-3">
                <div>
                    <h6 class="header-topic">Login</h6>
                </div>
            </div>
        </div>
        <div class="company-sub-box">
            <style>
                .custom-input{
                    border: 0px;
                    box-shadow: inset 2px 2px 8px 2px rgba(160, 196, 171, 0.308);
                    font-family: arial;
                    color: #949494 !important;
                    transition: all .3s ease
                }
                .custom-input:focus,.custom-input:hover{
                    border: 0px;
                    box-shadow: inset 0px;
                    box-shadow: 2px 2px 8px 2px rgba(160, 196, 171, 0.308);
                }
                .custom-label{
                    font-family: arial;
                    font-size: 14px;
                    color: #8a8a8a;
                }
            </style>
            <form action="controller.php" method="POST">
                <h6>
                    <b>
                    <?php
                        if(isset($_SESSION['login_warn'])){
                            $val = $_SESSION['login_warn'];
                            if($val == 1){
                                echo '<h6 style="color:red"><b>Welcome, Kindly login your account</b></h6>';
                                unset($_SESSION['login_warn']);
                            }
                            else if($val == 2){
                                echo '<h6 style="color:red"><b>Wrong Username/Password Entered</b></h6>';
                                unset($_SESSION['login_warn']);
                            }
                            else if($val == 3){
                                echo '<h6 style="color:red"><b>Session Expired,Please kindly re-login</b></h6>';
                                unset($_SESSION['login_warn']);
                            }
                        }
                        else{
                            echo 'Enter your information';
                        }
                        if (empty($_SESSION['token'])) {
                            $length = 32;
                            $_SESSION['token'] = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $length);
                        }
                    ?>
                    </b>
                </h6>
                <div class="company-sub-txt row">
                    <div class="col-md-12 col-lg-12 col-sm-12 mt-3">
                        <label class="custom-label">Username *</label>
                        <input type="text" name="username" required class="form-control custom-input">
                    </div>
                    <input type="text" name="token" hidden value="<?=$_SESSION['token']?>"/>
                    <div class="col-md-12 col-lg-12 col-sm-12 mt-4">
                        <label class="custom-label">Password *</label>
                        <input type="password" name="password" required class="form-control custom-input">
                    </div>
                    
                </div>
                <div class="justify-content-center d-flex col-lg-12">
                    <button type="submit" class="btn-success btn mt-5" name="login">Login</button>
                </div>
            </form>
        </div>
    </section>
    <!-- scroll to top -->
    <div class="scrollTop img-property" id="scrollTop"><i class="scrolltop-hvr fa fa-angle-double-up"></i></div>
</body>
<!-- script imports -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/aos.js"></script>
<script src="assets/js/index.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/respond.min.js"></script>

</html>