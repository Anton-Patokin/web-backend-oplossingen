
<!DOCTYPE html>
<html>
<head>
	<title>Page Title</title>
	 <meta charset="UTF-8"> 
</head>
<body>

	<h1>Contacteer ons</h1>
	<p class="error">
		<style>
			p.error {color:red;}
		</style>
	
	</p>
	
	<p class="succes">
		<style>
			p.succes {color:green;}
		</style>
	
	</p>
	
	<p class="append"></p>
    <form action="contact.php" method="post" id="contact-form">
        <ul>
            <li>
                <label for="email">E-mailadres</label><br/>
                <input type="text" id="email" name="email" value="">
            </li>
            <li>
                <label for="message">Boodschap</label><br/>
                <textarea name="message" id="message" cols="30" rows="10"></textarea>
            </li>
            <li>
                <input type="checkbox" name="checkbox" id="checkbox">
                <label for="copy">Stuur een kopie naar mezelf</label>
            </li>
        </ul>
        <input type="submit" name="submit">
    </form>
		
		
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script>

//		console.log("hello");
		$(document).ready(
            function(){
			alert("ready");
			
			
		})
		
	</script>
		
		
		
		
		
</body>
</html>
