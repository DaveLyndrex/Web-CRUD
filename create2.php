

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Create|PHP</title>



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
     <label for="address">Address:</label> <br>
    <input type="text" name="address">
    <br>
  
     <label for="gender">Gender:</label> <br>
    <input type="radio" name="gender" value="Female">Female
    <input type="radio" name="gender" value="Male">Male
    <br>
  
    <br>
   
    <input type="submit" class="btn btn-primary mb-3" name="save" value="submit">
   
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