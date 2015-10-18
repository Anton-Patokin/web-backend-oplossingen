<?php
$setlocale_result = setlocale(LC_ALL, 'nl_NL@euro', 'nl_NL', 'nld_nld');
$timestanp    =  mktime(22, 35, 25, 1, 21, 1904);
//$timestanp    =  time();
$datum_format =  date("d F Y, G:i:s A", $timestanp);



$NL_time= strftime(fixWinDate("%A %e %B %Y"), $timestanp);

echo "'".$timestanp."'";

function fixWinDate($format){
	if (strtoupper(substr(PHP_OS, 0, 3)) == 'WIN') {
		$format = preg_replace('#(?<!%)((?:%%)*)%e#', '\1%#d', $format);
	}
	return $format;
}
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>oplossing date</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    </head>
    <body >
     
     <br>Locale set to: <?php echo $setlocale_result; ?><br>
     <h1><?php echo "deel1";?></h1>
     <h3><?php echo "timestamp van 22u 35m 25sec 21 januari 1904 is :".$timestanp; ?></h3>
     
     <h3><?php echo $datum_format;?></h3>
     
     
     
     <h1><?php echo "deel2";?></h1>
     <h3><?php  echo $NL_time;?></h3>
     
        
    </body>
</html>
