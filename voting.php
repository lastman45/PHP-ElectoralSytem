<?php 
session_start();
include('connect.php');

$votes=$_POST['groupvotes'];
$totalvotes=$votes+1;

$gid=$_POST['groupid'];
$uid=$_SESSION['id'];

$updatevotes=mysqli_query($con, "UPDATE 'voters' SET votes='$totalvotes' WHERE id='$gid'");
$updatestatus=mysqli_query($con, "UPDATE 'voters' SET status=1 WHERE id='$uid'");

if($updatevotes and $updatestatus){
    $getgroups=mysqli_query($con,"SELECT votersname,photo,votes,id FROM 'voters' WHERE standard='group'");
    $groups=mysqli_fetch_all($getgroups,MYSQLI_ASSOC);
    $_SESSION['groups']=$groups;
    $_SESSION['status']=1;

    echo '<script>
    alert("Successfully Voted!!!");
    window.location="dashboard.php"; 
    </script>';
}else{
    echo '<script>
    alert("Technical Error!!Recast Your Vote");
    window.location="dashboard.php"; 
    </script>';
}




?>