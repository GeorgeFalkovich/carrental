<?php
/**
 * Created by PhpStorm.
 * User: georgefalkovich
 * Date: 08/01/2020
 * Time: 20:25
 */

class Bootmvc
{

    private $controller;
    private $action;
    private $request;

    public function __construct($request) {
        $this->request = $request;

        if($this->request['controller'] == "") {
            $this->controller = "home";
        }
        else {
            $this->controller = $request['controller'];
        }

        if($this->request['action'] == "") {
            $this->action = "index";
        }
        else {

        }
    }

    public function createController() {
        //Check if class exists
        if(class_exists($this->controller)) {
            $parents = class_parents($this->controller);
            // Check if class extends controller
            if(in_array("Controller", $parents)) {
                //Check if action exists
                if(method_exists($this->controller, $this->action)) {
                    return new $this->controller($this->action, $this->request);
                } else {
                    //Inform method does not exists
                    echo "<h1>Method does not exists!</h1>";
                }       return;
            } else {
                //Inform base controller does not exists
                echo "<h1>Base controller does not exists!</h1>";
                return;
            }
        } else {
            //Inform controller class does not exists
            echo "<h1>Controller class does not exists!</h1>";
            return;
        }

    }


}