<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>oplossing functies</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
        
          <?php
         function som_berekenen ($par1,$par2)
         {
            return $par1 + $par2;
         }
         echo "functie 1 :".som_berekenen(2,2)."<br>";


         function vermenigvldiging ($par1, $par2){
           return $par1 * $par2;
         }
         echo "functie 2 :".vermenigvldiging(2,2)."<br>";


        function isEven( $par1 ) 
        {

          if ( ($par1%2 )== 0 )
          {
           
             return false;
          }else{

            return true;
          }
        }
        echo "functie 3 :".(isEven(3))."<br>";

        function lengte_en_upercase($string){
          $array =array();
          $array[]= strlen($string);
          $array[]= strtoupper($string);
          return $array;
        }
        $sting = lengte_en_upercase("opdracht is af");
         echo "<p>lengte van de string is : ".$sting[0]." en de string in Hoofdletters :".$sting[1]." </p>"
         ?>

        </section>

    </body>
</html>
