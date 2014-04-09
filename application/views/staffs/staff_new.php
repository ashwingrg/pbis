<?php $uri = $this->uri->segment(3);?>
			<!--right body column starts-->
			<div class="col-lg-9 col-md-9 col-sm-9" style="padding: 0 0 0 20px;">
				<div class="row">
					<div class="col-lg-12" style="margin:0px; padding:0px;">
						<!--right body header-->
						<div class="row">
							<div class="col-lg-7 col-md-5 col-sm-5 col-xs-12" style="margin:0px; padding:0px;">
								<h1 style="margin:2px 0px 11px 0px; font-weight:bold;">
								<?php 
									if($uri == "edit"){
										echo "Edit Staff";
									}
									else{
										echo "New Staff";
									}
								 ?>
								</h1>
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
							<?php if($this->session->flashdata('useradded')){ ?>
							<!--notify msg-->
			                <div class="alert alert-success alert-dismissable" style="margin-top:0px; margin-bottom:8px;">
							 	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							  	<?php echo $this->session->flashdata('useradded'); ?>
							</div><!--msg notify ends-->
							<?php } ?>
							<!--new staff body-->
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 maincontent">
								<form action="<?php echo current_url(); ?>" method="post" class="form-horizontal">
								    <!--Full Name-->
							        <div class="form-group">
								   		<label for="Name" class="control-label col-lg-2 col-md-2 col-sm-2 col-xs-6" style="text-align:left;">Staff Name :</label>
							            <div class="col-sm-3 col-xs-12" style="padding:0px 5px 0 0;">
							                <input type="text" class="form-control" name="firstname" id="firstname" value="<?php echo @ $staffft->user_fullname; ?>" placeholder="First Name" required>
								        </div>
								        <?php if(@ !$staffft && @ !$staffst){ ?>
							            <div class="col-sm-3 col-xs-12" style="padding:0px 5px 0 0;">
						                	<input type="text" class="form-control" name="middlename" id="middlename" placeholder="Middle Name">
							            </div>
						            	<div class="col-sm-3 col-xs-12" style="padding:0px 5px 0 0;">
					                		<input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name" required>
						           		</div>
						           		<?php } ?>
						        	</div><!--Full Name ends here-->
						        	<!--Second row-->
						        	<div class="form-group">
						        		<label for="dateofbirth" class="control-label col-lg-2 col-sm-2" style="text-align:left;">Date Of Birth :</label>
						        		<div class="col-lg-3 col-md-3 col-sm-4" style="padding:0px 5px 0 0;">
						        			<input type="date" name="dateofbirth" id="dateofbirth" class="form-control" value="<?php echo @ $staffst->user_dateofbirth; ?>">
						        		</div>
						        		
						        		<!--Age-->
						        		<label for="Age" class="control-label col-lg-1 col-sm-2" style="text-align: left;">Age :</label>
						        		<div class="col-lg-1 col-md-3 col-sm-3" style="padding:0px 5px 0 0;">
						        			<input type="number" name="age" id="age" class="form-control" min="18" max="50" value="<?php echo @ $staffst->user_age; ?>" placeholder="Age">
						        		</div><!--Age ends-->
						        		<!--Gender-->
										<label for="Gender" class="control-label col-lg-1 col-md-3 col-sm-2" style="text-align: left;">Gender:</label>
										<div class="col-lg-3 col-sm-6">
								        	<div class="radio-inline" style="margin-left:20px;">
												<label>
												    <input type="radio" name="gender" id="gender" value="male" <?php 
												     	if(@$staffst->user_gender == "male"){
												     		echo "checked";
												     	}
												     	?>
												     >
												    Male
												</label>
											</div>
											<div class="radio-inline">
											  	<label>
												    <input type="radio" name="gender" id="gender" value="female" <?php 
												     	if(@$staffst->user_gender == "female"){
												     		echo "checked";
												     	}
												     	?>
												     >
												    Female
												</label>
											</div>
										</div>
										<!--Gender ends-->
 						        	</div><!--Second row -->
 						        	<!--Third row-->
									<div class="form-group" style="margin-top:-13px;">
										<!--father's name-->
										<label for="Father's Name" class="control-label col-lg-2 col-sm-2" style="text-align:left;">Father's Name :</label>
										<div class="col-lg-3 col-sm-4 col-xs-12" style="padding:0px 5px 0 0;">
							                <input type="text" class="form-control" name="fathername" id="fathername" placeholder="Enter Father's Name" value="<?php echo @ $staffst->user_fathername; ?>">
								        </div>
								        <!--father's name ends-->
								        <!--Mother's Name-->
								        <label for="Mother's Name" class="control-label col-lg-2 col-sm-2" style="text-align:left;">Mother's Name :</label>
										<div class="col-lg-3 col-sm-4 col-xs-12" style="padding:0px 5px 0 0;">
							                <input type="text" class="form-control" name="mothername" id="mothername" placeholder="Enter Mother's Name" value="<?php echo @ $staffst->user_mothername; ?>">
								        </div>
								        <!--Mother's Name ends-->
									</div><!--third row-->
									<!--fourth row-->
									<div class="form-group">
										<!--present address-->
								        <label for="Temporary Address" class="control-label col-lg-2 col-sm-2" style="text-align:left;">Present Address :</label>
										<div class="col-lg-3 col-sm-4 col-xs-12" style="padding:0px 5px 0 0;">
							                <input type="text" class="form-control" name="presentaddress" id="presentaddress" placeholder="Enter Present Address" value="<?php echo @ $staffst->user_present_address; ?>">
								        </div>
								        <!--present address-->
										<!--permanent address-->
										<label for="Permanent Address" class="control-label col-lg-2 col-sm-2" style="text-align:left;">Permanent Address :</label>
										<div class="col-lg-3 col-sm-4 col-xs-12" style="padding:0px 5px 0 0;">
							                <input type="text" class="form-control" name="permanentaddress" id="permanentaddress" placeholder="Enter Permanent Address" value="<?php echo @ $staffst->user_permanent_address; ?>">
								        </div>
								        <!--permanent address ends-->
									</div><!--fourth row-->
									<!--fifth row-->
									<div class="form-group">
										<label for="dateofjoin" class="control-label col-lg-2 col-sm-2" style="text-align:left;">Date of Join: </label>
										<div class="col-lg-3 col-sm-4 col-xs-12" style="padding:0px 5px 0 0;">
							                <input type="date" class="form-control" name="dateofjoin" id="dateofjoin" value="<?php echo @$staffst->user_dateofjoin; ?>">
								        </div>
								        <label for="" class="control-label col-lg-1 col-sm-2" style="text-align:left;">Division:</label>
								        <div class="col-lg-3 col-sm-4">
								        	<select name="division" id="division" class="form-control" value="<?php echo @$staffft->division_name; ?>" required>
								        		<?php if(@ $staffft){  ?>
									        	<option value="division"><?php echo @ $staffft->division_name; ?></option>
									        	<?php } ?>
									        	<?php 
									        		foreach($alldivisions as $alldivs):
									        	 ?>   
										          <option value="<?php echo $alldivs->division_name; ?>">
										        <?php 
										          	if($alldivs->division_name == @$staffft->division_name){

										          	}
										          	echo $alldivs->division_name; ?></option>
										        <?php endforeach; ?>
    										</select>
								        </div>
									</div><!--fifth row-->
									<!--sixth row-->
									<div class="form-group">
										<label for="" class="control-label col-lg-2 col-sm-2" style="text-align:left;">Username</label>
										<div class="col-lg-3 col-sm-4" style="padding: 0px 5px 0 0;">
											<input type="text" name="username" id="username" class="form-control" placeholder="Enter staff username" value="<?php echo @ $staffft->user_username; ?>" required>
										</div>
										<label for="email" class="control-label col-lg-1 col-sm-2" style="text-align:left;">Email: </label>
										<div class="col-lg-3 col-sm-4 col-xs-12" style="padding:0px 5px 0 0;">
							                <input type="email" class="form-control" name="email" id="email" placeholder="Enter staff's email" value="<?php echo @ $staffft->user_email; ?>" required>
								        </div>	
									</div><!--sixth row ends-->
									<?php if(!@$staffft && !@$staffst){ ?>
									<!--seventh row-->
									<div class="form-group">
										<label for="password" class="control-label col-lg-2 col-sm-2" style="text-align:left;">Password</label>
										<div class="col-lg-2 col-sm-4 col-xs-12" style="padding:0px 5px 0 0;">
							                <input type="password" class="form-control" name="password" id="password" placeholder="*************" required>
								        </div>
									</div><!--seventh row ends-->
									<?php } ?>
									<button type="submit" class="btn btn-primary ">
									<?php 
										if($uri == "edit"){
											echo "Update";
										}
										else{
											echo "Create";
										}
									 ?>
									</button>		
									<button type="reset" onclick="window.location.href='<?php echo site_url('home/staffs'); ?>'" class="btn btn-danger" style="margin-top:-5px;">Cancel</button>
								</form>
							</div><!--new staff body ends-->
						</div><!--new staff body ends-->
					</div>
				</div>
			</div><!--right body column ends here-->
		</div>
		<!--body contents end-->