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
	width:200px;	
	background:#000099;
	border-radius:5px;
	}
	</style>
	 <div class="Border">
	<div class="row">
                <div class="col-md-6 col-md-offset-3" style="margin-top: 30px">
                    <div style="position: relative">
                        <img src="./images/mess.png" class="himg" />
                        <h1>Mess Management System</h1><br><br><br>
						<center><h2>Meal Information Page</h2></center>
                    </div>
                </div>
           </div>
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
		   <br>
		    <center>
		   	<br>	
             <a href="home.php"><input name="reg" type="button" id="loll" value="Home Page"></input></center>			
	  </section>
		 
		  
	</div>
 </body>
</html>