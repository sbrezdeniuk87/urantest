<?php

class ConnectDB {
	
	private $servername = "mysql.zzz.com.ua";
	private $username = "oleksandr87";
	private $password = "Oleksandr_87";
	private $dbname = "oleksandr87";	
	

	function connectToDB(){
		if(mysql_connect($this->servername, $this->username, $this->password)){
				if(mysql_select_db($this->dbname)){
			}
		}
	} 

	function closeConnect(){
		mysql_close();
	}
}
	
?>