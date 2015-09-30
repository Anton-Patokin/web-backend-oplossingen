<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht comments</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
        
			<h1>Opdracht comments: deel 1</h1>
         

			<ul>
				<li>Maak een pagina (incl. HTML5 doctype), met daarin een PHP-block (inline)
 dat er voor zorgt dat je voornaam & naam op het scherm tevoorschijn komen.</li>

             <?php 
          $naam	= "Anton";
	      $achternaam = "Patokin";
           echo "<h1>Deel 1</h1>";
           echo "<h3>naam:".$naam."</h3><h3>achternaam:".$achternaam."</h3></br>";
	   echo "mijn naam is patokin anton";

         ?>
	   <p>in html variabele oproepen ---->ik heet <?= $naam ?></p>
				<li>Maak een commentaar-block met je naam en e-mail</li>
			</ul>
         
			<?php 
              //deel 2
		echo "//zie in de code voor comments"
              /*
                 *Anton
                 *Patokin.anton@gmail.com
              

              */
         ?>
		</section>

    </body>
</html>