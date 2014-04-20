<?php 
	$userdiv =  $sessuserinfo->division_name; 
	$usertype = $sessuserinfo->user_type;
?>
		<!--body contents start-->
		<div class="row bodycontainer" >
			<!--left menu column starts-->
			<div class="col-lg-3 col-md-3 col-sm-3" style="padding:0px;">
				<!--dashboard panel starts-->
				<div class="panel-group" id="dashboard">			
					<div class="panel panel-default">
				   		<div class="panel-heading">
				      		<h5 class="panel-title">
				        		<span class="glyphicon glyphicon-th-large"></span>&nbsp;<a href="<?php echo site_url('home/dashboard'); ?>">
				          		Dashboard
				        		</a>
				      		</h5>
				    	</div><!--panel-heading ends-->
				  	</div><!--dashboard panel ends-->  	
				</div><!--dashboard panel-group ends here-->
				<!--Workplan detail panel starts-->
				<div class="panel-group" id="workplandetail">			
					<div class="panel panel-default">
				   		<div class="panel-heading">
				      		<h5 class="panel-title">
				        		<span class="glyphicon glyphicon-th-list"></span>&nbsp;<a data-toggle="collapse" data-parent="#workplandetail" href="#collapseTwo">
				          		Workplan Detail & Progress
				        		</a>
				      		</h5>
				    	</div><!--workplandetail-heading ends-->
				    	<div id="collapseTwo" class="panel-collapse collapse in">
				      		<div class="panel-body">
				        		<ul class="list-group">
				        			<?php if($usertype == "div_chief" && $userdiv != "ExCo"){ ?>
				        			<li class="list-group-item"><a href="<?php echo site_url('home/workplandetail/new'); ?>" data-toggle="tooltip" data-placement="right">New Workplan Detail</a></li>
				        			<?php } ?>
				        			<?php if($userdiv != "ExCo"){ ?>
				        			<li class="list-group-item"><a href="<?php echo site_url('home/workplandetail'); ?>">List All Workplans Detail</a></li>
				        			<?php } ?>
				        			<?php if($userdiv != "ExCo"){ ?>
				        			<?php } ?>
				        			<li class="list-group-item"><a href="<?php echo site_url('home/workplanprogress'); ?>">List All Workplan Progress</a></li>
				        		</ul>
				      		</div>
				    	</div>
				  	</div><!--workplan detail panel ends-->	
				</div><!--Workplan detail panel-group ends here-->
				<!--Account panel starts-->
				<div class="panel-group" id="account">			
					<div class="panel panel-default">
				   		<div class="panel-heading">
				      		<h5 class="panel-title">
				        		<span class="glyphicon glyphicon-briefcase"></span>&nbsp;<a data-toggle="collapse" data-parent="#account" href="#collapseThree">
				          		Staff & Division
				        		</a>
				      		</h5>
				    	</div><!--panel-heading ends-->
				    	<div id="collapseThree" class="panel-collapse collapse in">
				      		<div class="panel-body">
				        		<ul class="list-group">
				        			<?php if($userdiv == "Administration") { ?>
				        			<li class="list-group-item"><a href="<?php echo site_url('home/staffs/newstaff'); ?>">Enter New Staff</a></li>
				        			<?php } ?>
				        			<li class="list-group-item"><a href="<?php echo site_url('home/staffs'); ?>">List All Staffs</a></li>
				        			<?php if($userdiv == "Administration") { ?>
				        			<li class="list-group-item"><a href="<?php echo site_url('home/divisions/newdivision'); ?>">Create New Division</a></li>
				        			<?php } ?>
				        			<li class="list-group-item"><a href="<?php echo site_url('home/divisions'); ?>">List All Divisions</a></li>		
				        		</ul>
				      		</div>
				    	</div>
				  	</div><!--account panel ends-->	
				</div><!--account panel-group ends here-->
				<!--ExCo Members panel starts-->
				<?php if($userdiv == "Administration" || $userdiv == "ExCo"){ ?>
				<div class="panel-group" id="excomembers">			
					<div class="panel panel-default">
				   		<div class="panel-heading" >
				      		<h5 class="panel-title">
				        		<span class="glyphicon glyphicon-tasks"></span>&nbsp;<a data-toggle="collapse" data-parent="#excomembers" href="#collapseFour">
				          		ExCo Members
				        		</a>
				      		</h5>
				    	</div><!--exco members-heading ends-->
				    	<div id="collapseFour" class="panel-collapse collapse in">
				      		<div class="panel-body">
				        		<ul class="list-group">
				        			<?php if($userdiv == "Administration"){ ?>
				        			<li class="list-group-item"><a href="<?php echo site_url('home/exco/newmember'); ?>">Enter New ExCo Member</a></li>
				        			<?php } ?>
				        			<li class="list-group-item"><a href="<?php echo site_url('home/exco'); ?>">List All ExCo Members</a></li>
				        		</ul>
				      		</div>
				    	</div>
				  	</div><!--Exco members panel ends-->	
				</div><!--Exco members panel-group ends here-->
				<?php } ?>
				<!--PBIS panel starts-->
				<div class="panel-group" id="pbis">			
					<div class="panel panel-default">
				   		<div class="panel-heading" >
				      		<h5 class="panel-title">
				        		<span class="glyphicon glyphicon-stats"></span>&nbsp;<a data-toggle="" data-parent="" href="<?php echo site_url('home/pbis'); ?>">
				          		PBIS Percentage
				        		</a>
				      		</h5>
				    	</div><!--panel-heading ends-->	    	
				  	</div><!--PBIS panel ends-->	
				</div><!--PBIS panel-group ends here-->	
			</div><!--left-menu column ends-->