<?php

class HollidayController {
    
    public function __construct() {

    }
    
    public function getHollidays($arg) {
//        $ch = curl_init();
//        $url = "https://holidayapi.com/v1/holidays?key=c21e8967-bf9a-46e4-a5f4-cacdcd8aec29&country=".$arg."&year=2016";
//        curl_setopt($ch, CURLOPT_URL,$url);
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//        $result = curl_exec($ch);  
//        curl_close($ch);
        
        $client = new \GuzzleHttp\Client();
        $res    = $client->request('GET', 'https://holidayapi.com/v1/holidays?key=c21e8967-bf9a-46e4-a5f4-cacdcd8aec29&country='.$arg.'&year=2016');
        $result =  $res->getBody();
        $x      = json_decode($result,true);
        
        if(isset($x['holidays'])){

            $holy = $x['holidays'];
            $_SESSION['holliday'] = $holy;
        }

    }
}