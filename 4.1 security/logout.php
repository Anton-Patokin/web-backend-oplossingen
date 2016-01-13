<?php
session_start();
  session_destroy();
 
if(isset($_COOKIE["login"])){
setcookie( 'login', '', -1 );
}
  //echo var_dump($_SESSION);
  header('location: oplossingsecurity-login.php');
?>