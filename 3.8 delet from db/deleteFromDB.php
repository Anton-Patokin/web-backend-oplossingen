<?php 
   try{
           $db = new PDO("mysql:host=localhost;dbname=bieren","anton","paraplu");
           $messageContainer= "er is alles inoorde";
   }catch ( PDOException $e )
       {
           $messageContainer	=	'Er ging iets mis: ' . $e->getMessage();
       }

   echo $messageContainer . "<br>";


    try{
     
     
     if ( isset( $_POST['delete'] ) && isset($_POST["answer"]) )
		{
      
           
			$deleteQuery	=	'DELETE FROM bieren
									WHERE biernr = :biernr';

			$deleteStatement = $db->prepare( $deleteQuery );

			$deleteStatement->bindValue( ':biernr', $_POST['delete'] );

			$isDeleted 	=	$deleteStatement->execute();

			if ( $isDeleted )
			{
				
				$message	=	'Deze record is succesvol verwijderd.';
             echo $message. "<br>";
			}
			else
			{
				
				$message	=	'Deze record kon niet verwijderd worden. Reden: ' . $deleteStatement->errorInfo()[2];
             echo $message. "<br>";
			}
		}
     
     
     
     
     
     
       $queryString = "SELECT * FROM bieren";
       $statement   = $db->prepare($queryString);
       $statement->execute();
       $brouwersFieldnames	=	array();

		for ( $fieldNumber = 0; $fieldNumber < $statement->columnCount(); ++$fieldNumber )
		{
			$brouwersFieldnames[]	=	$statement->getColumnMeta( $fieldNumber )['name'];
		}
     
       while ( $row = $statement->fetch(PDO::FETCH_ASSOC) )
		{
			$fetchAssoc[]	=	$row;
		}
     //print_r($fetchAssoc);
     
      $messageContainer= "er is alles met aanroepen";
    }catch(PDOException $é){
      $messageContainer	=	'Er ging iets mis: ' . $e->getMessage();
    }




$accept= true;


$bool =false;
?>

<!DOCTYPE html>
<html>
<head>
<title>oplossing db delet</title>
</head>
 <style>
        .even
			{
				background-color:lightgrey;
			}
       #hilight_red{
                background-color:red;
       }
 </style>
<body>

 <?php if(isset($_POST['delete_id'])):?>
     <form action="" method="post">
      <input type="submit" name="answer" value="Ja">
      <input type="hidden" name="delete" value="<?php echo $_POST['delete_id'] ?>">   
     </form>
    <form action="" method="post">
     <input type="submit" value="Nee">
    </form>
 <?php endif;?>
 
<h1><?php echo ($statement->getColumnMeta(1)['table']); ?></h1>
      <table border="1">
            <thead>      
                   <tr>
                    <?php foreach($brouwersFieldnames as $key => $value):?>
                      <th><?php echo $value;?></th>
                    <?php endforeach;?>
                      <th></th>
                   </tr>
            </thead>
         <?php foreach($fetchAssoc as $key => $value):?>
            <tr<?php if(isset($_POST['delete_id']) && $_POST['delete_id']==$value["biernr"]) echo ' id="hilight_red"'; ?>>
               <?php foreach($value as $rij => $inhoud):?>
                     <td class="<?= ( ($key+1)%2 == 0 ) ? 'even' : ''  ?>" >
                        <?php echo $inhoud; ?>
                     </td>
                <?php endforeach; ?>
                   <td>
                       <form method="post" action="">
                         <button type="submit" name="delete_id" value="<?= $value['biernr']; ?>">
                             <img src="icon-delete.png">
                         </button>
                        </form>
                   </td>
             </tr>
         <?php endforeach;?>

     </table>

</body>
</html>