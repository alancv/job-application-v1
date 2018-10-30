<!DOCTYPE html>

<html lang="eng">
<head>
<title>My First Form</title>
<mega charset="utf-8">
<style>
#myForm{
position:absolute;
border-style:solid;
left:25%;
top:30%;
width:30%;
background-color:#2F4F4F;
box-shadow:10px 10px 5px #888888;
padding:10px;
}
input{
	position:absolute;
	left:50%;
}
.tb{
postion:absolute;
left: 40%;
}

li{margin:5px;}
ul{

list-style:none;
}
#rqd{color:red;}
</style>
</head>
<body>

<h2>My first form</h2>
<p>
		~this is my first form~
</p>
<div id="myForm">


<?php
if($_GET){
	echo'input from the page at www.someGET.com:<br/>';
	echo $_GET['fName']."<br/>";
	echo $_GET['lName']."<br/>";
	echo $_GET['myEmail']."<br/>";
	echo $_GET['myCity']."<br/>";
	echo $_GET['myState']."<br/>";
	echo $_GET['myZip']."<br/>";
	echo $_GET['myPhone']."<br/>";
}elseif($_POST){
	echo'input from the page at www.somePOST.com:<br/>';
	echo $_POST['firstName']."<br/>";
	echo $_POST['lastName']."<br/>";
	echo $_POST['myEmail']."<br/>";
	echo $_POST['mycity']."<br/>";
	echo $_POST['myState']."<br/>";
	echo $_POST['myzip']."<br/>";
	echo $_POST['myphone']."<br/>";
	
}

?>
</div>
</body>
</html>