
<div class="modal fade" id="decline_user<?php echo $voters_id?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">         
					<div style="min-height: 0px;" class="panel panel-primary">
						<div class="panel-heading">
							<center>Decline Student</center>
						</div>    
					</div>
				</h4>
			</div>
																
			<div class="modal-body">
				Are you sure you want to decline this student ?
			</div>
									
			<div class="modal-footer">
				<a class="btn btn-success" href="decline_student.php<?php echo '?email='.$email; ?>"><i class="icon-check"></i>&nbsp;Yes</a>
				<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
			</div>
		</div>
			
<!-- /.modal-content -->

	</div>
		
<!-- /.modal-dialog -->
	
</div>