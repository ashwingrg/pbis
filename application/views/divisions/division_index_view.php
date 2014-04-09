<?php 
	$d = $this->session->userdata('userinfo');
	$divname =  $d->division_name;
 ?>
			<!--right body column starts-->
			<div class="col-lg-9 col-md-9 col-sm-9" style="padding: 0 0 0 20px;">
				<div class="row">
					<div class="col-lg-12" style="margin:0px; padding:0px;">
						<!--right body header-->
						<div class="row">
							<div class="col-lg-7 col-md-5 col-sm-5 col-xs-12" style="margin:0px; padding:0px;">
								<h1 style="margin:2px 0px 11px 0px; font-weight:bold;">All Divisions</h1>
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
							<!--all division body-->
							<div class="col-lg-12" style="margin:0px; padding:0px;">
			                    <div class="panel panel-default">
			                        <div class="panel-heading">
			                            All divisions availabel in database
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
			                                            <th width="25">S-N</th>
			                                            <th>Division Name</th>
			                                            <th>Division Chief</th>
			                                            <th width="102">
			                                            	<?php if($divname == "Administration"){
			                                            			echo "Action";
			                                            		}
			                                            		else{
			                                            			echo "Remarks";
			                                            	} ?>
			                                            </th>
			                                        </tr>
			                                    </thead>
			                                    <tbody>
			                                    <?php 
			                 						$sn = 0;
			                                    	foreach($alldivisions as $divisions):
			                                     ?>
			                                        <tr class="odd">
			                                            <td style="text-align:center;"><?php echo $sn+=1; ?></td>
			                                            <td><?php echo $divisions->division_name; ?></td>
			                                            <td class="center"><?php echo $divisions->division_chief; ?></td>
			                                            <td class="center" style="margin:0px; padding:5px 0px 0px 7px;">
			                                            	<?php if($divname == "Administration"){ ?>
			                                            	<button class="btn btn-primary btn-sm" onclick="window.location.href='<?php echo site_url('home/divisions/edit').'/'.$divisions->division_id; ?>';">Edit</button>
			                                            	<button class="btn btn-primary btn-sm" onclick="window.location.href='<?php echo site_url('home/divisions/delete').'/'.$divisions->division_id; ?>';">Delete</button>
			                                            	<?php } ?>
			                                            </td>
			                                        </tr>
			                                    <?php endforeach; ?>
			                                    </tbody>
			                                </table>
			                            </div><!-- table-responsive ends -->
			                        </div>
			                        <!-- /.panel-body -->
			                    </div><!--panel ends-->        		
                			</div>
						</div><!--all division body row ends-->
					</div>
				</div>
			</div><!--right body column ends here-->
		</div><!--body contents end-->