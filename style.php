<?php

header("Content-type: text/css");


$font_family = 'Abril Fatface, cursive';
$font_size = '0.9em';
$border = 'black 1px solid';
?>


body {
    background-color: pink;
    color: #333C4B;
    font-family: <?= $font_family ?>;
    background-size: cover;
    background-image: linear-gradient(to bottom, rgba(0,0,0,0.4) 0%,rgba(0,0,0,0.4) 100%), url(background.jpg);

}

ul {
    list-style: none;
    font-family: arial;
}

#dealer {
    color: #FA5E42 ;
    text-align: center;
}

#player {
    text-align: center;
    margin-top: 40px;
    color: #FA5E42;
}

#blackjack-container {
    border-radius: 8px;
    padding: 25px;
    margin-top: 30px;
    text-align: center;
    background-color: #fffff9;
    margin-left: 22%;
    margin-right: 22%;
    box-shadow: grey 3px 3px 10px;
}

#game-controls {
    margin-left: 25%;
    margin-right: 25%;
    padding: 35px;
    border-radius: 8px;
    margin-top: 8%;
    background-color: #003909;
    box-shadow: grey 3px 3px 10px;
    background-size: cover;
}

#navigation-controls {
    font-size: 2em;
}

#home-game-container {
    border-radius: 8px;
    padding: 25px;
    margin-top: 30px;
    text-align: center;
    background-color: #fffff9;
    margin-left: 22%;
    margin-right: 22%;
    box-shadow: grey 3px 3px 10px;
}