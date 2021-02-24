<?php
    require_once("config.php");
	if(isset($_POST['submit'])){
	    
        $validationRules = [
            'title' => [
                'name' => 'Title', 
                'required' => true,
            ], 
            'sname' => [
                'name' => 'Surname', 
                'required' => true,
            ], 
            'fname' => [
                'name' => 'First Name',
                'required' => true,
            ], 
            'mname' => [
                'name' => 'Middle Name', 
                'required' => true,
            ], 
            'bname' => [
                'name' => 'Buisness Name',
                'required' => true,
            ], 
            'baddress' => [
                'name' => 'Buisness Address', 
                'required' => true,
            ], 
            'city' => [
                'name' => 'City', 
                'required' => true,
            ], 
            'state' => [
                'name' => 'State', 
                'required' => true,
            ], 
            'residential' => [
                'name' => 'Residential', 
                'required' => true,
            ], 
            'phone' => [
                'name' => 'Phone Number', 
                'required' => true,
            ], 
            'email' => [
                'name' => 'Email', 
                'required' => true,
                'email' => true,
            ], 
            'identification' => [
                'name' => 'Identification', 
                'required' => true,
            ],
            'issued' => [
                'name' => 'Issued Date', 
                'required' => true,
            ], 
            'expiry' => [
                'name' => 'Expiry', 
                'required' => true,
            ],
        ];

        $errors = [];
        foreach ($validationRules as $key => $value) {
            if (isset($value['required']) && $value['required'] && (!isset($_POST[$key]) || empty(trim($_POST[$key])))) {
                $errors[] = $value['name'].' is required';
            } elseif (isset($value['email']) && $value['email'] &&  !filter_var($_POST[$key], FILTER_VALIDATE_EMAIL)) {
                $errors[] = 'Invalid email';
            }
        }
    
        if (count($errors)) {
            $_SESSION['errors'] = $errors;
            $_SESSION['old'] = $_POST;
            header("Location: account-opening-form.php");
            exit();
        }
        $to = 'jidenma.ofurum@lukeport.com';
		$subject = 'Account Opening Form';
		$header = 'MIME-Version: 1.0\r\n';
		$header .= 'Content-type: text/plain; charset=iso-8859-1\r\n';
		$body = "Account opening form has been filled \n";
		$body .= "Form Details \n";
		foreach ($validationRules as $key => $value) {
            $body .= $value['name'].": ".trim($_POST[$key])." \n";
        }
        $sendMail = mail($to, $subject, $body, $header);
    	if($sendMail){
    	  	$_SESSION['success']  = 'Form submitted successfully';
    	  	header("Location: account-opening-form.php");
            exit();
    	}else{
    	    $_SESSION['errors'] = ['An error occured. Please try again later'];
    	    $_SESSION['old'] = $_POST;
    	    header("Location: account-opening-form.php");
            exit();
    	}
	}
	