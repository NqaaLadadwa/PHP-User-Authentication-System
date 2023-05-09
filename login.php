<?php session_start();
require("inc/header.php");

if(isset($_SESSION['userId'])){
    header("location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> EasyBooking | Dashboard </title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/fontawesome-free-5.0.0/css/fontawesome-all.css">
</head>

<body>

<div class="container py-5">
    <div class="row">

        <div class="col-md-6 offset-md-3"> 
            <?php

                if(isset($_SESSION['errors'])){
                    foreach($_SESSION['errors'] as $error){ ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error; ?>
                    </div>
                    <?php }
                    unset($_SESSION['errors']);

                        
                    }
                  
            ?>
            <h3 class="mb-3">Login</h3>
            <div class="card">
                <div class="card-body p-5">
                    <form method="post" action="handle/login.php">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                        <label>Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="text-center mt-5">
                            <button type="submit" name="login" class="btn btn-primary">Login</button>
                        </div>
                        <div class="text-center mt-3
                        ">
                        <a href="create.php" class="ca">Create an account</a>
                         </div>
                    </form>   
                </div>
            </div>
        </div>
    </div>
</div>

<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

</body>