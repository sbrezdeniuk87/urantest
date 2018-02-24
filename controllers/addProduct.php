<?php

include "views/addProduct.php";
include "models/connectDB.php"; 
include "models/insert.php";

 

if(isset($_POST['submit'])){
    $productType = $_POST['product_type'];

    switch ($productType) {
        case 'shirts':
            $data['product_type_id'] = 1;
            break;
        case 'coats':
            $data['product_type_id'] = 2;
            break;
        case 't_shirts':
            $data['product_type_id'] = 3;
            break;
        case 'jeans':
            $data['product_type_id'] = 4;
            break;
        case 'skirts':
            $data['product_type_id'] = 5;
            break;
        case 'tunics':
            $data['product_type_id'] = 6;
            break;
    }

    $categoryId = $_POST['category'];
    switch ($categoryId) {
        case 'men':
            $data['category_id'] = 1;
            break;
        case 'women':
            $data['category_id'] = 2;
            break;
        case 'children':
            $data['category_id'] = 3;
            break;
    }
    
	
	$data['name'] = $_POST['product_name'];
    $data['description'] = $_POST['description'];
    $data['description'] = preg_replace('/^\s\s+/', '', $data['description']);
	

    	
    if(is_uploaded_file($_FILES['imge']['tmp_name'])){
        $data['image'] = 'images/'.$_FILES['imge']['name'];
        move_uploaded_file($_FILES['imge']['tmp_name'], 'images/'.$_FILES['imge']['name']);
    }

    
	$insertData = new Insert('product', $data);
    
    header("Location: http://urantest.zzz.com.ua");
   

}


?>