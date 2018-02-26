<?php


class Select extends ConnectDB {

	private $tabname;

	function __construct($tablename){
		$this->connectToDB();
		$this->tabname = $tablename;
	}
	
	
	function getAllData(){
		$query = "SELECT * FROM $this->tabname ORDER BY id";
		if($sql = mysql_query($query)){
			for($i = 0; $i<mysql_num_rows($sql); $i++){
				$data[$i] = mysql_fetch_array($sql);
			}
		}
		return $data;
	}

	function getRecordById($id){
		$query = "SELECT * FROM $this->tabname WHERE id = '$id'";
		if($sql = mysql_query($query)){
			$data = mysql_fetch_array($sql);
		}

		return $data;

	}

	function getSearch($like){
		$query = "SELECT * FROM $this->tabname WHERE name LIKE '%$like%';";
		if($sql = mysql_query($query)){
			for($i = 0; $i<mysql_num_rows($sql); $i++){
				$data[$i] = mysql_fetch_array($sql);
			}
		}
		return $data;
	}	
}
