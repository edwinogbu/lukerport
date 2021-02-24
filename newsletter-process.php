<?php 


		// var_dump($_POST);

		if(isset($_POST['subscribe'])){
		$errors = array();

		$email = $_POST['email'];
		if($email === ''){
			$errors[] = 'Email is required <br>';
		}elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$errors[] = 'Invalid email <br>';
		}

		if(empty($errors)){

				$to = 'info@lukeport.com';
				$subject = 'Newsletter subscription';
		        @mail($to, $subject, "Email: $email");
						
				  $sendMail =  @mail($to, $subject, "Email: $email");
				  if($sendMail){
				  	$newsletter_success = 'Message sent <br>';
				  }else{
				  	$newsletter_notSent = 'Message not sent <br>';
			  	}
		
		}else{
			$newsletter_show_errors = '';
			foreach($errors as $the_error){
				$newsletter_show_errors .= $the_error . "<br>";
			}

		}
	}



 ?>