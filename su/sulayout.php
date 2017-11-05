<nav class="transparent z-depth-0">
        <div class=" ">
            <a href="http://localhost/exam/su" class="brand-logo black-text" style="padding-left: 10px;">Examination</a>
            <ul id="nav-mobile" class="right nav-text">
                <li><a href="http://localhost/exam/su/logout.php" class="white-text red hoverable" data-activates="mobile-demo"><i class="material-icons">power_settings_new</i></a></li>
                <li><a href="#" class="open-side red waves-light waves-green white-text hoverable" data-activates="mobile-demo"><i class="material-icons">menu</i></a></li>
            </ul>
            <ul id="mobile-demo" class="side-nav collapsible" data-collapsible="accordion">
                <li><div class="user-view">
                        <div class="background">
                            <img src="../assets/image/cover.jpg">
                        </div>
                        <a href="#!user"><img class="circle" src="../assets/image/dp.jpg"></a>
                        <a href="#!name"><span class="white-text name"><?php echo $_SESSION["name"]; ?></span></a>
                        <a href="#!email"><span class="white-text email"><?php echo $_SESSION["email"]; ?></span></a>
                    </div>
                </li>
                <li class=""><a href="http://localhost/exam/su/home.php" class="collapsible-header waves-effect"><i class="material-icons">dashboard</i>Dashboard</a>
                    <div class="collapsible-body">
                        <ul>

                        </ul>
                    </div>
                </li>
                <li><a class="waves-effect waves-green collapsible-header"><i class="material-icons">spellcheck</i>Test</a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="http://localhost/exam/su/managetest.php">Manage Test</a></li>
                        <li><a href="http://localhost/exam/su/createtest.php">Create Test</a></li>
                        <li><a href="http://localhost/exam/su/deletetest.php">Delete Test</a></li>
                    </ul>
                </div>
                </li>
                <li><a class="collapsible-header waves-effect"><i class="material-icons">people_outline</i>Student</a>
                    <div class="collapsible-body">
                        <ul>

                        </ul>
                    </div>
                </li>
                <li><a href="#" class="collapsible-header waves-effect"><i class="material-icons">view_carousel_outline</i>Results</a>
                    <div class="collapsible-body">
                        <ul>

                        </ul>
                    </div>
                </li>
                <li><a href="#" class="collapsible-header waves-effect"><i class="material-icons">view_carousel_outline</i>Downloads</a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="#">Question Format</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
