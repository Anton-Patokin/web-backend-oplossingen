<?php
$gegevens =explode(",",file_get_contents('paswoord.txt'));
echo var_dump($gegevens);


$toegang = false;


if(!isset($_COOKIE['gebreuker'])){
if(isset($_POST["submit"])){
   if($_POST["log"]==$gegevens[0] && $_POST["password"]==$gegevens[1]){
     $toegang= true;
      setcookie( 'gebreuker', TRUE, time() + 360 );
   }else
   {
     $toegang= false;
   }
}
}else{
$toegang= true;
}

if(isset($_GET["cookie"])){
  if($_GET["cookie"]=="false"){
  setcookie( 'gebreuker', "", time()-1 );
   $toegang = false;
  header( 'oplossing-cookie.php' );
}
}
?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Voorbeeld cookies</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>

<body class="web-backend-voorbeeld">

	<section class="body">
     
     <?php if($toegang):?>
     <h1>Dashboard</h1>
        <p>u bent ingeloogd</p>
     <a href="oplossing-cookie.php?cookie=false"><p>Uitlogen</p></a>
     
        
     <?php else:?>
     <h1>Inloggen</h1>
      <p>Gebruikersnaam en/of paswoord niet correct. Probeer opnieuw.</p>
      
      
      
				<form  action="oplossing-cookie.php" method="post">
					<label for="log-in">log in: </label>
						<input type="text" name="log" >
						<label for="password">Paswoord: </label>
						<input type="password" name="password">
					
					<input type="submit" name="submit">
				</form>
     <?php endif ?>
	</section>
	
</body>
</html>