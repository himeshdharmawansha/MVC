<?php

class signup extends Controller{

    public function index(){

        $user = new User;
        if($user->validate($_POST))
        {
            $user->insert($_POST);
            redirect("home");
        }
        show($_POST);
        $this->view('signup');
    }
}