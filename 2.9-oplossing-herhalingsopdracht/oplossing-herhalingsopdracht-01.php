<?php 


$cursus =false;
$Voorbeelden = false;
$Oplossingen = false;
opzoeken = false; 
if(isset($_GET['link'])){
echo var_dump($_GET);
}
?>


<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>oplossing herhalingsopdracht 01</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
     <style>
      iframe{
        height: 750px;
        width: 1000px;;
      }
     </style>
    </head>
    <body>
		<h1>Oplossing herhalingsopdracht: deel1</h1>
		<ul>
			<li><a href="oplossing-herhalingsopdracht-01.php?link=reference-guide">Reference guide</a></li>
			<li><a href="oplossing-herhalingsopdracht-01.php?link=voorbeelden">Voorbeelden</a></li>
			<li><a href="oplossing-herhalingsopdracht-01.php?link=oplossingen">Oplossingen</a></li>
		</ul>
		<form action="oplossing-herhalingsopdracht-01.php" method="GET">

			<label id="search-query">Zoeken:</label>
			<input type="text" name="search-query">

			<input type="submit">

		</form>

		
			<iframe class="" src="web-backend-inleiding.pdf"></iframe>
		

		

	</body>
</html>
