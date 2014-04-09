<?php 
	$d = $this->session->userdata('userinfo'); 
	$userdiv = $d->division_name;
?>
			<!--right body column starts-->
			<div class="col-lg-9 col-md-9 col-sm-9" style="padding: 0 0 0 20px;">
				<div class="row">
					<div class="col-lg-12" style="margin:0px; padding:0px;">
						<!--right body header-->
						<div class="row">
							<div class="col-lg-7 col-md-5 col-sm-5 col-xs-12" style="margin:0px; padding:0px;">
								<h1 style="margin:2px 0px 11px 0px; font-weight:bold;">All Staffs</h1>
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
							<!--all staff body-->
							<div class="col-lg-12" style="margin:0px; padding:0px;">
			                    <div class="panel panel-default">
			                        <div class="panel-heading">
			                            All staffs availabel in database
			                        </div>
			                        <!--panel-heading ends-->
			                        <div class="panel-body">
										<?php if($this->session->flashdata('deletedmsg')){ ?>
			                        	<!--notify msg-->
			                        	<div class="alert alert-danger alert-dismissable">
											  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
											  <?php echo $this->session->flashdata('deletedmsg'); ?>
										</div><!--msg notify ends-->
										<?php } ?>
			                            <div class="table-responsive">
			                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
			                                    <thead>
			                                        <tr>
			                                        	<th  width="25">S-N</th>
			                                            <th>Full Name</th>
			                                            <th>Email</th>
			                                            <th>PBIS Username</th>
			                                            <th>Division</th>
			                                            <th>Type</th>
			                                            <?php if($userdiv=="Administration"){?>
			                                            <th width="102">Action</th>
			                                            <?php } ?>
			                                        </tr>
			                                    </thead>
			                                    <tbody>
			                                    	<?php 
			                                    		$sn = 0;
			                                    		foreach($allusers as $users):
			                                    			$sn = $sn+1;
			                                    	 ?>
			                                        <tr class="odd">
			                                        	<td style="text-align:center;"><?php echo $sn; ?></td>
			                                            <td><?php echo $users->user_fullname; ?></td>
			                                            <td><?php echo $users->user_email; ?></td>
			                                            <td><?php echo $users->user_username; ?></td>
			                                            <td class="center"><?php echo $users->division_name; ?></td>
			                                            <td><?php echo $users->user_type; ?></td>
			                                            <?php if($userdiv=="Administration"){?>
			                                            <td class="center" style="margin:0px; padding:5px 0px 0px 7px;">                                 
			                                            	<button class="btn btn-primary btn-sm" onclick="window.location.href='<?php echo site_url('home/staffs/edit').'/'.$users->user_id; ?>';">Edit</button>
			                                            	<button class="btn btn-primary btn-sm" onclick="window.location.href='<?php echo site_url('home/staffs/delete').'/'.$users->user_id; ?>';">Delete</button>
			                                            </td>
			                                            <?php } ?>
			                                        </tr>
			                                    	<?php endforeach; ?>
			                                    </tbody>
			                                </table>
			                            </div><!-- table-responsive ends -->
			                        </div>
			                        <!-- /.panel-body -->
			                    </div><!--panel ends-->        		
                			</div>
						</div><!--all staff body row ends-->
					</div>
				</div>
			</div><!--right body column ends here-->
		</div><!--body contents end-->