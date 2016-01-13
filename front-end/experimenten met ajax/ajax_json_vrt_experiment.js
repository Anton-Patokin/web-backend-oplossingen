(function($){
    $( document ).ready(
        function(){
             $.ajax({
                  url: "http://services.vrt.be/epg/channels",
                  beforeSend: function( xhr ) {
                    xhr.overrideMimeType( "application/vnd.epg.vrt.be.channels_2.0+json" );
                  }
                })
                  .done(function( data ) {
                    console.log(data);
                    
                  });
        }
    )
    
}(jQuery))