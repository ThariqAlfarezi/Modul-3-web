<?php
namespace Controller;

class Controller
{
    //Variable Attributes
    var $controllerName;
    var $controllerMethod;

    // Method untuk mengambil semua atribut
    public function getControllerAtribute()
    {
    return [
        "controllerName" => $this->controllerName,
        "Method" => $this->controllerMethod,
    ];
    }
}