<?php include ('head.php');?>

<body>


<?php include "../suggestion_modal.php" ?>
<div class="col-container">
        <div id="left-col">
            <div id="title-div">
                URSC Organization Online Voting Platform
                <br>
                <div id="sub-title">University Of Rizal System - Cainta Campus</div>
               
                <button id="email-btn">Comment/Suggestion</button>
            </div>
        </div>
        <div class="login-div">
           
			
                <div class="login-div-inner"><!-- has form in it-->
				
                    
                    <div class="form-panel">
                        
                    <center> 
                        <span style="color:#333">Login As:</span>
                        <select style="color:#333" onchange = "page(this.value)">
                            <option value = "../admin/index.php">System Admin</option>
                            <option   selected disables>System User</option>
                            <option value = "../index.php">Student Voter</option> 
                    </select>
                        
                    </center>


                        <form role="form" method = "post" enctype = "multipart/form-data" class="index-form">
                             <?php include ('login_query.php');
                                
                                ?>
                        
                            <div class="form-heading">
                            <center>Admin Login</center>
                            </div>

                                <div class="form-field">
                                    <label for = "username" >Login ID</label>
                                        <input style="color:#333" class="form-input" placeholder="Enter Login ID" name="login_id" type="text" autofocus>
                                </div>
							
                                <div class="form-field">
									<label for = "username" >Username</label>
										<input style="color:#333" class="form-input" placeholder="Enter Username" name="username" type="text" autofocus>
                                </div>
								
                                <div class="form-field">
									<label for = "username" >Password</label>
										<input style="color:#333" class="form-input" placeholder="Enter Password" name="password" type="password" value="">
                                </div>
                            
                                
                                <!-- <div class="form-field">
									<label for = "username">Student ID: </label><br/>
										<input class="form-input" placeholder="Enter Student ID" name="idno" type="text" required = "required" autofocus>
                                </div>
								
                                <div class="form-field">
									<label for = "username" >Password: </label>
										<input class="form-input" placeholder="Enter Password" name="password" type="password" required = "required">
                                </div> -->
                         
                            <button class="btn btn-lg btn-success btn-block login-btn" name = "login" style= " margin-bottom:0px;" width="50">Login</button>
                             
                            <!-- <a  href="register/index.php"><button type="button" class="register-btn" data-dismiss="modal" style= " margin-bottom:0px;">Register</button></a> -->
            
                             

                                

                        </form>
                    </div>
                </div>
        
        </div>
        
    </div>

    <!-- <div class="container">
        <div class="row">
		
                    <center> 
                        <i>Login As:</i>
                        <select onchange = "page(this.value)">
                            <option  value = "../admin/index.php">System Admin</option>
                            <option  selected disables>System User</option>
                            <option value = "../index.php">Student Voter</option> 
                    </select>
                        
                    </center>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">

                    
                    <div class="form-heading">
                        <center>Admin Log in</center>
                    </div>
                    <div class="panel-body">
                        <form role="form" method = "post" enctype = "multipart/form-data">
                                <div class="form-group">
                                    <label for = "username" >Login ID</label>
                                        <input class="form-control" placeholder="Enter Login ID" name="login_id" type="text" autofocus>
                                </div>
							
                                <div class="form-group">
									<label for = "username" >Username</label>
										<input class="form-control" placeholder="Enter Username" name="username" type="text" autofocus>
                                </div>
								
                                <div class="form-group">
									<label for = "username" >Password</label>
										<input class="form-control" placeholder="Enter Password" name="password" type="password" value="">
                                </div>
                             
                              
                                <button class="btn btn-lg btn-success btn-block " name = "login">Login</a>
							
								
                        </form>
                    </div>
                </div>
            </div>
			
			 </div>
        </div>
    </div> -->
    <script type="text/javascript">
  function page (src) {
    window.location = src;
  }
  </script>

  <?php 
  include ('script.php');
  ?>

</body>

</html>
