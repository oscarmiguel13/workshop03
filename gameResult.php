<?php
// Start the session
session_start();
?>
<html>
<title>Carlo Petalver</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<head>
</head>
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
<?php
if(empty($_SESSION['your_win'])  &&
    empty($_SESSION['cpu_win'])  && 
   empty($_SESSION['draw'])     ){
    $_SESSION['your_win'] = 0;
    $_SESSION['cpu_win'] = 0;
    $_SESSION['draw'] = 0;
    //Printing the initiation of session variables for your reference
    echo $_SESSION['your_win']; 
    echo $_SESSION['cpu_win'];
    echo $_SESSION['draw'] ;
}
    $playerturn = $_POST['playerturn'];
    $rpc= array('rock', 'paper', 'scissors');
    $rndm= rand(0,2);
    $Computer=$rpc[$rndm];

    echo '<h2>You picked: '.$playerturn.'</h2>';
    echo '<h2>The computer picked: '. $Computer .'</h2>';
    if ($playerturn == $Computer){
        $_SESSION['draw']+=1;
        echo "YOUR SCORE:".$_SESSION['your_win']."<br>";
        echo "CPU SCORE:".$_SESSION['cpu_win']."<br>" ;
        echo "DRAW:".$_SESSION['draw']."<br>";
    }
    else if($playerturn == 'rock' && $Computer == 'scissors'){
        $_SESSION['your_win']+=1;
        echo "YOUR SCORE:".$_SESSION['your_win']."<br>";
        echo "CPU SCORE:".$_SESSION['cpu_win']."<br>" ;
        echo "DRAW:".$_SESSION['draw']."<br>";
        echo '<h1>You Win!</h1>';
}
    else if($playerturn == 'rock' && $Computer == 'paper'){
        $_SESSION['cpu_win']+=1;
        echo "YOUR SCORE:".$_SESSION['your_win']."<br>";
        echo "CPU SCORE:".$_SESSION['cpu_win']."<br>" ;
        echo "DRAW:".$_SESSION['draw']."<br>";
        echo  '<h1>You Lose! </h1>';
}
    else if($playerturn == 'scissors' && $Computer == 'rock'){
        $_SESSION['cpu_win']+=1;
        echo "YOUR SCORE:".$_SESSION['your_win']."<br>";
        echo "CPU SCORE:".$_SESSION['cpu_win']."<br>" ; 
        echo "DRAW:".$_SESSION['draw']."<br>"; 
        echo  ' <h1>You Lose!</h1> ';
}
    else if($playerturn == 'scissors' && $Computer == 'paper'){
        $_SESSION['your_win']+=1;
        echo "YOUR SCORE:".$_SESSION['your_win']."<br>";
        echo "CPU SCORE:".$_SESSION['cpu_win']."<br>" ;
        echo "DRAW:".$_SESSION['draw']."<br>";   
        echo '<h1> You Win! </h1>';
}
    else if($playerturn == 'paper' && $Computer == 'rock'){
        $_SESSION['your_win']+=1;
        echo "YOUR SCORE:".$_SESSION['your_win']."<br>";
        echo "CPU SCORE:".$_SESSION['cpu_win']."<br>" ;
        echo "DRAW:".$_SESSION['draw']."<br>";
        echo '<h1>You Win!</h1>';
}
    else if($playerturn == 'paper' && $Computer == 'scissors'){
        $_SESSION['cpu_win']+=1;
        echo "YOUR SCORE:".$_SESSION['your_win']."<br>";
        echo "CPU SCORE:".$_SESSION['cpu_win']."<br>" ; 
        echo "DRAW:".$_SESSION['draw']."<br>";
        echo '<h1>You Lose!</h1>' ;
}

?>
<hr>
<button type="submit" onclick="window.location.href='gameStart.php'" class="button">Play Again</button>
<button type = "submit" class="button">Exit</button>
</div>
</div>
</body>
</html>