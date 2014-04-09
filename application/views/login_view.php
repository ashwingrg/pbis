<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PBIS-Login</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css">
</head>
<body>
	<div class="container">
	<header>
		<div class="row" style="background-color:#4b4b4b;">
			<div class="col-md-12 ">
				<h4 style="color:#fff;"><span style="color:#eaeae9;">Performance Based Incentive System</span> (PBIS)</h4>
			</div>
		</div>
	</header>
		<div class="row" style="">
			<div class="loginbox col-lg-4 col-md-4 col-sm-4 col-xs-12 col-lg-offset-4 col-md-offset-4 col-sm-offset-4">
				<div class="col-lg-12" style="background-color:#eaeaea; padding:13px 10px; border-bottom: 1px solid #cccccc;">
					<h5 style="margin:0px; font-weight:bold; color:#333333; font-size:15px; ">Sign In</h5>
				</div>
				<div class="col-lg-12" style="padding:12px 10px;">
					<form action="<?php echo site_url('login'); ?>" method="post">
						<?php if($this->session->flashdata('logoutmsg')) { ?>
						<!--logout notify msg-->
						<div class="notify" style="color:#4da3b3; border:0px; margin-left:-6px;">
							<?php echo $this->session->flashdata('logoutmsg'); ?>
						</div><!--logout notify ends-->
						<?php } ?>
						<?php if($this->session->flashdata('invlogin')){ ?>
						<!--invalid login-->
						 <div class="notify">
							<?php echo $this->session->flashdata('invlogin'); ?>
						</div><!--invalid login ends-->

						<?php } ?>
						<!--input username or email address-->
						<div class="form-group">
							<label for="username or email">Username or Email:</label>
							<input type="text" name="usernameoremail" id="usernameoremail" class="form-control" required >
						</div><!--username or email ends-->
						<!--input user password-->
						<div class="form-group">
							<label for="password">Password:</label>
							<input type="password" name="password" id="password" class="form-control" required>
						</div><!--input password ends-->
						<!--remember me-->
						<div class="form-group">
							<div class="row">
								<label for="remember me">
									<input type="checkbox" name="" id="">&nbsp;Remember Me
								</label>
							</div>
							<div class="row pull-right">
								<button type="submit" class="btn btn-primary" style="position:relative;">Sign In</button>
							</div>
						</div><!--remember me ends-->
					</form><!--form ends-->
				</div>
			</div><!--login box ends-->
			<div class="row col-lg-4 col-md-4 col-sm-4 col-xs-9" style="margin-top: 28em; margin-left:-148px;">
				<small style="color:#0061b3;">Powered By: XYZ Company</small>
			</div>
		</div>
	</div><!--.container-->

	<!--scripts-->
	<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.0.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script>
		setTimeout(fade_out, 1700);
		function fade_out() {
		  $(".notify").fadeOut().empty();
		}
	</script>
</body>
</html>