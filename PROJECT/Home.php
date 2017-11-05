<html>
<head>
<link href="css/style.css" rel="stylesheet" type="text/css">

  
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--Slider-->
<!--
<script> 

$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
});
</script>
-->
	
<style>
ul,li{
	
	font-weight:bold;
}
table{
	width:1100px;
}
*{
	margin:0px;
	padding:0px;
  
  }

body{background-color:	#ECF0F1  ;


}


 ul{style-type:none;
	margin-left:50px;
	margin-top:18px;
	padding:0;
	overflow:hidden;  
  }
  * {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
div.tab {
    float: left;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    width: 30%;
    height: 300px;
}

/* Style the buttons inside the tab */
div.tab button {
    display: block;
    background-color: inherit;
    color: black;
    padding: 22px 16px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current "tab button" class */
div.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    float: left;
    padding: 0px 12px;
    border: 1px solid #ccc;
    width: 70%;
    border-left: none;
    height: 300px;
}

</style>

</head>
<body>
<div class="wrapper" id="container">
<!--
<div id="flip">TEST</div>
<div id="panel">
<nav class="navbar navbar-inverse">
  <ul class="nav navbar-nav">
    <li><a href="Testcreate.php" target="">TEST_CREATE</a></li><br></br>
    <li><a href="Testexam.php">TEST_EXAM</a></li>
  </ul>
</nav>
</div>-->
<!--Using Bootstrip-->

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen" href="Testcreate.php">TEST CREATE</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">TEST EXAM</button>
kjkjkkjkj 
  </div>

<div id="London" class="tabcontent" href="Testcreate.php">
  <h3 href="Testcreate.php"></h3> 
</div>

<div id="Paris" class="tabcontent">
  <h3 href="Testexam.php"></h3>
  
</div>

<div id="Tokyo" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
     


</div>


<div class="top-panel">

</div>

<div class="container">
  
</div>

</body>
</html>