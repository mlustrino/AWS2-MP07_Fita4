<?php

# codi PHP per mostrar els errors al browser
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



        <p><textarea name="textarea" rows="10" cols="50"><?php echo $_SESSION['texto']; ?></textarea></p>

        <?php
        $boto = '<td%s><button type="button" onclick="document.location.href=\'?tecla=%s\';" >%s</button></td>';

        //echo '<table><tr><th colspan="8">TECLADO</th>'.printf($boto,"","BS","BS").'</tr>';
        echo '<table><tr><th colspan="8">TECLADO</th><td><button type="button" onclick="document.location.href=\'?tecla=BS\';" >BS</button></td></tr>';


        for($i=0;$i<=25;$i++){
            if ($i==0){
                echo "<tr>";
            }
            
            if (($i % 9) ==0 ){echo "</tr><tr>";}
            printf($boto,"",chr($i+65),chr($i+65));
            if ($i==25){
                printf($boto,"","LF","LF");
                echo '</tr>';

                printf($boto,' colspan="7"',"SPACE","SPACE");
                printf($boto,' colspan="2"',"CLEAN","CLEAN");
                
            }

        }
        echo '</table>';

