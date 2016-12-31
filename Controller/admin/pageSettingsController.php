<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class PageSettingsController {
    private $model;
    
    public function __construct($model) {
        $this->model = $model;
    }
    
    public function update() {
        try {
            $id = $_POST['pageId'];
            $name = isset($_POST['pageName']) ? $_POST['pageName'] : "";
            $title = isset($_POST['pageTitle']) ? $_POST['pageTitle'] : "";
            $navbar = isset($_POST['pageNavbar']) ? $_POST['pageNavbar'] : "";
            $navbarColor = isset($_POST['pageNavbarColor']) ? $_POST['pageNavbarColor'] : "";
            $navbarOpacity = isset($_POST['pageNavbarOpacity']) ? $_POST['pageNavbarOpacity'] : "";
            $slider = isset($_POST['pageSlider']) ? $_POST['pageSlider'] : "";
            $footer = isset($_POST['pageFooter']) ? $_POST['pageFooter'] : "";
            $footerColor = isset($_POST['pageFooterColor']) ? $_POST['pageFooterColor'] : "";
            $footerOpacity = isset($_POST['pageFooterOpacity']) ? $_POST['pageFooterOpacity'] : "";
            $description = isset($_POST['pageDescription']) ? $_POST['pageDescription'] : "";
            $keywords = isset($_POST['pageKeywords']) ? $_POST['pageKeywords'] : "";
            
            if(isset($_POST['oldPhotoName']) && isset($_FILES['photo']['name'])) {
                $target = "uploads/" . basename( $_FILES['photo']['name']);
                $pic=($_FILES['photo']['name']);
                $imgurl = $_FILES['photo']['name'];
                if($imgurl == "") {
                    $imgurl = $_POST['oldPhotoName'];
                }
                $tmpName = $_FILES['photo']['tmp_name'];
            }
            else {
                $target = "";
                $imgurl = "";
                $tmpName = "";
            }
            
            
            
            $pageSettingsArray = array( "Id" => $id,
                                        "Name" => $name,
                                        "Target" => $target,
                                        "ImgUrl" => $imgurl,
                                        "TmpName" => $tmpName,
                                        "Title" => $title,
                                        "Navbar" => $navbar,
                                        "NavbarColor" => $navbarColor,
                                        "NavbarOpacity" => $navbarOpacity,
                                        "Slider" => $slider,
                                        "Footer" => $footer,
                                        "FooterColor" => $footerColor,
                                        "FooterOpacity" => $footerOpacity,
                                        "Description" => $description,
                                        "Keywords" => $keywords);

            $this->model->update($pageSettingsArray);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function add() {
        
    }
    
    public function delete() {
        
    }
    
}