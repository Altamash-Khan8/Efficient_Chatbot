<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/home.css">
    <link rel="stylesheet" href="bootstrap/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">




    <title>Signin</title>
    <style>
      .container{
        background-color : #fcf5e8;
        box-shadow :10px 0px 10px 0px;
        width : 50%;
  
      }
      body{
        background-color : #f6e1ba;
      }
      h1{
        font-family : century Gothic;
        font-weight : bold;
      }
      
     
      .btn{
        width : 100%;
      }

      hr{
        width:100%;
      }
    </style>
</head>
<body>
    
<?php include('header.php') ?>

    <section>
    <!-- <marquee><p style="text-align: center; font-size: 20px;font-weight: bold;">Efficient and user-friendly Chabot Based Crime Registration & Crime Awareness System</p>
    </marquee> -->
      <br><br><br><br>
    
        <div class="container">
          <div class="row">
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
          <h1><center>Login</center></h1>
          
          <hr>
          <form action="signin_sql.php" method="POST">
          <div class="form-group">
          <label><b>Email</b></label>
          <input type="text"  class="form-control" pattern="[^ @]*@[^ @]*" placeholder="Please enter your Email" name="email" required>
          </div>

          <div class="form-group">
          <label><b>Password</b></label>
          <input type="password"  class="form-control" placeholder="Please enter your Password" name="psw" required>
          </div>

          <hr>
          
          <p><center><a href="#" id="forget">forgot Password ?</a></center></p>

          <button  type="submit" class="btn btn-primary"><b>Login</b></button>
          <br><br>
          
        
        </div>
      
             <!-- <div>
                  <p>Already have an account? <a href="#">Sign in</a></p>
            </div> -->

      </form>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
</section>
</body>
</html>

