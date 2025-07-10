<?php 
try{
 $bdd = new PDO("mysql:host=localhost;dbname=users","root","12345678");
}
catch(Exception $e){
 die( "ERROR : ".$e->getMessage());
}
?>