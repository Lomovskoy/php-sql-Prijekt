<?php

/*
 * 
 */

class Cities {

    public $id_city;
    public $city;
    public $people;
    public $id_maakond;

    public function __construct($id_city, $city, $people, $id_maakond) {
        $this->id_city = $id_city;
        $this->city = $city;
        $this->people = $people;
        $this->id_maakond = $id_maakond;
    }
}
