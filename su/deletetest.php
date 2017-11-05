<?php
/**
 * Created by Lawkush.
 * Modified by Anupam
 * Date: 9/17/2017
 * Time: 3:56 PM
 */
session_start();
if(isset($_SESSION["user"]))
{
?>
<html>
<head>
    <!--Import Google Icon Font-->
    <script src="https://use.fontawesome.com/af50976029.js"></script>
    <!--Import materialize.css-->
    <link rel="stylesheet" href="../assets/css/materialize.min.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="../assets/js/jquery-3.2.1.min.js"></script>
    <script src="../assets/js/materialize.min.js"></script>
    <!-- Importing user stylesheet -->
    <script type="text/javascript" src="../assets/js/jquery.gradientify.min.js"></script>
    <link rel="stylesheet" href="../assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        $(document).ready(function()
            {
                $(".open-side").sideNav();
                $('.collapsible').collapsible();
                $('.datepicker').pickadate({
                    format: 'dd-mm-yyyy',
                    selectMonths: true, // Creates a dropdown to control month
                    selectYears: 15, // Creates a dropdown of 15 years to control year,
                    today: 'Today',
                    clear: 'Clear',
                    close: 'Ok',
                    closeOnSelect: false // Close upon selecting a date,

                });
                $('select').material_select();
                $('body').gradientify({
                        gradients: [

                        { start: [212, 252, 121], stop: [150, 230, 161] },
                        { start: [132, 250, 176], stop: [143, 211, 244] }
                        ]
                     });
            }
        );
    </script>
    
</head>
<body>
<?php
    require('sulayout.php');
?>
<div class="row">
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
		    $var=0;
			echo "<div class='row'>";
			while($v=$result->fetch_assoc())
			{
        $tstid=$v['testid'];
				$fr=explode("-",$v['from_valid']);
				$to=explode("-",$v['to_valid']);
				$fr=$fr[2]."-".$fr[1]."-".$fr[0];
        $to=$to[2]."-".$to[1]."-".$to[0];
        echo "<div class='col s12 m6 l4'><div class='card'><div class='card-content black-text'><span class='card-title'>".$v["testname"]."</span>  <div class='divider green'></div><table class='highlight'>";
				echo "<tr><th>Course</th><td>".$v["course"]."</td></tr>";
				echo "<tr><th>Semester</th><td>".$v["semester"]."</td></tr></table>";
				echo "<div class='card-action' style='margin-buttom:5px;'><a href='flush.php?tst=". $tstid ."' class='waves-effect waves-light modal-trigger right red-text'><b>Delete</b></a></div></div></div></div>";
      }
    }
  }
?>
</div>
</body>
</html>
<?php
} ?>
