<?php
  //print_r(PDO::getAvailableDrivers());
  $messageContainer	=	'';
  echo "anton";
	try
	{

		$db = new PDO('mysql:host=localhost;dbname=bieren', 'anton', 'paraplu'); // Connectie maken
		$messageContainer	=	'Connectie dmv PDO geslaagd.';
	}
	catch ( PDOException $e )
	{
		$messageContainer	=	'Er ging iets mis: ' . $e->getMessage();
	}


try
	{
       echo '<table border="1">
       <tr>
         <td>ID</td>
         <td>Naam</td>
         <td>N1</td>
         <td>N2</td>
         <td>D3</td>
        </tr>';
		$result=$db->query("SELECT * FROM bieren");
        while($row = $result->fetch(PDO::FETCH_ASSOC)){
          echo '<tr><td>'.implode($row,"</td><td>").'</td></tr>';
        }
       echo '</table>';
		
	}
	catch ( PDOException $e )
	{
		$messageContainer	=	'Er ging iets mis: ' . $e->getMessage();
	}


echo $messageContainer;
?>
