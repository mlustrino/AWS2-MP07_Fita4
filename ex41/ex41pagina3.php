<?php
session_start();

$endovinat = false;
$missatge = "";
if (isset($_POST['endevina'])){
    $endevina = (int)$_POST['endevina'];

    if ($_SESSION['ocult'] === $endevina){
        $endovinat = true;
        $missatge = "Bé, has endovinat";
    }else if($_SESSION['ocult'] > $endevina){
        $missatge = "Cachis, el número ocult és MAJOR que la teva opció ($endevina)";
    }else if($_SESSION['ocult'] < $endevina){
        $missatge = "Cachis, el número ocult és MENOR que la teva opció ($endevina)";
    }



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
  <h1>ENDEVINA EL NOMBRE</h1>
  <?php if ($missatge !== "") echo "<p><b>$missatge</b></p>" ?>
  <?php if ($endovinat) { ?>
    <p><a href="ex41pagina1.php">Torna a jugar</a></p>
    <?php } else{ 
        ?>
<form method="post" action="ex41pagina3.php">
        <input type="number" name="endevina" step="1" required>
        <input type="submit" value="Enviar">
    </form>
    <?php } ?>
  </body>
</html>