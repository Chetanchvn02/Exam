<?php
if(isset($_REQUEST['tst']))
{
  $t=$_REQUEST['tst'];
?>
<html>
<head>
  <script type="text/javascript" src="../assets/js/jquery-3.2.1.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" type="text/css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script>
      $(document).ready(function()
          {
              toastr.options = {
                      "closeButton": false,
                      "debug": false,
                      "newestOnTop": true,
                      "progressBar": false,
                      "positionClass": "toast-top-right",
                      "preventDuplicates": false,
                      "onclick": null,
                      "showDuration": "300",
                      "hideDuration": "1000",
                      "timeOut": "5000",
                      "extendedTimeOut": "1000",
                      "showEasing": "swing",
                      "hideEasing": "linear",
                      "showMethod": "fadeIn",
                      "hideMethod": "fadeOut"
                  }
          }
      );
  </script>
</head>
<body>
<?php
$con=new mysqli("localhost","root","","siom");
$sql_tst="DELETE FROM `test` WHERE testid='".$t."'";
$sql_que="DELETE FROM `question` WHERE testid='".$t."'";
if ($con->query($sql_tst) === TRUE) {
  if($con->query($sql_que) === TRUE)
  {
    echo "<script>toastr[\"success\"](\"Deleted Successful!\",'Success!');</script>";
  }
  }
  $con->close();
  header('Refresh: 1; url=http://localhost:/exam/su/managetest.php');
?>

</body>
</html>
<?php
} ?>
