<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'Model/loggerModel.php';
class ProductController {
    private $model;
    private $logger;
    
    public function __construct($model) {
        $this->model = $model;
        $this->logger = new Logger();
    }
    
    public function update() {
        try {
            //This is the directory where images will be saved
            $target = "../uploads/";
            $target = $target . basename( $_FILES['photo']['name']);
            $pic=($_FILES['photo']['name']);
            $imgurl = $_FILES['photo']['name'];
            if($imgurl == "") {
                $imgurl = $_POST['oldPhotoName'];
            }
            $tmpName = $_FILES['photo']['tmp_name'];
            
            $photoList = array();
            for ($i = 0; $i < 10; $i++) {
                if($i!=0) {
                    $target1 = "../uploads/";
                    $target1 = $target1 . basename( $_FILES['photo'.$i]['name']);
                    $imgurl1 = $_FILES['photo'.$i]['name'];
                    if($imgurl1 == "") {
                        $imgurl1 = $_POST['oldPhotoName'.$i];
                    }
                    $tmpName = $_FILES['photo'.$i]['tmp_name'];
                    
                    $photoRow = array( "Target" => $target1, "ImgUrl" => $imgurl1, "TmpName" => $tmpName, "ProductId" => $_POST['productId'], "ProductName" => $_POST['productName']);
                    array_push($photoList, $photoRow);
                }
            }
            
            $id = $_POST['productId'];
            $title = $_POST['productTitle'];
            $name = $_POST['productName'];
            $keywords = isset($_POST['productKeywords']) ? $_POST['productKeywords'] : "";
            $keywords = $this->model->preg_trim($keywords);
            $description = $_POST['productDescription'];
            $category = $_POST['productCategory'];

            $productArray = array( "Id" => $id,
                                   "Title" => $title,
                                   "Name" => $name,
                                   "TmpName" => $tmpName,
                                   "Target" => $target,
                                   "ImgUrl" => $imgurl,
                                   "PhotoList" => $photoList,
                                   "Keywords" => $keywords,
                                   "Description" => $description,
                                   "Category" => $category);

            $this->model->update($productArray);
        }
        catch (Exception $e) {
            $this->logger->setMessage("productController->update()");
        }
    }
    
    public function add() {
        try {
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
            
            $photoList = array();
            for ($i = 0; $i < count($_FILES); $i++) {
                if($i!=0) {
                    $target1 = "../uploads/";
                    $target1 = $target1 . basename( $_FILES['photo'.$i]['name']);
                    $imgurl1 = $_FILES['photo'.$i]['name'];
                    $tmpName = $_FILES['photo'.$i]['tmp_name'];
                    
                    $photoRow = array( "Target" => $target1, "ImgUrl" => $imgurl1, "TmpName" => $tmpName, "ProductName" => $name);
                    array_push($photoList, $photoRow);
                }
            }            
            
            $keywords = isset($_POST['productKeywords']) ? $_POST['productKeywords'] : "";
            $keywords = $this->model->preg_trim($keywords);
            $description = isset($_POST['productDescription']) ? $_POST['productDescription'] : "";
            $category = isset($_POST['productCategory']) ? $_POST['productCategory'] : "";

            $productArray = array( "Title" => $title,
                                   "Name" => $name,
                                   "TmpName" => $tmpName,
                                   "Target" => $target,
                                   "ImgUrl" => $imgurl,
                                   "PhotoList" => $photoList,
                                   "Keywords" => $keywords,
                                   "Description" => $description,
                                   "Category" => $category);

            $this->model->add($productArray);
        }
        catch (Exception $e) {
            $this->logger->setMessage("productController->add()");
        }
    }
    
    public function delete() {
        $this->model->delete($_POST['id']);
    }
    
}