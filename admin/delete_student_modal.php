
<div class="modal fade" id="delete_user<?php echo $student_id?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">         
					<div style="min-height: 0px;" class="panel panel-primary">
						<div class="panel-heading">
							<center>Delete Student</center>
						</div>    
					</div>
				</h4>
			</div>
																
			<div class="modal-body">
				Are you sure you want to delete this student ?
			</div>
									
			<div class="modal-footer">
				<a class="btn btn-danger" href="delete_student.php<?php echo '?student_id='.$student_id; ?>"><i class="icon-check"></i>&nbsp;Yes</a>
				<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
			</div>
		</div>
			
<!-- /.modal-content -->

	</div>
		
<!-- /.modal-dialog -->
	
</div>
