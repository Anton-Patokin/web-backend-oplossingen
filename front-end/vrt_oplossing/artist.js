$(function(){
	
	$("form#artist").submit(function(eEvent){
		eEvent.preventDefault();
		
		$.ajax({
			url:"http://services.vrt.be/music/songs", // *1
			data: {
				accept: "application/vnd.music.vrt.be.songs_1.0+json", // *2
				artist: $(this).find("input").val()
			}, 
			dataType: "jsonp", // *3
			jsonp: "f", // *4
			success: function(jsonObject){
				console.log(jsonObject);
				
				$("#container").empty();
				
				for(index in jsonObject.songs){
				
					var song = jsonObject.songs[index];
					var a = $("<a/>")
								.attr("href", song.songLink.href)
								.css("background-image", "url("+song.coverUrl+")")
								.text(song.title);
								
					var li = $("<li/>")
								.append(a)
								.appendTo("#container");					
				
				}
	
			}
		});		
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