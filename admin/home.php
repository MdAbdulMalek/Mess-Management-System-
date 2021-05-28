<?php
include "connection.php";
$db = new Database();
$query = "select * from add_meal";
$read= $db->select($query);

?>

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
	
	  .maincontent{min-height:300px;padding:20px;}
	  .tblone{width:100%;border:5px solid #00e600;margin:20px 0}
      .tblone td{padding:5px 10px;text-align:center;}
      table.tblone tr:nth-child(2n+1){background:#000d1a;height:30px;}
      table.tblone tr:nth-child(2n){background:#004080;height:30px;}
	  .p{margin:0}
	
	 #loll{	
	color:white;
	margin:5px;
	text-align:center;
	padding:1px;
	height:35px;
	width:250px;	
	background:#008040;
	border-radius:5px;
	}
	</style>
	 <div class="Border">
	<div class="row">
                <div class="col-md-6 col-md-offset-3" style="margin-top: 30px">
                    <div style="position: relative">
                        <img src="./images/mess.png" class="himg" />
                        <h1>Mess Management System</h1><br><br><br>
						<center><h2>Home Page For Admin</h2></center>
                    </div>
                </div>
           </div>
		    <section class="maincontent">
		   <center>
		   <table class="tblone">
		     
		
		   </table>
		   </center>
		   <center> <a href="view_meal.php"><input name="reg" type="button" id="loll" value="View Meal Details"></input>
		   <br><br>
		   <a href="member.php"><input name="reg" type="button" id="loll" value="View Member Details"></input></center>
		   <br>
		    <center> <a href="meal.php"><input name="reg" type="button" id="loll" value="Insert Meal"></input></center>
		   	<br>	   
		    <form method="post" action="home.php">
	  <center><input name="logout" type="submit" id="loll" value="Logout"></input> </center> 
	  <?php
	  if(isset($_POST['logout'])){		  
		  session_start();
          session_destroy();
		  echo "<script>
						alert('You are Successfully Logged out');
						window.location.href='index.php';
						</script>";
	  }
	  ?>
	  </form>
	  </section>
		 
		  
	</div>
 </body>
</html>		