<?php 
session_start();
if(!isset($_SESSION['id'])){
    header('location:login.php');
}
$data = $_SESSION['data'];
if($_SESSION['status']==1){
    $status='<b class="text-success">Voted</b>';
}else{
    $status='<b class="text-danger">Not Voted</b>';
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electoral System-Dasboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="dashboard.css">
</head>
<body class="bg-dark text-light ">
    <div class="container my-5">
        <a href="login.php"><button class="btn btn-light px-3">BACK</button>
        <a href="logout.php"><button class="btn btn-light px-3">LOGOUT</button>
        <h1 class="my-3 text-light ">Electoral System</h1>
        <div class="row my-5">
            <div class="col-md-7">
                <!--groups -->
                <?php 
                if(isset($_SESSION['groups'])){
                    $groups=$_SESSION['groups'];
                    for($i=0; $i<count($groups); $i++){
                        ?>
                        <div class="row">
                    <div class="col-md-4">
                        <img src="../uploads/<?php $groups[$i]['photo'] ?>" alt="GroupImage">
                    </div>
                    <div class="col-md-8">
                        <strong class="h5 text-light "> Group Name: </strong><?php $groups[$i]['votersname'] ?><br>
                        <strong class="h5 text-light"> Votes: </strong><?php $groups[$i]['votes'] ?><br>
                    </div>
                </div>
                <form action="voting.php" method="post">
                    <input type="hidden" name="groupvotes" value="<?php $groups[$i]['votes'] ?>">
                    <input type="hidden" name="groupid" value="<?php $groups[$i]['id'] ?>">

                    <?php 
                    if($_SESSION['status']==1){
                        ?>
                        <button class="bg-success my-3 text-white px-3">Voted</button>
                        <?php
                    }else{
                        ?>
                        <button class="bg-danger my-3 text-white px-3"type="submit">Vote</button>
                        <?php
                    }
                    ?>
                </form>
                <hr>
                <?php
                    }
                }else{
                    ?>
                    <div class="container"> 
                    <p>NO GROUPS REGISTERED</p>
                    </div>
                    <?php
                }
                ?>
                
            </div>
            <div class="col-md-5">
                <!--user profile -->
                <img src="../uploads/<?php echo $data['photo']?>" alt="VotersImage">
                <br>
                <br>
                <strong class="h5 text-light"> Name: </strong><?php echo $data['votersname'];?><br><br>
                <strong class="h5 text-light"> Phone Number: </strong><?php echo $data['phonenumber'];?><br><br>
                <strong class="h5 text-light"> Status: </strong><?php echo $status;?><br><br>
            </div>
        </div>
    </div>
</body>
</html>