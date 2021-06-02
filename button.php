<?php

$SQLString = "insert into users(daveemployee, Password, Status) 
		values('Patrick', 'Guapo', 'active')";


?>


<form method="post" action="http://localhost:8080/sd204/web_api/insert.php">
<input type="hidden" name="Query" value="<?=$SQLString?>">
<input type="submit" value="Add Data">
</form>
