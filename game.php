<?php

session_start();

require "blackjack.php";

$player = new Player(0, "Erin");
$dealer = new Dealer(0);


$_SESSION["player"] = $player;
$_SESSION["dealer"] = $dealer;

$player->Begin();
$dealer->Begin()

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    <title>Playin' Blackjack</title>
</head>

<body>
    <div id="home-container">
        <span>
            <h1> Blackjack </h1>
        </span>

        <!-- DEALER -->
        <div>
            <h3> Dealer </h3>
            <?php echo "The dealer currently has $dealer->score points" ?>


        </div>

        <!-- PLAYER -->
        <div>
            <h2> <?php echo $player->name?> </h2>
            <?php echo "You currently have $player->score points" ?>
        </div>


    </div>
</body>

</html>