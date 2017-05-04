<?php

/*
 * 
 */

class Gallery {

    public $id_gallery;
    public $picture;
    public $id_city;

    public function __construct($id_gallery, $picture, $id_city) {
        $this->id_gallery = $id_gallery;
        $this->picture = $picture;
        $this->id_city = $id_city;
    }

}
