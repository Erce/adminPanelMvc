<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class SliderPhotoController {
    private $model;
    private $sliderPhotoArray = array();
    
    public function __construct($model) {
        $this->model = $model;
    }
    
    public function getInfo() {
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
            $id = isset($_POST['id']) ? $_POST['id'] : "";
            $title = $_POST['photoTitle'];
            $description = $_POST['photoDescription'];
            $date = $_POST['date'];

            $this->sliderPhotoArray = array( "Id" => $id,
                                   "Title" => $title,
                                   "TmpName" => $tmpName,
                                   "Target" => $target,
                                   "ImgUrl" => $imgurl,
                                   "Description" => $description,
                                   "Date" => $date);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function update() {
        try {
            $this->getInfo();
            $this->model->update($this->sliderPhotoArray);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function add() {
        try {
            $this->getInfo();
            $this->model->add($this->sliderPhotoArray);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function delete() {
        
    }  
}