 
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script>
        $("doncument").ready(function(){
            console.log("ready");
        
        
        
        var Person = function(naam){
            this.naam =naam;
        }
        person1=  new Person("anton");
        person2 = new Person("artem");
        //console.log(person1.naam+" "+person2.naam);
        
        
        var obj ={
            naam:"blabla",
            age: "bla"
        };
        //console.log(obj.naam);
            
          
        
        var randomNaam =function(variabelle){
            return variabelle;
        }
        
        var naam = "artem";
            console.log(naam);
        
       eval("var a_"+"anton"+" = "+{naam} +";");
        
        //console.log(randomNaam("artem"));
        
        console.log(a_anton);
        
        
        
        
        });
        
        
    </script>
</head>
<body>



</body>
</html>