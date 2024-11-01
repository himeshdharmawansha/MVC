<?php

class Login extends Controller{

    public function index(){

        echo $_SESSION['user_type'];

        $this->view('login');
    }
}