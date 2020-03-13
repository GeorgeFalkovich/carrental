<?php
/**
 * Created by PhpStorm.
 * User: georgefalkovich
 * Date: 08/01/2020
 * Time: 20:29
 */

session_start();

require('Classes/Bootmvc.php');
require('Classes/Controller.php');
require('Classes/Model.php');
require('Classes/Messages.php');

require('controller/Home.php');


require('model/Home.php');
require('model/Submit.php');

require('assets/config.php');

$bootmvc = new Bootmvc($_GET);
$controller = $bootmvc->createController();
if($controller) {
    $controller->executeAction();
}

