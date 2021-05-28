
<?php

include "api/connection.php";
$db = new Database();
if(isset($_POST['submit'])){
	$roll = mysqli_real_escape_string($db->link, $_POST['roll']);
	$name = mysqli_real_escape_string($db->link, $_POST['name']);
	$phone = mysqli_real_escape_string($db->link, $_POST['phone']);
	$password = mysqli_real_escape_string($db->link, $_POST['password']);
	if($roll == '' || $name == '' || $phone == '' || $password == ''){
		
		$error= "field must not be empty";
	}else{
		
		$query = "insert into members(RollNo, MemberName, PhoneNo, Password) values ('$roll','$name','$phone','$password')";
		$insert = $db->insert($query);
		
	}	
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Mess Management System 1.0</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen"/>
        <link rel="stylesheet" href="css/login.css" media="screen">

        <script src="js/libs/jquery-1.11.3.min.js"></script>
        <script src="js/libs/dynamics.min.js"></script>
        <script src="js/libs/angular.min.js"></script>
        <script src="js/libs/angular-route.min.js"></script>
        <script src="js/libs/angular-resource.min.js"></script>
        <script src="js/libs/angular-animate.min.js"></script>
        <script src="js/libs/angular-aria.min.js"></script>
       
    </head>
<style>
	#lol{	
	color:white;
	margin:2px;
	text-align:center;
	padding:1px;
	height:35px;
	width:80px;	
	background:blue;
	border-radius:5px;	
}
</style>
	
	<div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-md-offset-3" style="margin-top: 100px">
                    <div style="position: relative">
                        <img src="./images/mess.png" class="himg" />
                        <h1>Mess Management System 1.0</h1>
                    </div>
                </div>
            </div>
			
			<div class="row" style="margin-top: 50px">
                <div class="col-md-6 col-md-offset-3">
                    <div class="flip-container">
                        <div class="flipper"> 
			
		
	                       <form method="POST" action="signup.php">
                                    <input type="hidden" name="type" value="signup" />
                                    <p style="color:#ff6666">
                                    <div class="form-group">
                                        <label>Rollno</label>
                                        <input type="text" name="roll" class="form-control"  placeholder="Rollno" value="<?php if(isset($rollno)){echo $rollno;}?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control"  placeholder="Name" value="<?php if(isset($name)){echo $name;}?>" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" name="phone" class="form-control"  placeholder="Phone" value="<?php if(isset($phone)){echo $phone;}?>" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                                    </div>
                                    

                                    <input type="submit" name="submit" value="submit" id="lol"></input>
                                    <a href="index.php" class="login btn btn-danger">Login</a>
                                </form>
								     </div>
                </div>
            </div>
        </div>
                           
                     
                
			
</body>
</html>					
			
			