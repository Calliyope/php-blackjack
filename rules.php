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
            <h1> Rules of BlackJack </h1>
        </span>
        <div>
            <p> Learn yourself some rules...
                <ul>
                    <li>Cards are between 1-11 points.</li>
                    <li>Getting more than 21 points, means that you lose.
                    </li>
                    <li>Getting 21 points with your first two cards, means you have a blackjack.
                    </li>
                    <li>To win, you need to have more points than the dealer, but not more than 21.
                    </li>
                    <li>The dealer is obligated to keep taking cards until they have at least 15 points.
                    </li>

                </ul>
            </p>
        </div>

        <input name="toHome" class="btn btn-danger" type="button" value="Exit" onclick="window.open('./home.php')" />

        <input name="newGame" class="btn btn-primary" type="button" value="Play!" onclick="window.open('./game.php')" />

    </div>
</body>

</html>