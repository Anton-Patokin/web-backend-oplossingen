<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<h1>This is the PHP file.</h1>
    <?php
        isset($_GET)?var_dump($_GET):  "emty";
        echo "<br>";
        echo basename(__FILE__);
    ?>

</body>
</html>