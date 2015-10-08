<?php
$paswoord = "azerty";
$username = "Anton";
$answer ="";
if(isset($_POST["submit"]) ){
$answer = controlle($_POST["username"],$_POST["password"]);
}
/*else{
echo var_dump($_POST)."unset";
}*/



function controlle($username_set,$password_set){
 global $paswoord, $username;
  if(($username_set == $username) && ($password_set == $paswoord)){
    return  "welkom";
  }else{
    return  "invalid gegevens";
  }
}
?>


<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oplossing post</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
        
            
                                
                                <h1>Inloggen</h1>

                                <form action="oplossing-post.php" method="post"> 
                                    <ul>
                                        <li>
                                            <label for="username">gebruikersnaam</label>
                                            <input type="text" id="username" name="username" value="Anton">
                                        </li>
                                        <li>
                                            <label for="password">paswoord</label>
                                            <input type="password" id="password" name="password" value="azerty">
                                        </li>
                                    </ul>
                                    <input type="submit" name="submit">
                                </form>
         <h3><?php echo $answer?></h3>
                            
    </body>
</html>
