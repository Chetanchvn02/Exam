<?php
/**
 * Created by Anupam
 * Date: 9/17/2017
 * Time: 3:56 PM
 */
    session_start();
    if(isset($_SESSION["stduser"]))
    {
        header('location:home.php');
    }
else
{
?>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="assets/css/materialize.min.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/materialize.min.js"></script>
    <!-- Importing user stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <script>
        $(document).ready(function()
            {
                $(".button-collapse").sideNav();
                $(".slider").slider({indicators:false});
        }

        );
    </script>
    <style type="text/css">
    	.sha
    	{
    		border:2px solid white;
    		z-index: +1;
            width:80%; margin:0 auto;
            background-color: rgba(255,255,255,0.8);
    	}
    	.nav-txt ul li a
    	{
    		color: red;

    	}
    	.nav-txt li:hover
    	{
    		color:white;
    		background: #f44242;
    	}
         /* label color */
   .input-field label {
     color: #f44336;
   }
   /* label focus color */
   .input-field input[type=text]:focus + label {
     color: #f44336;
   }
   /* label underline focus color */
   .input-field input[type=text]:focus {
     border-bottom: 1px solid #f44336;
     box-shadow: 0 1px 0 0 #000;
   }
   /* valid color */
   .input-field input[type=text].valid {
     border-bottom: 1px solid #000;
     box-shadow: 0 1px 0 0 #000;
   }
   /* invalid color */
   .input-field input[type=text].invalid {
     border-bottom: 1px solid #000;
     box-shadow: 0 1px 0 0 #000;
   }
   /* icon prefix focus color */
   .input-field .prefix.active {
     color: #000;
   }
    </style>
</head>
<div>

    <nav class="transparent z-depth-0 navbar-fixed">
        <div class=" nav-wrapper">
            <a href="#!" class="brand-logo" style="padding-left: 10px;">Examination</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down nav-txt">
                <li><a href="#" class="waves-effect">PRACTICE</a></li>

                <li><a href="#"  class="waves-effect"></a></li>
                <li><a href="#" class="waves-effect">ABOUT</a></li>
                <li><a href="register.php" class="waves-effect">SIGN UP</a></li>
            </ul>
            <ul id="mobile-demo" class="side-nav">
                <li><a href="#" class="waves-effect">Ok</a></li>

                <li><a href="#" class="waves-effect"></a></li>
                <li><a href="#" class="waves-effect">ABOUT</a></li>
                <li><a href="register.php" class="waves-effect">SIGN UP</a></li>
            </ul>
        </div>
    </nav>
        <div class="slider fullscreen" style="position: absolute; z-index: -1;">
            <ul class="slides">
                <li>
                    <img src="assets/image/1.jpg">
                    <div class="caption">

                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
<div style="width: 100%;  bottom: 20%; position:absolute; padding: 50px; ">
    <div style="" class="sha">
        <form name="log" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <div class="row ">
                <div class="col s12 m6 l6 input-field" >
                    <input type="text" class="" name="user" id="user">
                    <label for="user">User Name</label>
                </div>
                <div class="col input-field s12 m6 l6" >
                    <input type="password" name="pass" id="pass">
                    <label for="pass">Password</label>
                </div>
                <div class="row">
                    <div class="col offset-s1 offset-m1 offset-l7"><button class="btn yellow waves-effect waves-light" href="#"> Forgot Password?</button></div>
                    <div class="col ">
                    <button type="submit" class="btn waves-effect waves-light blue " name="submit">Login</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

</body>
</html>
<?php
  if(isset($_POST['submit']))
  {
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $con=new mysqli("localhost","root","","siom");
    if($con)
    {
      $sql="SELECT * FROM `user` WHERE email='".$user."' AND password='".md5($pass)."'";
      $result=$con->query($sql);
      var_dump($result);
      if($result->num_rows>0)
      {
          echo "<script>alert('Success');</script>";
          $row=$result->fetch_assoc();
          $con->close();
          $_SESSION["stduser"]=$row["id"];
          $_SESSION["stdname"]=$row["name"];
          $_SESSION["stdemail"]=$row["email"];
          echo "<script>alert('Success');</script>";
          //echo "<script>toastr[\"success\"](\"Login Successful!\",'Success!');</script>";
          //header('Refresh: 1; url=http://localhost:/exam/su/home.php');
      }
      else
      {
        $con->close();
        echo "<script>alert('Failure');</script>";
          echo "<script>toastr[\"error\"](\"Invalid Credentials\",'Failed!');</script>";
      }
    }

      else {

        echo "<script>alert('Something went wrong.');</script>";
      }

  }
}
 ?>
