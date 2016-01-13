<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
session_start();


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

json_encode($fetchAssoc);


if(isset($_SESSION["db"])){
  if($_SESSION["db"]!=json_encode($fetchAssoc)){
    echo "data: chengd\n\n";
    flush();
  }
}

$_SESSION["db"]=json_encode($fetchAssoc);

?>