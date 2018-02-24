<?php
include "models/connectDB.php";
include "models/select.php";
    if(isset($_GET['action'])){
        if($_GET['action']=='delete'){
            include "models/delete.php";
            $delData = new Delete('product', $_GET['id']);
            $data = new Select("product");
            $allClothes = $data->getAllData();
            header('Location: http://urantest.zzz.com.ua/?page=editProduct');
        }
        if($_GET['action']=='edit'){
            $data = new Select('product');
            $record = $data->getRecordById($_GET['id']);
            include "controllers/changeProduct.php";
        }

    
    }else{
        $data = new Select("product");
        $allClothes = $data->getAllData();

        include "views/editProduct.php";
    }