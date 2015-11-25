   <div class="row footer">
       <div class="col-xs-12">
           <footer class="footer">dank je voor het bezoek</footer>
       </div>
   </div>
</div>

    <script>
        $(document).ready(function(){
         $(".fade-in").hide();
          $(".fade-in").fadeIn(1000);
         setTimeout(function(){
         $(".fade-in").fadeOut(1000);
         },2000);
         
         if(document.cookie="remember"){
           $(".remember").prop( "checked",true);
           $.get('remember.php?remember=1');
         }
         
         $(".remember").click(function(){
          if($(this).prop( "checked")){
            $.get('remember.php?remember=1');
           }else{
            $.get('remember.php?remember=0');
           }
          
         });
         
        });
    </script>
</body>

</html>