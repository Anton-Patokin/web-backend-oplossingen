<?php
session_start();

var_dump($_SESSION);

if(isset($_POST["submit"])){
$_SESSION[ 'registrationData' ][ 'deel2' ][ 'straat'] = $_POST["straat"];
$_SESSION[ 'registrationData' ][ 'deel2' ][ 'nummer'] = $_POST["nummer"];
 $_SESSION[ 'registrationData' ][ 'deel2' ][ 'gemeente'] = $_POST["gemeente"];
 $_SESSION[ 'registrationData' ][ 'deel2' ][ 'postcode'] = $_POST["postcode"];
 
 //echo $_SESSION[ 'registrationData' ][ 'deel1' ][ 'nickname'];
}

$registrationData =$_SESSION[ 'registrationData' ];


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
 
  
  <ul>
   <?php foreach($registrationData as $key => $value):?>
   
      <?php foreach($value as $deel => $gegevens):?>
           <p><?= $key;?></p>
          <li><?php echo $deel." : ".$gegevens; ?><br><a href="<?php if($key == "deel1"){echo "oplossing-sessions.php?focus=".$deel;}else{echo "adrespagina.php";}?>">wijzig</a></li>
       <?php endforeach; ?>

     <?php endforeach;?>
  </ul>
  
 
 
 <?=var_dump($registrationData);?>
 </body>