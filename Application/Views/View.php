<?php

namespace Stack\Application\Views;

class View {

    private $model;



    public function __construct($model) {

        $this->model = $model;

    }



    public function output() {

        return '<h1>' . $this->model->text .'</h1>';

    }



}

?>
