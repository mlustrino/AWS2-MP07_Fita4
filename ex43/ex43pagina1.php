<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();


if (isset($_GET['tecla'])){
    $tecla = $_GET['tecla'];
    
    if ($tecla =="BS"){

        $_SESSION['texto'] = substr($_SESSION['texto'],0,-1);
    }elseif($tecla=="LF"){
        $_SESSION['texto'] = $_SESSION['texto']. "\n";
    }elseif($tecla=="SPACE"){

        $_SESSION['texto'] = $_SESSION['texto']. " ";
    }elseif($tecla=="CLEAN"){
        $_SESSION['texto'] = "";
    
    }else{

    $_SESSION['texto'] = $_SESSION['texto']. $tecla;
    }
}else{
    $_SESSION['texto'] ="";
}
  ?>

<style> table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    padding: 5px;
    text-align: center;}</style>

<h1>Màquina d'escriure</h1>

        <p><textarea name="textarea" rows="10" cols="50"><?php echo $_SESSION['texto']; ?></textarea></p>

        <?php
        $enllac = '<td%s><a href=\'?tecla=%s\'>%s</a></td>';

        echo '<table><tr><th colspan="8">TECLADO</th><td><a href=\'?tecla=BS\'>BS</a></td></tr>';


        for($i=0;$i<=25;$i++){
            if ($i==0){
                echo "<tr>";
            }
            
            if (($i % 9) ==0 ){echo "</tr><tr>";}
            printf($enllac,"",chr($i+65),chr($i+65));
            if ($i==25){
                printf($enllac,"","LF","LF");
                echo '</tr>';

                printf($enllac,' colspan="7"',"SPACE","SPACE");
                printf($enllac,' colspan="2"',"CLEAN","CLEAN");
                
            }

        }
        echo '</table>';

