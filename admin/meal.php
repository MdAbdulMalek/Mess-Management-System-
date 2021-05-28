<?php
include "connection.php";
$db = new Database();
if(isset($_POST['submit'])){
	$date = mysqli_real_escape_string($db->link, $_POST['DATE']);
	$Reya = mysqli_real_escape_string($db->link, $_POST['Reya']);
	$Anamika = mysqli_real_escape_string($db->link, $_POST['Anamika']);
	$KOLI = mysqli_real_escape_string($db->link, $_POST['KOLI']);
	$Hasina = mysqli_real_escape_string($db->link, $_POST['Hasina']);
	$Priya = mysqli_real_escape_string($db->link, $_POST['Priya']);
	if($date == '' || $Reya == '' || $Anamika == '' || $KOLI == '' || $Hasina == '' || $Priya == ''){
		
		$error= "field must not be empty";
	}else{
		
		$query = "insert into add_meal(date, Reya, Anamika, Koli, Hasina, Priya) values ('$date','$Reya','$Anamika', '$KOLI', '$Hasina', '$Priya')";
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
<style>	
	  .maincontent{min-height:300px;padding:20px;}
	  .tblone{width:100%;border:1px solid #00e600;margin:20px 0}
      .tblone td{padding:5px 10px;text-align:center;}
      table.tblone tr:nth-child(2n+1){background:#000d1a;height:30px;}
      table.tblone tr:nth-child(2n){background:#004080;height:30px;}
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
	<div class="row">
                <div class="col-md-6 col-md-offset-3" style="margin-top: 30px">
                    <div style="position: relative">
                    <img src="./images/icon.png" class="himg" />
                        <h1>Mess Management System</h1>
						
						<br><br><br>
						 <center><h2>Meal submit Form</h2> </center>						 
                    </div>
                </div>
           </div>
		   
		   <section class="maincontent">
		   <form action="meal.php" method="post"> 
		   <center>
		   <table class="tblone">
		     
			 <tr>
				<th width="20%"><center>DATE</center></th>
				<th width="20%"><center>Reya</center></th>
				<th width="15%"><center>Anamika</center></th>
				<th width="15%"><center>KOLI</center></th> 
				<th width="15%"><center>Hasina</center></th> 
				<th width="15%"><center>Priya</center></th> 
			 </tr>
			  
			 <tr>				
				<td width="20%" color="black"><input type="text" name="DATE" class="form-control" placeholder="enter date [yyyy/mm/dd]" required /></td>    			 				
				<td width="20%"><input type="text" name="Reya" class="form-control" placeholder="enter meal quantity" required /></td>    			 				
				<td width="15%"><input type="text" name="Anamika" class="form-control" placeholder="enter meal quantity" required /></td>    			 				
				<td width="15%"><input type="text" name="KOLI" class="form-control" placeholder="enter meal quantity" required /></td>    			 				
				<td width="15%"><input type="text" name="Hasina" class="form-control" placeholder="enter meal quantity" required /></td>    			 				
				<td width="15%"><input type="text" name="Priya" class="form-control" placeholder="enter meal quantity" required /></td>    
			 </tr>
			 					  
		    
		   </table>
		    <center>
			   
			   <input type="submit" name="submit" value="Submit" id="lol"/>
			   <input type="reset" value="cancel" id="lol"/>
			   
			   </center>
		   </center>
		   </form>
		   <br><br>
		  <center> 
		   <a href="home.php"><input name="reg" type="button" id="loll" value="Home Page"></input>
		  <a href="view_meal.php"><input name="reg" type="button" id="loll" value="View Meal Details"></input></center>
		   </section>
	
</div>
</body>
</html>