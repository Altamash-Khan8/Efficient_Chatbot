<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="static/css/home.css">
  <link rel="stylesheet" href="bootstrap/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body style="background-color: #e6e9ee;">
  <section class="vh-100" style="background-color: #d1d7e2;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-3 col-md-3 col-lg-3 col-xl-3 "></div>
        <div class="col-6 col-md-6 col-lg-6 col-xl-6 ">
          <div class="card-body p-5">

            <h2 class="mb-5 text-center">Admin Login</h2><br>
            <form action="adminlogin_sql.php" method="post">
              <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" />
              </div><br>

              <div class="form-group">
                <label>Password</label>
                <input type="password" name="pass" class="form-control form-control-lg" />
              </div><br>


              <button class="btn btn-primary btn-md btn-block" type="submit">Login</button><br>
            </form>

          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>