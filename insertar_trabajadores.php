<?php
include("conexioon2.php");
$rfc = $_POST["rfc"];
$nombre = $_POST["nombre"];
$query="INSERT INTO trabajadores VALUES('".$rfc."' , '".$nombre."')";
$resultado6=$conexioon2->query($query);
if($resultado6){
    echo "Insercion exitosa"; }
    else{
  echo "No se realizo la insercion";
    }
?>