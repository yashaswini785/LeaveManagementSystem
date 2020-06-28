<!DOCTYPE html>
<html lang = "en">
	<head>
		<script src = "js/angular.js"></script>
		<script src = "js/app.js"></script>
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
		<meta charset = "UTF-8" name = "viewport" content = "width=device-width, initial-scale=1"/>
		<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
  <style>
  	.form_style
  {
   width: 600px;
   margin: 0 auto;
  }


body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #00008b;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: blue;
}
</style>
	</head>
<body ng-app = "myModule" ng-controller = "myController"  class="w3-light-grey w3-content" style="max-width:1600px">
	<ul>
  <li><a class="active" href="#home">DLMS | Department Leave Management System</a></li>

</ul>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
  <!--   <img src="/w3images/avatar_g2.jpg" style="width:45%;" class="w3-round"><br><br> -->
    <h4><b>DLMS</b></h4>
    <p class="w3-text-grey"></p>
  </div>
  <div class="w3-bar-block">
    
 <?php

//index.php

session_start();

?>
 <?php
   if(isset($_SESSION["name"]))
   {
   ?> 
<h4><i class="fa fa-user-circle" style="font-size:65px;color:darkblue;margin-left: 12px"></i><p style="margin-left: 12px;">
<?php $str=$_SESSION["name"];echo ucfirst("$str"); ?></p></h4>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<div class="w3-sidebar w3-bar-block w3-light-grey w3-card" style="width:300px;">
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-dashboard" style="font-size:15px;color:grey;margin-left: 1px;"></i><head style="padding-left:3px;"> <b>     Dashboard</b></head></a>

  <a href="#" class="w3-bar-item w3-button"> <i class="fa fa-user-circle"style="color:grey;"></i><head style="padding-left:3px;"> <b>  My Profile</b></head></a>

  <div class="w3-bar-item w3-button" onclick="myAccFunc1()">
 <i class="fa fa-calendar"  style="color:grey;"></i>   <b>  Leave  </b> <i class="fa fa-caret-right"></i></div>
  <div id="demoAcc1" class="w3-hide w3-white w3-card-4">
    <a href="http://localhost/mcaproject/departmentleave/student/applyleave/" class="w3-bar-item w3-button">Apply Leave</a>
    <a href="http://localhost/mcaproject/departmentleave/student/leavehist/allleaves.php" class="w3-bar-item w3-button">Leave History</a>
  </div>


  <a href="http://localhost/mcaproject/departmentleave/logout.php" class="w3-bar-item w3-button"><i class="fa fa-sign-out" style="color:grey;"></i>  <b> Sign out</b></a>
</div>

<!-- <div class="w3-container" style="margin-left:160px">
<h2>Sidebar Accordion</h2>
<p>In this example, we have added an accordion and a dropdown menu inside the side navigation.</p>
<p>Click on both to understand how they differ from each other. The accordion will push down the content, while the dropdown lays over the content.</p>
</div> -->

<script>
function myAccFunc() {
  var x = document.getElementById("demoAcc");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-green";
  } else { 
    x.className = x.className.replace(" w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-green", "");
  }
}

function myAccFunc1() {
  var x = document.getElementById("demoAcc1");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-green";
  } else { 
    x.className = x.className.replace(" w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-green", "");
  }
}

function myAccFunc2() {
  var x = document.getElementById("demoAcc2");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-green";
  } else { 
    x.className = x.className.replace(" w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-green", "");
  }
}
function myDropFunc() {
  var x = document.getElementById("demoDrop");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-green";
  } else { 
    x.className = x.className.replace(" w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-green", "");
  }
}
</script>



</div>
<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px"></div>
 
  <!-- Header -->
  <header id="portfolio">

    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    
  </div>
  </header> 
  

</nav>
<div>
<center>welcome</center>
 </div>
   
  
   <?php
   }?>
   

	<!-- <nav class = "navbar navbar-default">
		<div class = "container-fluid">
			<a class = "navbar-brand" href = "https://sourcecodester.com" >Sourcecodester</a>
		</div>
	</nav> -->
	<div class = "col-md-3"></div>
	<div class = "col-md-6 well">
		<h3 class = "text-primary">APPLY  LEAVE </h3>
		<hr style = "border-top:1px dotted #ccc;">
		<form>
			<div class = "form-inline">
     <form>
      <div class = "form-inline">
        <label   ng-show = "btnInsert">Name</label><br />
        <input type = "text" class = "form-control" ng-model = "firstname" id = "firstname"  ng-show = "btnInsert"/><br />
        <label   ng-show = "btnInsert" >Leave Reason</label><br/>
        <input type = "text" class = "form-control" ng-model = "lastname" id = "lastname"  ng-show = "btnInsert"/><br />
      <label>
        <input type="radio" ng-model='status'   class = "form-control"  ng-value='"Accepted"' name="accept"  ng-show = "btnUpdate" ><span  ng-show = "btnUpdate">Accept</span></label>
        <label>
        <input type="radio" ng-model='status'   class = "form-control"  ng-value='"Rejected"' name="reject"  ng-show = "btnUpdate"><span  ng-show = "btnUpdate"> Reject</span></label><br/>
        <button type = "button" class = "btn btn-primary form-control" ng-show = "btnInsert" ng-click = "insertData()"><span class = "glyphicon glyphicon-save"></span>ApplyLeave</button>
        <button type = "button" class = "btn btn-warning form-control" ng-show = "btnUpdate" ng-click = "updateData()"><span class = "glyphicon glyphicon-edit"></span>Confirm</button>
        <br /><br />
        <div ng-model = "message" ng-show = "msgBox" class = "{{messageStatus}}">{{message}}</div>
      </div>
    </form>
    <br />
  
    
 </div>
			   
		<br />
<!-- 		<table class = "table table-responsive table-bordered alert-warning">
			<thead>
				<tr>
          <th>Name</th>
					<th>Firstname</th>
					<th>Lastname</th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody>
				<tr ng-repeat = "member in members">
          <td>{{member.name}}
					<td>{{member.firstname}}</td>
					<td>{{member.lastname}}</td>
					<td>{{member.status}}
					<td><center><button type = "button" ng-click = "updateBtn(member.mem_id, member.name, member.firstname, member.lastname, member.status)" class = "btn btn-warning">Take action</button> <button type = "button" ng-click = "deleteData(member.mem_id);" class = "btn btn-danger"><span class = "glyphicon glyphicon-remove"></span></button></center></td>
				</tr>
			</tbody>
		</table> -->

		<script>

// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>
	</div>
</body>	
</html>