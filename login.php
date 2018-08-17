<html>
<header>
</header>
<title>Carlo Petalver</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<head>
<style type="text/css">
    body{
        width: 40%;
        margin: auto;
        padding: 10px;
        margin-top: 50px;
    }
    h3{
        text-align: center;
    }
    .button {
        background-color: #e7e7e7; /* Green */
        border: none;
        color: black;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
    }
    p{
    	padding-left: 10px;
    }
    label{
		width: 4em;
		float: left;
		text-align: right;
		margin-right:3em;
		display: block
	}
	.paddings{
		padding-left: 40px;
		padding-top: 20px;
	}
	.movebuttonleft{
		padding-left: 100px;
	}
</style>
<body>
<div class="errmsg">
<?php
	session_start();
	if($_SESSION['errmsg']){
		echo $_SESSION['errmsg'];
		session_unset();
		session_destroy();
	}
	else{
		$_SESSION['errmsg']="";
		echo $_SESSION['errmsg'];
		session_unset();
		session_destroy();
	}
?>
</div>
<div class="w3-container">
<div class="w3-card-4">
<div class="w3-container w3-red">
<h1>Login</h1>
</div>
<div class="paddings">
<form action="process.php" method="post">
	<label>username</label><input type="text" name="username"><br>
	<label>password</label><input type="password" name="password"><br>
<br>
<div class="movebuttonleft">
<input type="submit" value="Submit" class="button">
<input type="reset" value="Reset" class="button"><br><br>
</div>
</form>
</div>
</div>
</div>
</body>
</html> 