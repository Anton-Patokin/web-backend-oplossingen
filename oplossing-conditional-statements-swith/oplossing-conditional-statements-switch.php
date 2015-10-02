<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht switch</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
        
            <h1>Opdracht switch: deel 1</h1>

            <ul>
                <li>Maak een HTML-document met een PHP code-block</li>
                <li>Maak een PHP-script dat aan de hand van een getal ( tussen 1 en 7 ) de bijhorende dag afprint in kleine letters (geen hoofdletters!)</li>
                <li>Maak gebruik van een switch en probeer alles te herschrijven i.p.v. te kopiëren.</li>
            </ul>  
<?php
         $getaal =rand(1,7);
         $dag_va_de_week = "";
         switch($getaal){
          case 1:
           $dag_va_de_week = "maandag";
           break;
           case 2:
           $dag_va_de_week = "dinsdag";
           break;
           case 3:
           $dag_va_de_week = "woensdag";
           break;
           case 4:
           $dag_va_de_week = "donderdag";
           break;
           case 5:
           $dag_va_de_week = "vrijdag";
           break;
           case 6:
           $dag_va_de_week = "zaterdag";
           break;
          default:
            $dag_va_de_week = "zondag";
             }
echo "de dag van de week is: ".$dag_va_de_week;
         ?>
        </section>

    </body>
</html>
