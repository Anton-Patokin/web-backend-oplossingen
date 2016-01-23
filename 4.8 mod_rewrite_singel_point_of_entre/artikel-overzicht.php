<?php 
session_start();
isset($_SESSION["message"])?$bodschap = $_SESSION["message"]:$bodschap="";
var_dump($_GET);
unset($_SESSION["message"]);

function relocate( $url )
    {
        header('location: ' . $url );
    }

function __autoload($class) {
        include 'class/' . $class . '.php';
    }
 try{
           $db = new PDO("mysql:host=localhost;dbname=blog","anton","paraplu");
        
            $artikel = new Artikel( $db );

            $alleArtikels = $artikel->get();
            $bodschap = "artiekels gevonden";

 }catch ( PDOException $e )
       {
            $bodschap	=	'Er ging iets mis: ' . $e->getMessage();
        }

?>
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>
<?php if($bodschap){echo $bodschap;}?>
     <form action="http://oplossingen.web-backend.local/4.8%20mod_rewrite_singel_point_of_entre/artikel-zoeken-redirect.php" method="get">
         <label for="query-content">Zoeken in artikels:</label>
         <input type="text" name="artikel" >
         <input type="submit" value="submit" name="submit">
     </form>
                        
     <form action="http://oplossingen.web-backend.local/4.8%20mod_rewrite_singel_point_of_entre/artikel-zoeken-redirect.php" method="get">
         <label for="query-date">Zoeken op datum:</label>
         <select name="date" >
                                
             <option value="2010">2010</option>
             <option value="2011">2011</option>
             <option value="2012">2012</option>
             <option value="2013">2013</option>
             <option value="2014">2014</option>
             <option value="2015">2015</option>
             <option value="2016">2016</option>
             <option value="2017">2017</option>
             <option value="2018">2018</option>
                                
         </select>
         <input type="submit" value="submit" name="submit">
     </form>
    <h1>Artikels overzicht</h1>                         

    <a href="artikel-toevoegen-form.php">Artikel toevoegen</a>
    
    <?php foreach($alleArtikels as $index => $key):?>
    <ul>
        <?php foreach($key as $kolom => $value):?>
           <?php if($kolom != "Index"):?>
            <li class=""><?php echo $value;?></li>
        <?php endif;?>
        <?php endforeach;?>
    </ul>
    <?php endforeach;?>

</body>
</html>