$(document).ready(function(){
	$('.signup').hide();
	$('.otp').hide();
	$('.otp_slug').hide();
	$('.email').hide();
	$('#login').css({'font-weight':'bold','color':'#fed4aa'});
	$("#signup").click(function() { 
		$('.signup').show();
		$('.login').hide();
		$('.email').hide();
		$('#login').css({'font-weight':'normal','color':'white'});
		$('#signup').css({'font-weight':'bold','color':'#fed4aa'});
		$('#email').css({'font-weight':'normal','color':'white'});
	});
	$("#login").click(function() {
		$('.signup').hide();
		$('.login').show();
		$('.email').hide();
		$('#login').css({'font-weight':'bold','color':'#fed4aa'});
		$('#signup').css({'font-weight':'normal','color':'white'});
		$('#email').css({'font-weight':'normal','color':'white'});
	});
	$("#email").click(function() {
		$('.signup').hide();
		$('.login').hide();
		$('.email').show();
		$('#login').css({'font-weight':'normal','color':'white'});
		$('#signup').css({'font-weight':'normal','color':'white'});
		$('#email').css({'font-weight':'bold','color':'#fed4aa'});
	});
	$(document).on('submit','#login_form',function(e){
		e.preventDefault();
		console.log("i am in login");
		phone_no = document.getElementById('user_id').value;  
		console.log(phone_no);
		$.ajax({
			type : "POST",
			url : "../controller/login.php",
			data : {user_id : phone_no},
			success: function(data){
				if(data == "error"){
					document.getElementById('response').innerHTML = '<div class="alert alert-danger"><strong>Sorry!   </strong> Signup your Account </div>' ;
				}else{
					console.log(data);
	 				$('.otp').show();
	 				$('.login').hide();
	 				$('.login_slug').hide();
	 				$('.otp_slug').show();
					$("#otp_form").submit(function(e){
						e.preventDefault();
						otp = $("#otp_content").val();
						if(data == otp){
							window.location = "../home";
						}else{
							document.getElementById('response').innerHTML = '<div class="alert alert-danger"><strong>Sorry!   </strong>Invalid OTP</div>' ; 
						}
					});
				}
			}
		});
	});	
	$(document).on('submit','#signup_form',function(e){
		e.preventDefault();
		name = document.getElementById('name').value;
		phonenumber = document.getElementById('phone_no').value;
		email= document.getElementById('mail_id').value;
		password= document.getElementById('password').value;
		$.ajax({
			type : "POST",
			url : "../controller/register_otp.php",
			data : { user_id : phonenumber},
			success: function(data){
				if(data == "error"){
					document.getElementById('response').innerHTML = '<div class="alert alert-danger"><strong>Sorry!   </strong>User Already Exists</div>' ;
				}else{
					console.log(data);
					$('.signup').hide();
	 				$('.otp').show();
	 				$('.login_slug').hide();
	 				$('.otp_slug').show();
					$("#otp_form").submit(function(e){
						e.preventDefault();
						otp = $("#otp_content").val();
						insert_user(data , otp);
					});
				}
			}
		});
	});
	$("#email_form").submit(function(e){
		e.preventDefault();
		email= document.getElementById('mailid').value;
		password= document.getElementById('pass').value;
		$.ajax({
			type : "POST",
			url : "../controller/login_with_email.php",
			data : { email : email,password : password},
			success: function(data){
				if(data == "error"){
					document.getElementById('response').innerHTML = '<div class="alert alert-danger"><strong>Sorry!   </strong>Invalid Password or Email Id</div>' ;
				}else if (data == "success"){
					 window.location = "../home";
				}else{
					document.getElementById('response').innerHTML = '<div class="alert alert-danger"><strong>Sorry!   </strong>Something Went wrong</div>' ; 
				}		
			}
	
		});

	}); 
});
function insert_user(data , otp){
	name = document.getElementById('name').value;
	phonenumber = document.getElementById('phone_no').value;
	email_id = document.getElementById('mail_id').value;
	password = document.getElementById('password').value;
	if(data == otp){
		$.ajax({
			type : "POST",
			url : "../controller/register.php",
			data : { user_name : name,user_id : phonenumber,email_id : email_id,password : password},
			success: function(data){
				console.log(data);
				if(data == "error"){
					document.getElementById('response').innerHTML = '<div class="alert alert-danger"><strong>Sorry!   </strong>Invalid OTP</div>' ;
				}else if (data == "inserted"){
					 window.location = "../home";
				}else{
					document.getElementById('response').innerHTML = '<div class="alert alert-danger"><strong>Sorry!   </strong>Something Went wrong</div>' ; 
				}
			}
		});
	}else{
		document.getElementById('response').innerHTML = '<div class="alert alert-danger"><strong>Sorry!   </strong>Invalid OTP</div>' ; 
	}
}