<html>
<head>
<link href="css/style.css" rel="stylesheet" type="text/css">

  
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<!--<script src=src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>></script>
	-->
	<!--<script>
	$(document).ready(function(){
		
		$("#flip").click(function(){
			
				$("#panel").slideToggle("slow");
			
		});
		
	});
	
	</script>-->
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
});
</script>

	
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
  <!--
  li{
  float:left;
 
  }-->

body{background-color:	#B0C4DE;


}


 ul{style-type:none;
	margin-left:50px;
	margin-top:18px;
	padding:0;
	overflow:hidden;  
  }
</style>
</head>
<body>
<div class="wrapper" id="container">
<div>
<?php
include("Testexam.php");
?>
</div>
</div>
<div class="top-panel">
<input type="Button" value="ManageTest">
<input type="Button" value="Delete">
</div>
</body>
</html>