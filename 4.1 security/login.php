<?php
   
session_start();


     $mail     =$_SESSION["login"]["mail"];
     $password = $_SESSION["login"]["pass"];



try{
       $db                = new PDO("mysql:host=localhost;dbname=phpoefening029","anton","paraplu");
       $get_db_query      = "SELECT * FROM `users` WHERE email = :email";
       $statement         = $db->prepare($get_db_query);
       $statement->bindValue( ':email', $mail );
       $statement->execute();


     while($row = $statement->fetch(PDO::FETCH_ASSOC)){
        $element[] = $row;
     }

    if(isset($element)){
           $salt                  = $element[0]["salt"];;
           $hashed_login_password = hash( 'sha512', $salt . $password );
         if($element[0]["password"]==$hashed_login_password){
            $cookieValue	=	$mail . '##' . $hashedEmail;
            $cookie	=	setcookie( 'login', $cookieValue, time() + 3600 );
            $_SESSION["message"]['login'][]= "succes";
         }else{
           $_SESSION["message"]['login'][]=  "password is verkeerd";
         }
    }else{
          $_SESSION["message"]['login'][]=  "deze mail bestaat niet";
    }
    header('location: oplossingsecurity-login.php');
    die();
}catch(PDOException $e ){
   $_SESSION["message"]["login"][]="Er ging iets mis met login: " . $e->getMessage();
   header('location: oplossingsecurity-login.php');
   die();
}
?>