<?php 
   
session_start();
  if(isset($_SESSION)){
   //var_dump($_SESSION);
  }
$isValid = false;


try{
      if(isset($_POST["submit"])){
         if(strlen( $_POST[ 'code' ] ) == 8){
              $isValid = true;
              //echo "alles werkt";
            }
           else{
             throw new Exception("VALIDATION-CODE-LENGTH");
           }
       }else{
          throw new Exception("SUBMIT-ERROR");
      }
}
catch( Exception $e){
      $messageCode = $e->getMessage();;
      $createMessage = false;


      switch ($messageCode) {
         case "SUBMIT-ERROR":
             $message = errorConstructor("Er werd met het formulier geknoeid","erro");
             break;
         case "VALIDATION-CODE-LENGTH":
             $message = errorConstructor("De kortingscode heeft niet de juiste lengte","erro");
        $createMessage= true;
             break;

     }

      if($createMessage){
          createMessage($message);
      }
      messageFile($message);

      $createMessage=false;
      
}
 
 function errorConstructor($message,$type){
  
  $arrayMessage = array();
  $arrayMessage["type"]= $type;
  $arrayMessage["text"]= $message;
  return $arrayMessage;
 
 }

function createMessage($message){
  $_SESSION["text"]  =  $message;
}

function messageFile($message){
    $datum= "[" . date('H:i:s Y/m/d') . "]";
    $boodschap = $datum . " - " . $_SERVER['REMOTE_ADDR']. " - " . "type:[".$message["type"] . "] " .$message["text"] . "\r\n";
    file_put_contents( 'error.log', $boodschap, FILE_APPEND );
}

function showMessage(){

   if(isset($_SESSION["text"])){
       $newMesseg = $_SESSION["text"];
       unset( $_SESSION["text"] );
       return $newMesseg;
   }
}

$message = showMessage();


?>

<!DOCTYPE html>
<html>
<head>
<title>try and cath</title>
</head>
<body>

<h1>This is a HeadingGeef uw kortingscode op</h1>
 
 
 <?php if( $message): ?>

			<div> <?= $message[ 'text' ]?></div>
			<?php //echo "binnen if"?>
		<?php endif ?>
 
 
 <?php if(!$isValid):?>
<ul>
 <li>
   <form method="post" action="try.php">
     Kortingscode <input type="input" name="code">
     <input type="submit" name="submit">
   </form>
 </li>
 </ul>
 <?php else: ?>
   <p>Korting toegekend</p>
<?php endif; ?>
</body>
</html>