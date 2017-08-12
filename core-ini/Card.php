<?php
/**
 * Created by PhpStorm.
 * User: denni
 * Date: 12.08.2017
 * Time: 08:57
 */

final class Card
{
   private $color;
   private $value;
   private $face;
   private $suit;

   /*
    * __construct
    *
    * Sets the value, color, suit, and face of a card.
    *
    * @param (int)    value between 1-13
    * @param (String) black or red
    * @param (String) spades, clubs, hearts, diamond
    * @param (bool)   1 = face up , 0 = face down
    */
   public function __construct($value, $color, $suit, $face) {
       $this->value = $value;
       $this->color = $color;
       $this->suit  = $suit;
       $this->face  = $face;
   }

   /*
    * getValue
    *
    * Gets the value of the card.
    *
    * @param (void)
    *
    * @return (int) A value between 1 and 13
    */
   public function getValue() {
       return $this->value;
   }

    /*
     * getColor
     *
     * Gets the color of the card.
     *
     * @param (void)
     *
     * @return (String) "red" || "black"
     */
   public function  getColor() {
       return $this->color;
   }

    /*
     * getSuit
     *
     * Gets the suit of the card.
     *
     * @param (void)
     *
     * @return (String) spades, clubs, hearts, diamond
     */
   public function getSuit() {
       return $this->suit;
   }

    /*
      * getFace
      *
      * Gets the face of the card.
      *
      * @param (void)
      *
      * @return (bool) 1 for open, 0 for set
      */
   public function  getFace() {
       return $this->face;
   }
}

$card = new Card(10, 'red', "hearts", 1);
echo $card->getValue();