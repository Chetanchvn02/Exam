<?php
if(isset($_POST["submit"]))
{
    print_r ($_FILES['myfile']);
    echo "is ok";
}
?>