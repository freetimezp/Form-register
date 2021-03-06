<?php
	$userEmail = $_POST['userEmail'];
	$userName = $_POST['userName'];
	$userPass = $_POST['userPass'];
	$to =  "kraftukrnet@ukr.net";

	if(isset($_POST['submit'])) {
			if(!empty($userEmail) && !empty($userName) && !empty($userPass)) {
					$send_mail = mail($to, 'Новая подписка', 'У Вас новый подписчик!' ,'From: Form-reg text <kraftukrnet@ukr.net>');
					if($send_mail) {
							header ("location: http://form-reg/thankyou.html");
						 echo "SEND OK";
					} else {
							echo "Ошибка";
					}
							} else {
					echo "Заполните все поля";
			}
	}
?>

<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- main CSS -->
<link rel="stylesheet" href="css/style.min.css">

<!-- font  -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600&display=swap&subset=cyrillic-ext" rel="stylesheet">

<title>Form-reg</title>
</head>
<body>
	
<section class="s-form">
	<div class="container">
		<div class="row no-gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-right">
				<h1 class="form-title">
   		Login To Your Account / Register New
	   </h1>
  		<!-- /.form-title -->
			</div>
			<!-- /.col-xl-12 -->
		</div>
		<!-- /.row -->
		<div class="row  no-gutters">
			<div class="col-xl-12 col-lg-12 col-md-11 col-sm-11 col-11 m-auto">
		  <div class="form-reg m-auto">
		   <div class="form-reg-header">
			   <div class="row no-gutters">
							<div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col-3">
								<div class="form-reg__logo my-auto">
									<img src="img/form-reg/form-reg-logo.png" alt="Form registration logo">
								</div>
								<!-- /.form-reg__logo -->
							</div>
							<!-- /.col-xl-2 -->
							<div class="col-xl-10 col-lg-10 col-md-10 col-sm-9 col-9 my-auto">
								<h2  class="form-reg__title">Login To Your Account / Register New</h2>
							</div>
							<!-- /.col-xl-10 -->
						</div>
						<!-- /.row -->
		   </div>
		   <!-- /.form-reg-header -->
		   <div class="form-reg-body">
		   	<div class="row no-gutters">
		   		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
   					<div class="form-login__image">
   						<img src="img/form-reg/form-reg-login-1-line.png" alt="Картинка">
   						<img class="form-login__image-circle" src="img/form-reg/form-reg-login-1-circle.png" alt="Картинка">
   					</div>
		   		</div>
		   		<!-- /.col-xl-6 -->
		   		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
   					<h3 class="form-newreg__title">Register</h3>
		   		</div>
		   		<!-- /.col-xl-6 -->
		   	</div>
		   	<!-- /.row -->
		   	<div class="row no-gutters">
		   		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
		   			<div class="form-login">
		   				<div class="row no-gutters">
		   					<input class="form-reg__input"  type="text" placeholder="User name">
		   				</div>
		   				<!-- /.row -->
		   				<div class="row no-gutters">
		   					<input class="form-reg__input"  type="text" placeholder="Password">
		   				</div>
		   				<!-- /.row -->
		   				<div class="row align-items-center no-gutters">
		   					<div class="col-xl-7 col-lg-7 col-md-6 col-sm-12">
		   						<div class="form-checkbox">
		   							<div class="row no-gutters">
		   								<div class="col-xl-1 col-lg-1 col-md-1">
		   									<div class="checkbox-wrap">
		   										<input class="checkbox__input"  type="checkbox" id="checkbox" checked="checked">
		   										<span class="checkbox__checkmark"></span>
		   									</div>
		   									<!-- /.checkbox-wrap -->
		   								</div>
		   								<!-- /.col-xl-1 -->
		   								<div class="col-xl-11 col-lg-11 col-md-11 ml-auto">
		   									<label class="checkbox__label"  for="checkbox">Remember My password</label>
		   									<div class="checkbox__label-hover">
		   										<span class="checkbox__label-hover__text">You no longer need to enter a password every time you use the site</span>
		   									</div>
		   									<!-- /.checkbox__label-hover -->
		   								</div>
		   								<!-- /.col-xl-11 -->
		   							</div>
		   							<!-- /.row -->
		   						</div>
		   						<!-- /.form-checkbox -->
		   					</div>
		   					<!-- /.col-lg-7 -->
		   					<div class="col-xl-5 col-lg-5 col-md-6 col-sm-12">
		   						<button type="button" class="form__button form__button--blue ml-auto">Login</button>
		   					</div>
		   					<!-- /.col-xl-5 -->
		   				</div>
		   				<!-- /.row -->
		   			</div>
		   			<!-- /.form-login -->
		   		</div>
		   		<!-- /.col-lg-6 -->
		   		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
		   			<form class="form-newreg was-validated" action="" method="POST" id="form">
									<div class="form-group">	
										<label class="form-newreg__subtitle" for="formUserEmail">Email</label>
										<div class="row no-gutters">
											<div class="form-reg__input-wrap">
											 <input class="form-reg__input form-reg__input--small form-control" id="formUserEmail" type="email" name="userEmail" placeholder="" required>
											</div>
											<!-- /.form-reg__input-wrap -->
				   			</div>
				   			<!-- /.row -->
									</div>
									<!-- /.form-group -->
		   				<div class="form-group">
										<label class="form-newreg__subtitle" for="formUserName">User Name</label>
			   				<div class="row no-gutters">
											<div class="form-reg__input-wrap">
											 <input class="form-reg__input form-reg__input--small form-control" id="formUserName" type="name" name="userName" placeholder="" required>
											</div>
											<!-- /.form-reg__input-wrap -->
			   				</div>
			   				<!-- /.row -->
									</div>
									<!-- /.form-group -->
		   				<div class="form-group">
										<label class="form-newreg__subtitle"  for="formUserPassword">Password</label>
			   				<div class="row no-gutters">
										 <input class="form-reg__input form-reg__input--small form-control" id="formUserPassword"  type="text" name="userPass" placeholder="" required>
			   				</div>
			   				<!-- /.row -->
									</div>
									<!-- /.form-group -->
			   			<div class="row no-gutters">
			   				<div class="col-xl-6 col-lg-6 col-md-7 ml-auto">
			   					<button type="submit" name="submit" class="form__button form__button--yellow ml-auto">Register</button>
			   				</div>
			   				<!-- /.col-xl-6 -->
			   			</div>
			   			<!-- /.row -->
		   			</form>
		   			<!-- /.form-newreg -->
		   		</div>
		   		<!-- /.col-xl-6 -->
		   	</div>
		   	<!-- /.row -->
		   </div>
		   		<!-- /.form-reg-body -->		
			 </div>
			 <!-- /.form-reg -->
			</div>
			<!-- /.col-xl-12 -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
</section>
<!-- /.s-form-reg -->





<!-- Optional JavaScript -->

<!-- jquery JS -->
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

<!-- bootstrap JS -->
<script src="js/bootstrap.min.js"></script>

<!-- main JS -->
<script src="js/script.js" ></script>


</body>
</html>