<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ReferencesController {
    private $model;
    
    public function __construct($model) {
        $this->model = $model;
    }
    
    public function update() {
        try {
            //This is the directory where images will be saved
            $target = "../uploads/";
            $target = $target . basename( $_FILES['photo']['name']);
            $pic=($_FILES['photo']['name']);
            $imgurl = $_FILES['photo']['name'];
            file_put_contents("log.txt", "reference controller imgurl=".$imgurl.PHP_EOL, FILE_APPEND);
            if($imgurl == "") {
                $imgurl = $_POST['oldPhotoName'];
                file_put_contents("log.txt", "reference controller in if imgurl=".$imgurl.PHP_EOL, FILE_APPEND);
            }
            $tmpName = $_FILES['photo']['tmp_name'];
            $id = $_POST['productId'];
            $title = $_POST['productTitle'];
            $name = $_POST['productName'];
            $keywords = $_POST['productKeywords'];
            $description = $_POST['productDescription'];
            //$category = $_POST['productCategory'];

            $referencesArray = array( "Id" => $id,
                                   "Title" => $title,
                                   "Name" => $name,
                                   "TmpName" => $tmpName,
                                   "Target" => $target,
                                   "ImgUrl" => $imgurl,
                                   "Keywords" => $keywords,
                                   "Description" => $description);
                                   //"Category" => $category);
            file_put_contents("log.txt", "reference controller imgurl=".$referencesArray["ImgUrl"].PHP_EOL, FILE_APPEND);
            $this->model->update($referencesArray);
        }
         catch (Exception $e) {
             file_put_contents("log.txt", "photoController.php->catch->".$e.PHP_EOL, FILE_APPEND);
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
            $keywords = isset($_POST['productKeywords']) ? $_POST['productKeywords'] : "";
            $description = isset($_POST['productDescription']) ? $_POST['productDescription'] : "";
            ///$category = isset($_POST['productCategory']) ? $_POST['productCategory'] : "";

            $referencesArray = array( "Title" => $title,
                                   "Name" => $name,
                                   "TmpName" => $tmpName,
                                   "Target" => $target,
                                   "ImgUrl" => $imgurl,
                                   "Keywords" => $keywords,
                                   "Description" => $description);
                                   //"Category" => $category);

            $this->model->add($referencesArray);
        }
         catch (Exception $e) {
             file_put_contents("log.txt", "photoController.php->catch->".$e.PHP_EOL, FILE_APPEND);
         }
    }
    
    public function delete() {
        $this->model->delete($_POST['id']);
    }
    
}