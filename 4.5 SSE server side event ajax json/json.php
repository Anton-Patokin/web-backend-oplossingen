<?php


$db                = new PDO("mysql:host=localhost;dbname=bieren","anton","paraplu");
$get_db_query      = "SELECT * FROM `bieren`";
$statement         = $db->prepare($get_db_query);
$statement->execute();

$fetchAssoc = array();
$header     = array();

//while ( $row = $statement->fetch() )
 while ( $row = $statement->fetch(PDO::FETCH_ASSOC) )
  {
               $fetchAssoc[]	=	$row;
  }
  
for($i=0;$i<$statement->columnCount();$i++){
     $header[]=$statement->getColumnMeta($i)["name"];
   }
array_unshift($fetchAssoc,$header);

echo json_encode($fetchAssoc);
?>