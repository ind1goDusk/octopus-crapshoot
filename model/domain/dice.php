<?php

/**
 * This class represents dice objects.
 */
class Dice
{
    private string $_sprite;
    private int $_price;

    /**
     * This is the constructor for the dice.
     * @param string $sprite the file path to the sprite image for the dice
     * @param int $price the price of the dice in the shop
     */
    function __construct(string $sprite, int $price)
    {
        $this->_sprite = $sprite;
        $this->_price = $price;
    }

    /**
     * This method gets the file path for the sprite of the dice.
     * @return string the file path for the sprite image of the dice
     */
    function getSprite(): string
    {
        return $this->_sprite;
    }

    /**
     * This method sets the file path for the sprite.
     * @param string $sprite the file path for the sprite image of the data
     */
    function setSprite(string $sprite): void
    {
        $this->_sprite = $sprite;
    }

}