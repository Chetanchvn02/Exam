<?php
	/*
		**      Created by Lawkush Kumar     **
		**      Modified by Anupam Kumar     **
	*/
session_start();
if(isset($_SESSION["user"]))
{
?>
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
            $(".open-side").sideNav();
            $('.collapsible').collapsible();
        });
        function update(str)
        {
        	var i=document.getElementById("id"+str).value;
        	var tstnam=document.getElementById("tstnam"+str).value;
        	var cor=document.getElementById("cor"+str).value;
        	var sem=document.getElementById("sem"+str).value;
        	var div=document.getElementById("div"+str).value;
        	var fr=document.getElementById("fr"+str).value;
        	var to=document.getElementById("to"+str).value;
        	var tq=document.getElementById("tq"+str).value;
        	var dur=document.getElementById("dur"+str).value;
        	var tc=document.getElementById("tc"+str).value;
        	if(window.XMLHttpRequest)
        	{
        		xml=new XMLHttpRequest();
        	}
        	else
        	{
        		xml=new ActiveXObject("Microsoft.XMLHTTP");
        	}
        	xml.onreadystatechange=function()
        	{
        		if(this.readyState==4 && this.status==200)
        		{
        			//alert if success.
        			alert("Successfully Updated");
        		}
        		else
        		{
        			alert("Failed to update");
        		}
        	};
        	xml.open("GET","updatetest.php?i="+i+"&tstnam="+tstnam+"&cor="+cor+"&sem="+sem+"&div="+div+"&fr="+fr+"&to="+to+"&tq="+tq+"&dur="+dur+"&tc="+tc,true);
        	xml.send();
        }
    </script>
</head>
<body>
<?php
    require('sulayout.php');
?>
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
				$fr=explode("-",$v['from_valid']);
				$to=explode("-",$v['to_valid']);
				$fr=$fr[2]."-".$fr[1]."-".$fr[0];
                $to=$to[2]."-".$to[1]."-".$to[0];
				echo "<div class='col s12 m6 l4'><div class='card'><div class='card-content black-text'><span class='card-title'>".$v["testname"]."</span>  <div class='divider green'></div><table class='highlight'>";
				echo "<tr><th>Course</th><td>".$v["course"]."</td></tr>";
				echo "<tr><th>Semester</th><td>".$v["semester"]."</td></tr>";
				echo "<tr><th>Total Question</th><td>".$v["total_question"]."</td></tr>";
				echo "<tr><th>Duration</th><td><b>".$v["duration"].":00</b>&nbsp;Minutes</td></tr>";
				echo "<tr><th>Validity</th><td>".$fr." <b>&nbsp; TO &nbsp;</b> ".$to."</td></tr>";
				echo "<tr><th>Test Code</th><td>".$v["test_code"]."</td></tr></table>";
				echo "<div class='card-action' style='margin-buttom:5px;'><a href='#". $var ."' class='waves-effect waves-light modal-trigger right red-text'><b>Manage</b></a></div></div></div></div>";
				?>
                <div id="<?php echo $var; ?>" class="modal">
                    <div class="modal-content">
                        <form action="#" method="post">
                        	<input type="hidden" id="<?php echo 'id'.$var ;?>" value="<?php echo $v['testid']; ?>">
                            <div class="row" >
                                <h5><?php echo $v["testname"];?></h5>
                                <hr class="red">
                            </div>
                            <div class="row">
                                <div class="col l6 m6 s12" style="border-right: 2px solid grey;">
                                    <div class="row">
                            	       <h6 style="font-size: 20px;" class="center-align"><b>Manage Questions</b></h6>
                                    </div>
                                    <div class="row">
                                        <a href="addque.php?q=<?php echo $v['testid']; ?>"><button type="button" class="btn-flat">Add Question</button></a>
                                    </div>
                                    <div class="row">
                                        <a href="viewque.php?t=<?php echo $v['testid']; ?>"><button type="button" class="btn-flat">View Question</button></a>
                                    </div>
                                    <div class="row">
                                        <a href="updateque.php?t=<?php echo $v['testid']; ?>"><button type="button" class="btn-flat">Update Question</button></a>
                                    </div>
                                    <div class="row">
                                        <a href="deleteque?t=<?php echo $v['testid']; ?>"><button type="button" class="btn-flat">Delete Question</button></a>
                                    </div>
                                </div>
                                <div class="col l6 m6 s12" >
                                    <div class="row">
                                       <h6 style="font-size: 20px;" class="center-align"><b>Manage Test</b></h6>
                                    </div>
                                    <div class="row">
                            	       <a href="up1.php?t=<?php echo $v['testid']; ?>"><button type="button" class="btn-flat">Update Test</button></a>
                                    </div>
                                    <div class="row">
                                       <a href="#?t=<?php echo $v['testid']; ?>"><button type="button" class="btn-flat">View Detail Test</button></a>
                                    </div>
                                    <div class="row">
                                       <a href="flush2.php?tst=<?php echo $v['testid']; ?>"><button type="button" class="btn-flat">Delete Test</button></a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            <?php
                $var++;
			}
			echo "</div>";
		}
	else
	{

		echo"Not found";
	}
	$conn->close();
}
}
else
{
    header('location:index.php');
}
?>
</body>
</html>
