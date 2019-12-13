<?php
// $playerHand = new BlackJackHand("Alfie");
// $playerHand->Show();
// $playerHand->AddCard();
// $playerHand->Show();
// $playerHand->AddCard();
// $playerHand->Show();
class Card
{
    public $name; // ace of spades
    public $value; // 1-11 (aces are 11)
    public function __construct($cardName, $cardValue)
    {
        $this->name = $cardName;
        $this->value = $cardValue;
    }
};
function drawACard() {
    $deck = array(
        new Card("Two of spades", 2),
        new Card("Three of spades", 3),
        new Card("Four of spades", 4),
        new Card("Five of spades", 5),
        new Card("Six of spades", 6),
        new Card("Seven of spades", 7),
        new Card("Eight of spades", 8),
        new Card("Nine of spades", 9),
        new Card("Ten of spades", 10),
        new Card("Jack of spades", 10),
        new Card("Queen of spades", 10),
        new Card("King of spades", 10),
        new Card("Ace of spades", 11),
        new Card("Two of hearts", 2),
        new Card("Three of hearts", 3),
        new Card("Four of hearts", 4),
        new Card("Five of hearts", 5),
        new Card("Six of hearts", 6),
        new Card("Seven of hearts", 7),
        new Card("Eight of hearts", 8),
        new Card("Nine of hearts", 9),
        new Card("Ten of hearts", 10),
        new Card("Jack of hearts", 10),
        new Card("Queen of hearts", 10),
        new Card("King of hearts", 10),
        new Card("Ace of hearts", 11),
        new Card("Two of clubs", 2),
        new Card("Three of clubs", 3),
        new Card("Four of clubs", 4),
        new Card("Five of clubs", 5),
        new Card("Six of clubs", 6),
        new Card("Seven of clubs", 7),
        new Card("Eight of clubs", 8),
        new Card("Nine of clubs", 9),
        new Card("Ten of clubs", 10),
        new Card("Jack of clubs", 10),
        new Card("Queen of clubs", 10),
        new Card("King of clubs", 10),
        new Card("Ace of clubs", 11),
        new Card("Two of diamonds", 2),
        new Card("Three of diamonds", 3),
        new Card("Four of diamonds", 4),
        new Card("Five of diamonds", 5),
        new Card("Six of diamonds", 6),
        new Card("Seven of diamonds", 7),
        new Card("Eight of diamonds", 8),
        new Card("Nine of diamonds", 9),
        new Card("Ten of diamonds", 10),
        new Card("Jack of diamonds", 10),
        new Card("Queen of diamonds", 10),
        new Card("King of diamonds", 10),
        new Card("Ace of diamonds", 11)
    );
    $randomIndex = rand(0, sizeof($deck) - 1);
    return $deck[$randomIndex];
}
class BlackJackHand {
    public $owner;
    public $cards;
    public function __construct($ownerName)
    {
        $this->owner = $ownerName;
        $this->cards = array ( drawACard() , drawACard() );
    }
    public function Show() {
        echo "<h2>" . $this->owner . "'s hand</h2>";
        echo "<ul>";
        foreach($this->cards as $card) {
            echo "<li>" . $card->name . " (" . $card->value . ")</li>";
        }
        echo "</ul>";
        echo "<p><b>Score :</b> " . $this->getScore() . " points</p>";
    }
    public function ShowPartial() {
        echo "<h2>" . $this->owner . "'s hand</h2>";
        echo "<ul>";
        foreach($this->cards as $i => $card) {
            if($i == 0) {
                echo "<li>" . $card->name . " (" . $card->value . ")</li>";
            } else {
                echo"<li>???</li>";
            }
        }
        echo "</ul>";
    }
    public function getScore() {
        $score = 0;
        foreach($this->cards as $card) {
            $score += $card->value;
        }
        return $score;
    }
    public function AddCard() {
        array_push($this->cards, drawACard());
    }
    public function PerformDealerTurn() {
        while($this->getScore() < 17) {
            $this->AddCard();
        }
    }
}
?>