<?php


$artikels = array('artikel1' => array('Titel van artikel 1',
'Tekst van artikel 1',"tags"=>array("tag1","tag2")),'artikel2' => array('Titel van artikel 2',
'Tekst van artikel 2',"tags"=>array("tag1")),'artikel3' => array('Titel van artikel 3',
'Tekst van artikel 3',"tags"=>array("tag1","tag2","tag3")));

include "heade-partial.php";


include "body-partial.html";




$navigatie= false;
if(isset($_GET["home"])|| isset($_GET["menu"]) || isset($_GET["feesten"]) || isset($_GET["contact"])){

$navigatie= true;
}
?>


<?php if($navigatie):?>
  <?php  
    if(isset($_GET["home"]) && $_GET["home"]=="true"){
    include "body-partial.html";
    }

    if(isset($_GET["menu"]) && $_GET["menu"]=="true"){
    include "body-partial-menu.html";
    }

    if(isset($_GET["feesten"]) && $_GET["feesten"]=="true"){
    include "body-partial-feesten.html";
    }
    if(isset($_GET["contact"]) && $_GET["contact"]=="true"){
    include "body-partial-contact.html";
    }

   ?>

<?php else:?>

<div class="row">         
   <div class="span12 ExtraMarge">
     <h2>resente artikelen</h2>
   </div>
</div>

<div class="row">         
 
 <?php foreach($artikels as $key => $value):?>
    <div class="span4">
      
      <?php foreach($value as $tag => $text):?>
        <?php if(!is_array($text)):?>
           <p><?=$text?></p>
        <?php else:?>
           <?php foreach($text as $var => $tags):?>
       <a href="body-partial.html" ><p><i><?=$tags?></i></p></a>
            <?php endforeach?>
        <?php endif?>
         
      <?php  endforeach?>
     
    </div>
 <?php endforeach?>
 
</div>
<?php endif ?>

<?php

include "footer-partial.html";
?>