<?php
	session_start();
	require_once 'dbcon.php';
	
	
	if(isset($_POST['login']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		$login_id = $_POST['login_id'];
	
		
		$query = $conn->query("SELECT * FROM users WHERE username = 	'$username' AND password = '$password' AND user_id = '$login_id' ") or die($conn->error);
		$rows = $query->num_rows;
		$fetch = $query->fetch_array();
																		
			if ($rows == 0) 
					{
						?>
						<script type="text/javascript">
						alert('Username/Password Error!');
						window.location = 'index.php';
						</script>
						<?php
					} 
				else if ($rows > 0)
					{
						$date = date("Y-m-d H:i:s"); 
						$conn->query("INSERT INTO logins VALUES('',' $username','$date')") or die($conn->error);//Inserts username for tracking logs..security feature
						
						$_SESSION['id'] = $fetch['user_id'];
						$_SESSION['isfrom'] ='user';
						?>
						<script type="text/javascript">
						alert('WelCome!');
						window.location = '../admin/candidate.php';
						</script>
						<?php

						
					
			}else{
				?>
						<script type="text/javascript">
						alert('Error!');
						window.location = '../index.php';
						</script>
						<?php
			}	
	
	}
	?>