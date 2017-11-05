<?php
/*** Create By Chetan C. ****/
session_start();
if(isset($_SESSION["user"]))
{
?>

<html>
<head>

<link href="assets/css/style.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style.css">


<link href="assets/css/style.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    
<script type="text/javascript"></script>
<script>

	 $(document).ready(function(){
    $('.collapsible').collapsible();
    $(".open-side").sideNav();
  });

	 
</script>
<style>
        .option
        {
            padding:3px 0px;
        }
        .inner
        {
            width:90%;
            margin: 0 auto;
        }
    </style>

</head>
<body>

<?php
require('sulayout.php');
$tstid=$_REQUEST["t"];
$con = new mysqli("localhost","root","","siom");

if($con->connect_error)
{
    die("Connection Failed :".$con->connect_error);
}

$sql = "SELECT que_id,que,op_1,op_2,op_3,op_4,answer FROM question WHERE testid='".$tstid."'";
$res = $con->query($sql);


if ($res->num_rows > 0)  	
{
  
  echo "<h5 class='center-align red-text'>Question List</h5>";
    echo "<div class='inner'><ul class='collapsible popout' data-collapsible='accordion'>";   
    while($result=$res->fetch_assoc())
    {
        echo "<li>";
        echo "<div class='collapsible-header cyan'>".$result['que']."</div> ";
        echo "<div class='collapsible-body'>";
        echo "<div class='option'>".$result['op_1'];
        if($result["op_1"]==$result["answer"])
                echo "<span class='right'><i class='green-text material-icons'>check_box</i></span>";
        echo "<hr></div>";
        echo "<div class='option'>".$result['op_2'];
        if($result["op_2"]==$result["answer"])
                echo "<span class='right'><i class='green-text material-icons'>check_box</i></span>";
        echo "<hr></div>";    
        echo "<div class='option'>".$result['op_3'];
        if($result["op_3"]==$result["answer"])
                echo "<span class='right'><i class='green-text material-icons'>check_box</i></span>";
        echo "<hr></div>";
        echo "<div class='option'>".$result['op_4'];
        if($result["op_4"]==$result["answer"])
                echo "<span class='right'><i class='green-text material-icons'>check_box</i></span>";
        echo "</div></li>";
    }
    echo "</ul></div>";
}
$con->close();     
}
else
    header('location:index.php');
?>

</body>
</html>