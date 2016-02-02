$( document ).ready(function(){
    
        (function ilges($){
            console.log("ready");
            $("#makedivs").click(function(){
                for(var i = 1;i<13;i++){
                    var div = 
                    $("#container").append($("<\div>").addClass("image").css('background-image', 'url(images/small/' + i + '.jpg)').attr( "img", i ));
                }
                $(".image").greenify({paus:1000,fade:1000});
            $("#hideeven").click(function(){
                $(".image:even").hide();
            });
                $("#showhidden").click(function(){
                    $(".image:hidden").fadeTo("slow" , 0.5);
                });
                $("#boldfirst").click(function(){
                    $(".image:first").css("border","10px solid white");
                });
                $("#floatall").click(function(){
                    $(".image:gt(0)").css("float","left");
                });
                $(".image").click(function(){
                    
                    $("#lightbox").css('background-image', 'url(images/big/' + $(this).attr("img") + '.jpg)').css("display","block");
                });
                $("#lightbox").click(function(){
                    console.log("hier");
                    $("#lightbox").css("display","none");
                });
            });
            
        })(jQuery);
})
