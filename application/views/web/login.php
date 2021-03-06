<!doctype html>
<html>
	<head>
		<title>Perpustakaan</title>
		<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css');?>">
		<link rel="stylesheet" href="<?= base_url('assets/font-awesome/css/font-awesome.css');?>">
		<link rel="stylesheet" href="<?= base_url('assets/plugins/morris/morris.css');?>">
		<link rel="stylesheet" href="<?= base_url('assets/plugins/timeline.css');?>">
		<link rel="stylesheet" href="<?= base_url('assets/css/sb-admin.css');?>">
		<script src="<?= base_url('assets/js/jquery.js');?>"></script>
		<script src="<?= base_url('assets/js/bootstrap.js');?>"></script>
		<script src="<?= base_url('assets/plugins/tinymce/tinymce.min.js');?>"></script>
		<script>
			tinymce.init({selector:'textarea'});
		</script>
	</head>
	<body>
		<div class="container">
			<div id="loginbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
				<div class="panel panel-info">
					<div class="panel-heading">
						<div class="panel-title">
							Sign In
						</div>
						<div style="float:right; font-size: 80%; position: relative; top:-10px">
							<a href="#">Forgot Password</a>
						</div>
					</div>
					<div style="padding-top: 30px" class="panel-body">
						<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12">
						</div>
						<form id="loginform" class="form-horizontal" role="form">
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email">
							</div>
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<input id="login-password" type="password" class="form-control" name="password" placeholder="password">
							</div>
							<div class="input-group">
								<div class="checkbox">
									<label><input id="login-remember" type="checkbox" name="remember" value="1">Remember me</label>
								</div>
							</div>
							<div style="margin-bottom: 10px" class="form-group">
								<div class="col-sm-12 controls">
									<a id="btn-login" href="#" class="btn btn-success">Login</a>
									<a id="btn-fblogin" href="#" class="btn-btn-primary">Login with Facebook</a>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-12 control">
									<div style="border-top: 1px solid#888; padding-top:15px; font-size:85%">
										Don't have an account!
										<a href="#" onclick="$('#loginbox').hide(); $('#signupbox').show()">Sign Up Here</a>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div id="signbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
				<div class="panel panel-info">
					<div class="panel-heading">
						<div class="panel-title">
							Sign Up
						</div>
						<div style="float:right; font-size: 85%; position: relative; top:-10px">
							<a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a>
						</div>
					</div>
					<div class="panel-body">
						<form id="signupform" class="form-horizontal" role="form">
							<div id="signupalert" style="display:none" class="alert alert-danger">
								<p>Error:</p>
								<span></span>
							</div>
							<div class="form-group">
								<label for="email" class="col-md-3 control-label">Email</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="email" placeholder="Email Address">
								</div>
							</div>
							<div class="form-group">
								<label for="firstname" class="col-md-3 control-label">First Name</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="firstname" placeholder="First Name">
								</div>
							</div>
							<div class="form-group">
								<label for="lastname" class="col-md-3 control-label">Last Name</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="lastname" placeholder="Last Name">
								</div>
							</div>
							<div class="form-group">
								<label for="password" class="col-md-3 control-label">Password</label>
								<div class="col-md-9">
									<input type="password" class="form-control" name="passwd" placeholder="Password">
								</div>
							</div>
							<div class="form-group">
								<label for="icode" class="col-md-3 control-label">Invitation Code</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="icode" placeholder="">
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-offset-3 col-md-9">
									<button id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i>&nbsp Sign Up</button>
									<span style="margin-left:8px;">or</span>
								</div>
							</div>
							<div style="border-top:1px solid #999; padding-top:20px" class="form-group">
								<div class="col-md-offset-3 col-md-9">
									<button id="btn btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i> Sign Up with Facebook</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<script src="<?= base_url('assets/plugins/holder/holder.js');?>"></script>
		<script src="<?= base_url('assets/js/application.js');?>"></script>
		<script src="<?= base_url('assets/js/jquery-1.10.2.js');?>"></script>
		<script src="<?= base_url('assets/js/bootstrap.min.js');?>"></script>
		<script src="<?= base_url('assets/plugins/metisMenu/dist/metisMenu.js');?>"></script>
		<script src="<?= base_url('assets/plugins/raphael/raphael.js');?>"></script>
		<script src="<?= base_url('assets/plugins/morris/morris.js');?>"></script>
		<script src="<?= base_url('assets/js/sb-admin.js');?>"></script>
		<script src="<?= base_url('assets/js/demo.js');?>"></script>
	</body>
</html>