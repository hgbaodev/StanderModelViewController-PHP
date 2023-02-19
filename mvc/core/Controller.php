<?php
class Controller{

    public function model($model){
        require_once "./mvc/models/".$model.".php";
        return new $model;
    }

    public function view($model, $data=[]){
        require_once "./mvc/views/".$model.".php";
    }
}
?>