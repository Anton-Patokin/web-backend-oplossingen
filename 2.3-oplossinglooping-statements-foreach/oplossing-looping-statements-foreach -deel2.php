<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>oplossing foreach</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">
        
        <?php
echo "deel 2 </br>";
$file = file_get_contents("text-file.txt");
$file = strtoupper($file);
$textChars = str_split( $file );
sort( $textChars );


     
     //echo join(" ",$textChars);

$gegevens =array();
$counter =0;



$letters = range('A', 'Z');
$letters_lng = count($letters);
$file_lenght = count($textChars);

for($i = 0; $i< $letters_lng; $i++){
  for($j = 0; $j < $file_lenght; $j++){
    if($letters[$i]==$textChars[$j]){
    $counter++;
     //echo $counter." ".$textChars[$j]."<br>";
    }
  }
 $gegevens[$letters[$i]]=$counter;
 $counter = 0;
}

$not_unic_values = array_count_values($textChars);
//$unigue_values = array_unique($textChars);
//echo $unigue_values[645];

//print_r($unigue_values);
//print_r($textChars);
     ?>
     <table>
      <tr>
        <td>
          <ul>
           <?php echo "oplossing 1";?>
            <?php  foreach ($gegevens as $key => $value): ?>
                   <li><?php  echo $key."&times;".$value ?></li> 
            <?php endforeach; ?>
           </ul>
         </td>
       <td>
          <ul>
           <?php echo "oplossing 2";?>
            <?php  foreach ($not_unic_values as $key => $value): ?>
                   <li><?php  echo $key."&times;".$value ?></li> 
            <?php endforeach; ?>
           </ul>
         </td>
      </tr>
</table>
     
     
     
   
    </body>
</html>
