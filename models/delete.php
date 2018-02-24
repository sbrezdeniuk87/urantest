<?php



class Delete extends ConnectDB{



    function __construct($tablename, $id){

        $this->connectToDB();

        $id = intval($id);

        $query = "DELETE FROM $tablename WHERE id=$id;";

        

        mysql_query($query);

        $this->closeConnect();

    }



    

}



?>