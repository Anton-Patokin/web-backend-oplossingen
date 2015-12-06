<?php 

$bodschap[1]="";
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
             $bier_Fieldnames	=	array();

              for ( $fieldNumber = 0; $fieldNumber < $statement->columnCount(); ++$fieldNumber )
              {
                  $bier_Fieldnames[]	=	$statement->getColumnMeta( $fieldNumber )['name'];
              }

             while ( $row = $statement->fetch(PDO::FETCH_ASSOC) )
              {
                  $fetchAssoc[]	=	$row;
              }
           //print_r($fetchAssoc);

            $messageContainer= "er is alles met aanroepen";
     
     
     
     
     
     
             if ( isset( $_POST['wijzigen'] ))
              { 
                  $queryString="";
                  //$updateQuery	=	"UPDATE `bieren` SET `naam`=:naam,`brouwernr`=:brouwernr,`soortnr`=:soortnr,`alcohol`=:alcohol WHERE biernr = :biernr" ;

                   foreach($bier_Fieldnames as $key => $value){
                      if($value == "biernr" ){}else{$queryString = $queryString."`".$value."`"."=:".$value. ","; }
                  }
              
                    
                     echo $updateQuery	=	"UPDATE `bieren` SET ".substr($queryString, 0, -1)." WHERE biernr = :biernr" ;
                     echo "<br>";
                     echo "UPDATE `bieren` SET ".substr($queryString, 0, -1)." WHERE biernr = :biernr" ;
                     echo "<br>";
              
              
                  $updateStatement = $db->prepare( $updateQuery );

              
                
                  foreach($bier_Fieldnames as $key => $value){
                      
                     $updateStatement->bindValue( ':' . $value, $_POST[$value] );
                     
                  }
                  
                   /*
                  $updateStatement->bindValue( ':naam', $_POST['naam'] );
                  $updateStatement->bindValue( ':brouwernr', $_POST['brouwernr'] );
                  $updateStatement->bindValue( ':soortnr', $_POST['soortnr'] );
                  $updateStatement->bindValue( ':alcohol', $_POST['alcohol'] );
                  $updateStatement->bindValue( ':biernr', $_POST['update'] );
                  */
                  $isupdated 	=	$updateStatement->execute();

                  if ( $isupdated )
                  {

                      $message	=	'Aanpassing succesvol doorgevoerd';
                      $bodschap[1]='Aanpassing succesvol doorgevoerd';
                   echo $message. "<br>";
                  }
                  else
                  {

                      $message	=	'Deze record kon niet veranderd worden. Reden: ' . $updateStatement->errorInfo()[2];
                      $bodschap[1]="Aanpassing is niet gelukt. Probeer opnieuw of neem contact op met de systeembeheerder wanneer deze fout blijft aanhouden.";
                   echo $message. "<br>";
                  }
               header("Location: deleteFromDB.php");
              }
     
     
                
     
     
     
     
    }catch(PDOException $é){
      $messageContainer	=	'Er ging iets mis: ' . $e->getMessage();
    }




$accept= true;


$bool =false;



echo $bodschap[1];

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
       .size{
        width: 25px;
        height: 15px;
       }
 </style>
<body>
 
 <?php if(isset($_POST["update_id"])):?>
          <?php if($_POST["update_id"] == "submit"):?>
              <h1>Brouwerij <?php echo $_POST['update_naam'];?> (# <?php echo $_POST['update_biernr'] ?> )wijzigen</h1>

               <form action="" method="post">
                     <?php foreach($bier_Fieldnames as $key => $value):?>
                            <?php if( ($value == "biernr") ):?>

                                <input type="hidden" name="biernr" value="<?php echo $_POST['update_biernr'] ?>">
                            <?php else:?>
                                <li><?php echo $value." : "; ?><input type="text"  name="<?=$value?>"></li>
                            <?php endif;?>
                     <?php endforeach;?>

                     <input type="submit" name="wijzigen"> 
                </form>
        <?php else:;?>
            <h1>Deze brouwerij werd niet gevonden</h1>
         <?php endif;?>
 <?php endif;?>
 
 <?php echo (!$bodschap[1]=="")? $bodschap[1]: "no error"; ?>
 

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
                    <?php foreach($bier_Fieldnames as $key => $value):?>
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
             
             
             
                   <td>
                       <form method="post" action="" >
                         <?php //echo $value['naam'];?>
                         <input type="hidden" name="update_naam" value="<?= $value['naam']; ?>">
                         <input type="hidden" name="update_biernr" value="<?= $value['biernr']; ?>">
                         <button type="submit" name="update_id" value="submit">
                             <img src="features-icon2.png" class="size">
                         </button>
                        </form>
                   </td>
             </tr>
         <?php endforeach;?>

     </table>

</body>
</html>