<?php

	

	
	if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
		
		if( $_POST["message"] != "" && $_POST["email"] != "" ){ 
		//hiermee word het type "error" gestuurd als de form leeg is, maar bij het invullen word "succes" niet gestuurd, het toevoegen aan de db werkt dan wel
		
//		if( isset($_POST["message"]) && isset($_POST["email"]) {
		// hiermee word het type "success" doorgestuurd, ook al is de form leeg en word de "error" niet gestuurd
			
			$ajaxmessage["type"] = "success";
            
			
			//encoderen naar json zodat het leesbaar is voor de ajaxcall
			$jsonData = json_encode($ajaxmessage);
			$current="succes";
			echo $current;
            file_put_contents(db.php, $current);
            echo $jsonData;
			
			
		}else{
			
			$ajaxmessage["type"] = "error";
			
			$jsonData = json_encode($ajaxmessage);
            echo $current;
            file_put_contents(db.php, $current);
			echo $jsonData;
			
		}
		
		
	}

?>
