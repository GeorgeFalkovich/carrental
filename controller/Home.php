<?php
/**
 * Created by PhpStorm.
 * User: georgefalkovich
 * Date: 08/01/2020
 * Time: 20:37
 */



class Home extends Controller
{
    protected function Index() {
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if(isset($post['submit'])) {
            $submitModel = new SubmitModel();
            $submitModel->Index();
        }


       $viewmodel = new HomeModel();
       $this->returnView($viewmodel->Index());
    }
}