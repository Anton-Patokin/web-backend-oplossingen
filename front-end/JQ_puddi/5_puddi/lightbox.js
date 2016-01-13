(function($) {

    $.fn.lightbox = function(option) {
        console.log(this);

        var settings = $.extend({
            // These are the defaults.
            elem: "div",
            elem1: "foto",
            elem2:"#lightbox"
        }, option);


        this.on("click", settings.elem, function() {
         
        
            $id = $(this).attr(settings.elem1);
            console.log($id);
            console.log( $("#lightbox"));
            $("#lightbox").css({
                "background-image": 'url( images/big/' + ($id) + '.jpg)'
            }).fadeIn();

        });
        $("#lightbox").click(function() {
            $(this).fadeOut();
        });

        return this;
    }
}(jQuery));