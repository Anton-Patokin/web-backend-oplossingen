<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht if else if</title> 
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
        
            <h1>Opdracht if else if: deel 1</h1>

            <ul>
                <li>Maak een getal met een waarde tussen 1-100</li>
                <li>Zorg ervoor dat het script kan zeggen tussen welke tientallen het getal ligt, bv 'Het getal ligt tussen 20 en 30'.</li>
                <li>Zorg er vervolgens voor dat de boodschap omgekeerd afgedrukt wordt, bv '03 ne 02 nessut tgil lateg teH'.</li>
            </ul>  
        <?php
         $getaal =rand(1,100);
         $renge = "";

         if ($getaal< 10) 
		{
			$renge = "0 en 10";
         } 
		elseif ($getaal< 20) 
		{
			$renge = "10 en 20";
		} 
elseif ($getaal< 30) 
		{
			$renge = "20 en 30";
		} 
elseif ($getaal< 40) 
		{
			$renge = "30 en 40";
		} 
elseif ($getaal< 50) 
		{
			$renge = "40 en 50";
		} 
elseif ($getaal< 60) 
		{
			$renge = "50 en 60";
		} 
elseif ($getaal< 70) 
		{
			$renge = "60 en 70";
		} 
elseif ($getaal< 80) 
		{
			$renge = "70 en 80";
		} 
elseif ($getaal< 90) 
		{
			$renge = "80 en 90";
		} else 
		{
			$renge = "80 en 100";
		}
echo "Getaal bevind zich tussen : ".$renge."</br>";

echo  strrev("Getaal bevind zich tussen : ".$renge);
         ?>
        </section>

    </body>
</html>
