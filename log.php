<?php
include "api/connection.php";
$db = new Database();
extract($_POST);
if($db->signin($username,$password))
{
	echo "<script>
					alert('You are Successfully Logged IN');
					window.location.href='home.php';
					</script>";
}
else
{
	$db->url("index.php?run=failed");
}

?>