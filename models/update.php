<?php

class Update extends ConnectDB{

    
	function __construct($tablename, $data){
        $this->connectToDB();
        if(isset($data))
        // var_dump($data);
        if ($data['image']) {
        	$query = "UPDATE $tablename 
        		  SET 'name'='".$data['name']."', description='".$data['description']."', image='".$data['image']."' 
        		  WHERE id=".$data['id'].";";
        }else{
        	$query = "UPDATE $tablename 
        		  SET name='".$data['name']."', description='".$data['description']."' WHERE id=".$data['id'].";";
        }
        

        
        // var_dump($query);
        mysql_query($query);
        $this->closeConnect();
    }

    
}


?>