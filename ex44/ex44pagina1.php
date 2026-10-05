<?php

# codi PHP per mostrar els errors al browser
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

if (!isset($_SESSION["texto"])) {
    $_SESSION["texto"] = "";
}
if (isset($_POST['notes'])){
    $notes = trim($_POST['notes']);
    if ($notes !== ""){
        $_SESSION["texto"] .= $notes . "\n\n";
    }
}
  ?>

<style> table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    padding: 5px;
    text-align: center;}</style>

    <h1>Escriu les teves notes</h1>

        <form action="ex44pagina1.php" method="post">
            <textarea name="notes" rows="10" cols="50"></textarea>
            <input type="submit" name="Enviar" value="Enviar">
        </form>

        <h2>Notes guardades</h2>
        <p><?php echo nl2br($_SESSION["texto"]); ?></p>
<?php 
        echo '</table>';

