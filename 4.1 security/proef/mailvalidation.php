<?php
session_start();
$_SESSION["login"]["mail"]="an@mail";
if (!filter_var($_SESSION["login"]["mail"], FILTER_VALIDATE_EMAIL)) {
      echo "okey"; 
  header('location: ../oplossingsecurity-login.php');
      
}else{
     echo "false";
 
 
}

?>