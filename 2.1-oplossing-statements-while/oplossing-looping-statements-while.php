<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht while</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">  
        
        <h1>Opdracht while: deel 1</h1>

        <ul>

            <li>Druk alle getallen af van 0 tot 100 afgescheiden door een komma en 
            een spatie ' , '.</li>

            <li>Op een volgende lijn druk je alle getallen af die deelbaar zijn door 3 én groter zijn dan 40 mààr kleiner zijn dan 80.</li>

        </ul>
         <?php

         echo "<br>deel 1<br>";
         $getal =0;
         while($getal <=100){
         echo $getal." , ";
          $getal++;
         }
$getalen=0;
echo "<br>";
        
          while($getalen <= 100){
            if(($getalen >= 40) && ($getalen <= 80) && (($getalen % 3) == 0) ){
             
            
          echo $getalen. " , ";
            }
           $getalen++;
         
         }

/*
$getalen++;
          if(($getalen >= 40) && ($getalen <=80) && $getalen %= 3){
          echo $getal." , ";
           
          }else{}
         echo $getalen;*/
         ?>

        <h1>Opdracht while: deel 2</h1>

        <ul>
             <li>Maak een array <code>$boodschappenlijstje</code> en plaats hierin enkele boodschapjes.</li>

            <li>Print deze boodschappen af in het HTML-gedeelte en plaats ze in <code>&lt;li&gt;</code>-elementen. Al deze <code>&lt;li&gt;</code>-elementen staan op hun beurt weer in één <code>&lt;ul&gt;</code>.</li>

            <li>Valideer je code met de <a href="http://validator.w3.org/">W3 Validator</a>. Dit doe je door de source-code van je document te bekijken <kbd>ctrl + u</kbd> / <kbd>⌘-Option-U</kbd>, deze te kopiëren en te plakken in de "direct input" tab.</li>

            <li>Als je code niet geldig is, maak je de nodige wijzigingen.</li>
        </ul>
         <?php
         $bodschapen =array("brood","bloem","melk","suiker","fruit","zep","lijn zad");
         $counter =1;
$array_count=count($bodschapen);
echo "<ul>";
         while($counter <= $array_count){
         echo "<li>".$bodschapen[$counter-1]."</li>";
          $counter++;
         }
echo "</ul>";
         ?>
     </section>
    </body>
</html>
