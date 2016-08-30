<?php

define("svr", $_SERVER['SERVER_NAME']);  // VARIABLE DEL SERVIDOR

define("usr", "root");  // VARIABLE DEL USUARIO

define("pwd", "");  // VARIABLE DE LA CONTRASEÑA

define("db", "url-seo");  // VARIABLE DE LA BASE DE DATOS

$con = mysqli_connect(svr, usr, pwd, db) or die(mysqli_error($con));  // CADENA DE CONEXION

/*$dscon = mysqli_close($con);*/

?>