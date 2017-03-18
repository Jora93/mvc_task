<?php
/**
* 
*/

class Select extends Database{
	private $tabname;
	function __construct($tablename){
		$this-> connectToDb();
		$this-> tabname = $tablename;
	}
	function getRecordById($id){
		$query = "Select * from $this->tabname Where id = '$id'";
		if ($sql = mysql_query($query)) {
			$data = mysql_fetch_array($sql);
		}
		return $data;
	}
	function getAllData(){
		$query = "Select * from $this->tabname";
		if ($sql = mysql_query($query)) {
			for ($i = 0; $i < mysql_num_rows($sql); $i++) { 
				$data[$i] = mysql_fetch_array($sql);
			}
		}
		return $data;
	}
	function getDataWithParametrs($params){
		$query = "Select * from $this->tabname Where";
		foreach ($params as $key => $value) {
			$query.= " `$key` = '$value' AND";
		}
		$query = substr($query, 0,-3);
		if ($sql = mysql_query($query)) {
			for ($i = 0; $i < mysql_num_rows($sql); $i++) { 
				$data[$i] = mysql_fetch_array($sql);
			}
		}
		return $data;
	}
}