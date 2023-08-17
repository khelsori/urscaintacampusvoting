<?php include ('head.php');?>
<?php include("sess.php");?>

<body>
<?php
	if(ISSET($_POST['submit']))
		{
			$err = 0;
			if(!ISSET($_POST['pres_id']))
			{
				$_SESSION['pres_id'] = "";
				$err++;
			}
			else
			{
				$_SESSION['pres_id'] = $_POST['pres_id'];
			}
			if(!ISSET($_POST['vp1_id']))
			{
				$_SESSION['vp1_id'] = "";
				$err++;
			}
			else
			{
				$_SESSION['vp1_id'] = $_POST['vp1_id'];
			}
			if(!ISSET($_POST['vp2_id']))
			{
				$_SESSION['vp2_id'] = "";
				$err++;
			}
			else
			{
				$_SESSION['vp2_id'] = $_POST['vp2_id'];
			}
			if(!ISSET($_POST['ss_id']))
			{
				$_SESSION['ss_id'] = "";
				$err++;
			}
			else
			{
				$_SESSION['ss_id'] = $_POST['ss_id'];
			}
			if(!ISSET($_POST['tr_id']))
			{
				$_SESSION['tr_id'] = "";
				$err++;
			}
			else
			{
				$_SESSION['tr_id'] = $_POST['tr_id'];
			}
			if(!ISSET($_POST['aud_id']))
			{
				$_SESSION['aud_id'] = "";
				$err++;
			}
			else
			{
				$_SESSION['aud_id'] = $_POST['aud_id'];
			}
			if(!ISSET($_POST['itp_id']))
			{
				$_SESSION['itp_id'] = "";
				$err++;
			}
			else
			{
				$_SESSION['itp_id'] = $_POST['itp_id'];
			}
			if(!ISSET($_POST['pro_id']))
			{
				$_SESSION['pro_id'] = "";
				$err++;
			}
			else
			{
				$_SESSION['pro_id'] = $_POST['pro_id'];
			}
			if(!ISSET($_POST['ledr_id']))
			{
				$_SESSION['ledr_id'] = "";
				$err++;
			}
			else
			{
				$_SESSION['ledr_id'] = $_POST['ledr_id'];
			}
			if(!ISSET($_POST['eng_id']))
			{
				$_SESSION['eng_id'] = "";
				$err++;
			}
			else
			{
				$_SESSION['eng_id'] = $_POST['eng_id'];
			}
			if(!ISSET($_POST['beed_id']))
			{
				$_SESSION['beed_id'] = "";
				$err++;
			}
			else
			{
				$_SESSION['beed_id'] = $_POST['beed_id'];
			}

			if($err==11){
				echo "<script>alert(\"Please select a candidate first\")</script>";
			}else{
				header("location: vote_result.php");
			}
		}
