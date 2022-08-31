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


  <title>Signup</title>
  <style>
    body {
      background-color: #f6e1ba;
    }

    .container {
      background-color: #fcf5e8;
      box-shadow: 10px 0px 10px 0px;
      width: 50%;

    }

    h1 {
      font-family: century Gothic;
      font-weight: bold;
    }
  </style>
</head>

<body>
  <!-- navigation bar -->
  <?php include('header.php') ?>



  <section>
    <p style="text-align: center; font-size: 20px;font-weight: bold;">Efficient and user-friendly Chabot Based Crime
      Registration & Crime Awareness System</p>


    <div class="container">
      <div class="row">


        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

          <h1 style="text-align: center;">Reporting section</h1>
          <hr>
          <div class="box-sh">
            <form action="report_sql.php" method="POST" enctype="multipart/form-data">

              <div class="form-row">
                <div class="form-group">
                  <label for="inputEmail4">Full Name</label>
                  <input type="text" class="form-control" id="inputEmail4" placeholder="FirstName" name="fname" required>
                </div>

				
			<div class="form-row">
                <div class="form-group">
                  <label for="inputEmail4">Date of Crime</label>
                  <input type="date" class="form-control" id="inputEmail4" placeholder="Date of crime" name="dcrime" required>
                </div>
				
				<div class="form-row">
                <div class="form-group">
                  <label for="inputEmail4">Time of Crime</label>
                  <time type="time" class="form-control" id="inputEmail4" placeholder="Time of crime" name="tcrime" required>
                </div>
               

              <div class="form-row">
                <div class="form-group">
                  <label for="inputAddress">Email</label>
                  <input type="email" class="form-control" id="inputAddress" placeholder="Enter_Email" name="email" required>
                </div>

              </div>
              <div class="form-group">
                <label for="inputAddress">Mobile</label>
                <input type="number" class="form-control" id="inputAddress" placeholder="Enter_Mobile" name="mobile" required>
              </div>

              <div class="form-group">
                <label for="inputAddress2">Address 2</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Enter_Address" name="addresss" required>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputCity">City</label>
                  <input type="text" class="form-control" id="inputCity" placeholder="Enter City" name="city" required>
                </div>
                <div class="form-group col-md-4">
                  <label for="inputState">Crime</label>
                  <select id="inputState" name="crime" class="form-control">
                    <option selected>Choose</option>
                    <option >Murder</option>
                    <option>Rape</option>
                    <option>Corruption</option>
                    <option>Dowrey</option>
                  </select>
                </div>

                <div class="form-group col-md-2">
                  <label for="inputZip">Crime Area</label>
                  <input type="text" class="form-control" id="inputZip" placeholder="Crime Area" name="crime_area" required>
                </div>

                <div class="form-group col-md-2">
                  <label for="inputZip">Crime Street</label>
                  <input type="text" class="form-control" id="inputZip" placeholder="Crime Street" name="crime_street" required>
                </div>

                <div class="form-group">
                  <label for="exampleFormControlFile1">zip</label>
                  <input style="width: 200px;" type="text" class="form-control" id="exampleFormControlFile1" name="zip">
                </div>

                <div class="form-group">
                  <label>Upload Evidence</label>
                  <input type="file" class="form-control" name="photo">
                </div>

              </div><br><br>
             
              <button type="submit" name="submitt" class="btn btn-primary rep">Submit Response</button>
              <br><br>
            </form>


          </div>

  </section>
  <script>
    function reg() {
      alert("Register successfully");

    }
  </script>
</body>

</html>