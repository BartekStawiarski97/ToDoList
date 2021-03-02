<!DOCTYPE html>
<html lang="nl">
<head>
   <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
   <title>To Do List Log In</title>
</head>
<body style="background-color:lightblue;">
    <div class="container-fluid">
     <div class="row justify-content-center align-items-center">
        <div class="col-3 border border-info rounded" style="margin-top:200px; background-color:white;">
            <form action="login.php" method="POST">
              <img src="logo.jpg" alt="logo" width="250" height="150" class="mx-auto d-block mt-3">
                <div class="form-group mt-5">
                    <input class="form-control form-control-lg" placeholder="test@email.com" type="email" required>
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" placeholder="Password" type="password" required>
                </div>
                <div class="form-group mb-3">
                    <a href="login.php" class="btn btn-info btn-lg btn-block" role="button" aria-disabled="true">Sign In</a>
                </div>
                <div class="form-group">
                  <span style="color:black">No account?</span><a class="ml-2" href="#">Register now!</a>
                </div>         
            </form>
        </div>
    </div>
</div>
 </body>
</html>
