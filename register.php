<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electoral System-Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <h1 class="text-center text-info">Voter's System</h1>
    <div class="bg-info py-4">
       <h2 class="text-center">REGISTER VOTER'S ACCOUNT</h2> 
       <div class="container text-center">
        <form action="registerbackend.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
               <input type="text" class="form-control w-50 m-auto" placeholder="Enter your Voter's Name" required="required" name="votersname">
            </div>
            <div class="mb-3">
               <input type="text" class="form-control w-50 m-auto" placeholder="Enter your Phone Number" required="required" name="phonenumber">
            </div>
            <div class="mb-3">
               <input type="password" class="form-control w-50 m-auto" placeholder="Enter your Password" required="required" name="password">
            </div>
            <div class="mb-3">
               <input type="password" class="form-control w-50 m-auto" placeholder="Confirm Password" required="required" name="cpassword">
            </div>
            <div class="mb-3">
               <input type="file" class="form-control w-50 m-auto"   name="photo">
            </div>
            <div class="mb-3">
                    <select name="std" class="form-select w-50 m-auto">
                        <option value="group">GROUP</option>
                        <option value="voter">VOTER</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-dark my-4">REGISTER</button>
                <p>Regular Online Voter?<a href="login.php" class="text-white"> Register here</a></p>
        </form>
       </div>
    </div>
</body>
</html>