<?php
/*
 * Created by Anupam
 * Date: 9/17/2017
 * Time: 12:56 PM
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
        <script type="text/javascript" src="../assets/js/jquery.gradientify.min.js"></script>
        <!-- Importing user stylesheet -->
        <link rel="stylesheet" href="../assets/css/style.css" type="text/css">
        <script>
            $(document).ready(function()
                {
                    $(".open-side").sideNav();
                    $('.collapsible').collapsible();
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
    </body>
</html>
