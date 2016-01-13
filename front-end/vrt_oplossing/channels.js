$(function(){
	

	$.ajax({
		url:"http://services.vrt.be/epg/channels", // *1
		data: {accept: "application/vnd.epg.vrt.be.channels_2.0+json"}, // *2
		dataType: "jsonp", // *3
		jsonp: "f", // *4
		success: function(jsonObject){
			//console.log(jsonObject);
			console.log(jsonObject.list);
			
				for(index in jsonObject.list) {
					var channel = jsonObject.list[index];
					
					console.log(channel.name + " -> " + channel.websiteURL);
					
					var a = $("<a/>")
								.attr("href", channel.websiteURL)
								.text(channel.name);
					var li = $("<li/>")
								.append(a)
								.appendTo("#container");
				
				}

		}
	});

});

/*

	*1	Surf en klik door vanaf http://services.vrt.be om je service te vinden.
	*2 	Om de beschikbare media-types te weten te komen, 
		surf naar je service en voeg volgende querystring toe:
			?accept=w/w
		Bijvoorbeeld: http://services.vrt.be/epg/channels?accept=w/w	
	*3	http://services.vrt.be is extern: dus "json padding" gebruiken (jsonp).
	*4	De verwachte parameter voor de callbackfunctie is "f=?" in plaats van "callback=?"

*/