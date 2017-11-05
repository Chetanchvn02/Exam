<?php
	/*
		**      Created by Lawkush Kumar     **
		**      Modified by Anupam Kumar     **
	*/
?>
<html>
<head>
	<!--Import Google Icon Font-->
    <link href="assets/css/style.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</head>
<body>
<?php

	$conn=new mysqli("localhost","root","","siom");
	if(!$conn)
	{
		die("Unable to connect". $conn->connect_error);
	}
	$sql="select * from test";
	if($result=$conn->query($sql))
	{
		if($result->num_rows>0)
		{
			echo "<div class='row'>";
			while($v=$result->fetch_assoc())
			{
				
				echo "<div class='col s12 m6 l4'><div class='card'><div class='card-content black-text'><span class='card-title'>".$v["testname"]."</span><div class='divider'></div><table class='highlight'>";
				echo "<tr><th>Course</th><td>".$v["course"]."</td></tr>";	
				echo "<tr><th>Semester</th><td>".$v["semester"]."</td></tr>";
				echo "<tr><th>Total Question</th><td>".$v["total_question"]."</td></tr>";
				echo "<tr><th>Duration</th><td><b>".$v["duration"].":00</b>&nbsp;Minutes</td></tr>";
				echo "<tr><th>Validity</th><td>".$v["from_valid"]." <b>&nbsp; TO &nbsp;</b> ".$v["to_valid"]."</td></tr>";
				echo "<tr><th>Test Code</th><td>".$v["test_code"]."</td></tr></table>";
				echo "<div class='card-action'><a href='#'>Manage</a><a href='#'>Delete</a></div></div></div></div>";
				?>
                <div>
                    
                </div>

            <?php
			}
			echo "</div>";
		}
	else
	{
	
		echo"Not found";
	}
	$conn->close();
}
?>
</body>
</html>