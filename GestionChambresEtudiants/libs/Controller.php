<?php

class Controller{
    protected $view;
    protected $data_view=[];
    protected $validator;

    public function render(){

        $pathView="./views/".$this->view.".php";
          ob_start();
             extract($this->data_view);
           require_once($pathView);
    }
}