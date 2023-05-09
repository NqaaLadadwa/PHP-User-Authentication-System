<?php session_start();
require("inc/header.php");

?>
    <main role="main" class="flex-shrink-0">
        <div class="container">
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
             <?php        
            unset($_SESSION['errors']);
          
          if(isset( $_SESSION['success'])){?>
         <div class="alert alert-success" role="alert"> <?php echo  $_SESSION['success'];?> </div>  
        <?php   unset($_SESSION['success']);
        }
          
          ?>

            <h1>Create New Account</h1>
            <form action="handle/insert-user.php" method="POST">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
                </div>

                <div class="form-group">
                    <label for="name">Email</label>
                    <input type="email" name="email" class="form-control" id="name" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="name">Password</label>
                    <input type="password" name="password" class="form-control" id="name" placeholder="Enter password">
                </div>
                <div class="form-group">
                    <label for="">Type </label>
                    <input type="radio" name="type" checked value="user" /> User
                    <input type="radio" name="type" value="owner" /> Hall's Owner
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <br><br>
          <a href="login.php" class="ca">Already have an account?</a>
            </form>
        </div>
    </main>

<?php require("inc/footer.php"); ?>
