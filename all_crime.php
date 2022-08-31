<?php
include('dbconn.php');
?>

<html>
<head>
    <link rel="stylesheet" href="static/css/home.css">
    <link rel="stylesheet" href="bootstrap/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   
	<style>
		table{
			padding:10px;
		}

		table{
			padding:50px;
		}

		table td a{
			margin:5px;
			
		}
	</style>
<title>Crime Data</title>
</head>
<body>
<h2 style="text-align:center">Crime Data</h2>
<container>
<row>
<div class="col-lg-12 col-sm-12 col-md-12 col-xm-12 table-responsive">
<table  class="table table-striped table-bordered table-hover">
	<thead class="bg-dark text-white">
		<tr class="form-group">
			<th>Srno</th>
			<th>First Name</th>
			<th>Date of Crime</th>
			<th>Time of Crime</th>
			<th>Email</th>
			<th>Mobile No</th>
            <th>Address</th>
			<th>City</th>
			<th>Crime</th>
			<th>Crime Area</th>
			<th>Crime Street</th>
			<th>Zip</th>
			<th>Images/Evidence</th>
			<th>Action</th>
		</tr>	
	</thead>	
		
		
		
		<?php
			$result=mysqli_query($db_connection,"SELECT * FROM report");
			while($row=mysqli_fetch_array($result))
			{
			?>
		<tr>
		    <td><?php echo $row["id"]; ?></td>
			<td><?php echo $row["fname"]; ?></td>
			<td><?php echo $row["dcrime"]; ?></td>
			<td><?php echo $row["tcrime"]; ?></td>
			<td><?php echo $row["email"]; ?></td>
			<td><?php echo $row["mobile"]; ?></td>
			<td><?php echo $row["addresss"]; ?></td>
			<td><?php echo $row["city"]; ?></td>
			<td><?php echo $row["crime"]; ?></td>
			<td><?php echo $row["crime_area"]; ?></td>
			<td><?php echo $row["crime_street"]; ?></td>
			<td><?php echo $row["zip"]; ?></td>
			<td><img src="<?php echo $row["upload"]; ?>" width="220px" height="180px"></td>
			<td>
			<a class="btn btn-success" href="Admin-panel/edit_crime.php?id=<?php echo $row["id"]; ?>">Edit</a>
			<a class="btn btn-danger" href="Admin-panel/delete_crime.php?id=<?php echo $row["id"]; ?>">Delete</a>
			</td>
		</tr>
		<?php
			}
		?>

</table>
</div>
</row>
</container>
</body>
</html>