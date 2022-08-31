<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/home.css">
    <link rel="stylesheet" href="bootstrap/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    <title>Signup</title>
    <style>
        body{
        background-color : #f6e1ba;
      }
       .container{
        background-color : #fcf5e8;
        box-shadow :10px 0px 10px 0px;
        width : 50%;
  
      }
      h1{
        font-family : century Gothic;
        font-weight : bold;
      }
      
      
    </style>
</head>
<body>
    <!-- navigation bar -->
    <?php include('header.php') ?>



    <section>
    <p style="text-align: center; font-size: 20px;font-weight: bold;">Efficient and user-friendly Chabot Based Crime Registration & Crime Awareness System</p>

      
        <div class="container">
           <div class="row" >
            
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" >
              
              <h1 style="text-align: center;">Registration </h1>
              <hr>
              <div class="box-sh">
              <form action="signup_sql.php" method="POST">
              <div class="form-group">
              <label for="fname"><b>Name</b></label>
              <input type="text" class="form-control" placeholder="Enter Full Name" width="100px" name="fname" required>
              </div>

              <div class="form-group">
              <label for="email"><b>Email</b></label>
              <input type="email" class="form-control" pattern="[^ @]*@[^ @]*" placeholder="Enter Email" width="100px" name="email" required>
              </div>

              <div class="form-group">
              <label for="mobile"><b>Mobile No</b></label>
              <input type="tel" class="form-control" pattern="[789][0-9]{9}" maxlength="10" placeholder="Enter Number" width="100px" name="mobile" required>
              </div>

              <div class="form-group">
			        <label for="address"><b>Address</b></label>
              <input type="text" class="form-control" placeholder="Enter your Address" width="100px" name="address" required>
              </div>

              <div class="form-group">
              <label for="psw"><b>Password</b></label>
              <input type="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  placeholder="Enter Password" width="100px" name="psw" required>
              </div>
          
              <!----<label for="psw-repeat"><b>Repeat Password</b></label>
               <input type="password" placeholder="Repeat Password" width="100px" name="psw-repeat" required><br>
          
               
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
              </label><br><label>--->
          
              <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
          
              <div>
              <button type="submit"  class="btn btn-success">Register</button><br><br>
                <button type="reset" class="btn btn-danger">Cancel</button>
                <br><br>
               
              </div>
            </div>
          </div>
       </form>
       </div>
      <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
    </section>
    <script>
      function reg()
      {
        alert("Register successfully");
      
      

      }
      </script>
</body>
</html>