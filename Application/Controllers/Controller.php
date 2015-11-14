<?php

namespace Stack\Application\Controllers;

class Controller {

    private $model;



    public function __construct(Model $model) {

        $this->model = $model;

    }

}

?>
