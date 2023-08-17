<?php include ('head.php');?>
<?php include ('sess.php');?>

<body>
<?php include 'side_bar.php'; ?>
    <div id="row">
        <?php
			if(ISSET($_POST['submit']))
				{
					if(!ISSET($_POST['pres_id']))
					{
						$_SESSION['pres_id'] = "";
					}
					else
					{
						$_SESSION['pres_id'] = $_POST['pres_id'];
					}
					if(!ISSET($_POST['vp1_id']))
					{
						$_SESSION['vp1_id'] = "";
					}
					else
					{
						$_SESSION['vp1_id'] = $_POST['vp1_id'];
					}
					if(!ISSET($_POST['vp2_id']))
					{
						$_SESSION['vp2_id'] = "";
					}
					else
					{
						$_SESSION['vp2_id'] = $_POST['vp2_id'];
					}
					if(!ISSET($_POST['ss_id']))
					{
						$_SESSION['ss_id'] = "";
					}
					else
					{
						$_SESSION['ss_id'] = $_POST['ss_id'];
					}
					if(!ISSET($_POST['tr_id']))
					{
						$_SESSION['tr_id'] = "";
					}
					else
					{
						$_SESSION['tr_id'] = $_POST['tr_id'];
					}
					if(!ISSET($_POST['aud_id']))
					{
						$_SESSION['aud_id'] = "";
					}
					else
					{
						$_SESSION['aud_id'] = $_POST['aud_id'];
					}
					if(!ISSET($_POST['itp_id']))
					{
						$_SESSION['itp_id'] = "";
					}
					else
					{
						$_SESSION['itp_id'] = $_POST['itp_id'];
					}
					if(!ISSET($_POST['pro_id']))
					{
						$_SESSION['pro_id'] = "";
					}
					else
					{
						$_SESSION['pro_id'] = $_POST['pro_id'];
					}
					if(!ISSET($_POST['ledr_id']))
					{
						$_SESSION['ledr_id'] = "";
					}
					else
					{
						$_SESSION['ledr_id'] = $_POST['ledr_id'];
					}
					if(!ISSET($_POST['eng_id']))
					{
						$_SESSION['eng_id'] = "";
					}
					else
					{
						$_SESSION['eng_id'] = $_POST['eng_id'];
					}
					if(!ISSET($_POST['beed_id']))
					{
						$_SESSION['beed_id'] = "";
					}
					else
					{
						$_SESSION['beed_id'] = $_POST['beed_id'];
					}
				}
		?>
    </div>
			<center>
		  <div class="col-lg-8" style = "margin-left:25%; margin-right:25%;" >
		  <div class = "alert alert-info">
			<div class="panel-heading"><center>PRESIDENT</center></div>
			<br />
			<?php
				if(!$_SESSION['pres_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[pres_id]'")->fetch_array();
						
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			</div>
			<div class = "alert alert-success" >
			<div class="panel-heading"><center>VICE PRESIDENT(INTERNAL)</center></div>
			<br />
			<?php
				if(!$_SESSION['vp1_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[vp1_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			</div>
			<div class = "alert alert-info">
			<div class="panel-heading"><center>VICE PRESIDENT(EXTERNAL)</center></div>
			<br/>
			<?php
				if(!$_SESSION['vp2_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[vp2_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
				
			</div>
			<div class = "alert alert-success" >
			<div class="panel-heading"><center>SECRETARY</center></div>
			<br />
			<?php
				if(!$_SESSION['ss_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[ss_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			
			</div>
			<div class = "alert alert-info">
			
			<div class="panel-heading"><center>AUDITOR</center></div>
			<br />
			<?php
				if(!$_SESSION['tr_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[tr_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			
			</div>
			<div class = "alert alert-success">
			<div class="panel-heading"><center>TREASURER</center></div>
			<br />
			<?php
				if(!$_SESSION['aud_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[aud_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			
			</div>
			<div class = "alert alert-info" >
			<div class="panel-heading"><center>P.R.O.</center></div>
			<br />
			<?php
				if(!$_SESSION['itp_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[itp_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			</div>
			<div class = "alert alert-success">
			<div class="panel-heading"><center>BE-ED REPRESENTATIVE</center></div>
			<br />
			<?php
				if(!$_SESSION['pro_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[pro_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
				
			</div>
			<div class = "alert alert-info">
			<div class="panel-heading"><center>BSIT REPRESENTATIVE</center></div>
			<br />
			<?php
				if(!$_SESSION['ledr_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[ledr_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			
			</div>
			<div class = "alert alert-success">
			<div class="panel-heading"><center>BTLED REPRESENTATIVE</center></div>
			<br />
			<?php
				if(!$_SESSION['eng_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[eng_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			
			</div>
			<div class = "alert alert-info">
			<div class="panel-heading"><center>BSE-ENGLISH REPRESENTATIVE</center></div>
			<br />
			<?php
				if(!$_SESSION['beed_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[beed_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			
			</div>
			<br />
			</div>
	</center>
                                    <div class="modal-body">
										<p><center>Are you sure you want to submit your Votes? </center></p>
                                    </div>
									
									<div class="modal-footer"><center>
								<a href="#vote_success" data-toggle="modal"><button type = "button" class="btn btn-success"><i class="icon-check"></i>&nbsp;Yes</button></a>
								<?php include "admin/vote_success_modal.php" ?>
								<a href = "vote.php"><button class="btn btn-danger" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Back</button></a>
									</center></div>
                                    <!-- /.modal-content -->
                                
                                <!-- /.modal-dialog -->
                            

</body>

<?php include ('script.php');
include ('footer.php');?>
</html>

