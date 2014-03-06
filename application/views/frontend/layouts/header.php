<?php $sessuserdetails = $this->session->userdata('userdetails'); ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PBIS-Login</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/style.css" type="text/css">
</head>
<body>
	<div class="container">
	<!--header starts-->
	<header>
		<div class="row" style="background-color:#4b4b4b;">
			<!--header-system-title-->
			<div class="col-lg-6 col-md-9 col-sm-9 col-xs-12">
				<h4 style="color:#fff;"><span style="color:#eaeae9;">Performance Based Incentive System</span> (PBIS)</h4>
			</div><!--header-system-title-ends-->
			<!--header dropdown button-->
			<div class="col-lg-6 col-md-3 col-sm-3 col-xs-12 headbuttonbox" style="padding:0px;">
				<button type="button" class="btn btn-primary pull-right dropdown-toggle headerbutton" data-toggle="dropdown" style=""><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;<?php echo $sessuserdetails[0]->user_fullname; ?>&nbsp;<span class="caret"></span></button>
				<ul class="dropdown-menu pull-right">
					<li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;User Details</a></li>
					<li><a href="<?php echo site_url('logout'); ?>"><span class="glyphicon glyphicon-log-out"></span>&nbsp;&nbsp;Logout</a></li>
				</ul>
			</div><!--header dropdown button ends-->
		</div>
	</header><!--header ends here-->