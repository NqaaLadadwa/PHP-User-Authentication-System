<?php session_start();
require('connection.php'); 


if(isset($_POST['login'])){

 $email = $_POST['email'];
 $password=$_POST['password'];

 $email=strip_tags(trim($email));
 $password=strip_tags(trim($password));
 $errors = [];

 
 if(empty($email)){
  //  echo "error1";
    $errors[]= "Email is required";
 }else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $errors[]= "Please enter valid email";
 }

 if(empty($password)){
    $errors[]= "Password is required";
 }else if(!preg_match("#[0-9]+#",$password)){
    $errors[]= "Your Password Must Contain At Least 1 Number!";
 }else if(!preg_match("#[A-Z]+#",$password)){
    $errors[]= "Your Password Must Contain At Least 1 Capital Letter!";
 }else if(!preg_match("#[a-z]+#",$password)){
    $errors[]= "Your Password Must Contain At Least 1 Small Letter!";
 }else if(strlen($password) <=6 || strlen($password) >=50){
    $errors[]= "Please Check the Password's length";
 }

 if(empty($errors)){
    $sql="SELECT * FROM users WHERE email='$email'";
    $query=mysqli_query($conn,$sql);

    if(mysqli_num_rows($query) > 0 ){
        $user = mysqli_fetch_assoc($query);
        $userPassword = $user['password'];
        
        if(password_verify($password, $userPassword)){
            $_SESSION['userId'] = $user['id'];
            header("location: ../index.php");

        }else{
            $_SESSION['errors'] = ["Please Enter Correct Password"];
            header("location: ../login.php");

        }
    }else{
        $_SESSION['errors'] = ["Please Enter Correct Email"];
        header("location: ../login.php");

    }

}else{
    //echo "o";
$_SESSION['errors'] = $errors;
/*echo '<pre>';
print_r($errors);
echo '</pre>';*/
header("location: ../login.php");

}

}
else {
    
header("location: ../login.php");
//echo "error";
}

?>