<?php
include "connection.php";
$db = new Database();
$query = "select * from members";
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

.Border{width:900px; margin:0 auto; background:#ddd;padding:20px;}
.headeroption, .footeroption{background:#444; color:<?php echo $frontcolor ?>; text-align:center;}
.maincontent{min-height:300px;padding:20px;}
.tblone{width:80%;border:1px solid #fff;margin:20px 0}
.tblone td{padding:5px 10px;text-align:center;}
table.tblone tr:nth-child(2n+1){background:#66d9ff;height:30px;}
 table.tblone tr:nth-child(2n){background:#53c68c;height:30px;}
.p{margin:0}
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

#loll{
	
	color:white;
	margin:5px;
	text-align:center;
	padding:1px;
	height:35px;
	width:150px;	
	background:#00ace6;
	border-radius:5px;
	}
</style>
	
	<div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-md-offset-3" style="margin-top: 30px">
                    <div style="position: relative">
                        <img src="./images/mess.png" class="himg" />
                        <h1>Mess Management System</h1><br>
						<h2>Admin Home Page</h2><br><br><br>
						<center><h2>Member Details</h2></center>
                    </div>
                </div>
            </div>
	
	<center>
			<table class="tblone">
  <tr>
 
    <th width="40%"><center>ID NO</center></th>
	<th width="30%"><center>Name</center></th>
	<th width="30%"><center>Phone Number</center></th>
  </tr>
  
  <?php if($read) {?>
  <?php while($row = $read->fetch_assoc()) {?>
  <tr>
     <td><?php echo $row['RollNo'];?></td>
	 <td><?php echo $row['MemberName'];?></td>
	 <td><?php echo $row['PhoneNo'];?></td>
  
  </tr>
  <?php } ?>
  <?php }else { ?>
  <p>Data is not availabe.</p>
  <?php } ?>
  </table>
  </center>
		 <center> <a href="home.php"><input name="reg" type="button" id="loll" value="View Meal Details"></input></center>	
		 <center> <a href="meal.php"><input name="reg" type="button" id="loll" value="Insert Meal"></input></center>
		 <form method="post" action="home.php">
	  <center><input name="logout" type="submit" id="loll" value="Logout""></input> </center> 
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

			
	 </body>
</html>				