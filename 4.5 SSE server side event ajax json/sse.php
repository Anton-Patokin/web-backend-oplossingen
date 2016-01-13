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




if(isset($_SESSION["db"])){
  if($_SESSION["db"]!=$fetchAssoc){
    
   
    echo "data: ".$fetchAssoc."\n\n";
    flush();
  }
}


/*
echo "<br>";

for($i=1;$i<sizeof($_SESSION["db"]);$i++){
 
    echo $_SESSION["db"][$i]["biernr"];
   
  
 echo "<br>";
}
//*/

//print_r($fetchAssoc);


$_SESSION["db"]=$fetchAssoc;

?>