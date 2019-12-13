<?php
require "blackjack.php";
session_start();
if(!isset($_GET["action"])) {
    $_SESSION['player'] = null;
    $_SESSION['dealer'] = null;
}
$playerHand;
$dealerHand;
$wincount;
if(isset($_SESSION['player']) && !empty($_SESSION['player']) ){
    $playerHand = $_SESSION['player'];
    $dealerHand = $_SESSION['dealer'];
} else {
    $playerHand = new BlackJackHand("Erin");
    $_SESSION['player'] = $playerHand;
    $dealerHand = new BlackJackHand("Dealer");
    $_SESSION['dealer'] = $dealerHand;   
}
if(isset($_SESSION['wincount'])) {
        $wincount = $_SESSION['wincount'];
} else {
    $wincount = 0;
    $_SESSION['wincount'] = $wincount;
}
$shouldDealerPlay = false;
$dealerRevealsHand = false;
$endOfPlayerTurn = false;
$winMessage = null;
if(isset($_GET["action"])) {
    $action = $_GET["action"];
    switch($action) {
        case "hit":
            $playerHand->AddCard();
            break; 
        case "stand":
            $shouldDealerPlay = true;
            $endOfPlayerTurn = true;
            break;
        case "surrender":
            $winMessage = $dealerHand->owner . " wins!";
            $endOfPlayerTurn = true;            
            $dealerRevealsHand = true;
            break;
    }
} 
// blackjack => player wins immediately
if($playerHand->getScore() == 21 && sizeof($playerHand->cards) == 2) {
    $winMessage = "Blackjack!";
    $wincount++;
    $_SESSION['wincount'] = $wincount;
}
// player busts => dealer wins immediately
$playerBusted = ($playerHand->getScore() > 21);
if($playerBusted) {
    $winMessage = $dealerHand->owner . " wins!";
}
// No winner yet...
if($winMessage == null && $endOfPlayerTurn) {
    if($shouldDealerPlay) {
        $dealerHand->PerformDealerTurn();
        $dealerRevealsHand = true;
    }
    if($playerHand->getScore() > $dealerHand->getScore() || $dealerHand->getScore() > 21) {
        $winMessage = $playerHand->owner . " wins!";
        $wincount++;
        $_SESSION['wincount'] = $wincount;
    }
    else if ($playerHand->getScore() < $dealerHand->getScore()) {
        $winMessage = $dealerHand->owner . " wins!";
    }
    else {
        $winMessage = "Push!";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="style.php" media="screen">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">

    <title>LG - Blackjack</title>
</head>

<body>
    <div id="blackjack-container">
        <span>
            <h1> Blackjack </h1>
        </span>

        <p> Wins : <?php echo $wincount ?> </p>

        <!-- DEALER -->
        <div id="dealer">
            <?php 
                if($dealerRevealsHand) {
                    $dealerHand->Show(); 
                } else {
                    $dealerHand->ShowPartial();
                }
            ?>
        </div>

        <!-- PLAYER -->
        <div id="player">            
            <?php 
                
                $playerHand->Show(); 
                
                if($playerBusted) { ?>
                    
                    <p style="color:red;"> BUSTED </p>

                <?php }
            ?>
        </div>

        <!-- ACTIONS -->
        <div>
            <?php
                if($winMessage == null) { ?>
                <div id="game-controls">
                    <input class="btn btn-light" type="button" value="Hit" onclick="window.location = './game.php?action=hit';" />
                    <input class="btn btn-light" type="button" value="Stand" onclick="window.location = './game.php?action=stand';" />
                    <input class="btn btn-light" type="button" value="Surrender" onclick="window.location = './game.php?action=surrender';" />
                    </div>
                <?php } else { 
                    echo "<p style='color: blue;'>" . $winMessage . "</p>";
                 } ?>
                <div id="navigation-controls">
                <br>
                <input class="btn btn-success" type="button" value="New Game" onclick="window.location = './game.php';" />
                <input class="btn btn-info" type="button" value="Rules" onclick="window.location = './rules.php';" />
                <input class="btn btn-danger" type="button" value="Home" onclick="window.location = './home.php';" />
</div>
        </div>


    </div>
</body>

</html>