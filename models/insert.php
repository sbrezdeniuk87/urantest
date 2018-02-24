<?php
	
	class Insert extends ConnectDB{

		private $tabname;
		private $data;

		
		function __construct($tablename, $data){
			$this->tabname = $tablename;
			$this->data = $data;
			$this->connectToDB();
			$this->insertData();
			$this->closeConnect();
			
		}

		function insertData(){
			$query = "INSERT INTO `$this->tabname` ";

			foreach ($this->data as $key => $value) {
				$keys[] = $key;
				$values[] = $value;
			}

			$query.= "(`".implode($keys, "`,`")."`) VALUES";
			$query.= "('".implode($values, "','")."');";
			mysql_query($query);
		}
	}
?>
