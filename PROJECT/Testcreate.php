<html>
<head>
<link href="css/style.css" rel="stylesheet" type="text/css">

  
    <link href="css/bootstrap.min.css" rel="stylesheet">
<style>

*{
	margin:0px;
	padding:0px;
  
  }
  <!--
  li{
  float:left;
 
  }-->

body{background-color:	#B0C4DE;


}


</style>

</head>
<body>
<form action="" method="POST">
<div class="wrapper">
<!--<span class="label" style="font-weight:bold;font-size:30px">Test Id:<input type="text" name="test_id" size="20"></span><br></br>
--><span class="label" style="font-weight:bold ;font-size:30px">Test Name:<input type="text" name="test_name" size="20"></span><br></br>
<span class="label" style="font-weight:bold ;font-size:30px">Enter course:</span><input type="text" name="course1" size="20"><br></br>
<span class="label" style="font-weight:bold ;font-size:30px">Semester:</span><input type="text" name="sem1" size="20"><br></br>
<span class="label" style="font-weight:bold ;font-size:30px">Total Question:</span><input type="text" name="Tquestion1" size="5"><br></br>
<span class="label" style="font-weight:bold ;font-size:30px">Test Duration:</span><input type="text" name="duration1" size="10"><br></br>
<span class="label" style="font-weight:bold ;font-size:30px">From Valid Date:</span><input type="datetime-local" name="fromvalid1" size="20"><br></br>
<span class="label" style="font-weight:bold ;font-size:30px">To Date:</span><input type="datetime-local" name="tovalid1" size="20"><br></br>
<span class="label" style="font-weight:bold ;font-size:30px">Test code:</span><input type="text" name="testcode1" size="20"><br></br>
<input type="submit" name="submit">
</form>
<?php
if(isset($_POST["submit"]))
{
$conn=mysqli_connect("localhost","root","","siomdb");
if(!$conn)
{
	
	die("unable to connect".$conn->connect_error());
}


$tstid=strtoupper($_POST["course1"].date("y").$_POST["sem1"].$_POST["test_name"]);
$sql="insert into test(testid,testname,course,semester,total_question,duration,from_valid,to_valid,test_code) values('".$tstid."','".$_POST['test_name']."','".$_POST['course1']."','".$_POST['sem1']."',".$_POST['Tquestion1'].",'".$_POST['duration1']."','".$_POST['fromvalid1']."','".$_POST['tovalid1']."','".$_POST['testcode1']."')";

if ($conn->query($sql) === TRUE) 
{
	echo "New record created successfully";
	
}
else
{
	
	echo"error:".$sql."<br>".$conn->error;
}
$conn->close();
	

}
?>
</div>
</body>
</html>