<?php

class Controller extends RenderTemplate {

    public $model;

    public function __construct() {
        $this->model = new Model();
    }

    // Просмотр списка фильмов - стартовая страница
    public function start_site() {
        $html = $this->render_template('view/homepage.php', array(), array(), array());
        return $html;
    }

//......................	
    //Страница контакт
    public function contact_view() {
        $html = $this->render_template('view/contact.php', array(), array(), array());
        return $html;
    }

    //Страница Error
    public function error_404() {
        $html = $this->render_template('view/error_404.php', array(), array(), array());
        return $html;
    }

    //--------------------------------------------------------------------
    //список уездов maakonnad_list

    public function maakonnad_list() {
        $maa_list = $this->model->getMaakondList();
        $html = $this->render_template('view/list_maakond.php', array('maa_list' => $maa_list), array(), array());
        return $html;
    }

    //--------------------------------------------------------------------
    //делатальная запись $id получаем из routing.php
    public function maakonnad_view($id) {
        $maa_one = $this->model->getMaakondOne($id);
        $html = $this->render_template('view/view_maakond.php', array('maa_one' => $maa_one), array(), array());
        return $html;
    }

    //---------------------------------------------------------------------
    //список городов по умолчанию

    public function cities_list() {
        $maa_list = $this->model->getMaakondList(); // список уездов
        $cities_list = $this->model->getCitiesList(); // список городов
        $html = $this->render_template('view/cities_view.php', array('maa_list' => $maa_list), array('cities_list' => $cities_list), array());
        return $html;
    }

    public function cities_view($city) {
        $city_one = $this->model->getCitiesOne($city); // список уездов
        $html = $this->render_template('view/list_cities.php', array('city_one' => $city_one), array('city_one' => $city_one), array());
        return $html;
    }

    //список фотографий по умолчанию

    public function gallery_list() {
        $gall_list = $this->model->getGalleryList();
        $html = $this->render_template('view/gallery_view.php', array('gall_list' => $gall_list), array(), array());
        return $html;
    }

}

?>