$("document").ready(function(){
    
    
    
var DEALS = (function(my,$){
    varEen = "test";
    my.varTwee="testtwee";
    
    return my;
})(DEALS || {},jQuery);
    
    console.log(DEALS.varTwee);
    
    
    var DEALS = (function(my,$){
       functieEen = function(naam){
           console.log(naam);  
       }
       my.functieTwee = function(naam){
           console.log(naam);  
           $("ul").hide();
       }
        return my;
    })(DEALS || {},jQuery);
    
    
      var DEALS = (function(my,$){
            functieEen("bla");
          my.functieTwee("broer");
            
        return my;
    })(DEALS || {},jQuery);
    
    DEALS.functieTwee("anton");
});