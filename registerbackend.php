<?php 
include('connect.php');

$votersname=$_POST['votersname'];
$phonenumber=$_POST['phonenumber'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$photo=$_FILES['photo']['name'];
$tmp_name=$_FILES['photo']['tmp_name'];
$std=$_POST['std'];

if($password!=$cpassword){
    echo '<script>alert("Passwords Do NOT match");
    window.location="register.php";
    </script>';
}
else{
    move_uploaded_file($tmp_name,"../uploads/$photo");
    $sql="INSERT INTO `voters` (votersname,phonenumber,password,photo,standard,status,votes) VALUES ('$votersname','$phonenumber','$password','$photo','$std',0,0)";

    $result=mysqli_query($con,$sql);
    if($result){
        echo '<script>alert("Registeration Successfull");
    window.location="login.php";
    </script>';
    }else{
         die(mysqli_connect_error());
    }
}


?>