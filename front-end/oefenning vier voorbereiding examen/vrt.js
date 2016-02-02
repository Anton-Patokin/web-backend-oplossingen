$(function(){
	

	$.ajax({
		url:"http://services.vrt.be/epg/channels",
		data: {accept: "application/vnd.epg.vrt.be.channels_2.0+json"},
		dataType: "jsonp",
		jsonp: "f",
		success: function(jsonObject){
			console.log(jsonObject);
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