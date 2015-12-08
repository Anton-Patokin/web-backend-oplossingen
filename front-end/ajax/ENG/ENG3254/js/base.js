$( document ).ready(function(){

       console.log("werkt");
       
 
 
       $(".full").keyup(function(){
           //console.log(getFull());
           //getJeson();
           $inputLetters = getFull();

           $.getJSON( "https://en.wikipedia.org/w/api.php?action=opensearch&search="+$inputLetters+"&callback=?&limit=3", function( data ) {
              console.log(data);
            
            
            $("#results").empty();
            
            
            $.each(data[1],function(key, val){
                //console.log(data[2][key]);
                 $discription = data[2][key];
                 //console.log($discription);
                    $("#results").append( "<li titel="+key+"><a href="+data[3][key]+">"+val+"</a></li>" );
                    
                    
               });
            
            $("li").hover(function(e){
                      e.preventDefault();
                     
                     $index = $(this).attr("titel");
                  $(".preview").empty();
                     $(".preview").text(data[2][$index]);
                    })
            
            })
       });
       


       function getFull(){
           return $(".full").val();
       }


       function getJeson(){


       }
 
});