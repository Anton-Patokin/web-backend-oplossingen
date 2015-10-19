<?php
session_start();

var_dump($_SESSION);

if(isset($_POST["submit"])){
$_SESSION[ 'registrationData' ][ 'deel1' ][ 'email'] = $_POST["email"];
$_SESSION[ 'registrationData' ][ 'deel1' ][ 'nickname'] = $_POST["nickname"];
 
 
 //echo $_SESSION[ 'registrationData' ][ 'deel1' ][ 'nickname'];
}

$registrationData[ 'deel1' ] =$_SESSION[ 'registrationData' ][ 'deel1' ];


?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>oplossing sessions</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    </head>
    <body >
        
     <h1>Registratiegegevens</h1>
     <ul>
     <li><?= $registrationData[ 'deel1' ]["email"]?></li>
      <li><?= $registrationData[ 'deel1' ]['nickname'] ?></li>
     </ul>
     
     
     
  
     
     
     
     <form action="oplossing-sessions.php"  method="GET">
     <input type="submit" value="leeg-session" name="delet-session">
      </form>
     
     
     <form action="alleGegevens.php" method="POST">
     <input type="text" name="straat">
      <input type="text" name="nummer">
      <input type="text" name="gemeente">
      <input type="text" name="postcode">
      <input type="submit" name="submit">
     
     </form>
     
     
     
     
     
     <?=var_dump($_SESSION);?>

       
        
    </body>
</html>
