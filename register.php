<?php require_once('account.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Restoran Pondok | Register</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link rel="stylesheet" href="css/login.css" />
    <link rel="stylesheet" href="css/main.css" />

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

<section>
<!-- <i id=bar class="fas fa-bars"></i> -->
<div class="sec1">
    <div class="container"> <!-- card mt-5 mb-5 pl-5 pr-5 -->
        <div class="row py-5 ml-2 mt-4 align-items-center">
            <div class="col-md-5 pr-lg-5 mb-5 mt-5 mb-md-auto">
                <img src="image/resto.svg" width="450" height="450" alt="Logo Restaurant" class="img-fluid mb-3 d-none d-md-block">
                <!-- <div class="d-none d-md-block" style="text-align:center";>Icons made by <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div> -->
            </div>

            <!-- Registration Form -->
            <div class="col-md-7 col-lg-6 ml-auto cube1">
                <h1 class="mb-4 d-flex justify-content-center" style="color: #5b4f47;">Create an Account</h1>
                <form action="register.php" method="post">
                <?php echo display_error(); ?>
                <div class="row">

                    <!-- First Name -->
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                        </div>
                        <input id="firstName" type="text" name="firstName" placeholder="First Name" class="form-control bg-white border-left-0 border-md" >
                    </div>

                    <!-- Last Name -->
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                        </div>
                        <input id="lastName" type="text" name="lastName" placeholder="Last Name" class="form-control bg-white border-left-0 border-md" >
                    </div>

                    <!-- Gender -->
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-venus-mars text-muted"></i>
                            </span>
                        </div>
                        <select id="gender" name="gender" class="form-control custom-select bg-white border-left-0 border-md">
                            <option value="Man">Man</option>
                            <option value="Woman">Woman</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>

                    <!-- Birth Date -->
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-calendar text-muted"></i>
                            </span>
                        </div>
                        <input id="birthDate" type="date" name="birthDate" placeholder="Birth Date" class="form-control bg-white border-left-0 border-md">
                    </div>
                    <div class="input-group col-lg-12 mb-3"><small class="form-text text-muted">Choose your birth date (mm/dd/yyyy).</small></div>

                    <!-- Username -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                        </div>
                        <input type="text" name="username" placeholder="Username" 
                            class="form-control bg-white border-left-0 border-md" value="<?php echo $username; ?>" required>
                    </div>

                   <!-- Email -->
                   <div class="input-group col-lg-12">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-envelope text-muted"></i>
                            </span>
                        </div>
                        <input type="email" name="email" placeholder="Email Address" 
                            class="form-control bg-white border-left-0 border-md" value="<?php echo $email; ?>" required>
                    </div>
                    <div class="input-group col-lg-12 mb-3">
                        <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>

                    <!-- Password -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-lock text-muted"></i>
                            </span>
                        </div>
                        <input type="password" name="password_1" placeholder="Password"  class="form-control bg-white border-left-0 border-md" required>
                    </div>

                    <!--<div class="input group col-lg-4 mb-4">
                    <input type="checkbox" onclick="myFunction()"> Show Password
                    </div>-->

                    <!-- Confirm Password -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-lock text-muted"></i>
                            </span>
                        </div>
                        <input type="password" name="password_2" placeholder="Confirm Password"  class="form-control bg-white border-left-0 border-md"  required>
                    </div>

                    <!--<div class="input group col-lg-4 mb-4">
                    <input type="checkbox" onclick="myFunction()"> Show Password
                    </div>-->

                    <!-- Submit Button -->
                    <div class="form-group col-lg-12 mb-0">
                        <button type="submit" class="btn btn-success btn-block py-2" name="register_btn">
                            <span class="font-weight-bold">Create your account</span>
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
                        <p class="text-muted font-weight-bold">Already Registered? <a href="login.php" class="text ml-2">Log In</a></p>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
  </section>

<!-- Extra JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
<script>
function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</body>
</html>