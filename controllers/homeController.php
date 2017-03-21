<?php

class HomeController {
    
    public $user;
    
    public function __construct() {
        $ch = curl_init();
        $url = "https://holidayapi.com/v1/holidays?key=c21e8967-bf9a-46e4-a5f4-cacdcd8aec29&country=RU&year=2016";
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);  
        curl_close($ch);
//        echo $result;
    }
    
    public function logout() {
        session_destroy();
        header('Location: /login');
    }
}