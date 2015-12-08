(function ($){

$.fn.lightbox= function(){
  console.log(this);
 
            this.on( "click","div", function(){
              $id = $(this).attr("foto");
              console.log($id+1);
              $("#lightbox").css({"background-image":'url( images/big/'+($id)+'.jpg)'}).fadeIn();

              } );
              $( "#lightbox" ).click(function(){
               $(this).fadeOut();
             });
 
 return this;
}
}(jQuery));