?>
	<?php include 'side_bar.php'; ?>
    <div id="wrapper">
    </div>

	<form method = "POST">
		<div class="row-grid">
		
			
			<div class="col">

				<div class="panel panel-primary">
					<div class="panel-heading"><center>
						PRESIDENT</center>
					</div>
					<div class="panel-body" style = "background-color:; display:block;" id="pres-div">
					<?php
						$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'President'") or die(mysqli_errno());
						while($fetch = $query->fetch_array())
					{
					?>
						<div id = "position">
						<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img"></center>
						
						<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Level: </strong> ".$fetch['year_level']."<br/><strong>Party: </strong> ".$fetch['party']?></center>
						<center class="give-text"><input type = "checkbox" class="check-give" value = "<?php echo $fetch['candidate_id'] ?>" name = "pres_id" class = "pres">Give Vote</center>
						</div>

					<?php
						}
					?>

					</div>
					
				</div>
			</div>


			<div class="col">

				<div class="panel panel-primary">
					<div class="panel-heading"><center>
						VICE PRESIDENT(Internal)</center>
					</div>
					<div class="panel-body" style = "background-color:;" id="vpres-internal-div">
					<?php
						$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Vice President(internal)'") or die(mysqli_errno());
						while($fetch = $query->fetch_array()){
					?>
				<div id = "position">
					<center><img class = "image-rounded" src = "admin/<?php echo $fetch['img']?>"style ="border-radius:6px;" height = "150px" width = "150px"></center>
					<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Level: </strong> ".$fetch['year_level']."<br/><strong>Party: </strong> ".$fetch['party']?></center>
					<center class="give-text"><input type = "checkbox" class="check-give" value = "<?php echo $fetch['candidate_id'] ?>" name = "vp1_id" class = "vpres">Give Vote</center>
				</div>
					<?php
						}
					?>

					</div>
				
				</div>
			</div>



			<div class="col">
				<div class="panel panel-primary">
					<div class="panel-heading">
					<center>Vice President(External)</center>
					</div>
					<div class="panel-body" style = "background-color:;"  id="vpres-external-div">
						<?php
							$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Vice President(External)'") or die(mysqli_errno());
							while($fetch = $query->fetch_array())
							{
						?>
								<div id = "position">
									<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img"></center>
								<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Level: </strong> ".$fetch['year_level']."<br/><strong>Party: </strong> ".$fetch['party']?></center>
								<center class="give-text"><input type = "checkbox" class="check-give" value = "<?php echo $fetch['candidate_id'] ?>" name = "vp2_id" class = "ua">Give Vote</center>
								</div>

						<?php
							}
						?>
					</div>      
				</div>
			</div>

		</div>
	







		<div class="row-grid">

			<div class="col">
			<div class="panel panel-primary">
					<div class="panel-heading">
					<center>Secretary</center>
					</div>
					<div class="panel-body" style = "background-color:;"  id="secretary-div">
						<?php
							$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Secretary'") or die(mysqli_errno());
							while($fetch = $query->fetch_array())
							{
						?>
								<div id = "position">
									<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img"></center>
									<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Level: </strong> ".$fetch['year_level']."<br/><strong>Party: </strong> ".$fetch['party']?></center>
								<center class="give-text"><input type = "checkbox" class="check-give" value = "<?php echo $fetch['candidate_id'] ?>" name = "ss_id" class = "ss">Give Vote</center>
								</div>
			
						<?php
							}
						?>
					</div>      
				</div>
			</div>	
			
			<div class="col">
			<div class="panel panel-primary">
					<div class="panel-heading">
					<center>Treasurer</center>
					</div>
					<div class="panel-body" style = "background-color:;"  id="treasurer-div">
						<?php
							$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Treasurer'") or die(mysqli_errno());
							while($fetch = $query->fetch_array())
							{
						?>
								<div id = "position">
									<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img"></center>
									<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Level: </strong> ".$fetch['year_level']."<br/><strong>Party: </strong> ".$fetch['party']?></center>
									<center class="give-text"><input type = "checkbox" class="check-give" value = "<?php echo $fetch['candidate_id'] ?>" name = "tr_id" class = "ea">Give Vote</center>
								</div>
			
						<?php
							}
						?>
					</div>      
				</div>
			</div>
			<div class="col">
			<div class="panel panel-primary">
					<div class="panel-heading">
					<center>Auditor</center>
					</div>
					<div class="panel-body" style = "background-color:;"  id="auditor-div">
						<?php
							$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Audit'") or die(mysqli_errno());
							while($fetch = $query->fetch_array())
							{
						?>
								<div id = "position">
									<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img"></center>
									<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Level: </strong> ".$fetch['year_level']."<br/><strong>Party: </strong> ".$fetch['party']?></center>
									<center class="give-text"><input type = "checkbox"  class="check-give" value = "<?php echo $fetch['candidate_id'] ?>" name = "aud_id" class = "treasurer">Give Vote</center>
								</div>
			
						<?php
							}
						?>
					</div>      
				</div>
			</div>
		</div>

		<div class="row-grid">


			<div class="col">
			<div class="panel panel-primary">
					<div class="panel-heading">
					<center>P.R.O.</center>
					</div>
					<div class="panel-body" style = "background-color:;"  id="pro-div">
						<?php
							$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'P.R.O.'") or die(mysqli_errno());
							while($fetch = $query->fetch_array())
							{
						?>
								<div id = "position">
									<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img"></center>
								<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Level: </strong> ".$fetch['year_level']."<br/><strong>Party: </strong> ".$fetch['party']?></center>
									<center class="give-text"><input type = "checkbox" class="check-give" value = "<?php echo $fetch['candidate_id'] ?>" name = "pro_id" class = "vtr">Give Vote</center>
								</div>
			
						<?php
							}
						?>
					</div>      
				</div>
			</div>
			<div class="col">
			<div class="panel panel-primary">
					<div class="panel-heading">
					<center>BSIT Representative</center>
					</div>
					<div class="panel-body" style = "background-color:;"  id="bsit-div">
						<?php
							$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'BSIT Representative'") or die(mysqli_errno());
							while($fetch = $query->fetch_array())
							{
						?>
								<div id = "position">
									<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img"></center>
								<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Level: </strong> ".$fetch['year_level']."<br/><strong>Party: </strong> ".$fetch['party']?></center>
									<center class="give-text"><input type = "checkbox" class="check-give" value = "<?php echo $fetch['candidate_id'] ?>" name = "itp_id" class = "sg">Give Vote</center>
								</div>
			
						<?php
							}
						?>
					</div>      
				</div>
			</div>
			<div class="col">
			<div class="panel panel-primary">
					<div class="panel-heading">
					<center>BTLED Representative</center>
					</div>
					<div class="panel-body" style = "background-color:;"  id="btled-div">
						<?php
							$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'BTLED Representative'") or die(mysqli_errno());
							while($fetch = $query->fetch_array())
							{
						?>
								<div id = "position">
									<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img"></center>
									<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Level: </strong> ".$fetch['year_level']."<br/><strong>Party: </strong> ".$fetch['party']?></center>
									<center class="give-text"><input type = "checkbox" class="check-give" value = "<?php echo $fetch['candidate_id'] ?>" name = "ledr_id" class = "tas">Give Vote</center>
								</div>
			
						<?php
							}
						?>
					</div>      
				</div>
			</div>

		</div>


		<div class="row-grid-2">


			<div class="col">
			<div class="panel panel-primary">
					<div class="panel-heading">
					<center>BSE-ENGLISH Representative</center>
					</div>
					<div class="panel-body" style = "background-color:;"  id="english-internal-div">
						<?php
							$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'BSE-ENGLISH Representative'") or die(mysqli_errno());
							while($fetch = $query->fetch_array())
							{
						?>
								<div id = "position">
									<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img"></center>
								<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Level: </strong> ".$fetch['year_level']."<br/><strong>Party: </strong> ".$fetch['party']?></center>
									<center class="give-text"><input type = "checkbox" class="check-give" value = "<?php echo $fetch['candidate_id'] ?>" name = "eng_id" class = "ps">Give Vote</center>
								</div>
			
						<?php
							}
						?>
					</div>      
				</div>
			</div>




			<div class="col">
			<div class="panel panel-primary">
					<div class="panel-heading">
					<center>BE-ED Representative</center>
					</div>
					<div class="panel-body" style = "background-color:;"  id="beed-div">
						<?php
							$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'BE-ED Representative'") or die(mysqli_errno());
							while($fetch = $query->fetch_array())
							{
						?>
								<div id = "position">
									<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img"></center>
								<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Level: </strong> ".$fetch['year_level']."<br/><strong>Party: </strong> ".$fetch['party']?></center>
									<center class="give-text"><input type = "checkbox" class="check-give"	 value = "<?php echo $fetch['candidate_id'] ?>" name = "beed_id" class = "as">Give Vote</center>
								</div>
			
						<?php
							}
						?>
					</div>      
				</div>
			</div>
		</div>
     <hr/>
		
		<center><button class = "btn btn-success ballot" type = "submit" name = "submit">Submit Ballot</button></center>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</form>
