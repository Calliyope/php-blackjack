<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="style.php" media="screen">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">
    <title>Little Games</title>
</head>

<body>
    <div id="home-container">
    <div id=home-game-container>
        <span>
            <h1> Blackjack </h1>
        </span>

        <input name="newBlackjack" class="btn btn-primary" type="button" value="Play!" onclick="window.location = './game.php';" />
        <input class="btn btn-info" type="button" value="Rules" onclick="window.location = './rules.php';" />

        <?php require "blackjack.php"; ?>
</div>

<div id=home-game-container>
        <span>
            <h1> Dice </h1>
        </span>

        <input name="newDice" class="btn btn-primary" type="button" value="Play!" onclick="window.location = './dice.php';" />
        <input class="btn btn-info" type="button" value="Rules" onclick="window.location = './rules-dice.php';" />

        <?php require "dice.php"; ?>
</div>
    </div>
</body>

</html>