<?php
session_start();

if(isset($_GET['exit']) == 1){
session_destroy();
header('Location: gameStart.php');
}
?>
<html>
<title>Carlo Petalver</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<head>
     <title>Rock, Paper and Scissor Game</title>
</head>
<style type="text/css">
	body{
        width: 30%;
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
    .w3-card-4{
    	padding: 10px;
    }
</style>
<body>
<div class="w3-container">
<div class="w3-card-4">
<div class="w3-container w3-blue">
<h1> Rock, Paper and Scissor Game</h1>
</div>
<form action="gameResult.php" method="POST">
    <p>Please Choose Your Player</p>
    <h2>Rock<input type="radio" value="rock" name="playerturn"  /><br />
       Paper<input type="radio" value="paper" name="playerturn"  /><br />
       Scissor<input type="radio" value="scissors" name="playerturn" /><br />
    </h2>
    <p><input type="submit" value="Play" class="button"></p>
</form>
</div>
</div>
</body>
</html>