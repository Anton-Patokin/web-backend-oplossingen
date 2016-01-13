<?php
if(isset($_GET["artikel"])){
   
    header("Location: zoeken/artikel/".$_GET["artikel"]);
}
if(isset($_GET["date"])){
    header("Location: zoeken/date/".$_GET["date"]);
}
?>