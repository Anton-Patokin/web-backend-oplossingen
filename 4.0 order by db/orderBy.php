<?php   
try{
   
   
   
   $db               = new PDO("mysql:host=localhost;dbname=bieren","anton","paraplu");
 
   $colomQuery       ="SHOW COLUMNS FROM bieren";
   $control_statement=$db->prepare($colomQuery);
   $control_statement->execute();
   $control_array     =get_from_db($control_statement);
 
 var_dump($control_array[1]);
 echo "<br>";
 
 
   $soort_by         = "biernr";
   $soort_by_order   = "ASC";
   if(isset($_GET["order_by"]) && $_GET["order_by"] != "" && isset($_GET["soort_by_order"]) && ($_GET["soort_by_order"] == "ASC" || $_GET["soort_by_order"] == "DESC")){
      $soort_by       = $_GET["order_by"];
      $soort_by_order = $_GET["soort_by_order"];
   }
    //echo $soort_by ."<br>";
 
   $get_db_query      = "SELECT * FROM `bieren` ORDER BY ".$soort_by." ".$soort_by_order;
   $statement         = $db->prepare($get_db_query);
 
 
   $statement->execute();
 
 
   //$colom_name[]      =get_name_tabels($statement);
   //$Content_from_db[] =get_from_db($statement);
   
 
   



   $message["succes"]= "alles volgens het plan";
}catch(PDOexception $e){
   $message["type"]="error";
   $message["text"]="Er gin iets mis: " . $e->getMessage();
}



function get_name_tabels($statement){
   for($i=0;$i<$statement->columnCount();$i++){
     $header[]=$statement->getColumnMeta($i)["name"];
   }
   return $header;
}

function get_from_db($statement){
   while ( $row = $statement->fetch(PDO::FETCH_ASSOC) )
     {
                  $fetchAssoc[]	=	$row;
     }
   return $fetchAssoc;
}


var_dump($message);
//var_dump($colom_name);
?>


<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
 <style>
  .even{
    background: #b5f9d6;
  }
  .onevne{
    background: #f9efb5;
  }
  .selected{
    background: green;
  }
 </style>
 
 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script>
  $( document ).ready(function(){
     console.log("ready");
  })
 </script>
<body>

 
 
 <table  border="1">
       <thead>
           <tr>
              <?php foreach(get_name_tabels($statement) as $key => $value):?>
                    <th class="<?= ($_GET["order_by"]==$value)? "selected" : "" ?>"><a href="orderBy.php?soort_by_order=<?= ($soort_by_order=="ASC")?  "DESC": "ASC" ?>&order_by=<?=$value ?>"><?php echo $value; ?></a><img src="<?php if($_GET["order_by"]==$value && $_GET["soort_by_order"]=="DESC"){echo "icon-desc.png"; }else{ echo "icon-asc.png";} ?>"></th>
               <?php endforeach;?>
           </tr>
       </thead>
       <?php foreach(get_from_db($statement) as $key => $value):?>
            <tr class="<?= ($key+1)%2 == 0? 'even' : 'onevne' ?>">
                 <?php foreach($value as $rijen => $inhoud):?>
                       <td>
                            <?php echo $inhoud;?>
                       </td>
                 <?php endforeach;?>
            </tr>
      <?php endforeach;?>
 </table>

</body>
</html>