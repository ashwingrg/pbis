			<!--right body column starts-->
			<div class="col-lg-9 col-md-9 col-sm-9" style="padding: 0 0 0 20px;">
				<div class="row">
					<div class="col-lg-12" style="margin:0px; padding:0px;">
						<!--right body header-->
						<div class="row">
							<div class="col-lg-7 col-md-5 col-sm-5 col-xs-12" style="margin:0px; padding:0px;">
								<h1 style="margin:2px 0px 11px 0px; font-weight:bold;"><?php echo $userft->user_fullname; ?></h1>
							</div>
							<!--right body header-search-->
							<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
								<!-- <div class="input-group" style="margin-top:0.3em;">
				                    <input type="text" class="form-control" placeholder="Search Here&hellip;">
				                    <span class="input-group-btn">
				                        <button type="button" class="btn btn-primary">Search</button>
				                    </span>
			                	</div> -->
							</div><!--search ends-->
							<!--dropdown notifications-->
							<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12" style="margin:0px; margin-top:3px; padding:0px;">
								<span class="pull-right"><button class="btn btn-default" style="background-color:#ebebeb;"><strong>6</strong></button><a href="#" class="dropdown-toggle" data-toggle="dropdown">&nbsp;&nbsp;Notifications <span class="caret"></span></a>
								<ul class="dropdown-menu" style="margin-top:1px; max-width:20em;  ">
									<li><a href="" style="color:#0088cc;"><small>- Lorem ipsum dolor sit amet, consectetur.</small><br>&nbsp;&nbsp;<small>04-March-2014</small></a></li>
									<li><a href="" style="color:#0088cc;"><small>- Lorem ipsum dolor sit amet, consectetur.</small><br>&nbsp;&nbsp;<small>04-March-2014</small></a></li>
								</ul>
								</span>
							</div>	
							<!--dropdown notifications ends here-->
						</div><!--right body header ends-->
						<!--right body contents-->
						<div class="row">
							<!--rightbody column body-->
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 maincontent">		
							    <ul class="nav nav-tabs">
									<li class="active"><a href="#profile" data-toggle="tab">Profile Details</a></li>
							      	<li><a href="#editprofile" data-toggle="tab">Edit Profile</a></li>
							      	<li><a href="#editpsw" data-toggle="tab">Change Password</a></li>
							    </ul>
							    <div class="tab-content" style="padding-top:1.5em;">
							    	<div class="tab-pane active" id="profile">
							    		<form>
							        		<p>
							        			<label for="fullname">Full Name: </label>
							        			<span><?php echo @ $userft->user_fullname; ?></span>&nbsp;&nbsp;&nbsp;&nbsp;
							        			<label for="email">Email: </label>
							        			<span><?php echo @ $userft->user_email; ?></span>&nbsp;&nbsp;&nbsp;&nbsp;
							        			<label for="username">PBIS Username:</label>
							        			<span><?php echo @ $userft->user_username; ?></span>&nbsp;&nbsp;&nbsp;&nbsp;
							        			<label for="division">Division:</label>
							        			<span><?php echo @ $userft->division_name; ?></span>&nbsp;&nbsp;&nbsp;&nbsp;
							        			<label for="salary">Salary:</label>
							        			<span>15000</span>
							        		</p>
							        		<p>
							        			<label for="dateofbirth">Date of Birth: </label>
							        			<span><?php echo @ $userst->user_dateofbirth; ?></span>&nbsp;&nbsp;&nbsp;&nbsp;
							        			<label for="age">Age: </label>
							        			<span><?php echo @ $userst->user_age; ?></span>&nbsp;&nbsp;&nbsp;&nbsp;
							        			<label for="gender">Gender: </label>
							        			<span><?php echo @ $userst->user_gender; ?></span>&nbsp;&nbsp;&nbsp;&nbsp;
							        			<label for="dateofjoin">Date Of Join:</label>
							        			<span><?php echo @ $userst->user_dateofjoin; ?></span>
							        		</p>
							        		<p>
							        			<label for="fathername">Father's Name:</label>
							        			<span><?php echo @ $userst->user_fathername; ?></span>&nbsp;&nbsp;&nbsp;&nbsp;
							        			<label for="mothername">Mother's Name:</label>
							        			<span><?php echo @ $userst->user_mothername; ?></span>
							        		</p>
							        		<p>
							        			<label for="presentaddress">Present Address:</label>
							        			<span><?php echo @ $userst->user_present_address; ?></span>&nbsp;&nbsp;&nbsp;&nbsp;
							        			<label for="permanetaddress">Permanent Address:</label>
							        			<span><?php echo @ $userst->user_permanent_address; ?></span>
							        		</p>
							   	 		</form>
							      	</div>
							    	<div class="tab-pane" id="editprofile">
								    	<form action="" method="post" class="form-inline" style="margin-top:-1em;">
								    		<p>
								    		<div class="form-group col-lg-4">
								    			<label for="fullname">Full Name :</label>
								    			<input type="text" name="fullname" id="fullname" value="<?php echo @ $userft->user_fullname; ?>" class="form-control" required>
								    		</div>
								    		<div class="form-group col-lg-4">
								    			<label for="email">Email :</label>
								    			<input type="email" name="email" id="email" value="<?php echo @ $userft->user_email; ?>" class="form-control" required>
								    		</div>
								    		<div class="form-group col-lg-3">
								    			<label for="username">PBIS Username :</label>
								    			<input type="text" name="username" id="username" value="<?php echo @ $userft->user_username; ?>" class="form-control" required>
								    		</div>
								    		<br><br><br>
								    		</p>
								    		<p>
								    		<div class="form-group col-lg-3">
								    			<label for="dateofbirth">Date Of Birth :</label>
								    			<input type="date" name="dateofbirth" id="dateofbirth" value="<?php echo @ $userst->user_dateofbirth; ?>" class="form-control" required>
								    		</div>
								    		<div class="form-group col-lg-4">
								    			<label for="fathername">Father's Name :</label>
								    			<input type="text" name="fathername" id="fathername" value="<?php echo @ $userst->user_fathername; ?>" class="form-control" required>
								    		</div>
								    		<div class="form-group col-lg-4">
								    			<label for="mothername">Mother's Name :</label>
								    			<input type="text" name="mothername" id="mothername" value="<?php echo @ $userst->user_mothername; ?>" class="form-control" required>
								    		</div>
								    		<br><br><br>
								    		</p>
								    		<p>
								    		<div class="form-group col-lg-4">
								    			<label for="presentaddresss">Present Address :</label>
								    			<input type="text" name="presentaddress" id="presentaddress" value="<?php echo @ $userst->user_present_address; ?>" class="form-control" required>
								    		</div>
								    		<div class="form-group col-lg-4">
								    			<label for="permanentaddress">Permanent Address :</label>
								    			<input type="text" name="permanentaddress" id="permanentaddress" value="<?php echo @ $userst->user_permanent_address; ?>" class="form-control" required>
								    		</div><br><br><br>
								    		</p>
								    		<p>
								    			<button type="submit" class="btn btn-primary" style="margin-left:1em; border-radius:0px;">Update</button>
								    			<button type="reset" onclick="window.location.href='<?php echo site_url('home/userdetails'); ?>';" class="btn btn-danger" style="margin-top:-5px; border-radius:0px;">Cancel</button>
								    		</p>
								    	</form>
							    	</div>
							    	<div class="tab-pane" id="editpsw">
							    		<form action="" method="post" class="form-inline" style="margin-top:-1em;">
							    			<p>
								    		<div class="form-group col-lg-3">
								    			<label for="newpassword">New Password :</label>
								    			<input type="text" name="npassword" id="npassword" class="form-control" placeholder="Enter new password" required>
								    		</div><br><br><br>
								    		</p>
								    		<p>
								    		<button type="submit" class="btn btn-primary" style="margin-left:1em; border-radius:0px;">Update</button>
								    		</p>
							    		</form>
							    	</div>
							  	</div>
							</div><!--rightbody columns body ends-->
						</div><!--all staff body row ends-->
					</div>
				</div>
			</div><!--right body column ends here-->
		</div><!--body contents end-->