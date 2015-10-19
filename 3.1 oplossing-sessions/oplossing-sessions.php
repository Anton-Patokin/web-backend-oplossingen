<?php
session_start();

var_dump($_GET);

var_dump($_SESSION);

if((isset($_GET["delet-session"]))){
session_destroy( );
 header( 'location: oplossing-sessions.php' );
 echo " <br> leeg <br>";
}


if((isset( $_SESSION[ 'registrationData' ][ 'deel1' ][ 'email'] ))  && (isset( $_SESSION[ 'registrationData' ][ 'deel1' ][ 'nickname'] ))){
  $email = $_SESSION[ 'registrationData' ][ 'deel1' ][ 'email'];
  $nickname = $_SESSION[ 'registrationData' ][ 'deel1' ][ 'nickname'];

 echo "variabellen gedeklareerd <br>";
}else{
$email = "";
 $nickname= "";
}

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
        
      
     <form action="adrespagina.php" method="POST">
                                <ul>
                                    <li>
                                        <label for="email">e-mail</label>
                                        <input type="text"  value="<?= $email ?>"  <?= ( isset( $_GET['focus'] ) && $_GET['focus'] == "email" ) ? 'autofocus' : '' ?> name="email"  >
                                    </li>
                                    <li>
                                        <label for="nickname">nickname</label>
                                        <input type="text"  value="<?= $nickname ?>" <?= ( isset( $_GET['focus'] ) && $_GET['focus'] == "nickname" ) ? 'autofocus' : '' ?> name="nickname">
                                    </li>
                                </ul>
                                <input type="submit" value="Volgende" name="submit">
                            </form>
     
     

       
        
    </body>
</html>
