<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<h1>Artikel Toevoegen</h1>
<a href="artikel-overzicht.php"><p>Terug naar overzicht</p></a>
<form action="artikel-toevoegen.php" method="post">
    <ul>
        <li>
           Titel <input type="text" name="titel">
        </li>
        <li>
          Artikel <input type="text" name="artikel">
        </li>
        <li>
           Kernwoorden <input type="text" name="kernwoorden">
        </li>
        <li>
           Datum <input type="text" name="datum">
        </li>
        
    </ul>
    <input type="submit" name="submit">
</form>
</body>
</html>