<?php

include('./dbconnection.php');
if(isset($_GET['id'])) {
    $id = $_GET['id'];


$sql = "DELETE FROM students where students_id='$id'";

$conn->exec($sql);
}
echo "<br> Data deleted successfully";

header( 'refresh:4 URL=./task12.php');

?>