<?php 
session_start();
?>
 <?php
 $serveur = 'db5000342686.hosting-data.io';
 $user = 'dbu607905';
 $pass  = '@Zyfnnake72';
 $bdd = 'dbs333147';

try {
    $cnx = new PDO('mysql:host='.$serveur.';dbname='.$bdd, $user, $pass);
	$cnx->exec("SET CHARACTER SET utf8");
}
catch(PDOException $e)
{
    echo $e->getMessage();
}
 ?>

