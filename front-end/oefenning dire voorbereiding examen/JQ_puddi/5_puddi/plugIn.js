(function plugin($){
    console.log("plugin");
    
   $.fn.greenify = function(option) {
       
       var setings =$.extend({
           paus: 1000,
           fade: 1000
       },option);
    
        return this.each(function(index) {
          $(this).css('background-color', 'orange')
          .delay(index * setings.paus)
          .fadeOut(setings.fade);
          
    });
       
};
})(jQuery)