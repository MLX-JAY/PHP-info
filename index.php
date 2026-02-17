<!DOCTYPE html>
<?php
    function liste() {
            $buff= "<ul>\n";
            for ($i=1;$i<21;$i++)
            {
                $buff.= "<li>";
                $buff.= "hello numéro " . $i  ;
                $buff.= "</li>\n";
            }
            $buff.= "</ul>\n";
            echo $buff;
    }
?>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>PHP TD5</title>
    </head>
    <body>
        <h1>Exercices TD5</h1>
        <h2>exercice 1</h2>
            <?php
                echo date('Y-m-d H:i:s')."\n";
            ?>
        <h2>exercice 2</h2>
            <?php
                echo liste();
            ?>
        <h2>exercice 3</h2>
        <?php
            $decimal=10;
            echo $decimal."=".dechex($decimal)."=".chr($decimal)."\n";
            $hexa=0x41;
            echo $hexa ."=".dechex($hexa)."=".chr($hexa)."\n";
            $ascii='+';
            echo ord($ascii)."=".dechex(ord($ascii))."=".$ascii."\n";
        ?>
    </body>
</html>