<?php

/**
 * This class represents a wrapped set of data.
 */
class Cargo
{

    private array $_data;

    /**
     * This method constructs a new Cargo object.
     * @param array $data an array of data in the Cargo
     */
    function __construct(array $data)
    {
        $this->_data = $data;
    }

    /**
     * This method gets data from the Cargo.
     * @return array the data from the Cargo
     */
    function getData(): array
    {
        return $this->_data;
    }

}