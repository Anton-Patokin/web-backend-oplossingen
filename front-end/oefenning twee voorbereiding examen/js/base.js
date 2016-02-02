
$( document ).ready(function(){
    
    (function($){
    console.log("readyssssssss ssss ");
    
    
   $( ".full" ).keyup(function() {
        
      var search = $(this).val();
      var limiterOp  = 4;
      
       
      $.ajax({
      dataType: "jsonp",
      url: "https://en.wikipedia.org/w/api.php?",
      data: {action:"opensearch",limit:limiterOp,search:search},
      success: function(data){
          $("#results").empty();
          
          for(var i = 1; i < data[1].length;i++){
              console.log(i);
              var search = $("<\a>").attr("href", data[3][i]).append($("<\li>").attr("value",i).text(data[1][i]));
             $("#results").append(search);
          }
       
          $("#results li").hover(function(){
          
             $(".preview").text(data[2][$(this).attr("value")] );   
      });
      }
          
    });
       
   });
    /*
    $.ajax({
      dataType: "json",
      url: "https://en.wikipedia.org/w/api.php?action=opensearch&limit=3&search=g&callback=?",
      data: data,
      success: success
    });
    */
})(jQuery);
})

