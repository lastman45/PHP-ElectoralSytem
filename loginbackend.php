<?php 
session_start();
include('connect.php');

$votersname=$_POST['votersname'];
$phonenumber=$_POST['phonenumber'];
$password=$_POST['password'];
$std=$_POST['std'];

$sql="SELECT * FROM voters WHERE votersname='$votersname' and phonenumber='$phonenumber' and password='$password' and standard='$std'";

$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result) > 0){
    $sql="SELECT votersname,photo,votes,id FROM voters WHERE standard = 'group'";
    $resultgroup=mysqli_query($con,$sql);
    if(mysqli_num_rows($resultgroup)>0){
        $groups=mysqli_fetch_all($resultgroup,MYSQLI_ASSOC);
        $_SESSION['groups']=$groups;
    }
    $data=mysqli_fetch_array($result);
    $_SESSION['id']=$data['id'];
    $_SESSION['status']=$data['status'];
    $_SESSION['data']=$data;

    echo '<script>
    window.location="dashboard.php";
    </script>';
}else{
    echo '<script>
    alert("Invalid Credentials");
    window.location="login.php";
    </script>';
}
?>