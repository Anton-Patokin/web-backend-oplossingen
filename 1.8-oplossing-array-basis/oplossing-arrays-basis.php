<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht arrays basis</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
        
            <h1>Opdracht arrays basis: deel 1</h1>

            <ul>

                <li>Maak een array waarin je 10 dieren opslaat( doe dit op 2 verschillende manieren )</li>
             

                <li>Maak een nieuwe array met daarin 5 voertuigen, zorg er voor dat je kan bepalen om welke categorie van voertuig het gaat ( 2-dimensionele array), zoals 'landvoertuigen', 'watervoertuigen', 'luchtvoertuigen'. 
                <p>Wanneer je een <code>var_dump</code> van deze array doet, ziet het resultaat er ongeveer als volgt uit:</p>
                    
                    <ul class="array-notation pre">
                        <li>
                            [ 'landvoertuigen' ] => 
                            <ul>
                                <li>[ 0 ] => 'Vespa'</li>
                                <li>[ 1 ] => 'fiets'</li>
                            </ul>
                        </li>
                        <li>
                            [ 'watervoertuigen' ] => 
                            <ul>
                                <li>[ 0 ] => 'surfplank'</li>
                                <li>[ 1 ] => 'vlot'</li>
                                <li>[ 2 ] => 'schoener'</li>
                                <li>[ 3 ] => 'driemaster'</li>
                            </ul>
                        </li>
                        <li>
                            [ 'luchtvoertuigen' ] => 
                            <ul>
                                <li>[ 0 ] => 'luchtballon'</li>
                                <li>[ 1 ] => 'helicopter'</li>
                                <li>[ 2 ] => 'B52'</li>
                            </ul>
                        </li>
                    </ul>

                </li>

            </ul> 
         <pre>
         <?php
         $array_dieren =array("aap","hond","koe","beer","kat","muis","olifant","bizon","slang","leeuw");
         $array_dieren_twee[]="bizon";
$array_dieren_twee[]="mug";
$array_dieren_twee[]="vlieg";
$array_dieren_twee[]="vis";
$array_dieren_twee[]="vogel";
$array_dieren_twee[]="dlang";
$array_dieren_twee[]="koe";
$array_dieren_twee[]="vos";
$array_dieren_twee[]="volf";
$array_dieren_twee[]="kat";
$array_dieren_twee[]="ekhoorn";


$array_voertuigen= array("landvoertuig" => array("vespa","fiets"),"watervoertuig" => array("vlot","surfplank","schoener","driemaster"),"luchtvoertuig"=>array("luchtballon","helicopter","b52"));
print_r($array_voertuigen);
         ?>
</pre>
            <h1 class="extra">Opdracht arrays basis: deel 2</h1>

            <ul>
                <li>Maak een array waarin je de getallen 1, 2, 3, 4, 5 in plaatst</li>

                <li>Vermenigvuldig alle getallen met elkaar en druk af naar het scherm</li>

                <li>Druk de oneven getallen af (controle in script, niet zelf selecteren welke je afdrukt)</li>

                <li>Maak een tweede array waarin je de getallen 5, 4, 3, 2, 1 in plaatst</li>

                <li>Tel de getallen uit beide arrays met dezelfde index met elkaar op</li>
            </ul>
        
         <?php
         $array_getalen = array(1,2,3,4,5);
         echo "vrmenigvuldiging: ".array_product($array_getalen);
echo "</br>";
echo "optelling :".array_sum($array_getalen)."</br>";
function odd($var)
{
return($var & 1);
}
echo print_r(array_filter($array_getalen, "odd"));  

$array_getalen_twee =array(5,4,3,2,1);

echo "</br>";
foreach( $array_getalen as $key => $getal)
   {
 
     
     $som = $getal + $array_getalen_twee[$key];
      echo $getal."+".$array_getalen_twee[$key]."=".$som."</br>";
 
   }
         ?>
        </section>

    </body>
</html>
