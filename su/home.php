<?php
/*
 * Created by Anupam
 * Date: 9/17/2017
 * Time: 12:56 PM
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
                        
                        { start: [48, 207, 208], stop: [51, 8, 103] },
                        { start: [118, 75, 162], stop: [102, 126, 234] }
                        ]
                     });
                }
            );
        </script>
    </head>
    <body>
    <?php
        require('sulayout.php');
        $con=new mysqli("localhost","root","","siom");
        if($con)
        {
            $sql="SELECT COUNT(*) FROM test";
            $result=$con->query($sql);
            $test_count=$result->fetch_assoc();
            $sql="SELECT COUNT(*) FROM user";
            $result=$con->query($sql);
            $user_count=$result->fetch_assoc();
            
            $con->close();
        }
    ?>
    <div class="row">
       <div class="col l4 m6 s12">
            <div class="card white z-depth-5">
                <div class="card-content">
                    <span class="card-title">Total Test</span>
                    <div class='divider green'></div>
                    <h1><?php echo $test_count["COUNT(*)"]; ?></h1>
                </div>
            </div>
       </div>
       <div class="col l4 m6 s12">
            <div class="card white z-depth-5">
                <div class="card-content">
                    <span class="card-title">Total Enrollment</span>
                    <div class='divider green'></div>
                    <h1><?php echo $user_count["COUNT(*)"]; ?></h1>
                </div>
            </div>
       </div>
       <div class="col l4 m6 s12">
            <div class="card white z-depth-5">
                <div class="card-content">
                    <span class="card-title">Total Response</span>
                    <div class='divider green'></div>
                    <h1>54</h1>
                </div>
            </div>
       </div>
    </div>
    </body>
</html>
<?php
}
else
    header('location:index.php');
?>