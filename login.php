<?php require_once('account.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Restoran Pondok | Login</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="css/mainLogin.css" />
    <link rel="stylesheet" href="css/main.css" />
	<!-- <link rel="stylesheet" href="css/lightbox.min.css" /> -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css%22%3E"> -->

    <style type="text/css">
        body{ font: 14px sans-serif; background: url(image/latar.png) no-repeat;}
        .wrapper{ width: 350px; padding: 20px; }
    </style>
    
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #efeee2;">
        <a class="navbar-brand" href="index.php">Restaurant</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
</header>

<div class="container"> <!-- card mt-5 mb-5 pl-5 pr-5 -->
    <div class="row py-5 mt-4 align-items-center">
        <div class="col-md-5 pr-lg-5 mb-5 mt-5 mb-md-auto">
            <img src="image/resto.svg" width="450" height="450" alt="Logo Restaurant" class="img-fluid mb-3 d-none d-md-block">
            <!-- <div class="d-none d-md-block" style="text-align:center";>Icons made by <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div> -->
        </div>

        <!-- Registration Form -->
        <div class="col-md-7 col-lg-6 ml-auto cube">
        <h1 class="mb-4 d-flex justify-content-center" style="color: #5b4f47;">Login</h1>
        <form action="login.php" method="post">
            <div class="row">
                <div class="input-group col-lg-12 mb-4">
                    <div class="input-group-prepend">
                        <?= display_error(); ?>
                    </div>
                </div>

                <!-- Username -->
                <div class="input-group col-lg-12 mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-white px-4 border-md border-right-0">
                            <i class="fa fa-envelope text-muted"></i>
                        </span>
                    </div>
                    <input type="text" name="username" placeholder="Username" class="form-control bg-white border-left-0 border-md" required>
                </div>

                <!-- Password -->
                <div class="input-group col-lg-12 mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-white px-4 border-md border-right-0">
                            <i class="fa fa-lock text-muted"></i>
                        </span>
                    </div>
                    <input type="password" name="password" placeholder="Password" class="form-control bg-white border-left-0 border-md" required>
                </div>

                <!-- Create Captcha -->
                <div style="padding: auto;" class="input-group col-lg-12 mb-2">
                    <span>
                        <img src="captcha.php" alt="CAPTCHA" class="captcha-image">
                        <!-- <image class="refreshbutton" style="cursor:pointer; margin-right: 5px;" src="image/refresh.svg" width="40" height="40"></image> -->
                    </span>
                    <input type="text" id="captcha" name="captcha" placeholder="Enter Captcha" class="form-control bg-white border-md" required>
                </div>
                <!-- <div class="input-group col-lg-12">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-white px-4 border-md border-right-0">
                            <i class="fa fa-refresh text-muted"></i>
                        </span>
                    </div>
                    <input type="text" id="captcha" name="captcha" placeholder="Enter Captcha" class="form-control bg-white border-left-0 border-md" required>
                </div> -->
                <div class="input-group col-lg-12 mb-4"><small class="form-text text-muted" style="text-align: center;" >Please enter the captcha to continue.</small></div>
                <!-- <script>
                    var refreshButton = document.querySelector(".refreshbutton");
                    refreshButton.onclick = function() {
                        document.querySelector(".captcha-image").src = 'captcha.php?' + Date.now();
                    }
                </script> -->

                <!-- Submit Button -->
                <div class="input-group form-group col-lg-12 mx-auto mb-0">
                    <button type="submit" class="btn btn-success btn-block py-2" name="login_btn">
                        <span class="font-weight-bold">Login</span>
                    </button>
                </div>

                <!-- Divider Text -->
                <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                    <div class="border-bottom w-100 ml-6"></div>
                    <span class="px-2 small text-muted font-weight-bold text-muted">OR</span>
                    <div class="border-bottom w-100 mr-6"></div>
                </div>
                
                <!-- Already Registered -->
                <div class="text-center w-100">
                    <p class="text-muted font-weight-bold">Don't have an account? <a href="register.php" class="text-primary ml-2">Register Now!</a></p>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
</body>
</html>
