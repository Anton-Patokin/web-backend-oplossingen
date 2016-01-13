<?php 
echo file_get_contents(".htaccess");
echo "<br>";
?>
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<h1>origineel</h1>
      <?php
    
        isset($_GET)?var_dump($_GET):  "emty";
        echo "<br>";
        echo basename(__FILE__);
        
    ?>

</body>
</html>