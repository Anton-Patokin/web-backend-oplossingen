<?php
function __autoload($class_name) {
    include $class_name . '.php';
}

    $new	=	150;
	$unit	=	100;

	$Percent = new Percent( $new, $unit );

?>

<!doctype html>

<html>

<head>

    <title>Oplossing classes: begin</title>
<style>
  table{
   border: 1px solid black;
  }
 </style>
</head>

 <body>
   <table >
    <caption>Percent</caption>
     <tr>
       
       <td>Absoluut</td> 
       <td><?php echo $Percent->absolute; ?></td> 
     </tr>
     <tr>
       <td>Relatief</td>
       <td><?php echo $Percent->relative; ?></td> 
       
     </tr>
    <tr>
       <td>Geheel getal</td>
       <td><?php echo $Percent->hundred; ?></td> 
       
     </tr>
    <tr>
       <td>Nominaal</td>
       <td><?php echo $Percent->nominal; ?></td> 
       
     </tr>
</table>

 </body>
</html>