<?php
    include "models/connectDB.php";
    include "models/select.php";
    
    	if (isset($_POST['submit_search'])) {
    		$data = new Select("product"); 
        	$allClothes = $data->getSearch($_POST['search']);
        	include "views/allProducts.php";
    	}else{
    		$data = new Select("product"); 
	        $allClothes = $data->getAllData();       
	        include "views/allProducts.php";
    	}
                
    
?>