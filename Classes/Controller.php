<?php
/**
 * Created by PhpStorm.
 * User: georgefalkovich
 * Date: 08/01/2020
 * Time: 20:35
 */


 abstract class Controller{
     protected $request;
     protected $action;

     public function __construct($action, $request) {
         $this->action = $action;
         $this->request = $request;
     }

     public function executeAction() {
         return $this->{$this->action}();
     }

     protected function returnView($carCompanies) {
             require('views/main.php');
     }
 }