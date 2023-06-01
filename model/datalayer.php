<?php

/**
 * Datalayer class used to manipulate database model
 * @author David Kurilla
 */
class Datalayer
{

    private array $data;

    static function unpackCargo($cargo)
    {
        $data = array();

        for ($i = 0; i < count($cargo); i++) {
            $data[$i] = $cargo[$i];
        }
    }

}