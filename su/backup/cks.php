<?php
	$con=new mysqli("localhost","root","","siom");
	if($con)
	{
		$sql="SELECT `uid`, `name`, `email`, `password` FROM `super` WHERE email='anupamvns0099@gmail.com' AND password='admin'";
		$result=$con->query($sql);
		if($result->num_rows==1)
		{
			$row=$result->fetch_assoc();
			print_r($row);
			$con->close();
		}
	}
?>