<html>
	<head>
		<title>SENT IT GET IT</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script type="text/javascript" src="../js/login.js"></script>
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link rel="shortcut icon" href="../images/sigilogo.png" type="image/png">
	</head>
	<body>
		<br><br>
		<div class="container">
			<div id="response"></div>
			<div class="col-sm-8 col-sm-offset-2 text-center">
				<h1>Send it Get it</h1>
				<div class="description">
				<p>
				Upload your files with Confidence.....
				</p>
				</div>
			</div>
			<br><br>
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1 show-forms">
					<div class='login_slug'>
						<a style="color: white" href="#" value="signup" id="signup">
							<span  class="show-register-form">Register</span>
						</a>
						<a href="#">
							<span style="color: white" class="show-forms-divider">/</span>
						</a>
						<a style="color: white" href="#" value="login" id="login">
							<span  class="show-login-form active">Login</span>
						</a>
						<a href="#">
							<span style="color: white" class="show-forms-divider">/</span>
						</a>
						<a style="color: white" href="#" value="login" id="email">
							<span  class="show-login-form active">Login with Email</span>
						</a>
					</div>
					<div class="otp_slug">
						<a style="font-weight:bold;color:#fed4aa" href="#" value="signup" id="signup">
							<span  class="show-register-form">Otp</span>
						</a>
					</div>
				</div>
			</div>
			<div class="col-sm-4 col-sm-offset-1">
				<div class="login">
					<br>
					<form id="login_form" method="post" action="#">
						<div class="form-group">
							<label>Mobile Number</label>
							<input type="text" name="user_id" id="user_id" class="form-control" placeholder="Mobile Number" required>
						</div><br>
						<div class="col-md-4"></div>
						<div class="col-md-4">
							<button id="login_btn" type="submit" class="btn btn-warning col-md-12">Submit</button>
						</div>
						<div class="col-md-4"></div>
					</form>
				</div>
				<div class="otp" >
					<br>
					<form method="post" action="#" id="otp_form">
						<div class="form-group">
							<label>Enter otp</label>
							<input type="text" name="otp" id="otp_content" class="form-control" placeholder="otp" required>
						</div><br>
						<div class="col-md-4"></div>
						<div class="col-md-4">
							<button type="submit" class="btn btn-warning col-md-12">Submit</button>
						</div>
						<div class="col-md-4"></div>
					</form>
				</div>
				<div class="signup">
					<br>
					<form id="signup_form" method="post" action="#">
						<div class="form-group">
							<label>User Name</label>
							<input type="text" name="user_name" id="name" class="form-control" placeholder="Username" required>
						</div>
						<div class="form-group">
							<label>Email Id</label>
							<input type="email" name="mail" id="mail_id" class="form-control" placeholder="email id" required>
						</div>
						<div class="form-group">
							<label>Mobile Number</label>
							<input type="text" name="user_id" id="phone_no" class="form-control" placeholder="Mobile number" required>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
						</div><br>
						<div class="col-md-4"></div>
						<div class="col-md-4">
							<button type="submit" class="btn btn-warning col-md-12">Submit</button>
						</div>
						<div class="col-md-4"></div>
					</form>
				</div>
				<div class="email">
					<br>
					<form id="email_form" method="post" >
						<div class="form-group">
							<label>Email Id</label>
							<input type="email" name="email" id="mailid" class="form-control" placeholder="Email Id" required>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" id="pass" class="form-control" placeholder="Password" required>
						</div><br>
						<div class="col-md-4"></div>
						<div class="col-md-4">
							<button type="submit" class="btn btn-warning col-md-12">Submit</button>
						</div>
						<div class="col-md-4"></div>
					</form>
				</div>
			</div>
			<div class="col-sm-6 forms-right-icons">
				<div class="row">
					<div class="col-sm-2">
						<i style="margin-top: 20px;margin-left: 10px;" class="fa fa-pencil fa-3x"></i>
					</div>
					<div class="col-sm-10">
						<h3>Beautiful Account</h3>
						<p>You Can See Your Order History.Be the First to know about Offers, New updates.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-2">
						<i style="margin-top: 20px;margin-left: 10px;" class="fa fa-commenting fa-3x"></i>
					</div>
					<div class="col-sm-10">
						<h3>Awesome Login</h3>
						<p>You Can Save Your Time, you don't have to type in your details every time you checkout.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-2">
						<i style="margin-top: 20px;margin-left: 10px;" class="fa fa-magic fa-3x"></i>
					</div>
					<div class="col-sm-10">
						<h3>Great Registration</h3>
						<p>An Account With us Makes your Shopping Experience Easier, Faster and More Powerfull.</p>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
