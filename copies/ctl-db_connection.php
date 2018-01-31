
<?php

$connection = new mysqli('localhost', 'root', '', 'nkozi');
 
// Check connection
if($connection === false){
    die("ERROR: Could not connect. " . $connection->connect_error);
}
?>
