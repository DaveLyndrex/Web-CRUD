

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Create|PHP</title>



<?php 
include "process.php";

//if the form's submit button is clicked, we need to process the form
	if (isset($_POST['submit'])) {
		// get variables from the form
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
    $age = $_POST['age'];
		$gender = $_POST['gender'];
   

		//write sql query

		$sql = "INSERT INTO `data`(`firstname`, `lastname`, `email`, `password`, `age`, `gender`) VALUES ('$firstname','$lastname','$email','$password','$age','$gender')";

		// execute the query

		$result = $conn->query($sql);

		if ($result == TRUE) {
      
      header("location: view.php");
		}else{
			echo "Error:". $sql . "<br>". $conn->error;
		}

		$conn->close();

	}

?>
<center>
<h2>PN Fill Up Form</h2>

<form action="" method="POST">

<div  class="row">
  <fieldset>
    <legend>Student information:</legend>
      <label for= "inputFirstName">First name:</label> <br>
    <input type="text" name="firstname">
    <br>
      <label for="inputLastName"></label> Last name:<br>
    <input type="text" name="lastname">
    <br>
     <label for="Email">Email:</label> <br>
    <input type="email" name="email">
    <br>
    
     <label for="inputPassword2">Password:</label> <br>
    <input type="password" name="password">
    <br>
    <label for="age"> Age:</label><br>
    <input type="text" name="age">
    <br>
     <label for="gender">Gender:</label> <br>
    <input type="radio" name="gender" value="Female">Female
    <input type="radio" name="gender" value="Male">Male
    <br>
  
    <br>
   
    <input type="submit" class="btn btn-primary mb-3" name="submit" value="submit">
   
  </fieldset>
</form>
</div>
<hr>
<div class="col-auto">
<form action="view.php">
    <button type="submit" class="btn btn-primary mb-5">View All data</button>
    </form>
  </div>
</center>



</body>
</html>