<?php
 session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Page Title</title>
</head>

<body>

 
    <?php if(isset($_SESSION["massage"])){
     echo "<ol>";
      foreach($_SESSION["massage"] as $value){
        echo "<li>".$value."</li>";
      }
     echo "</ol>";
     unset($_SESSION["massage"]);
     }?>
    <h1>Contacteer ons</h1>
 

    <form action="contact.php" method="post">
        <ul>
            <li>
                <label for="email">E-mailadres</label>
                <input type="text" id="email" name="email" value="<?php if(isset($_SESSION["email"])) echo $_SESSION["email"];?>">
            </li>
            <li>
                <label for="message">Boodschap</label>
                <textarea name="message" id="message" cols="30" rows="10"><?php if(isset($_SESSION["message"])) echo $_SESSION["message"];?></textarea>
            </li>
            <li>
                <input type="checkbox" name="copy" id="copy">
                <label for="copy">Stuur een kopie naar mezelf</label>
            </li>
        </ul>
        <input type="submit" name="submit">
    </form>
</body>

</html>