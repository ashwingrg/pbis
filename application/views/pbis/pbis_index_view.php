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
								<h1 style="margin:2px 0px 11px 0px; font-weight:bold;">PBIS Percentage</h1>
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

											

								    		<form action="" method="post" class="form-horizontal " style="margin-top:-1em;">
								    			
								    			<table class="table table-responsive table-bordered">
												    <thead>
												        <tr>
												        	<th width="45">S-N</th>
												            <th>Employee Name</th>
												            <th>Division</th>
												            <th>Quarter</th>
												            <th>Month</th>
												            
												            <th>PBIS Percentage</th>
												        </tr>
												    </thead>
												    <tbody>
												    	<?php 
												    		$sn = 0;
												    		foreach($d as $allpbis):

												    	 ?>
												        <tr>

												        	<td style="text-align:center;" width="20">
												        		<span><?php echo $sn+=1; ?></span>
												        	</td>
												            <td>
												            	<span><?php echo  $allpbis->division_chief; ?></span>
												            </td>
												            <td>
												            	<span><?php echo  $allpbis->division_name; ?></span>
												            </td>
												            <td>
												            	<span><?php echo $allpbis->quarter; ?></span>
												            </td>
												            <td>
												            	<span><?php echo $allpbis->month; ?></span>
												            </td>
												            <td><span><?php echo $allpbis->pbispercentage; ?></span></td>
												        </tr>
												    	<?php endforeach; ?>
												    </tbody>
												</table>
									    		
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