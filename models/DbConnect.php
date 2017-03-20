<?php
/**
* 
*/
class DbConnect {
	private $host = "127.0.0.1"; 
	private $user = "root";
	private $pass = "root";
	private $db   = "application";
	function connectToDb(){
            if (mysql_connect($this-> host, $this-> user, $this-> pass)) {
                if (mysql_select_db($this-> db)) {
                }
            }
	}
	function closeConnection(){
		mysql_close();
	}
}
