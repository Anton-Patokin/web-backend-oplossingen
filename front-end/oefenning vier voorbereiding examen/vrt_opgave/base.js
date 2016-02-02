$("document").ready(function(){
    console.log("ready");
    
    
    $.ajax({
        method: "GET",
        url:"http://services.vrt.be/channel/s",
        dataType: "jsonp",
        jsonp: "f",
        data:{accept:"application/vnd.channel.vrt.be.channels_1.1+json",types:"application/vnd.vrt.be.values_1.0+xml, application/vnd.vrt.be.values_1.0+json"},
        success: function(data){
            console.log(data.channels);
            $.each(data.channels,function(index,value){
                $("<\a>").attr("href",value.websiteUrl).append($("<\li>").text(value.name)).appendTo($("#container"));
            })
        }
    }).fail(function() {
    alert( "error" );
  });
})