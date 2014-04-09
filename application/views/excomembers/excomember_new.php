			<!--right body column starts-->
			<div class="col-lg-9 col-md-9 col-sm-9" style="padding: 0 0 0 20px;">
				<div class="row">
					<div class="col-lg-12" style="margin:0px; padding:0px;">
						<!--right body header-->
						<div class="row">
							<div class="col-lg-7 col-md-5 col-sm-5 col-xs-12" style="margin:0px; padding:0px;">
								<h1 style="margin:2px 0px 11px 0px; font-weight:bold;">
								<?php 
									if(@$memberdet){
										echo "Edit ExCo Member";
									}
									else {
										echo "New ExCo Member";
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
							<!--rightbody column body-->
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 maincontent">
								<div class="col-lg-5 col-md-7 col-sm-7 col-xs-12">
									<form class="form-horizontal" method="post" action="<?php echo current_url(); ?>" role="form" style="margin-top:0.5em;">
										<div class="form-group">
									    	<label for="membername" class="col-lg-4 col-md-4 col-sm-4 control-label">Member Name :</label>
									    	<div class="col-lg-8 col-md-8 col-sm-8">
									      		<input type="text" class="form-control" name="membername" id="membername" value="<?php echo @ $memberdet->user_fullname; ?>" placeholder="ExCo Member Name" required>
									    	</div>
									 	</div>
									 	<div class="form-group">
									    	<label for="membertype" class="col-lg-4 col-md-4 col-sm-4 control-label">Member Type :</label>
									    	<div class="col-lg-8 col-md-8 col-sm-8">
									      		<select name="membertype" id="membertype" class="form-control" value="" required>
									      			<option value="
														<?php
														if(@$memberdet){ 
										      				if(@$memberdet->user_type=="ceo"){
										      					echo "ceo";
										      				}
										      				else{
										      					echo "md";
										      				} 
										      			}
										      			else {
										      				echo "ceo";
										      			}
										      			?>
									      			">
										      			<?php 
										      			if(@$memberdet){
										      				if(@$memberdet->user_type=="ceo"){
										      					echo "CEO";
										      				}
										      				else{
										      					echo "MD";
										      				} 
										      			}
										      			else {
										      				echo "CEO";
										      			}
										      			?>
									      			</option>
									      			<option value="
														<?php 
														if(@$memberdet){
										      				if(@$memberdet->user_type != "md"){
										      					echo "md";
										      				}
										      				else {
										      					echo "ceo";
										      				}
										      			}
										      			else {
										      				echo "md";
										      			}
									      				?>
									      			">
										      			<?php 
										      			if(@$memberdet){
										      				if(@$memberdet->user_type != "md"){
										      					echo "MD";
										      				}
										      				else {
										      					echo "CEO";
										      				}
										      			}
										      			else {
										      				echo "MD";
										      			}
										      			?>
									      			</option>
									      		</select>
									    	</div>
									 	</div>
									 	
									 	<div class="form-group">
									    	<label for="username" class="col-lg-4 col-md-4 col-sm-4 control-label">PBIS username</label>
									    	<div class="col-lg-8 col-md-8 col-sm-8">
									      		<input type="text" class="form-control" name="username" id="username" value="<?php echo @$memberdet->user_username;  ?>" placeholder="ExCo Member username" required>
									    	</div>
									 	</div>
									 	<div class="form-group">
									    	<label for="memberemail" class="col-lg-4 col-md-4 col-sm-4 control-label">Member Email:</label>
									    	<div class="col-lg-8 col-md-8 col-sm-8">
									      		<input type="email" class="form-control" name="memberemail" id="memberemail" value="<?php echo @ $memberdet->user_email; ?>" placeholder="ExCo Member Email" required>
									    	</div>
									 	</div>
									 	<div class="form-group">
									    	<label for="memberpsw" class="col-lg-4 col-md-4 col-sm-4 control-label">Password:</label>
									    	<div class="col-lg-8 col-md-8 col-sm-8">
									      		<input type="password" class="form-control" name="memberpsw" id="memberpsw" value="<?php echo @ $memberdet->user_password; ?>" placeholder="************" required>
									    	</div>
									 	</div>
									 	
									 	<button type="submit" class="btn btn-primary">
										<?php 
											if(@$memberdet){
												echo "Update";
											}
											else {
												echo "Create";
											}
										?>
									 	</button>
									 	<button type="reset" onclick="window.location.href='<?php echo site_url('home/exco'); ?>'" class="btn btn-danger" style="margin-top:-5px;">Cancel</button>
									</form>
								</div>	
								<?php if($this->session->flashdata('addedmsg')){ ?>
								 <!--Added Notify-->
								 <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
									<div class="alert alert-info alert-dismissable">
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
										<?php echo $this->session->flashdata('addedmsg');  ?>
									</div>
								</div><!--added notify ends-->
								<?php } ?>
							</div><!--rightbody columns body ends-->
						</div><!--right body row ends-->
					</div>
				</div>
			</div><!--right body column ends here-->
		</div>
		<!--body contents end-->