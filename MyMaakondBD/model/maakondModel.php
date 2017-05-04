<?php

/*
 * Создаём переменные - для класса, class Maakond, 
 * переменных столько сколько полей в таблице maakond
 * класс 
 */

class Maakond {

    public $id_maakond;
    public $name_maakond;
    public $capital;
    public $description;

    public function __construct($id_maakond, $name_maakond, $capital, $description) {
        $this->id_maakond = $id_maakond;
        $this->name_maakond = $name_maakond;
        $this->capital = $capital;
        $this->description = $description;
    }

}
