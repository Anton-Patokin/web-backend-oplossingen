<?php echo "welkom op ".$_SERVER['PHP_SELF'];
echo "<br>";
var_dump($_POST);
echo "<br>";
session_start();

$_SESSION["message"] = array();

function relocate( $url )
    {
        header('location: ' . $url );
    }
function __autoload($class) {
        include 'class/' . $class . '.php';
    }
 try{
           $db = new PDO("mysql:host=localhost;dbname=blog","anton","paraplu");
              if(isset($_POST["submit"])){
                 $titel          =   $_POST['titel'];
                 $artikelTekst   =   $_POST['artikel'];
                 $kernwoorden    =   $_POST['kernwoorden'];
                 $datum          =   $_POST['datum']; 

                 echo "werkt tot hier";
                 $artikel = new Artikel( $db );

                 $artikelToegevoegd = $artikel->add( $titel, $artikelTekst,      $kernwoorden, $datum);

                 if ( $artikelToegevoegd )
                {
                    $_SESSION["message"]='Het artikel met titel "'. $titel .'" werd toegevoegd.';
                 }
                  else{
                      
                       header("Location: artikel-toevoegen-form.php");
                  }
            }
     
     header("Location: artikel-overzicht.php");
 }catch ( PDOException $e )
       {
            $_SESSION["message"]	=	'Er ging iets mis: ' . $e->getMessage();
       header("Location: artikel-toevoegen-form.php");
        }


?>
