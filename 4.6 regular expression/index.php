<?php
if(isset($_POST["submit"])){
    $search = $_POST["reg"];
    $string = $_POST["string"];
    $replace = "<strong>#</strong>";
    $resultat 	=	preg_replace( '/' . $search . '/', $replace, $string );
    
}
?>
<!DOCTYPE html>
<html>
    <style>
        strong{
            color: red;
        }
    </style>
<head>
<title>Page Title</title>
</head>
<body>

<form action="" method="post">
	vul hier in wat je zoekt :<input type="text" name="reg">
    vul hier je text :<input type="text" name="string">
    <input type="submit" name="submit">
</form>
    <?php if($resultat){echo $resultat;}?>
</body>
</html>