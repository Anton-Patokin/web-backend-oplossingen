<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>oplossing functies gevorderd</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
        
<?php 
echo "deel 1 <br>";
$md5HashKey= 'd1fa402db91a7a93c4f414b8278ce073';
$argument_1 = "2";
$argument_2 = "8";
$argument_3 = "a";


function precent_berekenen_1($pa1_string, $par2_letter){
  return substr_count($pa1_string,$par2_letter)/strlen($pa1_string)*100;
}

echo "<h1>Funcite 1: De needle".$argument_1." komt ".precent_berekenen_1($md5HashKey,$argument_1)."% voor in de hash".$md5HashKey."</h1>";



function precent_berekenen_2($par_letter){
  global $md5HashKey;
  $pa1_string  =  $md5HashKey;
  return substr_count($pa1_string,$par_letter)/strlen($pa1_string)*100;
}

echo "<h1>Funcite 2: De needle".$argument_2." komt ".precent_berekenen_2($argument_2)."% voor in de hash".$md5HashKey."</h1>";



function precent_berekenen_3($par_letter){
 
  $pa1_string  =   $GLOBALS['md5HashKey'];
  return substr_count($pa1_string,$par_letter)/strlen($pa1_string)*100;
}

echo "<h1>Funcite 3: De needle".$argument_3." komt ".precent_berekenen_3($argument_3)."% voor in de hash".$md5HashKey."</h1>";








//----------------------------deel 2------------------






echo "deel 2 <br>";


$pigHealth = 5;
$maximumThrows =8;
$spelverloop =   array();

function calculateHit(){
$raakkans =rand(1,100);
global $pigHealth , $pigHealth;
 
 if($raakkans >= 50 ){
  $pigHealth--;
 $spelverloop["massege"]= "HIT! Er zijn nog maar ".$pigHealth." varkens over.' <br>";
 }else{
 $spelverloop["massege"] ="Mis! Nog ".$pigHealth." varkens in het team.<br>";
 }

 
 return $spelverloop;
}

/*
$array = calculateHit();
echo $array["massege"];
*/


function launchAngryBird(){
static $loung_made = 0;
 global $maximumThrows,$pigHealth,$spelverloop;
 
 //echo $maximumThrows . " " .$pigHealth. " ".$loung_made."<br>";
 $loung_made++;
 
 if(($loung_made <= $maximumThrows) && $pigHealth > 0 ){
  
  
  $hit_result = calculateHit();
  $spelverloop[] = $hit_result["massege"];
  //echo $hit_result["massege"];
  launchAngryBird();
 }else {
   if($pigHealth == 0 ){
   $spelverloop[]=  "Gewonnen! <br>";
   }else{
   $spelverloop[] = "Verloren! <br>";
   }
  //echo "ik ben hier".$spelverloop[1];
 }
 
}



launchAngryBird();

?>
         <ul>
         <?php foreach($spelverloop as $value):?>
          <li><?php echo $value; ?></li>
          <?php endforeach?>
         </ul>
         
        </section>

    </body>
</html>
