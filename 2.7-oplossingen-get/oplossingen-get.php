<?php 


$artikels['artikel1'] = array(
     
     "titel" =>"Belg riskeert dood door ophanging voor moord op zoontje 5 in Singapore",
     "datum" =>"4/10/2015",
     "inhoud"=>"Een 41-jarige Belg is vandaag in Singapore in verdenking gesteld voor de moord op zijn vijfjarige zoon. De maximale straf die hij daarvoor riskeert in de stadstaat in Zuidoost-Azië is de doodstraf door ophanging.  Philippe Graffart zou volgens lokale media zijn zoon Keryan gewurgd hebben in hun appartement. De feiten hebben zich voorgedaan tussen maandagavond en dinsdagmorgen, aldus een lokale rechtbank in een communiqué. Graffart werd dinsdagmorgen opgepakt vlakbij een politiebureau. Hij had verwondingen op zijn lichaam die hij zichzelf zou hebben toegebracht, stelt de krant New Straits Time",
     "afbelding"=>"img/artikel1.jpg",
     "afbelding_beschrijving"=>"Foto van een man");


//var_dump($artikels);



$artikels['artikel2'] = array(
     
     "titel" =>"Zo ziet Matthew McConaughey er momenteel uit",
     "datum" =>"5/10/15",
     "inhoud"=>"Tot voor kort kenden we Matthew McConaughy vooral als blonde hunk in romantische komedies, maar de laatste jaren rijgt de acteur de toprollen aan elkaar. In 2014 won hij een Oscar voor zijn rol in 'Dallas Buyers Club', waarvoor hij 25 kilogram verloor. En ook voor zijn nieuwe film 'Gold' onderging McConaughey een transformatie. Hij werd gespot zonder haar en met een bierbuik, allemaal tijdelijk weliswaar.
De 45-jarige acteur werd zondag in New York gespot op de set van 'Gold'. Hij had zijn blonde lokken ingeruild voor een kaalkop en zijn sixpack moest plaats ruimen voor een uit de kluiten gewassen bierbuik. 'Ik doe alles wat mijn rol nodig heeft', liet McConaughey al weten toen hij graatmager werd voor Dallas Buyers Club.

McConaughey speelt zakenman Kenny Wells, die door de Indonesische jungle trekt op zoek naar goud. De film wordt eind volgend jaar in de zalen verwacht",
     "afbelding"=>"img/artikel2.jpg",
     "afbelding_beschrijving"=>"McConaughey rokt sigaret");
 
 
 $artikels['artikel3'] = array(
     
     "titel" =>"Man houdt 12 seksslaven opgesloten die hij op Grindr had gelokt",
     "datum" =>"5/10/15",
     "inhoud"=>"Tot voor kort kenden we Matthew McConaughy vooral als blonde hunk in romantische komedies, maar de laatste jaren rijgt de acteur de toprollen aan elkaar. In 2014 won hij een Oscar voor zijn rol in 'Dallas Buyers Club', waarvoor hij 25 kilogram verloor. En ook voor zijn nieuwe film 'Gold' onderging McConaughey een transformatie. Hij werd gespot zonder haar en met een bierbuik, allemaal tijdelijk weliswaar.
De 45-jarige acteur werd zondag in New York gespot op de set van 'Gold'. Hij had zijn blonde lokken ingeruild voor een kaalkop en zijn sixpack moest plaats ruimen voor een uit de kluiten gewassen bierbuik. 'Ik doe alles wat mijn rol nodig heeft', liet McConaughey al weten toen hij graatmager werd voor Dallas Buyers Club.

McConaughey speelt zakenman Kenny Wells, die door de Indonesische jungle trekt op zoek naar goud. De film wordt eind volgend jaar in de zalen verwacht",
     "afbelding"=>"img/artikel3.jpg",
     "afbelding_beschrijving"=>"Foto uit gevengenis man in oranje kleren");
 
 
 
 
 
//echo var_dump( $_GET );

$artikel = true;
$layout = true;


if ( isset ( $_GET['id'] ) )
	{
 

		$id = $_GET['id'];

		// Controleren of de opgevraagde key (=id) bestaat in de array $artikels
		if ( array_key_exists( $id , $artikels ) )
		{
			$artikels 			= 	array( $artikels[$id] );
         
			$layout	=	false;
		}
		else
		{
			$artikel	=	false;
		}		
        
	}



     ?>


<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>oplossing get</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
     
     <style>
      h1{
      font-size: 1.2em;
      }
      .small-artikel{
       width: 300px;
       border: 1px solid black;
       background-color: #bbb;
       color: #fff;
       position: relative;
       float: left;
       margin: 25px 28px 25px 25px;
       text-align: center;
       
       
      }
      .larg-artike{
       
      width: 1200px;
       border: 1px solid black;
       background-color: #bbb;
       color: #fff;
       
       
       
      }
      
      .datum{
      font-size: 0.8em;
       padding: 10px 10px 10px 10px
      }
      .small-artikel-foto{
      width: 200px;
       margin: 0px 0px 0px 0px;
      }
      
      .larg-artike-foto{
       display: inline-block;
       height: 300px;
      }
      
      
      .larg-artike-inhoud{
       display: inline-block;
       width: 500px;
       margin-top:0px;
       padding-top:0px;
      }
     
      
     </style>
     
    </head>
    <body class="web-backend-opdracht">
        
     <?php if($artikel): ?>
       <?php foreach($artikels as $key => $value ):?>
         <div class="<?php if($layout){echo "small-artikel";}else{echo "larg-artike";} ?>">
           <h1><?php echo $value["titel"] ?></h1>
           <p class="datum"><?php echo $value["datum"];?><p>
           <p  class="<?php if($layout){echo "small-artikel-inhoud"; }else{echo "larg-artike-inhoud";}?>" ><?php if($layout){echo substr($value["inhoud"], 0, 50)."...";}else{echo $value["inhoud"];};?></p>
            <figure class="<?php if($layout){echo "small-artikel-foto";}else{echo "larg-artike-foto";}?>">
                 <img class="<?php if($layout){echo "small-artikel-foto";}else{echo "larg-artike-foto";} ?>" src="<?php echo $value["afbelding"];?>" alt="<?php echo $value["afbelding_beschrijving"];?>">
                 <figcaption><?php echo $value["afbelding_beschrijving"];?></figcaption>
             </figure>
          <?php if($layout):?>
            <a href="oplossingen-get.php?id=<?php echo $key ?>"><p>Lees meer</p></a>
          <?php endif;?>
          </div>
       <?php endforeach; ?>
     <?php else: ?>
     <h1><?php echo "sorry artikel is niet gevonden"?></h1>
     <?php endif?>
   

      

    </body>
</html>
