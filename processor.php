<?php 

	if(isset($_POST['submit'])){


		$errors = array();
		$name = $_POST['name'];
		$email = $_POST['email'];
		// $phone = $_POST['phone'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		if($phone === '' || $email === '' || $subject === '' || $message === ''){
			$errors[] = 'All fields are required <br>';
		}elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$errors[] = 'Invalid email <br>';
		}

		if(empty($errors)){
			
		$to = 'info@lukeport.com';
		$subject = 'Contact Us Form';
		$header = 'MIME-Version: 1.0\r\n';
		$header .= 'Content-type: text/plain; charset=iso-8859-1\r\n';
		$body = "Name: {$name} \n";
		$body .= "Email: {$email} \n";
		// $body .= "Phone: {$phone} \n";
		$body .= "Message: {$message} \n";
			
		  $sendMail = @mail($to, $subject, $body, $header);
		  if($sendMail){
		  	$success = 'Message sent <br>';
		  }else{
		  	$notSent = 'Message not sent <br>';
		  }
		}else{
				$show_errors = '';
			foreach($errors as $the_error){
				$show_errors .= $the_error . "<br>";
			}

		}
	}



 ?>