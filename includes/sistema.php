<?php 
$sistem = new mysqli('localhost', 'root', '', 'sistema');
if ($sistem->connect_error){
    echo 'error';
    die();
}
$sistem->query('set character_set_connection = utf8mb4');
$sistem->query('set character_set_client = utf8mb4');
$sistem->query('set character_set_results = utf8mb4');
?>