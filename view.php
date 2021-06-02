

<!DOCTYPE html>
<html>
<head>
	<title>View Page</title>
	 <!-- to make it looking good im using bootstrap -->
	 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>

<?php 
include "process.php";

//write the query to get data from users table

$sql = "SELECT * FROM data";

//execute the query

$result = $conn->query($sql);

?>

	<div class="container">
		<center><h2>DATA (PN Students)</h2></center>
		<br>
<table class="table">
	<thead>
		<tr>
		<th>ID</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Email</th>
		<th>Age</th>
		<th>Gender</th>		
		<th>Action</th>
	</tr>
	</thead>
	<tbody>	

		<?php
			if ($result->num_rows > 0) {
				//output data of each row
				while ($row = $result->fetch_assoc()) {
		?>

					<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['firstname']; ?></td>
					<td><?php echo $row['lastname']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td><?php echo $row['age']; ?></td>
					<td><?php echo $row['gender']; ?></td>
					
					<td><a class="btn btn-info" href="update.php?edit=<?php echo $row['id'];?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
					</tr>	
					
					
		<?php		}
			}
		?>
	        	
	</tbody>
</table>
	</div>
	
	<center>
	<div class="col-auto">
<form action="create.php">
    <button type="submit" class="btn btn-primary mb-5">Go Back To Create</button>
    </form>
  </div>
  </center>

</body>
</html>