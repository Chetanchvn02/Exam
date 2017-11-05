<?php
	$i=$_REQUEST["i"];
	$tstnam=$_REQUEST["tstnam"];
	$cor=$_REQUEST["cor"];
	$sem=$_REQUEST["sem"];
	$div=$_REQUEST["div"];
	$fr=$_REQUEST["fr"];
	$to=$_REQUEST["to"];
	$tq=$_REQUEST["tq"];
	$dur=$_REQUEST["dur"];
	$tc=$_REQUEST["tc"];
	$sql="UPDATE `test` SET `testname`='".$tstnam."',`course`='".$cor."',`semester`='".$sem."',`cor_div`='".$div."',`total_question`='".$tq."',`duration`='".$dur."',`from_valid`='".$fr."',`to_valid`='".$to."',`test_code`='".$tc."' WHERE `testid`='".$i."'";
	$con=new myqli("localhost","root","","siom");
	if($con->query($sql)===TRUE)
		echo "true";
	$con->close();
?>