<?php
	


$eqp_id=filter_input(INPUT_POST,'eqp_id');


$host ="localhost";
$username ="root";
$pass ="";
$dbname ="cfd";

$conn = new mysqli ($host,$username,$pass,$dbname);

if(mysqli_connect_error()){
	die('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
	echo "not connected";
}
else{
	
	
		$sql="delete from eqp where eqp_id='$eqp_id';";
	
	
	
	
	
	if($conn-> query($sql)){
		echo " record deleted";
	}
	else{
		echo "error: ".$sql."<br>".$conn->error;
	}
}


echo"</div> <a href='admin.html' class='btn btn-primary button' style='margin-left: 25%; margin-top: 1%'>Home</a>";






?>