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
    <script type="text/javascript" src="../assets/js/jquery.gradientify.min.js"></script>
    <link rel="stylesheet" href="../assets/css/style.css" type="text/css">
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
    <style>
        .div
        {
            height: 100px;
            width:100%;
        }
    </style>
</head>
<body>
    
    <ul class="pagination">
    <div id="1" class="div red"></div>
    <div id="2" class="div green"></div>
    <div id="3" class="div yellow"></div>
    <div id="4" class="div blue"></div>
    <div id="5" class="div grey"></div>
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
    <li class="active"><a href="#1">1</a></li>
    <li class="waves-effect"><a href="#2">2</a></li>
    <li class="waves-effect"><a href="#3">3</a></li>
    <li class="waves-effect"><a href="#4">4</a></li>
    <li class="waves-effect"><a href="#5">5</a></li>
    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
    </ul>
</body>
</html>