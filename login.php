<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Electoral System-Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  </head>
  <body class="bg-dark">
    <h1 class="text-info text-center p-3">Voter's System</h1>
    <div class="bg-info py-4">
        <h2 class="text-center">LOGIN PAGE</h2>
        <div class="container text-center">
            <form action="loginbackend.php" method="POST">
                <div class="mb-3">
                    <input type="text"  class="form-control w-50 m-auto"  name="votersname" placeholder="Enter your Voter's name" require="required">
                </div>
                <div class="mb-3">
                    <input type="text"  class="form-control w-50 m-auto"  name="phonenumber" placeholder="Enter your Phone Number" require="required" maxlength="15" minlength="10">
                </div>
                <div class="mb-3">
                    <input type="password"  class="form-control w-50 m-auto"  name="password" placeholder="Enter your Password" require="required">
                </div>
                <div class="mb-3">
                    <select name="std" class="form-select w-50 m-auto">
                        <option value="group">GROUP</option>
                        <option value="voter">VOTER</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-dark my-4">LOGIN</button>
                <p>First time Online Voting?<a href="register.php" class="text-white"> Register here</a></p>
                
            </form>
        </div>
    </div>
    
  </body>
</html>