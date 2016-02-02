$("document").ready(function(){
    console.log("ready");
    //massage from with room you are chating 
    
    $("#section_loggedin").hide();
    $("#section_conversation").empty();
    
    
   var CHAT = (function(my,$){
       
        
       addSctionLoggedin = function(naam, chatrrom){
           $("#active_room").text(chatrrom);
           $("#active_name").text(naam );
       }
       
       
       addmasseg = function(naam,message){
           /*
           var strongName = $("<\span>").text(naam);
           
           $("#section_conversation").append($("<\p>").append(strongName).text(message));
           */
           
           $("#section_conversation").append("<p><span>"+naam+":</span>"+message+"</p>");
       }
       
       //addmasseg("anton","hallo");
       
       getJeson=function(room){
            $.getJSON( "https://dweet.io/get/latest/dweet/for/room"+room+"?callback=?", function( data ) {
               console.log(data.with[0].content.name);
                addSctionLoggedin(data.with[0].content.name,room)
                if(data.with[0].content.massage){
                addmasseg(data.with[0].content.name,data.with[0].content.massage);
                }
       })
           
       }
       
       $("#join").click(function(){
           
           
           $("#section_loggedin").show();
           //addSctionLoggedin($("#chat_name").val(),$("#chat_room").val());
           var naam = $("#chat_name").val();
           var room = $("#chat_room").val();
         
    
           getJeson($("#chat_room").val());
            
           $("#chat_message").keypress(function(e) {
        if(e.which == 13) {
             
           var messegs  = $("#chat_message").val();
           
           $.ajax({
              method: "POST",
              url: "https://dweet.io/dweet/for/room"+room,
              data: { name: naam, massage: messegs },
               dataType: "json"
               
            })
              .done(function( msg ) {
                getJeson(room);
              });
        }
           
        });
           
           
          
         
       })
       
       
       
       
       
       
       
        return my;
    })(CHAT||{},jQuery);
    
    
    
    
    
});