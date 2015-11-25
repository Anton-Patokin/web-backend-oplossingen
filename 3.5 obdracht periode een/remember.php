<?php
session_start();
 
if($_GET["remember"]){
  setcookie("remember",1);
  $json = json_encode($_SESSION);
  setcookie("json", $json, time()+3600*24*31);

}else{
 setcookie("json", "", -1);
}
//var_dump($json);
?>