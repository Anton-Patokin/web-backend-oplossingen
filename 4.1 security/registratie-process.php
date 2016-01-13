<?php 
session_start();

$errors = array();

/*if(strlen($_POST["mail"])>100) die("Tryin to hack me?");
if(strlen($_POST["pass"])>100) die("Tryin to hack me?");
//if(strlen($_POST["login"])>100) die("Tryin to hack me?");
//if(strlen($_POST["Registreer"])>100) die("Tryin to hack me?");
//if(strlen($_POST["generatePass"])>100) die("Tryin to hack me?");

$_POST["mail"] = trim($_POST["mail"]);
$_POST["pass"] = trim($_POST["pass"]);

$_POST["mail"] = addslashes($_POST["mail"]);
$_POST["pass"] = addslashes($_POST["pass"]);
*/


if(isset($_POST["login"]) ||  isset($_POST["Registreer"]) || isset($_POST["generatePass"])){
  if(isset($_POST["mail"])){
    $_POST["mail"] = trim($_POST["mail"]);
   
    if(strlen($_POST["mail"])>100 || empty($_POST["mail"])) $errors['mail'][] = "Email is not filled or to long!";
   
    if(!filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)){
      if(!isset($errors['mail'])) $_SESSION["login"]["mail"]= $_POST["mail"];
      $errors['mail'][] = "Email must contain letters, numbers and @, thus not valid now!";
    }
   
    if(!isset($errors['mail'])) $_SESSION["login"]["mail"]= $_POST["mail"];
   
  }else{ $errors['hack_detection'][] = "Tryin to fuck with my post variabel?";}
 
 if(isset($_POST["pass"])){
  $_POST["pass"] = trim($_POST["pass"]);
  $_POST["pass"] = addslashes($_POST["pass"]);
  if(strlen($_POST["pass"])>100 || empty($_POST["pass"])) $errors['pass'] = "Password is to long or is emty!";
   
  if(!isset($errors['pass'])) $_SESSION["login"]["pass"]= $_POST["pass"];
  
 }else{ $errors['hack_detection'][] = "Tryin to fuck with my post variabel?";  }

 if(isset($_POST["login"]) && strlen($_POST["login"])>100) $errors['hack_detection'][] = "Tryin to hack login?";
 if(isset($_POST["Registreer"]) && strlen($_POST["Registreer"])>100) $errors['hack_detection'][] = "Tryin to hack registreer?";
 if(isset($_POST["generatePass"]) && strlen($_POST["generatePass"])>100) $errors['hack_detection'][] = "Tryin to hack genereer password?";
}else{
  $_SESSION["message"]['extra'] = "You entered previos page with no button pressed.";
  header("location: oplossingsecurity-login.php");
  die();
}

 
if(sizeof($errors)>0){

 $_SESSION["message"] = $errors;

 header("location: oplossingsecurity-login.php");
 die();
}

 
 
if(isset($_POST["login"])){
  
  header("location: login.php");
  die();
}



if(isset($_POST["Registreer"])){
   
   header("location: Registreer-db.php");
   die();
}
 

 
 
if(isset($_POST["generatePass"])){
    $_SESSION["login"]["pass"]=generatePassword(10);
    header("location: oplossingsecurity-login.php");
    die();
 }



function generatePassword($lengt){
   $hoofdLeters ="AZERTYUIOPQSDFGHJKLMWXCVBN";
   $kleinLeters ="azertyuiopqsdfghjklmwxcvbn";
   $pass        ="";
 
   for($i = 0; $i<=$lengt; $i++){
      $pass  = $pass . $hoofdLeters[rand(0,25)].$kleinLeters[rand(0,25)]. rand(0,9);
   }
   
 return substr($pass,0,$lengt);
}

?>