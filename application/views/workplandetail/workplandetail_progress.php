<?php 
	$userdata = $this->session->userdata('userinfo'); 
	$divname = $userdata->division_name;
	//print_r($wpdact);

?>
			<!--right body column starts-->
			<div class="col-lg-9 col-md-9 col-sm-9" style="padding: 0 0 0 20px;">
				<div class="row">
					<div class="col-lg-12" style="margin:0px; padding:0px;">
						<!--right body header-->
						<div class="row">
							<div class="col-lg-7 col-md-5 col-sm-5 col-xs-12" style="margin:0px; padding:0px;">
								<h1 style="margin:2px 0px 11px 0px; font-weight:bold;">Workplan Progress</h1>
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
								    
								    <div class="tab-content" style="padding-top:1.5em;">
								    	<div class="tab-pane active" id="newworkpan">

											<?php if($this->session->flashdata('updatedmsg')){ ?>
				                        	<!--notify msg-->
				                        	<div class="alert alert-success alert-dismissable">
												  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
												  <?php echo $this->session->flashdata('updatedmsg'); ?>
											</div><!--msg notify ends-->
											<?php } ?>
											<?php if($this->session->flashdata('approved')){ ?>
				                        	<!--notify msg-->
				                        	<div class="alert alert-success alert-dismissable">
												  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
												  <?php echo $this->session->flashdata('approved'); ?>
											</div><!--msg notify ends-->
											<?php } ?>

								    		<form action="" method="post" class="form-horizontal " style="margin-top:-1em;">
								    			<div class="form-group">
								    				<label for="" class="control-label col-lg-3" style="text-align:left;">Division Name: &nbsp;&nbsp;<strong><?php echo $wpd->division_name; ?></strong></label>
								    				
								    			</div>
								    			<div class="form-group">
								    				<label for="" class="control-label col-lg-4" style="text-align:left;">Division Chief: &nbsp;&nbsp;<strong><?php echo $wpd->division_chief; ?></strong></label>
								    				
								    			</div>
								    			<div class="form-group">
								    				<label for="" class="control-label col-lg-4" style="text-align:left;">Quarter: &nbsp;&nbsp;<strong><?php echo $wpd->quarter; ?></strong></label>
								    			</div>
									    		<div class="form-group">
								    				<label for="" class="control-label col-lg-4" style="text-align:left;">Month: &nbsp;&nbsp;<strong><?php echo $wpd->month; ?></strong></label>
								    			</div>
								    			<table class="table table-responsive table-bordered">
												    <thead>
												        <tr>
												        	<th>Activity</th>
												            <th>Activity Name</th>
												            <th>Unit</th>
												            <th>Weightage</th>
												            <th colspan="4" style="text-align:center;" width="250">Performance Indicators</th>
												            <th colspan="3">Peformance Achievement</th>
												        </tr>
												    </thead>
												    <tbody>
												    	<?php 
												    		$sn = 0;
												    		foreach($wpdact as $allwpdact):

												    	 ?>
												        <tr>

												        	<td style="text-align:center;" width="20">
												        		<span><?php echo $sn+=1; ?></span>
												        	</td>
												            <td>
												            	<span><?php echo  $allwpdact->activity_name; ?></span>
												            </td>
												            <td>
												            	<span><?php echo  $allwpdact->unit; ?></span>
												            </td>
												            <td>
												            	<span><?php echo $allwpdact->weightage; ?></span>
												            </td>
												            <td>
												            	<span><?php echo $allwpdact->hundred; ?></span>
												            </td>
												            <td>
												            	<span><?php echo $allwpdact->seventyfive; ?></span>
												            </td>
												            <td>
												            	<span><?php echo $allwpdact->fifty; ?></span>
												            </td>
												            <td>
												            	<span><?php echo $allwpdact->lessthanfifty; ?></span>
												            </td>
												            <td>
												            	<form action="<?php echo current_url(); ?>" method="post">
												            		<input type="hidden" name="wpdaid" id="wpdaid" value="<?php echo $allwpdact->wpda_id; ?>">
												            		<input type="number" name="measurement" id="measurement" class="form-control" placeholder="Measurement" style="width:10em; border-radius:0px;" value="<?php echo $allwpdact->measurement; ?>" required>
												            	<input type="submit" value="UPDATE" style="margin-top:0.5em;">
												            	</form>
												            </td>
												            
												        </tr>
												    	<?php endforeach; ?>
												    </tbody>
												</table>
									    		<p>
									    			<button type="button" class="btn btn-primary" style="margin-left:1em; border-radius:0px;" onclick="window.location.href='<?php echo site_url('home/workplandetail'); ?>';"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;&nbsp;Go Back</button>
													<button type="button" class="btn btn-primary" style="margin-left:1em; border-radius:0px;" onclick="window.location.href='<?php echo site_url('home/progressdetail').'/'.$wpd->wpd_id; ?>'" ><span class="glyphicon glyphicon-arrow-up"></span>&nbsp;&nbsp;Send to Administration</button>
													
									    		</p>
									    	</form>
								      	</div>
								  	</div>
							  	</div><!--left content-->
							  	
							</div><!--rightbody columns body ends-->
						</div><!--all staff body row ends-->
					</div>
				</div>
			</div><!--right body column ends here-->
		</div><!--body contents end-->