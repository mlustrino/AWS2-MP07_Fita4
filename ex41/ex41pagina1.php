
<?php
session_start();
?>
<!DOCTYPE html>
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
  <h1>ENREGISTRA NOMBRE</h1>
        <form method="post" action="ex41pagina2.php">
        <input type="number" name="ocult" step="1" required>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>