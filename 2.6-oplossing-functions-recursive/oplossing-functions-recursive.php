<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>oplossing recursive</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">

            <?php

        
         $antal_jaar = 10;
        $progress_array =array();

         function recursive_rente($aantal_jaar, $rente_voet , $bedrag){
          global $progress_array;
         
          
         
          if($aantal_jaar == 0 ){
           $progress_array[]= "tien jaar zijn voorbij";
          return  $progress_array;
          }
          else{
          $rente= $bedrag / 100 * $rente_voet;
          $bedrag = $bedrag + $rente; 
           $progress_array[]="<p>Het nieuwe bedrag bedraagt ".$bedrag."€ (waarvan".$rente."€ onze rente is)</p>";
           recursive_rente(--$aantal_jaar,$rente_voet,$bedrag);
          }
         
         }

recursive_rente($antal_jaar, 8 , 1000000);


        


         ?>
           <ul>
         <?php foreach($progress_array as $value):?>
            <li><?php echo $value;?></li>
            <?php endforeach?>
         </ul>
        </section>

    </body>
</html>