</body>
<?php include ('script.php');
include ('footer.php');?>
  
  <script type = "text/javascript">
		$(document).ready(function(){
			alert("Only One Vote");


			$("#pres-div").on("change", ".check-give", function(){
				$("#pres-div").find(".check-give").prop("checked", false);
				$(this).prop("checked", true);
			});

			$("#vpres-internal-div").on("change", ".check-give", function(){
				$("#vpres-internal-div").find(".check-give").prop("checked", false);
				$(this).prop("checked", true);
			});

			$("#vpres-external-div").on("change", ".check-give", function(){
				$("#vpres-external-div").find(".check-give").prop("checked", false);
				$(this).prop("checked", true);
			});

			$("#secretary-div").on("change", ".check-give", function(){
				$("#secretary-div").find(".check-give").prop("checked", false);
				$(this).prop("checked", true);
			});

			$("#treasurer-div").on("change", ".check-give", function(){
				$("#treasurer-div").find(".check-give").prop("checked", false);
				$(this).prop("checked", true);
			});
			
			$("#auditor-div").on("change", ".check-give", function(){
				$("#auditor-div").find(".check-give").prop("checked", false);
				$(this).prop("checked", true);
			});
			
			$("#pro-div").on("change", ".check-give", function(){
				$("#pro-div").find(".check-give").prop("checked", false);
				$(this).prop("checked", true);
			});

			$("#bsit-div").on("change", ".check-give", function(){
				$("#bsit-div").find(".check-give").prop("checked", false);
				$(this).prop("checked", true);
			});

			$("#btled-div").on("change", ".check-give", function(){
				$("#btled-div").find(".check-give").prop("checked", false);
				$(this).prop("checked", true);
			});

			$("#english-div").on("change", ".check-give", function(){
				$("#english-div").find(".check-give").prop("checked", false);
				$(this).prop("checked", true);
			});

			$("#beed-div").on("change", ".check-give", function(){
				$("#beed-div").find(".check-give").prop("checked", false);
				$(this).prop("checked", true);
			});
			
		});	
	</script>
</html>

