<?php
  session_start();


  //send_mail_eigenaar();
  
  if(isset($_POST["submit"])){
      if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))     $_SESSION["massage"][]="invalid mail";
      if(strlen($_POST["message"]) >= 1000 || empty($_POST["message"]))$_SESSION["massage"][]="somting vrong with text fild";
      
      $_SESSION["email"]= $_POST["email"];
      $_SESSION["message"]= $_POST["message"];
  }


/*
if(isset($_SESSION["massage"])){
   header("location: contact-form.php");
   die();
}
*/
try{
   $nu             = date('Y-m-d H:i:s');
   $db                = new PDO("mysql:host=localhost;dbname=phpoefening037","anton","paraplu");
   $get_db_query      = "INSERT INTO `contact_messages`(`email`, `message`, `time_sent`) VALUES (:email,:message,:time_sent)";
   $statement         = $db->prepare($get_db_query);
   $statement->bindValue( ':email', $_POST["email"]);
   $statement->bindValue( ':message', $_POST["message"]);
   $statement->bindValue( ':time_sent', $nu );
   $statement->execute();
   
 
 
       $_SESSION["massage"][] = "bericht sccesvol gestuurd";
 
       send_mail_eigenaar();
       
    if(isset($_POST["copy"])){
       send_mail_sender();
    }
       //header("location: contact-form.php");
       //die();
    
           
}catch ( PDOException $e ){
       $_SESSION["massage"][]="Er ging iets mis met registratie: " . $e->getMessage();
       //header("location: contact-form.php");
       //die();
}

print_r($_SESSION["massage"]);
unset($_SESSION["massage"]);


function send_mail_eigenaar(){
                $to      		= 	"patokin.anton@gmail.com";
				$subject 		= 	'Vraag van ' . $_POST["email"];

				$body 			= 	'<p>Beste, </p>';
				$body 			.=	'<p>iemand heeft je via de website proberen te contacteren. Dit is zijn bericht:<p>';
				$body 			.=	'<p style="font-style:italic;">'.$_POST["message"].'</p>';
											
				$headers 		= 	'From: patokin.anton@hoekje.eu'."\r\n";
				$headers 		.=	'Reply-To: patokin.anton@hoekje.eu'."\r\n";
				$headers		.= 	'MIME-Version: 1.0'. "\r\n";
				$headers		.= 	'Content-Type: text/html; charset=ISO-8859-1'. "\r\n";

				mail($to, $subject, $body, $headers);
}

?>