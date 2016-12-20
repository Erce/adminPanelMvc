<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
try {
    require_once '../Model/productsModel.php';
    $product = new Products("","");
    //This is the directory where images will be saved
    $target = "../uploads/";
    $target = $target . basename( $_FILES['photo']['name']);
    $pic=($_FILES['photo']['name']);
    $imgurl = $_FILES['photo']['name'];
    $tmpName = $_FILES['photo']['tmp_name'];
    $id = $_POST['productId'];
    $title = $_POST['productTitle'];
    $name = $_POST['productName'];
    $keywords = $_POST['productKeywords'];
    $description = $_POST['productDescription'];
    $category = $_POST['productCategory'];
    
    $productArray = array( "Id" => $id,
                           "Title" => $title,
                           "Name" => $name,
                           "TmpName" => $tmpName,
                           "Target" => $target,
                           "ImgUrl" => $imgurl,
                           "Keywords" => $keywords,
                           "Description" => $description,
                           "Category" => $category);
    
    $product->updateProduct($productArray);
}
 catch (Exception $e) {
     file_put_contents("log.txt", "photoController.php->catch->".$e.PHP_EOL, FILE_APPEND);
 }
 
