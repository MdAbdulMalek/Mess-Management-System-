<?php
include "api/connection.php";
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
	
	#lool{
	
	color:white;
	margin:5px;
	text-align:center;
	padding:2px;
	height:45px;
	width:150px;	
	background:green;
	border-radius:5px;	
    }
	</style>
	
	 <div class="row">
                <div class="col-md-6 col-md-offset-3" style="margin-top: 20px">
                    <div style="position: relative">
                        <img src="./images/mess.png" class="himg" />
                        <h1>Mess Management System</h1>
                    </div>
                </div>
            </div>
		<br>	
		
		
<div class="container">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li style="float:right"><a data-toggle="tab" href="#menu3">Logout</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>HOME</h3>  
     <center><button type="button" class="btn btn-primary" data-toggle="tab" href="#select" >Meal Details</button></center> 	  
	   <div class="col-sm-12"></div>
	   <div class="col-sm-12"><br>
	   <div id="select" class="tab-pane fade">	  
	    <center>
		
		 <section class="maincontent">
		   <center>
		   <table class="tblone">
		     
			 <tr>
				<th width="20%"><center>DATE</center></th>
				<th width="20%"><center>Reya</center></th>
				<th width="15%"><center>Anamika</center></th>
				<th width="15%"><center>Koli</center></th> 
				<th width="15%"><center>Hasina</center></th> 
				<th width="15%"><center>Priya</center></th> 
			 </tr>
			 
			<?php if($read) {?>
			   <?php while($row = $read->fetch_assoc()) {?>
			  <tr>
				 <td width="20%"><?php echo $row['date'];?></td>
				 <td width="20%"><?php echo $row['Reya'];?></td>
				 <td width="15%"><?php echo $row['Anamika'];?></td>
				 <td width="15%"><?php echo $row['Koli'];?></td>
                 <td width="15%"><?php echo $row['Hasina'];?></td>
				 <td width="15%"><?php echo $row['Priya'];?></td>				 
			  
			  </tr>
			  <?php } ?>
			  <?php }else { ?>
			  <p>Data is not availabe.</p>
			  <?php } ?>
		   </table>
		   </center>
		   </section>
		
		</center>
	  </div>
	  </div>
	  <div class="col-sm-4"></div>
    </div>
	
    <div id="menu3" class="tab-pane fade">
     <br>
	  <br>
	  <form method="post" action="home.php">
	  <center><input name="logout" type="submit" id="lool" value="Logout""></input> </center> 
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
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	 </body>
</html>		