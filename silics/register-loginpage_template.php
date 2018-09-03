<?php
/*
Template Name: register-loginpage Template
*/
?>

<?php
get_header();
?>

<hr class="hr-div hr-none" style="border-color:#f1f1f1;">
	
	
	
	
	
	
<!--- Login /Sign up -->
    <div class="product-details">    
        <div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12 page-title">
					<h1>Login / Sign Up</h1>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="main-box-mr">
						<div class="box1">
							<div class="box1-table">
								<div class="box-top-left">
									<h3>Login to our site</h3>
									<p>Enter username and password to log on:</p>
								</div>
								<div class="box-top-right">
									<i class="fa fa-key icon"></i>
								</div>
							</div>
						</div>
						<div class="box2">
							<form action="" id="login-form">
								<div class="form-group">
									<input type="text" class=" form-control" id="username" placeholder="Username...">
								</div>
								<div class="form-group">
									<input type="password" class="form-control" id="pwd" placeholder="Password...">
								</div>
								<button type="submit" class="btn btn-sign-in">Sign in!</button>
								<p class="fg_pass"><a href="#" >Forgot Password </a></p>
							</form>
						</div>
					</div>
					<div class="text-center">
						<h3 class="social-btn-heading">...or login with:</h3>
							<div class=" btn-group">
								<button type="button" class="btn facebook-btn"><i class="fa fa-facebook"></i>&nbsp;Facebook</button>
							</div>
							<div class=" btn-group">
								<button type="button" class="btn twitter-btn"><i class="fa fa-twitter"></i>&nbsp;Twitter</button>
							</div>
							<div class="btn-group">
								<button type="button" class="btn google-plus-btn"><i class="fa fa-google-plus"></i>&nbsp;Google Plus</button>
							</div>
					</div>
				</div>	
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="main-box-mr">
						<div class="box1">
							<div class="box1-table">
								<div class="box-top-left">
									<h3>Sign Up Now</h3>
									<p>Fill in the form below to get instant access:</p>
								</div>
								<div class="box-top-right">
									<i class="fa fa-pencil icon"></i>
								</div>
							</div>
						</div>
						<div class="box2">
							<form action="" id="login-form">
								<div class="form-group">
									<input type="text" class="form-control" id="firstname" placeholder="First name...">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="lastname" placeholder="Last name...">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="contact" placeholder="Contact...">
								</div>
								<div class="form-group">
									<input type="email" class="form-control" id="email" placeholder="Email...">
								</div>
								<button type="submit" class="btn btn-sign-up">Sign me up!</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div><!--/container-->
	</div>




<?php
get_footer();
?>