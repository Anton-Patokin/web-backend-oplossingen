<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="">
    <title><?php if(isset($_GET))
{echo "navigatie pagina";}
else{echo "home page";}?>
    </title>

    <meta name="description" content="">
    <meta name="author" content="">


    <!-- <link href="css/screen-d3cd6613e3.css" rel="stylesheet">-->
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>
    <div class="container" >
         <div class="container" id="header">
            
            <div class="row clearfix headerImg"  >
                <div class="span12 ">
                    <h2 class="bvba-name">
                        Eten, Drinken en <span class="accent" >Genieten</span>
                    </h2>
                </div>
            </div>
             </div>
            
             
             
            <div class="navbar">
                <div class="navbar-inner" id="centered">
                    <ul class="nav">
                        <li>
                            <a class="active" href="index.php?home=true">Home</a>
                        </li>
<li class="divider-vertical">
                    </li>
                        <li>
                            <a href="index.php?menu=true">Menu</a>
                        </li>
<li class="divider-vertical">
                    </li>
                        <li>
                            <a href="index.php?feesten=true">Feesten</a>
                        </li>
<li class="divider-vertical">
                    </li>
                        <li>
                            <a href="index.php?contact=true">Contact</a>
                        </li>

                    </ul>
                </div>
            </div>