<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class SiteSettingsController {
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
            $tmpName = $_FILES['photo']['tmp_name'];
            $id = $_POST['templateId'];
            $name = $_POST['templateName'];
            $bodyBackground = $_POST['templateBodyBackground'];
            $fontFamily = $_POST['templateFontFamily'];
            $bodyColor = $_POST['templateBodyColor'];

            $siteSettingsArray = array( "Id" => $id,
                                   "Name" => $name,
                                   "TmpName" => $tmpName,
                                   "Target" => $target,
                                   "ImgUrl" => $imgurl,
                                   "BodyBackground" => $bodyBackground,
                                   "FontFamily" => $fontFamily,
                                   "BodyColor" => $bodyColor);

            $this->model->update($siteSettingsArray);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function add() {
        
    }
    
    public function delete() {
        
    }
    
}