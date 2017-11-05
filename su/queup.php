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
if(isset($_POST["subcsv"]))
{
?>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="../assets/css/materialize.min.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="../assets/js/jquery-3.2.1.min.js"></script>
    <script src="../assets/js/materialize.min.js"></script>
    <!-- Importing user stylesheet -->
    <link rel="stylesheet" href="../assets/css/style.css" type="text/css">
    <script>
        $(document).ready(function()
            {
                $(".open-side").sideNav();
                $('.collapsible').collapsible();
            }
        );
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
?>
</body>
</html>
<?php
    $id=$_POST['tc'];
    $fname=$_FILES["fp"]["name"];
    $ftemp=$_FILES["fp"]["tmp_name"];
    $location="upload/".$fname;
    if(!move_uploaded_file($ftemp,$location))
        die( "File Uploaded Failed");

    $csv= file_get_contents($location);
    $array = array_map("str_getcsv", explode("\n", $csv));
    $key=$array[0];
    for($i=1;$i<count($array)-1;$i++)
        $result[$i-1]=array_combine($key, $array[$i]);
    /* Inserting into database */
    $con=new mysqli("localhost","root","","siom");
    if(!$con)
        die ("Failed! to connect ".$con->connect_error);
    for($i=0;$i<count($result);$i++)
    {
        $sql="INSERT INTO `question`( `testid`, `que`, `op_1`, `op_2`, `op_3`, `op_4`, `answer`) VALUES ('".$id."','".$result[$i]['que']."','".$result[$i]['op1']."','".$result[$i]['op2']."','".$result[$i]['op3']."','".$result[$i]['op4']."','".$result[$i]['answer']."')";
        $con->query($sql);
    }
    $con->close();
    /* View CSV into */
    echo "<h5 class='center-align red-text'>Uploaded Question List</h5>";
    echo "<div class='inner'><ul class='collapsible popout' data-collapsible='accordion'>";   
    for($i=0;$i<count($result);$i++)
    {
        echo "<li>";
        echo "<div class='collapsible-header cyan'>".$result[$i]['que']."</div> ";
        echo "<div class='collapsible-body'>";
        echo "<div class='option'>".$result[$i]['op1'];
        if($result[$i]["op1"]==$result[$i]["answer"])
                echo "<span class='right'><i class='green-text material-icons'>check_box</i></span>";
        echo "<hr></div>";
        echo "<div class='option'>".$result[$i]['op2'];
        if($result[$i]["op2"]==$result[$i]["answer"])
                echo "<span class='right'><i class='green-text material-icons'>check_box</i></span>";
        echo "<hr></div>";    
        echo "<div class='option'>".$result[$i]['op3'];
        if($result[$i]["op3"]==$result[$i]["answer"])
                echo "<span class='right'><i class='green-text material-icons'>check_box</i></span>";
        echo "<hr></div>";
        echo "<div class='option'>".$result[$i]['op4'];
        if($result[$i]["op4"]==$result[$i]["answer"])
                echo "<span class='right'><i class='green-text material-icons'>check_box</i></span>";
        echo "</div></li>";
    }
    echo "</ul></div>";
    unlink($location);
}
else
{
    header('location:managetest.php');
}
}
else
    header('location:index.php');
?>