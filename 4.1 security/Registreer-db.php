<?php
session_start();


     $mail =$_SESSION["login"]["mail"];
     $password = $_SESSION["login"]["pass"];



try{
   $db                = new PDO("mysql:host=localhost;dbname=phpoefening029","anton","paraplu");
   $get_db_query      = "SELECT  `email` FROM `users` WHERE `email`= :email";
   $statement         = $db->prepare($get_db_query);
   $statement->bindValue( ':email', $mail );
   $statement->execute();
   
 
  if(!$statement->fetch(PDO::FETCH_ASSOC)["email"]==$mail){
        $password       =$_SESSION["login"]["pass"];
        $salt           = uniqid(mt_rand(), true);
        $hashedPassword	=	hash( 'sha512', $salt . $password );
        $nu             = date('Y-m-d H:i:s');

        $get_db_query      = "INSERT INTO `users`(`email`, `salt`, `password`, `lastlogin`) VALUES (:email,:salt,:password,:lastlogin)";
        $statement         = $db->prepare($get_db_query);

        $statement->bindValue( ':email', $mail );
        $statement->bindValue( ':salt', $salt );
        $statement->bindValue( ':password', $hashedPassword);
        $statement->bindValue( ':lastlogin', $nu );

        $statement->execute();

       $hashedEmail	=	hash( 'sha512', $salt . $mail );
       $cookieValue	=	$mail . '##' . $hashedEmail;
       $cookie	=	setcookie( 'login', $cookieValue, time() + 3600 );

       $_SESSION["message"]["databanken"][] = "Je bent geregistreerd.";
       header('location: oplossingsecurity-login.php');
       die();
   
    }else{
       $_SESSION["message"]["databanken"][] = "Deze mail is al in gebreuk.";
       header('location: oplossingsecurity-login.php');
       die();
    }
           
}catch ( PDOException $e ){
       $_SESSION["message"]["databanken"][]="Er ging iets mis met registratie: " . $e->getMessage();
       header('location: oplossingsecurity-login.php');
       die();
}








?>