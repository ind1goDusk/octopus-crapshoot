<?php

class Dice
{
    private string $_sprite;
    private int $_price;

    function __construct(string $sprite, int $price)
    {
        $this->_sprite = $sprite;
        $this->_price = $price;
    }

    function getSprite(): string
    {
        return $this->_sprite;
    }

    function setSprite(string $sprite): void
    {
        $this->_sprite = $sprite;
    }

}