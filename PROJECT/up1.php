<html>
<head>
	<!--Import Google Icon Font-->
    <link href="../assets/css/style.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script>
    $(document).ready(function()
        {
            $('.modal').modal();
             $('.datepicker').pickadate({
    			selectMonths: true, // Creates a dropdown to control month
    			selectYears: 15, // Creates a dropdown of 15 years to control year,
   		 		today: 'Today',
    			clear: 'Clear',
    			close: 'Ok',
    			closeOnSelect: false // Close upon selecting a date,
  			});
        });
     </script>
</head>
<body>
<?php
	$id=$_REQUEST["t"];
	$con=new mysqli("localhost","root","","siom");
	$sql="SELECT * FROM `test` WHERE testid='".$id."'";
	$result=$con->query($sql);
	$v=$result->fetch_assoc();
	{
?>
<div>
<div class="card as-div" style="margin: 0 auto;">
	<form action="#" method="post">
		<input type="hidden" name="i"  value="<?php echo $v['testid']; ?>">
		<div class="row">
			<div class="input-field col s12 m12 l12">
				<input type="text" id="tstnam" name="tstnam" value="<?php echo $v['testname']; ?>">
				<label for="tstnam">Test Name</label>
			</div>
		</div>
		<div class="row">
			<div class="col input-field s4 m4 l4">
				<input type="text" id="cor" name="cor" value="<?php echo $v['course']; ?>">
				<label for="cor">Course</label>
			</div>
			<div class="col input-field s4 m4 l4">
				<input type="text" id="sem" name="sem" value="<?php echo $v['semester']; ?>">
				<label for="sem">Semester</label>
			</div>
			<div class="col input-field s4 m4 l4">
				<input type="text" id="div" name="div" value="<?php echo $v['cor_div']; ?>">
				<label for="div">Division</label>
			</div>
		</div>
		<div class="row">
			<div class="col input-field s6 m6 l6">
				<input type="text" id="fr" name="fr" class="datepicker" value="<?php echo $v['from_valid']; ?>">
				<label for="fr">Valid From</label>
			</div>
			<div class="col input-field s6 m6 l6">
				<input type="text" id="to" name="to" class="datepicker" value="<?php echo $v['to_valid']; ?>">
				<label for="to">Valid To</label>
			</div>
		</div>
		<div class="row">
			<div class="col input-field s4 m4 l4">
				<input type="text" id="tq" name="tq" value="<?php echo $v['total_question']; ?>">
				<label for="tq">Total Question</label>
			</div>
			<div class="col input-field s4 m4 l4">
				<input type="text" id="dur" name="dur" value="<?php echo $v['duration']; ?>">
				<label for="dur">Duration</label>
			</div>
			<div class="col input-field s4 m4 l4">
				<input type="text" id="tc" name="tc" value="<?php echo $v['test_code']; ?>">
				<label for="tc">Test Code</label>
			</div>
			<button type="submit" class="btn waves-effect waves-light" name="submit">Update</button>
		</div>
	</form>
</div>
</div>

<?php
	}
?>
</body>
</html>
<?php
	if(isset($_POST["submit"]))
	{
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
		$con=new mysqli("localhost","root","","siom");
		if($con->query($sql)===TRUE)
			echo "true";
		else
			echo "failed to update";
		$con->close();
	}
?>