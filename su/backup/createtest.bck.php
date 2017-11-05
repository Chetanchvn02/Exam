<?php
/**
 * Created by Lawkush.
 * Modified by Anupam
 * Date: 9/17/2017
 * Time: 3:56 PM
 */
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
    <style type="text/css">
        .bg-top
        {
            margin-top:-40;
            padding: 10px;
            background: linear-gradient(265deg, #1db68e, #d1d41a, #d4211a);
            background-size: 600% 600%;

            -webkit-animation: AnimationName 43s ease infinite;
            -moz-animation: AnimationName 43s ease infinite;
            animation: AnimationName 10s ease infinite;

@-webkit-keyframes AnimationName {
    0%{background-position:0% 54%}
    50%{background-position:100% 47%}
    100%{background-position:0% 54%}
}
@-moz-keyframes AnimationName {
    0%{background-position:0% 54%}
    50%{background-position:100% 47%}
    100%{background-position:0% 54%}
}
@keyframes AnimationName { 
    0%{background-position:0% 54%}
    50%{background-position:100% 47%}
    100%{background-position:0% 54%}
}
        }
    </style>
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
            }
        );
    </script>
</head>
<body>
<?php
    require('sulayout.php');
?>
        <div>
            <div class="card as-div" style="margin: 3% auto; padding:10px">
                <div class="bg-top">
                    <h3>Create Test</h3>
                </div>
                <form action="#" method="post">
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
    $i=strtoupper($cor.date('y').$sem.$div);
    $sql="INSERT INTO `test`(`testid`, `testname`, `course`, `semester`, `cor_div`, `total_question`, `duration`, `from_valid`, `to_valid`, `test_code`) VALUES ('".$i."','".$tstnam."','".$cor."','".$sem."','".$div."','".$tq."','".$dur."','".$fr."','".$to."','".$tc."')";
    $con=new mysqli("localhost","root","","siom");
    if($con->query($sql)===TRUE)
        echo "<script>alert('Successful');</script>";
    else
        echo "<script>alert('Failed');</script>";
    $con->close();
}
?>
