<?php

/*
 * связываем данные таблиц базы данных с переменными
 * для выборки данных из базы данных используем запросы,
 * class db из папки inc
 */

class model {

    //---------------------------------- maakond list - список уездов
    public function getMaakondList() {
        //Запрос $SQL
        //Выполнить запрос
        //Создать экземпляр класса(объект)
        //Записать в объект

        $sql = "SELECT * FROM maakond ORDER BY `name_maakond` ASC";
        //создать экземпляр класса db
        $db = new db();
        //$rows = массив данных
        $rows = $db->getAll($sql);
        //----------------------------------------------------------
        $maakond_object = array();
        foreach ($rows as $item) {
            $row = new Maakond($item["id_maakond"], $item["name_maakond"], $item["capital"], $item["description"]);

            $maakond_object[] = $row;
        }

        return $maakond_object;
    }

    //---------------------------------------------------------------
    public function getMaakondOne($id) {
        //идентификатор записи из таблицы - $_GET['id'] 
        $sql = "SELECT * FROM `maakond` WHERE `id_maakond` = $id";
        $db = new db();
        $item = $db->getOne($sql); //результат - 1 строка
        $maakond_object = new Maakond($item["id_maakond"], $item["name_maakond"], $item["capital"], $item["description"]);
        return $maakond_object;
    }

    //----------------------------------------------------------------

    public function getCitiesList() {
        $sql = "SELECT * FROM `city` ORDER BY `city`.`city` ASC";
        $db = new db();
        $rows = $db->getAll($sql);
        //-------------------------------------------------------
        $cities_object = array();
        foreach ($rows as $item) {
            $cities_object[] = new Cities($item["id_city"], $item["city"], $item["people"], $item["id_maakond"]);
        }
        return $cities_object;
    }

    public function getCitiesOne($city) {
        $sql = "SELECT * FROM `city` WHERE `id_city` = $city";
        $db = new db();
        $item = $db->getOne($sql); //результат - 1 строка
        $cities_object = new Cities($item["id_city"], $item["city"], $item["people"], $item["id_maakond"]);
        return $cities_object;
    }
    
    public function getGalleryList() {
        $sql = "SELECT * FROM `gallery` ORDER BY `gallery`.`id_gallery` ASC";
        $db = new db();
        $rows = $db->getAll($sql);
        $gallery_object = array();
        foreach ($rows as $item) {
            $gallery_object[] = new Gallery($item["id_gallery"], $item["picture"], $item["id_city"]);
        }
        return $gallery_object;
    }

}

?>