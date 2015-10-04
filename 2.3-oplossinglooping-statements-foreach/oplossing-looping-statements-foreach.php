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
echo "deel 1 </br>";
     $file = file_get_contents("text-file.txt");
     //$textChars = explode("", $file);
      $textChars = str_split( $file );
      rsort( $textChars );
     $revers_of_text_charts = array_reverse( $textChars );

$letters_counter = array();
$counter = 0;

foreach($textChars as $value){
    if(isset($letters_counter[$value])){
    $counter++;
     $letters_counter[$value]= $counter;
    }
    else{
     $counter = 1;
     $letters_counter[$value] = $counter;
    }
}
//echo $array_of_words;
     ?>
     
     
     
      <pre><?php var_dump($textChars);?></pre>
<pre><?php var_dump($revers_of_text_charts);?></pre>
     
     <pre><?php var_dump($letters_counter);?></pre>

     
     
     
   
    </body>
</html>
