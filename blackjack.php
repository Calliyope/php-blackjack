<?php

class Blackjack
{

    public $score;
    public function __construct($score)
    {
        $this->score = $score;
    }

  

    public function Begin()
    {
        $this->score += rand(1, 11) + rand(1, 11);
    }

    public function Hit()
    {
        $this->score += rand(1, 11);
    }

    public function Stand()
    { dealerTurn()

    }

    public function Surrender()
    { }
};

class Player extends Blackjack
{

    public $name;

    public function __construct($score, $name)
    {
        $this->name = $name;
        parent::__construct($score);
    }
};

class Dealer extends Blackjack
{


    public function __construct($score)
    {
        parent::__construct($score);
    }
};

function dealerTurn($dealer , $dealerScore, $playerScore){

    if ($dealerScore < 18) {
        $dealer->hit();
    } else if ($dealerScore >= 18 && $dealerScore < $playerScore){
        $dealer->hit();
    } else {
        $dealer->stand();
    }
    };
