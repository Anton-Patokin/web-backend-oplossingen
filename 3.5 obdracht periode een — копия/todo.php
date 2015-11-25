<?php

session_start();


$lijstArray = array();

$error_massag           = "";
$messeg_geen_todo       = "Nu kunnen we an het werk";
$messeg_nog_tedoen_todo = "Er is nog werk aan het winkel";
$todo                   = "";





if(isset($_POST["submit"]) ){
      if(!($_POST["todo"]=="")){
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
                 //$todo            = test_input($_POST["todo"]);
           
                 /*
                 if(!(isset($_SESSION["todo"]))){
                    $_SESSION["todo"]      = array();
                 }
                 */
           
                 $_SESSION["todo"][]     = test_input($_POST["todo"]);
                 //$todolist =  $_SESSION["todo"];
                 refresh();
          }
      }else{
         $error_massag  = "Ahh, damn. Lege todos zijn niet toegestaan... ";
      }
 
 

}




if(isset($_GET["toggle"]) && ($_GET["toggle"]=="true")&&!($_GET["todo_don"]=="")){
  //echo "toggele  on";
    if(($_SESSION["todo"])){
      $Todo_Index	=	$_GET['todo_don'];
      $_SESSION["don_and_don"][]=($_SESSION["todo"][$Todo_Index]);
      unset($_SESSION["todo"][$Todo_Index]);
    }
 refresh();
}

if(isset($_GET["toggle_don_and_don"]) && ($_GET["toggle_don_and_don"]=="true")&&!($_GET["todo_not_don"]=="")){
  //echo "toggele  on";
    if(($_SESSION["don_and_don"])){
      $Todo_Index	=	$_GET['todo_not_don'];
      $_SESSION["todo"][]=($_SESSION["don_and_don"][$Todo_Index]);
      unset($_SESSION["don_and_don"][$Todo_Index]);
    }
 refresh();
}


if(isset($_GET["delete"]) && ($_GET["delete"]=="true")){
    $delete_key_index= $_GET["delete_key"];
    $delete_value_index= $_GET["delete_value"];
      if(isset($_SESSION["don_and_don"][$delete_key_index]) && $_SESSION["don_and_don"][$delete_key_index]==$delete_value_index){
        unset($_SESSION["don_and_don"][$delete_key_index]);
      }
 
      if(isset($_SESSION["todo"][$delete_key_index]) && $_SESSION["todo"][$delete_key_index]==$delete_value_index){
        unset($_SESSION["todo"][$delete_key_index]);
      }
 refresh();
}


if(isset($_GET["sessionDestroy"]) && ($_GET["sessionDestroy"]=="destroy")){
   session_destroy();
   refresh();
}


function refresh(){
  header("Location: todo.php");
}




function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


//print_r( $todolist);
include "header.php";
include "body.php";
include "footer.php";


/*
  function __autoload($className)
	{
		include_once 'class/' . $className . '-class.php'; 
	}

	
	$page	=	new build('header.php', "body.php", 'footer.php');
*/
?>