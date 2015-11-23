<?php 
    function __autoload($class_name) {
       require_once($class_name . '.php');
    }





$Dog      = new Animal('flafie', 'male',100);
$Kat      = new Animal('Jasha', 'male',100);
$Zemermin = new Animal('Stefie', 'fimale',70);

$simba 	= 	new Lion('Simba', 'male', 100, 'Congo lion');
$zebra 	= 	new Zebra('pip', 'male', 100, 'Quagga');


?>


<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>
   <p><?php echo $Dog->getName()." is van geslacht ".$Dog->getGender()." en heeft momenteel ".$Dog->getHealth()." levenspunten (special move: ".$Dog->doSpecialMove().")";  ?></p>

 <p><?php echo $Kat->getName()." is van geslacht ".$Kat->getGender()." en heeft momenteel ".$Kat->getHealth()." levenspunten (special move: ".$Kat->doSpecialMove().")";  ?></p>
 
 <p><?php echo $Zemermin->getName()." is van geslacht ".$Zemermin->getGender()." en heeft momenteel ".$Zemermin->getHealth()." levenspunten (special move: ".$Zemermin->doSpecialMove().")";  ?></p>
 
 <br>
 <p>class lion</p>
 <p><?php echo " De speciale move van ".$simba->getName()."( soort:".$simba->getSpecies()." ): ".$simba->doSpecialMove();  ?></p>
 
 
 
  <br>
 <p>class zzebra</p>
 <p><?php echo " De speciale move van ".$zebra->getName()."( soort:".$zebra->getSpecies()." ): ".$zebra->doSpecialMove();  ?></p>
</body>
</html>