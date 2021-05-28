
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Mess Management System 1.0</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen"/>
        <link rel="stylesheet" href="css/login.css" media="screen">

       
    </head>
	
<style>
	#lol{
	
	color:white;
	margin:5px;
	text-align:center;
	padding:1px;
	height:35px;
	width:85px;	
	background:blue;
	border-radius:5px;
	
}
</style>
	
	<div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-md-offset-3" style="margin-top: 30px">
                    <div style="position: relative">
                        <img src="./images/mess.png" class="himg" />
                        <h1>Mess Management System</h1><br><br><br>
						<h2>Admin Login Form</h2>
                    </div>
                </div>
            </div>
			
			<div class="row" style="margin-top: 50px">
                <div class="col-md-6 col-md-offset-3">
                    <div class="flip-container">
                        <div class="flipper">  
                            <div class="front" >
                                <form method="POST" action="log.php">
                                    <input type="hidden" name="type" value="login" />
                                    <p style="color:#ff6666"><?= isset($errmsg) ? $errmsg : "" ?></php>
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" name="username" class="form-control"  placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                    </div>

                                    <input type="submit" name="submit" value="submit" id="lol"></input>
                                    
                                </form>
                            </div>
							
							
	 </body>
</html>						