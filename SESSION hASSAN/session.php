<?php $name= array();
  session_start();


if(isset($_POST["name"]==""){

setcookie("todo",$_POST["name"],time()+3600);
}


 $_SESSION["todo"][0]="anton";
 $_SESSION["todo"][1]="anton";
 $_SESSION["todo"][2]="anton";
if(isset($_POST["name"])){
 $_SESSION["todo"][]=$_POST["name"];
}
var_dump($_SESSION);
?>
 

<!DOCTYPE html>
<html>
<head>
 
<title>Page Title</title>
</head>
<body>
<form action="" method="post">
 <input type="text" name="name">
 <input type="submit" name="submit">
 </form>


</body>
</html>