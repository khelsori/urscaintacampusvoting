
<?php include ('head.php');?>
<body>

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
					
                        <form role="form" method = "post" enctype = "multipart/form-data" class="index-form">
							<?php include ('signUpData.php');
                                
                            ?>

                            <div class="form-heading">
                            <center>Voter Registeration</center>
                            </div>


							<div class="form-field">
								<label>Email</label><br/>
								<input class ="form-input" type = "email" name = "email" placeholder = "Email" required="true">
									
							</div>
							
							<div class="form-field">											
								<label>Password</label><br/>
									<input class="form-input"  type = "password" name = "password" id = "pass" placeholder="Password" required="true"/>
							</div>
							<div class="form-field">											
								<label>Retype Password</label><br/>
									<input class="form-input"  type = "password" name = "password1" id = "pass" placeholder="Retype Password" required="true"/>
							</div>

							<div class="form-field">
								<label>First Name</label><br/>
									<input class="form-input" type ="text" name = "firstname" placeholder="First Name" required="true">
							</div>
							
							<div class="form-field">
								<label>Last Name</label><br/>
									<input class="form-input"  type = "text" name = "lastname" placeholder="Last Name" required="true">
							</div>

							<div class="form-field">
								<label>Gender</label> <br/>
									<select class = "form-input" name = "gender">
										<option >Male</option>
										<option >Female</option>														
									</select>
							</div>
							
							<div class="form-field">
								<label>Program of Study <i>(enter initials only i.e BTLED,BSIT, EDUC..)</i></label><br/>
									<input class="form-input"  type = "text" name = "prog_study" placeholder="E.g EDUC, BTLED,BSIT, BITED" required="true">
							</div>

							<div class="form-field">
								<label>Select Study Level</label> <br/>
									<select class = "form-input" name = "year_level">
										<option>1st Year</option>
										<option>2nd Year</option>
										<option>3rd Year</option>
										<option>4th Year</option>
										
									</select>
							</div>
                            
                                
                                <!-- <div class="form-field">
									<label for = "username">Student ID: </label><br/>
										<input class="form-input" placeholder="Enter Student ID" name="idno" type="text" required = "required" autofocus>
                                </div>
								
                                <div class="form-field">
									<label for = "username" >Password: </label>
										<input class="form-input" placeholder="Enter Password" name="password" type="password" required = "required">
                                </div> -->
                         
                            <button class="btn btn-lg btn-success btn-block login-btn" name = "save" style= " margin-bottom:0px;" width="50">Create Account</button>
                             
                            <a  href="../index.php"><button type="button" class="register-btn" data-dismiss="modal" style= " margin-bottom:0px;">Login</button></a>
            
                             

                               
                        </form>
                    </div>
                </div>
        
        </div>
        
    </div>

   
	<script src="../js/jquery.min.js"></script>
	<script src="../js/suggestion_modal.js"></script>
</body>

</html>

