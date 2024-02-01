<!DOCTYPE html>
<html>
<head>
<script src="js/jquery-3.3.1.js?ver=001"></script>
<script src="js/main.js?ver=004"></script>
</head>
<body >	
<!--	<p id="errors"></p>
	<input type="text" name="fname" id="fname" onfocusout="validateForm();"><span id="error" style="color:red"></span><br><br>

	<input type="text" name="lname" id="lname" onfocusout="validateForm();">
<span id="lerror" style="color:red"></span>

	<br><br><br><br>-->
    SEARCH:
    <br><br>
	<input type="text" placeholder="full name" id="fullname" onfocusout="searchUser();" onkeyup="searchUser();"><span id="errorf" style="color:red"></span>
	<input type="text" placeholder="address" id="address" onfocusout="searchUser();" onkeyup="searchUser();"><span id="errorf" style="color:red"></span>
    
    <br><br>	
	<div id="loadusers"></div>
</body>
</html>

