<?php
/**
 * Created by PhpStorm.
 * User: denni
 * Date: 12.08.2017
 * Time: 08:57
 */

class Card
{
   private $color;
   public $value;
   private $face;
   private $suit;

   /*
    * __construct
    *
    * Sets the value, color, suit, and face of a card.
    *
    * @param (int)    value between 1-13
    * @param (String) black or red
    * @param (String) spades, cross, hearts, diamond
    * @param (bool)   1 = face up , 0 = face down
    */
   public function __construct($value, $color, $suit, $face) {
       $this->value = $value;
       $this->color = $color;
       $this->suit  = $suit;
       $this->face  = $face;
   }

   /*
    *
    */
   //public function setValue($value) {

   //}

}

$card = new Card(10, 'red', "hearts", 1);
echo $card->value;