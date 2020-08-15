<?php
// Informations d'identification
define('DB_SERVER', 'sql111.epizy.com');
define('DB_USERNAME', 'epiz_24433817');
define('DB_PASSWORD', 'LU0aRutvKUvX');
define('DB_NAME', 'epiz_24433817_login');
 
// Connexion � la base de donn�es MySQL 
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// V�rifier la connexion
if($conn === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
?>