
<?php

'require database.php';

$id = $_REQUEST['id'];

// todo: delete from related tables (mysql pdo)





$sql = "DELETE FROM "
require('db.php');

$id=$_REQUEST['id'];
$query = "DELETE FROM new_record WHERE id=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: view.php"); 
?>