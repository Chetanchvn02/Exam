<?php
/**
 * Created by Anupam
 * Date: 9/17/2017
 * Time: 3:56 PM
 */
    session_start();
    if(isset($_SESSION["user"]))
    {
       //header('location:home.php');
    }
else
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
    <style>
        body{
          background-color: #202e47;
        }
        .card-1 {
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
}
        .log
        {
            width:350px;
            margin: 3% auto;
            padding: 20px;
        }
        .lop:focus {
            border-bottom: 1px solid red;
            box-shadow: 0 1px 0 0 red;
        }
        #toast-container {
            position: fixed;
            z-index: 999999;
            pointer-events: none;
        }
        .toast-top-right {
            top: 12px;
            right: 12px;
        }
        @media only screen and (min-width: 768px) {
            .log
            {
                width:400px;
                margin: 3% auto;
                padding: 20px;
            }

        }
        @media only screen and (min-width: 600px) {
            .log
            {
                width:400px;
                margin: 7% auto 0px auto;
                padding: 20px;
            }

        }
    </style>
</head>
<body>
    <div>
        <div class="log card z-depth-5">
            <form  method="POST">
                <div class="row">
                    <h4 class="grey-text center-align">Login</h4>
                </div>
                <div class="row">
                    <div class="col s12 m12 l12 input-field">
                        <input type="text" name="user" class="lop" id="us">
                        <label for="us">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m12 l12 input-field">
                        <input type="password" name="pass" id="ps">
                        <label for="ps" >Password</label>
                    </div>
                </div>
                <div class="row">
                    <button type="submit" class="btn right" name="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
<?php
    if(isset($_POST["submit"]))
    {
        $user=$_POST["user"];
        $pass=$_POST["pass"];
        $con=new mysqli("localhost","root","","siom");
        if($con)
        {
            $sql="SELECT `uid`, `name`, `email`, `password` FROM `super` WHERE email='".$user."' AND password='".$pass."'";
            $result=$con->query($sql);
            if($result->num_rows==1)
            {
                $row=$result->fetch_assoc();
                $con->close();
                $_SESSION["user"]=$row["uid"];
                $_SESSION["name"]=$row["name"];
                $_SESSION["email"]=$row["email"];
                //echo "<script>toastr[\"success\"](\"Login Successful!\",'Success!');</script>";
                header('location:home.php');
            }
            else
            {
              $con->close();
                echo "<script>toastr[\"error\"](\"Invalid Credentials\",'Failed!');</script>";
            }
        }
        else
            echo "<script>alert('Something went wrong.');</script>";
    }
}
?>
