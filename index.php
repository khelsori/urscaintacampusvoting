<?php include ('head.php');?>
<body>
    <?php include "suggestion_modal.php" ?>
    <!-- <?php include ('index_banner.php');?> -->

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
				
                    
                    <div class="form-panel"><center>
                        <span>Login As:</span>
                        <select onchange = "page(this.value)">  
                            <option value = "admin/index.php">System Admin</option>
                            <option  value = "admin2/index.php">System User</option>
                            <option selected disables>Student Voter</option> 
                        </select>
                        <p/>
                    </center>
                        <form role="form" method = "post" enctype = "multipart/form-data" class="index-form">
                            <?php include ('login_query.php');
                                
                                ?>
                        
                            <div class="form-heading">
                            <center>Student Login</center>
                            </div>
                            
                                
                                <div class="form-field">
									<label for = "username">Email: </label><br/>
										<input class="form-input" placeholder="Enter Email" name="email" type="email" required = "required" autofocus>
                                </div>
								
                                <div class="form-field">
									<label for = "username" >Password: </label>
										<input class="form-input" placeholder="Enter Password" name="password" type="password" required = "required">
                                </div>
                         
                            <button class="btn btn-lg btn-success btn-block login-btn" name = "login" style= " margin-bottom:0px;" width="50">Login</button>
                             
                            <a  href="register/index.php"><button type="button" class="register-btn" data-dismiss="modal" style= " margin-bottom:0px;">Register</button></a>

                        </form>
                    </div>
                </div>
        
        </div>
        
    </div>

  <?php include ('script.php');?>

  <script type="text/javascript">
  function page (src) {
    window.location = src;
  }
  </script>
    <!-- <?php    
        include ('footer.php');
    ?> -->

</body>

</html>
