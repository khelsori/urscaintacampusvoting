<?php include ('session.php');?>
<?php include ('head.php');?>

<body>
    <div id="wrapper">

        <!-- Navigation -->
        <?php include ('side_bar.php');?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Current University Students</h3>
				
               
				<hr/>
                
                
                
				
                    <div class="panel panel-default">
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                         
                                            <th>Student ID</th>
                                            <th>Names</th>
                                            <th>Year Registered</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php 
											require 'dbcon.php';
											
											$query = $conn->query("SELECT * FROM ids ORDER BY id_number DESC");
											while($row1 = $query->fetch_array()){
											$voters_id=$row1['id_number'];
                                            $student_id=$voters_id;
										?>
                                      
											<tr>
												<td><?php echo $row1 ['id_number'];?></td>
												<td><?php echo $row1 ['names'];?></td>
												<td><?php echo $row1 ['started'];?></td>	

                                                <td style="text-align:center">
											
                                                    <a rel="tooltip"  title="Delete" id="<?php echo $student_id; ?>" href="#delete_user<?php echo $student_id; ?>" data-target="#delete_user<?php echo $student_id?>" data-toggle="modal"class="btn btn-danger btn-outline"><i class="fa fa-trash-o"></i> Delete</a>	
                                                    <?php include ('delete_student_modal.php'); ?>
                                                
                                                    
                                                </td>
											</tr>
										
                                       <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
              
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->



    </div>
    <!-- /#wrapper -->

    <?php include ('script.php');?>

</body>

</html>

