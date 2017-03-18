<?php
/**
* 
*/
class Database {
	private $host = "127.0.0.1"; 
	private $user = "root";
	private $pass = "root";
	private $db   = "application";

	function connectToDb(){
		if (mysql_connect($this-> host, $this-> user, $this-> pass)) {
			// echo"connect to host";
			if (mysql_select_db($this-> db)) {
				// echo "connect to application db";
			}
		}
	}

	function closeConnection(){
		mysql_close();
	}
}
