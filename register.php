 <html>
        <head>
            <!--Import Google Icon Font-->
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <!--Import materialize.css-->
            <link rel="stylesheet" href="assets/css/materialize.min.css">
            <!--Let browser know website is optimized for mobile-->
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
            <!--Import jQuery before materialize.js-->
            <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js">
            </script>
            <script src="assets/js/materialize.min.js"></script>
            <!-- Importing user stylesheet -->
            <link rel="stylesheet" href="assets/css/style.css" type="text/css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" type="text/css">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
            <script>
                $(document).ready(function () {
                    $('select').material_select();
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
                });
            </script>
        </head>
        <body>
        <div class="s12 m12 l6">
            <div class="card-panel as-div" style="margin:2% auto; border: 1px solid #18ffff;">
                <form method="POST">
                    <div class="row">
                        <div class="input-field col s12 m12 l6">
                            <input type="text" id="fname" name="fname">
                            <label for="fname">First Name</label>
                        </div>
                        <div class="input-field col s12 m12 l6">
                            <input type="text" id="lname" name="lname">
                            <label for="lname">Last Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" name="email" id="email">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m12 l6">
                            <input type="password" id="pass" name="passkey">
                            <label for="pass">Password</label>
                        </div>
                        <div class="input-field col s12 m12 l6">
                            <input type="password" id="cnfpass">
                            <label for="cnfpass">Confirm Password</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m12 l6">
                            <select name="gender" id="gender">
                                <option selected>Select</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                            <label> Select Gender</label>
                        </div>
                        <div class="input-field col s12 m12 l6">
                            <input type="text" name="mobile" id="mobile">
                            <label for="mobile">Mobile Number</label>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <br>
                    <div class="row">
                        <div class="input-field col s6 m6 l4">
                            <select name="college" id="college">
                                <option selected>Select</option>
                                <option value="siom">SIOM</option>
                                <option value="nbn">NBN</option>
                            </select>
                            <label>College</label>
                        </div>
                        <div class="input-field col s6 m6 l4">
                            <select name="course" id="course">
                                <option selected>Select</option>
                                <option value="mca">MCA</option>
                                <option value="mba">MBA</option>
                            </select>
                            <label>Course</label>
                        </div>
                        <div class="input-field col s6 m6 l4">
                            <select name="sem" id="sem">
                                <option  selected>Select</option>
                                <option value="1">I</option>
                                <option value="2">II</option>
                            </select>
                            <label>Semester</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m6 l6">
                            <select name="division" id="division">
                                <option selected>Select</option>
                                <option value="a">A</option>
                                <option value="b">B</option>
                            </select>
                            <label>Division</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <input type="text" name="roll" id="roll">
                            <label for="roll">Roll No.</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m12 l12">
                            <textarea id="address" name="address" class="materialize-textarea"></textarea>
                            <label for="address">Address</label>
                        </div>
                    </div>
                    <div class="row">
                        <button class="col offset-l10 offset-m8 offset-s6 btn waves-effect waves-light" type="submit" name="submit">
                            Submit<i class="material-icons right">send</i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        </body>
 </html>
 <?php
 if(isset($_POST['submit']))
 {

     $name=$_POST['fname']." ".$_POST['lname'];
     $email=$_POST['email'];
     $passkey=md5($_POST['passkey']);
     $gender=$_POST['gender'];
     $mobile=$_POST['mobile'];
     $college=$_POST['college'];
     $course=$_POST['course'];
     $sem=$_POST['sem'];
     $address=$_POST["address"];
     $division=$_POST['division'];
     $roll=$_POST['roll'];
     $id=strtoupper($college.date('Y').$course.$sem.$division.$roll);
     $sql="INSERT INTO `user`(`id`, `name`, `gender`, `password`, `college`, `course`, `semester`, `division`, `rollno`, `address`, `mobile`, `email`) VALUES ('".$id."','".$name."','".$gender."','".$passkey."','".$college."','".$course."','".$sem."','".$division."','".$roll."','".$address."','".$mobile."','".$email."')";
     $con=new mysqli("localhost","root","","siom");
     if($con->connect_error)
         die ("connection failed!");
     if($con->query($sql)===TRUE)
     {
         echo "<script>toastr[\"success\"](\"Registered!\",'Success!');</script>";
     }
     else
         echo "<script>toastr['error']('Failed ! to register');</script>";
 }
 ?>
