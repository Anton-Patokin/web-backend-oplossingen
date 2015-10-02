<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht array functies</title> 
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
            
            <h1>Opdracht array functies: deel 1</h1>

            <ul>
                <li>Maak een array waarin je meer dan 5 dieren plaatst</li>

                <li>Laat het script berekenen hoeveel elementen er in de array zitten en druk af naar het scherm</li>

                <li>Maak het mogelijk om met een variabele <code>$teZoekenDier</code> een dier te zoeken in de array, druk tevens een gepaste boodschap af (gevonden/niet gevonden).</li>

            </ul> 
         
         
         <?php 
echo "</br> deel 1 </br>";
$array_dieren = array("muis","vis","clig","zus","broer");
echo "antaal dieren is :".count($array_dieren );

$teZoekenDier= "vis";

$getal = array_search($teZoekenDier,$array_dieren);

echo "</br>".$getal."</br>";
if( $array_dieren[$getal]==$teZoekenDier){
echo "dier beviend zig op index: ".$getal;
}else{
echo "dier is niet gevonden";
}
?>

            <h1 class="extra">Opdracht array functies: deel 2</h1>

            <ul>
                <li>Ga verder op deel 1 (maar maak een aparte kopie voor, overschrijf het origineel niet!)</li>

                <li>Zorg ervoor dat de array volgens het alfabet gesorteerd wordt ( A -> Z )</li>

                <li>Maak een array <code>$zoogdieren</code> en plaats hier 3 dieren in, voeg vervolgens de 2 arrays met dieren samen in de array <code>$dierenLijst</code></li>
            </ul>
         
         <?php 
         echo "</br> deel 2</br>";
         $array_copy = $array_dieren;
         
         echo  var_dump($array_copy)."</br>";
         sort($array_copy);
         echo  var_dump($array_copy)."</br>";

        $zoogdieren= array("flesh","smurf","ribai");
        $samengestald = array_merge($zoogdieren,$array_copy);
         ?>
<pre><?php  var_dump($samengestald) ?></pre>

            <h1 class="extra">Opdracht array functies: deel 3</h1>

            <ul>
                <li>Maak een array met volgende waarden:
                    <p>8, 7, 8, 7, 3, 2, 1, 2, 4</p>
                </li>

                <li>Haal de duplicaten uit de array</li>

                <li>Sorteer de array van groot naar klein</li>

            </ul>
<?php 
         echo "</br> deel 3</br>";
         $getalen= array(8, 7, 8, 7, 3, 2, 1, 2, 4);
         
         $var_unic =array_unique($getalen);

         //echo  $var_unic;
         //sort($getalen);
         echo var_dump($getalen);

        $zoogdieren= array("flesh","smurf","ribai");
        $samengestald = array_merge($zoogdieren,$array_copy);
         ?>
        </section>

    </body>
</html>
