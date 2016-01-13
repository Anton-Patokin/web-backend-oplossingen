<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Page Title</title>
</head>

<body>
 
 
 <?php 
  if(isset($_SESSION["message"])){
    echo '<ol>';
    foreach($_SESSION["message"] as $key => $value){
      foreach($value as $error_message){
        echo '<li>'.$key.'  '.$error_message.'</li>';
      }
    }
    echo '</ol>';
    unset($_SESSION["message"]);
  }
 ?>
 
 
 
 <?php if(!isset($_COOKIE["login"])):?>
 <?php //var_dump($_SESSION)?>
    <form action="registratie-process.php" method="post">
        <ul>
            <li>
                <label for="mail">e-mail</label>
                 <input type="text" name="mail" value="<?=isset($_SESSION["login"]["mail"])?$_SESSION["login"]["mail"]:""?>">
            </li>
            <li>
                <label for="password">paswoord</label>
                <input type="<?=isset($_SESSION["login"]["pass"])?"text":"password"?>" name="pass" value="<?=isset($_SESSION["login"]["pass"])?$_SESSION["login"]["pass"]:""?>">
                <input type="submit" name="generatePass" value="Genereer een paswoord">
            </li>
        </ul>
        <input type="submit" name="Registreer" value="Registreer">
        <input type="submit" name="login" value="login">
    </form>
<?php else: ?>
 <h1>hallo</h1>
 <a href="logout.php"><p>logout</p></a>
 <?php endif?>

</body>

</html>