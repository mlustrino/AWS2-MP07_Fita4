<?php
session_start();

if (isset($_POST['ocult'])){
    $_SESSION["ocult"] = (int)$_POST['ocult'];
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Endevina el número</title>
<style> table, td {
    border: 1px solid black;
    border-collapse: collapse;
    padding: 5px;
    text-align: left;}
    th{
    border: 1px solid black;
    border-collapse: collapse;
    padding: 5px;
    text-align: center;} </style>


</head>
<body>
  <h1>NOMBRE ENREGISTRAT</h1>
  <p><a href="ex41pagina3.php">Endevina</a></p>
  </body>
</html>