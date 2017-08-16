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
    * @param (String) 'black' or 'red'
    * @param (String) 'spades', 'clubs', 'hearts', 'diamond'
    * @param (bool)   true = face up , false = face down
    */
   public function __construct($value, $color, $suit, $face) {
       if (($value > 0) && ($value < 14)) {
           $this->value = $value;
       } else {
           echo "Error: Please select a value between 1 and 13\n";
       }

       if (($color === 'red') || ($color === 'black')) {
           $this->color = $color;
       } else {
           echo "Error: Please select red or black\n";
       }

       if (($suit === 'spades') || ($suit === 'clubs') || ($suit === 'hearts') || ($suit === 'diamond')) {
           $this->suit  = $suit;
       } else {
           echo "Error: Please select spades, clubs, hearts, diamond";
       }

       if (($face === false) || ($face === true)) {
           $this->face  = $face;
       } else {
           echo "Error: Please select true or false";
       }
   }

   /*
    * getValue
    *
    * Gets the value of the card.
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
      * @return (bool) true for open, false for set
      */
   public function  getFace() {
       return $this->face;
   }

    /*
     * setFace
     *
     * Sets the face value.
     *
     * @param (bool) the current face value
     */
   public function setFace($face) {
       if (($face >= 0) && ($face <= 1)) {
           $this->face = $face;
       } else {
           echo "Error: Please select true or false\n";
       }
   }
}