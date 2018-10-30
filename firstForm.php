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

<h2>Job Search Database</h2>
<p>
		~this is my first form~
</p>
<div id="myForm">
<form id="myform" name="theForm" class="group" action="formProcess.php" method="POST">
<legend>Account Info</legend>
<ul>
<li><label for="fName"><span id="rqd">*</span>First Name</label>
<input type="text" name="firstName" class="tb" id="fName" placeholder= "First Name" pattern="[A-Za-z]+" required/></li>
<li><label for="lName"><span id="rqd">*</span>Last Name</label>
<input type="text" name="lastName" class="tb" id="lName" placeholder= "Last Name" pattern="[A-Za-z]+" required/></li>
<li><label for="myEmail"><span id="rqd">*</span>Email</label>
<input type="email" name="myEmail" class="tb" id="myEmail" placeholder="Email"/></li>
<li><label for="myCity"><span id="rqd">*</span>City</label>
<input type="text" name="mycity" class="tb" id="myCity" placeholder= "City" pattern="[A-Za-z]+" required/></li>
<li><label for="myState"><span id="rqd">*</span>State</label>
<input type="text" name="myState" class="tb" id="myState" placeholder= "2 letter state abbr" pattern="[A-Za-z]+" required/></li>
<li><label for="myZip"><span id="rqd">*</span>Zip Code</label>
<input type="text" name="myzip" class="tb" id="myZip" placeholder= "Zip Code" pattern="[\d]+" required/></li>
<li><label for="myPhone"><span id="rqd">*</span>Phone Number</label>
<input type="text" name="myphone" class="tb" id="myPhone" placeholder= "Phone Number" pattern="[\d]+" required/></li>
<li><input type="submit" value="Press Me"/></li>
</ul>
</form>
</div>		
</body>
</html>