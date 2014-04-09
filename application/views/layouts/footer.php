
		<!--footer starts-->
		<footer>
			<div class="col-lg-12 footercol">
				<div class="row footerrow">
					<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 footersmcol">
						<small>&copy; 2014 <a href="#">XYZ Company</a></small>
					</div>	
					<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 footersmcol">
						<small class="pull-right">Developed by : <a href="#">Islington College, Kamalpokhari</a></small>
					</div>
				</div>
			</div>
		</footer><!--footer ends here-->
	</div><!--.container ends-->
	<!--scripts-->
	<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.0.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/jquery.dataTables.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins/dataTables.bootstrap.js"></script>
	<script>
	$(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    //new workplan detail-months filter
	(function(){
		$('#quarter').on('change', function(){
			var quarter = $(this).val();
			var data='quarterid='+quarter;
			var url = '<?php echo base_url();?>workplandetail/filterQuarter';
			$.post(url,data,function(res){
				$('#months').html(res);
			});
		});
	})();
	</script>
	<!--scriipts-->
</body>
</html>
