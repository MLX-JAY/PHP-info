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
    function listeHexa () {
        $buff= "<ul class=\"listeHexa\">\n";
        for ($i=1; $i<16; $i++)
        {
            $buff.= "<li>";
            $buff.= $i . " , " . dechex($i);
            $buff.= "</li>\n";
        }
        $buff.= "</ul>\n";
        echo $buff;
    }
?>
<html lang="fr" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="UTF-8">
        <meta name="Auteur" content="Feraoun Mohamed">
        <meta name="Formation" content="L2 Informatique - CY Cergy Paris Université">
        <meta name="Sujet" content="la reponse au td 5 de dev web">
        <link rel="icon" href="img/logo-cergy.jpg" type="image/jpg">
        <link rel="stylesheet" href="style.css">
        <style>
            .listeHexa
            {
                display: flex;
                list-style: none;
            }
            table {
                border-collapse: separate;
                border-spacing: 2px;
                color: black;
            }
            th {
                background-color: cyan; 
                border: 1px solid black;
                padding: 5px 15px;
                font-weight: bold;
                text-align: center;
            }
            td {
                background-color: white;
                border: 1px solid black;
                padding: 3px 10px;
                text-align: right;
            }
        </style>
        <title>document sur le marche de la ram </title>
    </head>
    <body>
        <header>
            <figure>
                <figcaption style="opacity: 0;">Logo de L'universite de Cergy</figcaption>
                <img src="img/logo-cergy.jpg" alt="logo de cergy universite" style="width: 200px; height: auto;">
            </figure>
            <nav>
                <ul>
                    <li class="titre"><a href="#exercice1">Exercice 1</a></li> 
                    <li class="titre"><a href="#exercice2">Exercice 2</a></li>
                    <li class="titre"><a href="#exercice3">Exercice 3</a> </li>
                    <li class="titre"><a href="#exercice4">Exercice 4</a></li>
                    <li class="titre"><a href="#exercice5">Exercice 5</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <h1>Exercices TD5</h1>
            <h2 id="exercice1">exercice 1</h2>
                <?php
                    echo date('Y-m-d H:i:s')."\n";
                ?>
            <h2 id="exercice2">exercice 2</h2>
                <?php
                    echo liste();
                ?>
            <h2 id="exercice3">exercice 3</h2>
            <?php
                $result="<p>";
                $decimal=40;
                $result .= $decimal."=".dechex($decimal)."=".chr($decimal)." , ";
                $hexa=0x41;
                $result .= $hexa ."=".dechex($hexa)."=".chr($hexa)." , ";
                $ascii='+';
                $result .= ord($ascii)."=".dechex(ord($ascii))."=".$ascii."\n";
                $result .="</p>";
                echo $result;
            ?>
            <h2 id="exercice4">exercice 4</h2>
            <?php
                listeHexa();
            ?>
            <h2 id="exercice5">exercice 5</h2>
            <?php
                $result = "<table>";
                $result .= "<tr>\n
                    <th>binaire</th>\n
                    <th>octal</th>\n
                    <th>décimal</th>\n
                    <th>hexa</th>\n
                </tr>\n";
                for($i=0;$i<18;$i++)
                {
                    $result.="<tr>\n";
                    $result.="<td>".sprintf("%08b",$i)."</td>\n";
                    $result.="<td>".sprintf("%02o",$i)."</td>\n";
                    $result.="<td>".sprintf("%02d",$i)."</td>\n";
                    $result.="<td>".sprintf("%02X",$i)."</td>\n";
                    $result.="</tr>\n";
                }
                $result.="</table>\n";
                echo $result;
            ?>
        </main>
        <footer>
            <address>
                <p>Réalisé par <strong>Feraoun Mohamed</strong></p>
                <p>L2 Informatique - CY Cergy Paris Université</p>
                <p>Janvier 2026</p>
            </address>
        </footer>
    </body>
</html>