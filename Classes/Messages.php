<?php
/**
 * Created by PhpStorm.
 * User: georgefalkovich
 * Date: 17/01/2020
 * Time: 21:48
 */

class Messages
{

    public static function setMsg($text, $type) {
        if($type == 'error') {
            $_SESSION['errorMsg'] = $text;
        }

        else {
            $_SESSION['successMsg'] = $text;
        }
    }

    public static function display(){
        if(isset($_SESSION['errorMsg'])) {
            echo '<div class="msg alert alert-danger">'.$_SESSION['errorMsg'].'</div>';
            unset($_SESSION['errorMsg']);
        }

        if(isset($_SESSION['successMsg'])) {
            echo '<div class="msg alert alert-success">'.$_SESSION['successMsg'].'</div>';
            unset($_SESSION['successMsg']);
        }


    }

}