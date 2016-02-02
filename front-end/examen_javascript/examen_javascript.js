$("document").ready(function(){
    
    console.log("reaady");
    
    for(var i = 0;i<12;i++){
       $("#duration").append($("<\option>").text(i)); 
    }
    $("#start").on("click",function(){
        $("#clock").append($("<\p>").text($("#duration option:selected").val()));
    })
    
    
    
    $( "#clock" ).on( "click", "p", function() {
        selecto = this;
        setTimeout(function(){
            $(selecto).fadeOut();
        },5000)
        
    });
    
});