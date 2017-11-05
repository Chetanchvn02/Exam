<?php
/**
 * Created by Anupam.
 * Date: 9/17/2017
 * Time: 3:56 PM
 */
if(isset($_REQUEST['q']))
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
    <link rel="stylesheet" href="../assets/css/dropify.min.css">
    <script type="text/javascript" src="../assets/js/jquery.gradientify.min.js"></script>
    <script type="text/javascript" src="../assets/js/dropify.min.js"></script>
    <link href='../assets/fonts' rel="stylesheet" type='text/css'>
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
                $(".dropify").dropify(
                    {
                        messages: {
                        'default': 'Drag & drop a file here or click',
                        'replace': 'Drag and drop or click to replace',
                        'remove':  'Remove',
                        'error':   'Ooops, something wrong happended.'
                         }
                    });
                $('body').gradientify({
                        gradients: [
                        
                        { start: [255,103,69], stop: [240,154,241] },
                        { start: [33,229,241], stop: [235,236,117] }
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
    <div class="row">
        <div class="col s12 m6 l6  valign-wrapper" style="border-right:1px solid grey;height:500px">
        <div style="margin: 0 auto;" class="center-align">
            <h5 class="white-text">Add Question By Question</h5>
            <button type="button" name="qbyq" class="btn-flat waves-effect waves-light waves-red">Add</button>
        </div>
        </div>
        <div class="col s12 m6 l6 valign-wrapper" style="border-left:1px solid grey;height:500px;">
            <div style="margin: 0 auto;">
                <form method="POST" enctype="multipart/form-data" action="queup.php">
                    <div>
                        <input type="hidden" name="tc" value="<?php echo $_REQUEST['q'] ;?>">
                        <input type="file" class="dropify" name="fp">
                    </div>
                    <div class="center-align input-field">
                         <button type="submit" class="btn-large waves-effect waves-light cyan" name="subcsv">UPLOAD</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php
}
?>