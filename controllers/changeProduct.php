<?php

include "views/changeProduct.php";
include "models/update.php";


if(isset($_POST['edit_submit'])){
	
	$datas['id'] = $_GET['id'];
	$datas['name'] = $_POST['product_name'];
	$datas['description'] = $_POST['description'];
	if(is_uploaded_file($_FILES['imge']['tmp_name'])){
        $datas['image'] = 'images/'.$_FILES['imge']['name'];
        move_uploaded_file($_FILES['imge']['tmp_name'], 'images/'.$_FILES['imge']['name']);
    }
	

	

	$updatetData = new Update('product', $datas);
	
        header('Location: http://urantest.zzz.com.ua/?page=editProduct');

 }

?>	