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
echo "deel 1 <br>";
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
         echo "<p>lengte van de string is : ".$sting[0]." en de string in Hoofdletters :".$sting[1]." </p>";












echo "deel 2 <br>";
function drukArrayAf($par){
 
 
 
 foreach ( $par as $key => $value)
        {
           $new_string_array[] = '['.$key.'] met waarde '.$value;
        }
 return $new_string_array;

}
$arrays_name = array("1","2","melk", "cola" => "zerop");
$functie_array = drukArrayAf($arrays_name);






$html_string = "<h1>paar worden over material</h1>";

function controleer_h1_element ($string){
 $opening_tag = "<h1>";
 $sluitings_tag = "</h1>";
 $low_string = strtolower($string);
 
 if(strpos($low_string, $opening_tag) == 0 && strpos($low_string, $opening_tag) !== false ){
  
  if(strpos($low_string, $sluitings_tag) > strlen($opening_tag)){
   
   return "alles is in orde";
  }else{
   return "sluiting tag van h1 element vergeten";
  }
 }else{
  return "geen opening tag";
 }


}







         ?>
         <?php foreach($functie_array as $key => $value):?>
         <li><?php echo $value;?></li>
         <?php endforeach?>
<h1><?php echo controleer_h1_element($html_string); ?></h1>
        </section>

    </body>
</html>
