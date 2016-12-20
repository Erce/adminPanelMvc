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
    echo $target;
    //This gets all the other information from the form
    $title = isset($_POST['productTitle']) ? $_POST['productTitle'] : "";
    $name = isset($_POST['productName']) ? $_POST['productName'] : "";
    $pic=($_FILES['photo']['name']);
    $imgurl = $_FILES['photo']['name'];
    $tmpName = $_FILES['photo']['tmp_name'];
    $keywords = isset($_POST['productKeywords']) ? $_POST['productKeywords'] : "";
    $description = isset($_POST['productDescription']) ? $_POST['productDescription'] : "";
    $category = isset($_POST['productCategory']) ? $_POST['productCategory'] : "";
    
    $productArray = array( "Title" => $title,
                           "Name" => $name,
                           "TmpName" => $tmpName,
                           "Target" => $target,
                           "ImgUrl" => $imgurl,
                           "Keywords" => $keywords,
                           "Description" => $description,
                           "Category" => $category);
    
    $product->addProduct($productArray);
}
 catch (Exception $e) {
     file_put_contents("log.txt", "photoController.php->catch->".$e.PHP_EOL, FILE_APPEND);
 }
 
