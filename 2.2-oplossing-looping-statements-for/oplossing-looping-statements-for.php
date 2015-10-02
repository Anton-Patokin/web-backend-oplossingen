<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht for</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
     
     <style>
.green {
    text-align: center;
    background-color: green;
 color: #fff;
}
</style>
    </head>
    <body class="web-backend-opdracht">
        <table>
        <?php
     echo "deel1 <br>";
     $rijen = 10;
     $kolommen =10;

for($rij = 0 ; $rij <= $rijen; $rij++){
         ?>
              <tr>
                 <?php
                     for($kol = 0 ; $kol <= $kolommen; $kol++){
                 ?>
                  
                     <td>kolommen</td>
                  <?php
                    }
                   ?>
             </tr>
          <?php
           }
           ?>
     </table>
     
     
     <?php
     echo "<br> deel 2 <br>";
     ?>
      <table>
        <?php
     
     $rijen = 10;
     $kolomen =10;
     $counter=0;

for($rij = 0 ; $rij < $rijen; $rij++){
         ?>
              <tr>
                 <?php
                     for($kol = 0 ; $kol < $kolommen; $kol++){
                 ?>
                  
                     <td class="<?php if(($counter % 2)==1){echo "green";}?>">
                         <?php echo $counter;$counter++;?>
               
                     </td>
                  <?php
                    }
                   
                   ?>
             </tr>
          <?php
           }
           ?>
     </table>
     
      <?php
     echo "<br> deel 3 <br>";


    $array_multipel = array();
    $another_array = array();
    $rijen=3;
    $kolomen = 4;
      for($rij = 0; $rij< $rijen ; $rij++){
       
           for($kol = 0; $kol< $rijen ; $kol++){
             $another_array[$kol] = $kol;
            //echo $kol."<br>";

           }
       $array_multipel[$rij] = $another_array;
      }
    
     ?>
     <pre><?php print_r($array_multipel)?></pre>
    </body>
</html>
