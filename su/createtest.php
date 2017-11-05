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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
        <div>
            <div class="card as-div z-depth-5" style="margin: 1% auto; padding:10px; background-color: rgba(255,255,255,0.5);">
                <div class="card-title">
                    <h3 class="center-align gray-text">Create Test</h3>
                </div>
                <form id="frmCreateTest" onsubmit="return validateForm()" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>" method="post">
                    <div class="row">
                        <div class="input-field col s12 m12 l12">
                            <input type="text" id="tstnam" name="tstnam">
                            <label for="tstnam">Test Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col input-field s4 m4 l4">
                            <select id="cor" name="cor">
                                <option value="">Select</option>
                                <option value="MCA">MCA</option>
                                <option value="MBA">MBA</option>
                                <option value="BE">BE</option>
                            </select>
                            <label for="cor">Course</label>
                        </div>
                        <div class="col input-field s4 m4 l4">
                            <select id="sem" name="sem">
                                <option value="">Select</option>
                                <option value="1">I</option>
                                <option value="2">II</option>
                                <option value="3">III</option>
                                <option value="4">IV</option>
                                <option value="5">V</option>
                                <option value="6">VI</option>
                                <option value="7">VII</option>
                                <option value="8">VIII</option>
                            </select>
                            <label for="sem">Semester</label>
                        </div>
                        <div class="col input-field s4 m4 l4">
                            <select id="div" name="div">
                                <option value="">Select</option>
                                <option value="a">A</option>
                                <option value="b">B</option>
                                <option value="c">C</option>
                                <option value="d">D</option>
                                <option value="e">E</option>
                                <option value="f">F</option>
                                <option value="g">G</option>
                                <option value="h">H</option>
                                <option value="i">I</option>
                                <option value="j">J</option>
                            </select>
                            <label for="div">Division</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col input-field s6 m6 l6">
                            <input type="text" id="fr" name="fr" class="datepicker" >
                            <label for="fr">Valid From</label>
                        </div>
                        <div class="col input-field s6 m6 l6">
                            <input type="text" id="to" name="to" class="datepicker" >
                            <label for="to">Valid To</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col input-field s4 m4 l4">
                            <input type="text" id="tq" name="tq">
                            <label for="tq">Total Question</label>
                        </div>
                        <div class="col input-field s4 m4 l4">
                            <input type="text" id="dur" name="dur">
                            <label for="dur">Duration</label>
                        </div>
                        <div class="col input-field s4 m4 l4">
                            <input type="text" id="tc" name="tc">
                            <label for="tc">Test Code</label>
                        </div>
                        <button type="reset" class="col offset-l9 btn-flat red-text waves-effect waves-light"><b>Reset</b></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <button type="submit" class="col btn-flat cyan waves-effect waves-light" name="submit"><b>Create</b></button>
                    </div>
                </form>
            </div>
        </div>

<script>

    function validateForm(){
        var strMessage = "";

        /* Checking each form fields   */
        if($("#tstnam").val()==""){
            strMessage += "Please enter Test name</br>";
            toastr["error"](strMessage);
            $("#tstnam").focus();
            return false;
        }
        if($("#cor").val()==""){
            strMessage += "Please select course</br>";
            toastr["error"](strMessage);
            $("#cor").focus();
            return false;
        }
        if($("#sem").val()==""){
            strMessage += "Please select Semester</br>";
            toastr["error"](strMessage);
            $("#sem").focus();
            return false;
        }
        if($("#div").val()==""){
            strMessage += "Please select Division</br>";
            toastr["error"](strMessage);
            $("#div").focus();
            return false;
        }
        if($("#fr").val()==""){
            strMessage += "Please select Valid From date</br>";
            toastr["error"](strMessage);
            $("#fr").focus();
            return false;
        }
        if($("#to").val()==""){
            strMessage += "Please select Valid To date</br>";
            toastr["error"](strMessage);
            $("#to").focus();
            return false;
        }
        if($("#tq").val()==""){
            strMessage += "Please enter Total Question</br>";
            toastr["error"](strMessage);
            $("#tq").focus();
            return false;
        }else{
            if(!$.isNumeric($("#tq").val())){
                strMessage += "Total question field should be number only</br>";
                toastr["error"](strMessage);
                $("#tq").focus();
                return false;
            }
        }
        if($("#dur").val()==""){
            strMessage += "Please select Total Duration</br>";
            toastr["error"](strMessage);
            $("#dur").focus();
            return false;
        }
        if($("#tc").val()==""){
            strMessage += "Please select Total Code</br>";
            toastr["error"](strMessage);
            $("#tc").focus();
            return false;
        }
        /* Checking each form fields   */

        return true;
    }
</script>
</body>

</html>
<?php
if(isset($_POST["submit"]))
    {
    $tstnam=$_REQUEST["tstnam"];
    $cor=$_REQUEST["cor"];
    $sem=$_REQUEST["sem"];
    $div=$_REQUEST["div"];
    $fr=$_REQUEST["fr"];
    $fr=explode("-",$fr);
    $fr=$fr[2]."-".$fr[1]."-".$fr[0];
    $to=$_REQUEST["to"];
    $to=explode("-",$to);
    $to=$to[2]."-".$to[1]."-".$to[0];
    $tq=$_REQUEST["tq"];
    $dur=$_REQUEST["dur"];
    $tc=$_REQUEST["tc"];
    $i=strtoupper(substr($cor,0,2).date('y').$sem.$div.substr($tstnam,0,3));
    $sql="INSERT INTO `test`(`testid`, `testname`, `course`, `semester`, `cor_div`, `total_question`, `duration`, `from_valid`, `to_valid`, `test_code`) VALUES ('".$i."','".$tstnam."','".$cor."','".$sem."','".$div."','".$tq."','".$dur."','".$fr."','".$to."','".$tc."')";
    $con=new mysqli("localhost","root","","siom");
    if($con->query($sql)===TRUE)
    {
        echo "<script>toastr[\"success\"](\"Test Created!\",'Success!');</script>";
        //header('Refresh: 1; url=http://localhost:/exam/su/home.php');
    }
    else
        echo "<script>toastr[\"error\"](\"Test Not Created\",'Failed!');</script>";
    $con->close();
    }
}
else
    header('location:index.php');
?>
