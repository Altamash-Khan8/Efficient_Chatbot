<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="static/css/home.css">
  <link rel="stylesheet" href="bootstrap/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <title>Admin Registration</title>
</head>

<body>

  <section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">

        <div class="col-md-12 col-lg-12 col-xl-12 order-2 order-lg-1">

          <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Admin Registration</p>

          <form action="admin_sql.php" method="post">

            <div class="d-flex flex-row align-items-center mb-4">
              <i class="fas fa-user fa-lg me-3 fa-fw"></i>
              <div class="form-outline flex-fill mb-0">
                <label class="form-label" for="form3Example1c">Full Name</label>
                <input type="text" id="form3Example1c" name="name" class="form-control" />
              </div>
            </div><br>

            <div class="d-flex flex-row align-items-center mb-4">
              <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
              <div class="form-outline flex-fill mb-0">
                <label class="form-label" for="form3Example3c"> Email</label>
                <input type="email" id="form3Example3c" name="email" class="form-control" />
              </div>
            </div><br>

            <div class="d-flex flex-row align-items-center mb-4">
              <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
              <div class="form-outline flex-fill mb-0">
                <label class="form-label" for="form3Example3c">Mobile no</label>
                <input type="number" id="form3Example3c" name="mobile" class="form-control" />
              </div>
            </div><br>

            <div class="d-flex flex-row align-items-center mb-4">
              <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
              <div class="form-outline flex-fill mb-0">
                <label class="form-label" for="form3Example4c">Password</label>
                <input type="password" id="form3Example4c" name="pass" class="form-control" />
              </div>
            </div><br>


            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
              <button type="submit" class="btn btn-primary btn-md">Register</button>
            </div>

          </form>

        </div>


      </div>
    </div>
    </div>

  </section>
  </form>

</body>

</html>