<?php 
	$userdata = $this->session->userdata('userinfo'); 
	$addedmsg = $this->session->flashdata('added');
?>
			<!--right body column starts-->
			<div class="col-lg-9 col-md-9 col-sm-9" style="padding: 0 0 0 20px;">
				<div class="row">
					<div class="col-lg-12" style="margin:0px; padding:0px;">
						<!--right body header-->
						<div class="row">
							<div class="col-lg-7 col-md-5 col-sm-5 col-xs-12" style="margin:0px; padding:0px;">
								<h1 style="margin:2px 0px 11px 0px; font-weight:bold;">New Workplan Detail</h1>
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
								<div class="col-lg-12"><!--left-->
								    <ul class="nav nav-tabs">
										<li class="active"><a href="#newworkplan" data-toggle="tab">Create New</a></li>
								    </ul>
								    <div class="tab-content" style="padding-top:1.5em;">
								    	<div class="tab-pane active" id="newworkpan">
								    		<form action="<?php echo current_url(); ?>" method="post" class="form-horizontal workplandetailform" style="margin-top:-1em;">
								    			<div class="form-group">
								    				<label for="" class="control-label col-lg-3" style="text-align:left;">Division Name: &nbsp;&nbsp;<strong><?php echo $userdata->division_name; ?></strong></label>
								    				<input type="hidden" name="division_name" id="division_name" value="<?php echo $userdata->division_name; ?>">
								    			</div>
								    			<div class="form-group">
								    				<label for="" class="control-label col-lg-4" style="text-align:left;">Division Chief: &nbsp;&nbsp;<strong><?php echo $userdata->user_fullname; ?></strong></label>
								    				<input type="hidden" name="division_chief" id="division_chief" value="<?php echo $userdata->user_fullname; ?>">
								    			</div>
								    			<div class="form-group">
								    				<label for="" class="control-label col-lg-1" style="text-align:left;">Quarter:</label>
								    				<div class="col-lg-3">
								    					<select name="quarter" id="quarter" class="form-control" required style="border-radius:0px;">
								    						<option value="">Please Select..</option>
															<option value="I">I</option>
															<option value="II">II</option>
															<option value="III">III</option>
								    					</select>
								    				</div>
								    			</div>
									    		<div class="form-group">
								    				<label for="" class="control-label col-lg-1" style="text-align:left;">Month:</label>
								    				<div class="col-lg-3">
								    					<select name="months" id="months" class="form-control" required style="border-radius:0px;">
															<option value="">Please Select..</option>
								    					</select>
								    				</div>
								    			</div>
								    			<table class="table table-responsive table-bordered">
												    <thead>
												        <tr>
												        	<th>Activity</th>
												            <th width="220">Activity Name</th>
												            <th width="160">Unit</th>
												            <th width="60">Weightage</th>
												            <th colspan="4" style="text-align:center;">Performance Indicators</th>
												        </tr>
												    </thead>
												    <tbody>
												    	<!--Activity1-->
												        <tr>
												        	<td>
												        		Activity1
												        	</td>
												            <td>
												            	<input type="text" name="activity1name" id="activity1name" class="form-control" placeholder="Enter Activity Name" required>
												            </td>
												            <td>
												            	<input type="text" name="activity1unit" id="activity1unit" class="form-control" placeholder="Time or Nos." required>
												            </td>
												            <td>
												            	<input type="number" name="activity1weightage1" id="activity1weightage1" class="form-control" required>
												            </td>
												            <td>
												            	<input type="number" name="activity1hundred" id="activity1hundred" class="form-control" placeholder="100" required>
												            </td>
												            <td>
												            	<input type="number" name="activity1seventyfive" id="activity1seventyfive" class="form-control" placeholder="75" required>
												            </td>
												            <td>
												            	<input type="number" name="activity1fifty" id="activity1fifty" class="form-control" placeholder="50" required>
												            </td>
												            <td>
												            	<input type="number" name="activity1lessthanfifty" id="activity1lessthanfifty" class="form-control" placeholder="<50" required>
												            </td>  
												        </tr>
												        <!--Activity1 ends-->
												        <!--Activity2-->
												        <tr>
												        	<td>
												        		Activity2
												        	</td>
												            <td>
												            	<input type="text" name="activity2name" id="activity2name" class="form-control" placeholder="Enter Activity Name">
												            </td>
												            <td>
												            	<input type="text" name="activity2unit" id="activity2unit" class="form-control" placeholder="Time or Nos.">
												            </td>
												            <td>
												            	<input type="number" name="activity2weightage" id="activity2weightage2" class="form-control">
												            </td>
												            <td>
												            	<input type="number" name="activity2hundred" id="activity2hundred" class="form-control" placeholder="100">
												            </td>
												            <td>
												            	<input type="number" name="activity2seventyfive" id="activity2seventyfive" class="form-control" placeholder="75">
												            </td>
												            <td>
												            	<input type="number" name="activity2fifty" id="activity2fifty" class="form-control" placeholder="50">
												            </td>
												            <td>
												            	<input type="number" name="activity2lessthanfifty" id="activity2lessthanfifty" class="form-control" placeholder="<50">
												            </td>  
												        </tr>
												        <!--Activity2 ends-->
												        <!--Activity3-->
												        <tr>
												        	<td>
												        		Activity3
												        	</td>
												            <td>
												            	<input type="text" name="activity3name" id="activity3" class="form-control" placeholder="Enter Activity Name">
												            </td>
												            <td>
												            	<input type="text" name="activity3unit" id="activity3unit" class="form-control" placeholder="Time or Nos.">
												            </td>
												            <td>
												            	<input type="number" name="activity3weightage" id="activity3weightage" class="form-control">
												            </td>
												            <td>
												            	<input type="number" name="activity3hundred" id="activity3hundred" class="form-control" placeholder="100">
												            </td>
												            <td>
												            	<input type="number" name="activity3seventyfive" id="activity3seventyfive" class="form-control" placeholder="75">
												            </td>
												            <td>
												            	<input type="number" name="activity3fifty" id="activity3fifty" class="form-control" placeholder="50">
												            </td>
												            <td>
												            	<input type="number" name="activity3lessthanfifty" id="activity3lessthanfifty" class="form-control" placeholder="<50">
												            </td>  
												        </tr>
												        <!--Activity3 ends-->
												    </tbody>
												</table>


												

									    		<p>
									    			<button type="submit" class="btn btn-primary" style="margin-left:1em; border-radius:0px;">Create</button>
									    			<button type="reset" onclick="window.location.href='';" class="btn btn-danger" style="margin-top:-5px; border-radius:0px;">Cancel</button>
									    		</p>
									    	</form>
								      	</div>
								  	</div>
							  	</div><!--left content-->
							  	<!--right-->
							  	<!-- <div class="col-lg-6" style="padding-top:3em;">
							  		<?php // if(@$addedmsg){ ?>
							  		<div class="alert alert-info alert-dismissable" id="alert">
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
										<?php // echo @ $addedmsg; ?>
									</div>
								<?php  ?>
							  	</div> --><!--right content-->
							</div><!--rightbody columns body ends-->
						</div><!--all staff body row ends-->
					</div>
				</div>
			</div><!--right body column ends here-->
		</div><!--body contents end-->