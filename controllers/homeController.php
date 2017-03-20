<?php

class HomeController {
    public $user;
    public function __construct() {
    }
    public function logout() {
        session_destroy();
        header('Location: /login');
    }
}