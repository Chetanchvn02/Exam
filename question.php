<?php
    $file="que.csv";
    $csv= file_get_contents($file);
    $array = array_map("str_getcsv", explode("\n", $csv));
    $key=$array[0];
    for($i=1;$i<count($array)-1;$i++)
        $result[$i-1]=array_combine($key, $array[$i]);
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
?>

