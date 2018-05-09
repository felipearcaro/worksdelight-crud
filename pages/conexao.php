	<?php

define('DB_NAME', 'des_prats');
define('DB_USER', 'root');
define('DB_HOST', 'localhost');
define('DB_PASS', 'root');
define('DB_PORT', '3306');

$conexao = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!$conexao) {
    dir('There was a problem when trying to connect to the host. Please contact Tech Support. Error: ' . mysql_error());    
}

else {
	$lol= "Sucesso";
}


?>

