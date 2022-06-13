<?php
//Conexion con la base
$link = mysqli_connect("localhost","root","") or die ("No se logro la conexión ...");
$db = mysqli_select_db($link,"providencia");
?>