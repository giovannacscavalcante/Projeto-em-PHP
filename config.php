<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'u228666546_cavalcante');
define('DB_PASSWORD', 'xr?GloW7I+');
define('DB_NAME', 'u228666546_cavalcante');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
//echo " Conectado com sucesso!"; 
// Check connection
if($link === false){
    die("ERROR: Voce não está conectado. " . mysqli_connect_error());
}
?>