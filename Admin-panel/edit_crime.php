<?php
include('dbconn.php');
$uId=$_GET["id"];
//print_r($uId);
$getData=mysqli_fetch_assoc(mysqli_query($db_connection,"SELECT * FROM report WHERE id='".$uId."'"));
?>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="static/css/home.css">
  <link rel="stylesheet" href="bootstrap/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


 
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
<title>Edit Crime</title>
</head>
<body>

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
          <form action="edit_crime_sql.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $uId; ?>"/>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">FirstName</label>
                  <input type="text" class="form-control" id="inputEmail4" placeholder="FirstName" name="fname" required  value="<?php echo $getData["fname"];?>"/>
                </div>

                <div class="form-group col-md-6">
                  <label for="inputPassword4">Lastname</label>
                  <input type="text" class="form-control" id="inputPassword4" placeholder="LastName" name="lname" required value="<?php echo $getData["lname"];?>"/>
                </div>
              </div>

              <div class="form-row">
                <div class="form-group">
                  <label for="inputAddress">Email</label>
                  <input type="email" class="form-control" id="inputAddress" placeholder="Enter_Email" name="email" required value="<?php echo $getData["email"];?>"/>
                </div>

              </div>
              <div class="form-group">
                <label for="inputAddress">Mobile</label>
                <input type="number" class="form-control" id="inputAddress" placeholder="Enter_Mobile" name="mobile" required value="<?php echo $getData["mobile"];?>"/>
              </div>

              <div class="form-group">
                <label for="inputAddress2">Address 2</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Enter_Address" name="addresss" required value="<?php echo $getData["addresss"];?>"/>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputCity">City</label>
                  <input type="text" class="form-control" id="inputCity" placeholder="Enter City" name="city" required value="<?php echo $getData["city"];?>"/>
                </div>
                <div class="form-group col-md-4">
                  <label for="inputState">Crime</label>
                  <select id="inputState" name="crime" class="form-control">
                    <option value="Choose" <?php if($getData["crime"]=="Choose"){echo('selected="selected"'); } ?>>Choose</option>
                    <option value="Murder" <?php if($getData["crime"]=="Murder"){echo('selected="selected"'); } ?> >Murder</option>
                    <option value="Rape" <?php if($getData["crime"]=="Rape"){echo('selected="selected"'); } ?>>Rape</option>
                    <option value="Corruption" <?php if($getData["crime"]=="Corruption"){echo('selected="selected"'); } ?>>Corruption</option>
                    <option value="Robbery" <?php if($getData["crime"]=="Robbery"){echo('selected="selected"'); } ?>>Robbery</option>
                  </select>
                </div>

                <div class="form-group col-md-2">
                  <label for="inputZip">Crime Area</label>
                  <input type="text" class="form-control" id="inputZip" placeholder="Crime Area" name="crime_area" required value="<?php echo $getData["crime_area"];?>"/>
                </div><br>

                <div class="form-group col-md-2">
                  <label for="inputZip">Crime Street</label>
                  <input type="text" class="form-control" id="inputZip" placeholder="Crime Street" name="crime_street" required value="<?php echo $getData["crime_street"];?>"/>
                </div>
                <div class="form-group col-md-2">
                  <label for="inputZip">Zip</label>
                  <input type="text" class="form-control" id="inputZip" placeholder="Zip" name="zip" required value="<?php echo $getData["zip"];?>"/>
                </div>

                <div class="form-group">
                  <label for="exampleFormControlFile1">Upload Evidence</label>
                  <input type="file" class="form-control-file" id="exampleFormControlFile1" name="photo"/>
                  <input type="hidden" name="photo_old" value="<?php echo $getData["upload"];?>"/>
                </div>

              </div><br><br>
             
              <button type="submit" name="update_stud_image" class="btn btn-primary rep btn-blocked">Save</button>
              <br><br>
            </form>

          </div>

  </section>

</body>
</html>
