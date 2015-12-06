<?php
try{
  $db = new PDO("mysql:host=localhost;dbname=bieren","anton","paraplu");
   $messageContainer= "er is alles inoorde";
}catch ( PDOException $e )
	{
		$messageContainer	=	'Er ging iets mis: ' . $e->getMessage();
	}

try{

   if(isset($_POST["submit"])){
     
     $result = $db->exec("INSERT INTO `brouwers` (`brnaam`, `adres`, `postcode`, `gemeente`, `omzet`) VALUES ('{$_POST['brouwernaam']}','{$_POST['adres']}','{$_POST['postcode']}','{$_POST['gemeente']}','{$_POST['omzet']}')");
    
    if($result>0){
      echo "<br>succesful insert with uid=".$db->lastInsertId();
    }
      
   }
 

}catch(PDOException $e )
	{
		$messageContainer	=	'Er ging iets mis: ' . $e->getMessage();
	}

echo $messageContainer;
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht CRUD insert</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">
        
       

                    <form method="post" action="">
                        <ul>
                            <li>
                                <label for="brouwernaam">Brouwernaam</label>
                                <input type="text" id="brouwernaam" name="brouwernaam">
                            </li>
                            <li>
                                <label for="adres">adres</label>
                                <input type="text" id="adres" name="adres">
                            </li>
                            <li>
                                <label for="postcode">postcode</label>
                                <input type="text" id="postcode" name="postcode">
                            </li>
                            <li>
                                <label for="gemeente">gemeente</label>
                                <input type="text" id="gemeente" name="gemeente">
                            </li>
                            <li>
                                <label for="omzet">omzet</label>
                                <input type="text" id="omzet" name="omzet">
                            </li>
                        </ul>
                        <input type="submit" name="submit">
                    </form>
   </body>