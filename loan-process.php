<?php 

	// C:\wamp64\www\lukeport\loan-process.php:4:

	// array (size=7)
	//   'passport' => 
	//     array (size=5)
	//       'name' => string '' (length=0)
	//       'type' => string '' (length=0)
	//       'tmp_name' => string '' (length=0)
	//       'error' => int 4
	//       'size' => int 0
	//   'validId' => 
	//     array (size=5)
	//       'name' => string '' (length=0)
	//       'type' => string '' (length=0)
	//       'tmp_name' => string '' (length=0)
	//       'error' => int 4
	//       'size' => int 0
	//   'utitity' => 
	//     array (size=5)
	//       'name' => string '' (length=0)
	//       'type' => string '' (length=0)
	//       'tmp_name' => string '' (length=0)
	//       'error' => int 4
	//       'size' => int 0
	//   'salary' => 
	//     array (size=5)
	//       'name' => string '' (length=0)
	//       'type' => string '' (length=0)
	//       'tmp_name' => string '' (length=0)
	//       'error' => int 4
	//       'size' => int 0
	//   'account' => 
	//     array (size=5)
	//       'name' => string '' (length=0)
	//       'type' => string '' (length=0)
	//       'tmp_name' => string '' (length=0)
	//       'error' => int 4
	//       'size' => int 0
	//   'guarantor' => 
	//     array (size=5)
	//       'name' => string '' (length=0)
	//       'type' => string '' (length=0)
	//       'tmp_name' => string '' (length=0)
	//       'error' => int 4
	//       'size' => int 0
	//   'personalLoan' => 
	//     array (size=5)
	//       'name' => string '' (length=0)
	//       'type' => string '' (length=0)
	//       'tmp_name' => string '' (length=0)
	//       'error' => int 4
	//       'size' => int 0

	// C:\wamp64\www\lukeport\loan-process.php:5:
	// array (size=7)
	//   'first_name' => string '' (length=0)
	//   'last_name' => string '' (length=0)
	//   'email' => string '' (length=0)
	//   'phone' => string '' (length=0)
	//   'bvn' => string '' (length=0)
	//   'salary' => string '' (length=0)
	//   'loanUpload' => string 'Submit Form' (length=11)

	define('DEVELOPMENT', TRUE);

	
	if(isset($_POST['loanUpload'])){
		// var_dump($_FILES);
		// exit();

		$passport = $_FILES['passport']['name'];
		$passport_temp = $_FILES['passport']['tmp_name'];

		// if(isset($_POST['how_much'])){
		// 	$how_much = $_POST['how_much'];
		// }

		// if(isset($_POST['how_long'])){
		// 	$how_long = $_POST['how_long'];
		// }

		$first_name = $_POST['first_name'];
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$bvn = $_POST['bvn'];
		$salary = $_POST['salary'];

		$valid_id = mt_rand(10, 100000).$email.$_FILES['validId']['name'];
		$valid_id_temp = $_FILES['validId']['tmp_name'];

		$utitity = mt_rand(10, 100000).$email.$_FILES['utitity']['name'];
		$utitity_temp = $_FILES['utitity']['tmp_name'];

		$salary = mt_rand(10, 100000).$email.$_FILES['salary']['name'];
		$salary_temp = $_FILES['salary']['tmp_name'];

		$account = mt_rand(10, 100000).$email.$_FILES['account']['name'];
		$account_temp = $_FILES['account']['tmp_name'];

		$guarantor = mt_rand(10, 100000).$email.$_FILES['guarantor']['name'];
		$guarantor_temp = $_FILES['guarantor']['tmp_name'];

		$personalLoan = mt_rand(10, 100000).$email.$_FILES['personalLoan']['name'];
		$personalLoan_temp = $_FILES['personalLoan']['tmp_name'];

		move_uploaded_file($passport_temp, "uploads/$passport");
		move_uploaded_file($valid_id_temp, "uploads/$valid_id");
		move_uploaded_file($utitity_temp, "uploads/$utitity");
		move_uploaded_file($salary_temp, "uploads/$salary");
		move_uploaded_file($account_temp, "uploads/$account");
		move_uploaded_file($guarantor_temp, "uploads/$guarantor");
		move_uploaded_file($personalLoan, "uploads/$personalLoan");


		$to = 'info@lukeport.com';
		$subject = "Loan Application";
		$header = "From: info@lukeport.com \r\n";
		$header .= "MIME-Version: 1.0\r\n";
		$header .= "Content-type: text/html; charset=iso-8859-1\r\n";
		$message = "

					<!DOCTYPE html>
					<html lang='en'>
					<head>
						<meta charset='UTF-8'>
						<title>Load Application Form</title>
						<style type='text/css'>

							.img-cover{
								overflow: hidden;
							}

							.img-div{
								width:160px;
								height: 160px;
								padding: 3px;
								box-sizing: border-box;
								float: left;
							}

							.img-div img{
								width: 140px;
								height: auto;
							}
						</style>
					</head>
					<body>

						<p><strong>How much your are investing</strong>: 60, 000 </p>
						<p><strong>How long you are investing</strong>: 5 Months </p>
						<p><strong>First Name</strong>: $first_name </p>
						<p><strong>Last Name</strong>: $last_name </p>
						<p><strong>Email</strong>: $email </p>
						<p><strong>Phone</strong>: $phone </p>
						<p><strong>BVN</strong>: $bvn </p>
						<p><strong>Salary</strong>: $salary </p>

						
						<div class='img-cover'>
							<div class='img-div'>
								<a href='https://lukeport.com/uploads/$passport'>
								<img src='https://lukeport.com/uploads/$passport'>
								</a>
							</div>
							<div class='img-div'>
								<a href='https://lukeport.com/uploads/$valid_id'>
									<img src='https://lukeport.com/uploads/$valid_id'>
								</a>
								
							</div>
							<div class='img-div'>
								<a href='uploads/$utitity'>
									<img src='https://lukeport.com/uploads/$utitity'>
								</a>
								
							</div>
							<div class='img-div'>
								<a href='https://lukeport.com/uploads/$salary'>
									<img src='https://lukeport.com/uploads/$salary'>
								</a>
							</div>
							<div class='img-div'>
								<a href='https://lukeport.com/uploads/$salary'>
									<img src='https://lukeport.com/uploads/$account'>
								</a>
							</div>
							<div class='img-div'>
								<a href='https://lukeport.com/uploads/$salary'>
									<img src='https://lukeport.com/uploads/$guarantor'>
								</a>
							</div>
							<div class='img-div'>
								<a href='https://lukeport.com/uploads/$salary'>
									<img src='https://lukeport.com/uploads/$personalLoan'>
								</a>
							</div>
						</div>


						
					</body>
					</html>

				";
		
		if(mail($to, $subject, $message, $header)){
			$success = "Email sent";
		}else{
			$notSent = "Sorry we could not send this email";
		}



	}