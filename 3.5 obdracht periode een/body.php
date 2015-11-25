

     <body>
        <div class="container">
                   
                   <?php if(!($GLOBALS['error_massag'] == "")):?>
                       
                       <p class="error-massag fade-in"><?php echo $GLOBALS['error_massag']; ?></p>
                       
                   <?php endif;?>
             <h1>TODO app</h1>




              <?php if((!empty($_SESSION["todo"]))|| (!empty($_SESSION["don_and_don"]))):?>
                <?php if(isset($_SESSION["todo"])):?>

                   <?php  foreach($_SESSION["todo"] as $key => $value):?>
                         <div class="row">
                             <ul>

                                  <div class="col-xs-6 col-md-3">
                                     <a href="todo.php?toggle=true&todo_don=<?php echo $key ?>"><li class="todo-margin line-hover"><?php echo $value;?></li></a>
                                  </div>
                                  <div class="col-xs-6 col-md-3">
                                     <a class="delete" href="todo.php?delete=true&delete_value=<?=$value?>&delete_key=<?=$key?>"><li >x</li></a>
                                  </div>

                           </ul>
                        </div>
                    <?php  endforeach; ?>
                <?php endif; ?>





                <?php if(isset( $_SESSION["todo"]) && (!empty($_SESSION["todo"])) || (isset( $_SESSION["don_and_don"]))):?>
                   <h1>Done and done!</h1>
                        <?php if(isset( $_SESSION["don_and_don"]) && !empty($_SESSION["don_and_don"])):?>
                               <?php  foreach($_SESSION["don_and_don"] as $key => $value):?>
                                      <div class="row">
                                         <ul>
                                           <div class="col-xs-6 col-md-3">
                                             <a href="todo.php?toggle_don_and_don=true&todo_not_don=<?php echo $key ?>"><li class="todo-margin line-hover-none active"><?php echo $value;?></a></li>                                         
                                          </div>
                                       <div class="col-xs-6 col-md-3">
                                             <a href="todo.php?delete=true&delete_value=<?=$value?>&delete_key=<?=$key?>"><li class="delete_done">x</li></a>
                                       </div> 
                                        </ul>
                                      </div>
                               <?php  endforeach; ?>
                         <?php else:?>
                               <p><?php echo $GLOBALS['messeg_nog_tedoen_todo']?></p>
                         <?php endif;?>

                <?php endif;?>




             <?php endif;?>

              <h1>TODO toevoegen</h1>
              <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
              <input type="input" name="todo" >
              <input type="submit" name="submit"  >
               <input type="checkbox" class="remember">remember my list
              </form>
              <a href="todo.php?sessionDestroy=destroy" <p>destroy session</p></a>
           
      

 
  