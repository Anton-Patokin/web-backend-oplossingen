$( document ).ready(function(){
    
  var DEALS = (function(my,$){
      var addBlock = function(item){
          var hCountry,
              hCity,
              hPrice;
          
              hCountry=item.Land;
              hCity =$("<strong>/").text(item.Stad);
              hPrice = $("<span>/").addClass("price").append(item.Prijs);
          $("<li>/").append(hPrice).append(hCity).append(hCountry).data("city",item.Stad).appendTo("ul");
           
      }
      
      $.getJSON( "fallback/4myag81u.json", function( data ) {
          console.log(data);
        var steden = data.results.collection1;
          for(i in steden){
              //console.log(steden[i].Land);
              addBlock(steden[i]);
          }
    });
      my.getcity =function(block){
          return $(block).data("city");
      }
     
      return my;
  }(DEALS || [],jQuery))
  
  
var GETWEATER = (function(my,$){
    var addBlock = function(item){
          var hCountry,
              hCity,
              hPrice;
          
              hCountry=item.Land;
              hCity =$("<strong>/").text(item.Stad);
              hPrice = $("<span>/").addClass("price").append(item.Prijs);
          $("<li>/").append(hPrice).append(hCity).append(hCountry).data("city",item.Stad).appendTo("ul");
           
      }
    
    
      $("ul").on("click","li",function(){
         var dataCity = DEALS.getcity(this);
            $.ajax({
				url: "http://api.openweathermap.org/data/2.5/weather",
				data: {
					q: dataCity,
					units: "metric",
					appid: "2de143494c0b295cca9337e1e96b00e0"
				},
				dataType: "jsonp",
				success: function( data ) {
					console.log( data );
				}
			});
      })
    
  }(GETWEATER || {},jQuery))
    
}) 