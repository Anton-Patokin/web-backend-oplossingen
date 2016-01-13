<?php
session_start();
function __autoload($class) {
        include 'class/' . $class . '.php';
    }

try{
           $db = new PDO("mysql:host=localhost;dbname=blog","anton","paraplu");
        
            $artikel = new Artikel( $db );
    

            
                if(isset($_GET["artikel"])){
                    $alleArtikels = $artikel->get(false,$_GET["artikel"],false);
                } 
                if(isset($_GET["date"])){
                    $alleArtikels = $artikel->get(false,false,$_GET["date"]);
                }  
            

            

 }catch ( PDOException $e )
       {
            $bodschap	=	'Er ging iets mis: ' . $e->getMessage();
        }

//echo $bodschap."<br>";


//var_dump($alleArtikels);

?>

<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<form action="artikel-zoeken-redirect.php" method="get">
         <label for="query-content">Zoeken in artikels:</label>
         <input type="text" name="artikel" >
         <input type="submit" value="submit" >
     </form>
                        
     <form action="artikel-zoeken-redirect.php" method="get">
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
         <input type="submit" value="submit">
     </form>
    <?php if($alleArtikels):?>
<?php foreach($alleArtikels as $index => $key):?>
    <ul>
        <?php foreach($key as $kolom => $value):?>
           <?php if($kolom != "Index"):?>
            <li class=""><?php echo $value;?></li>
        <?php endif;?>
        <?php endforeach;?>
    </ul>
    <?php endforeach;?>
    <?php endif;?>
</body>
</html>