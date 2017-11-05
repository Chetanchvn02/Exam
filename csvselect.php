<!DOCTYPE html>
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
<div class="s12 m12 l12">
    <div style="margin: 2% auto;" class="as-div">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
            <input type="file" name="fp">
            <input type="submit" name="submit">
        </form>
    </div>
</div>
</body>
</html>
<?php
if(isset($_POST["submit"]))
{
    $fname=$_FILES["fp"]["name"];
    $ftemp=$_FILES["fp"]["tmp_name"];
    $location="upload/".$fname;
    if(move_uploaded_file($ftemp,$location))
        echo "File Uploaded SuccessFul";
    else
        echo "Failed to upload";
    $csv= file_get_contents($location);
    $array = array_map("str_getcsv", explode("\n", $csv));
    $key=$array[0];
    for($i=1;$i<count($array)-1;$i++)
        $result[$i-1]=array_combine($key, $array[$i]);
    /* View CSV into */

    echo "<table class='bordered'><tr>";
    foreach($result[0] as $k=>$v)
    {
        echo "<th>".$k."</th>";
    }
    echo "</tr>";
    for($i=0;$i<count($result);$i++)
    {
        echo "<tr>";
        foreach($result[$i] as $k=>$v)
        {
            echo "<td>".$v."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    /* Inserting into database */
    $con=new mysqli("localhost","root","","siom");
    if(!$con)
        die ("Failed! to connect ".$con->connect_error);
    for($i=0;$i<count($result);$i++)
    {
        $sql="INSERT INTO `question`(`testid`, `que_id`, `que`, `op_1`, `op_2`, `op_3`, `op_4`, `answer`) VALUES ('".$result[$i][$key[0]]."','".$result[$i][$key[1]]."','".$result[$i][$key[2]]."','".$result[$i][$key[3]]."','".$result[$i][$key[4]]."','".$result[$i][$key[5]]."','".$result[$i][$key[6]]."','".$result[$i][$key[7]]."')";
        if($con->query($sql)===TRUE)
            echo "Record Inserted Successful!";
    }
    $con->close();
    unlink($location);
}
?>
