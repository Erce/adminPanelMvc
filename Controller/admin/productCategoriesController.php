<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ProductCategoriesController {
    private $model;
    
    public function __construct($model) {
        $this->model = $model;
    }
    
    public function update() {
        try {
            $id = $_POST['productCategoryId'];
            $listName = $_POST['productCategoryListName'];
            $name = $_POST['productCategoryName'];
            $parentId = $_POST['productCategoryParentId'];

            $productCategoryArray = array( "Id" => $id,
                                   "ListName" => $listName,
                                   "Name" => $name,
                                   "ParentId" => $parentId);

            $this->model->update($productCategoryArray);
        }
         catch (Exception $e) {
            file_put_contents("log.txt", "productCategoriesController.php->catch->".$e.PHP_EOL, FILE_APPEND);
         }
    }
    
    public function add() {
        try {
            //$id = $_POST['productCategoryId'];
            $listName = $_POST['productCategoryListName'];
            $name = $_POST['productCategoryName'];
            $parentId = $_POST['productCategoryParentId'];
            file_put_contents("log.txt", "productCategoriesController.php->add()->parentId->>>".$parentId.PHP_EOL, FILE_APPEND);
            $productCategoryArray = array("ProductCategoryListName" => $listName,
                                            "ProductCategoryName" => $name,
                                            "ProductCategoryParentId" => $parentId);


            $this->model->add($productCategoryArray);
        }
         catch (Exception $e) {
            file_put_contents("log.txt", "productCategoriesController.php->catch->".$e.PHP_EOL, FILE_APPEND);
         }
    }
    
    public function delete() {
        $this->model->delete($_POST['id']);
    }
    
    public function selectAllChilds() {
        //file_put_contents("log.txt", "productCategoriesController  ".$_POST['parent_id'].PHP_EOL, FILE_APPEND);
        $this->model->selectAllChilds();
    }
    
    public function selectChilds() {
        file_put_contents("log.txt", "productCategoriesController  ".$_POST['parent_id'].PHP_EOL, FILE_APPEND);
        $this->model->selectChilds($_POST['parent_id']);
    }
}