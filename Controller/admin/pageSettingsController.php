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
            $title = $_POST['pageTitle'];
            $navbar = $_POST['pageNavbar'];
            $navbarColor = $_POST['pageNavbarColor'];
            $navbarOpacity = $_POST['pageNavbarOpacity'];
            $slider = $_POST['pageSlider'];
            $footer = $_POST['pageFooter'];
            $footerColor = $_POST['pageFooterColor'];
            $footerOpacity = $_POST['pageFooterOpacity'];
            $description = $_POST['pageDescription'];
            $keywords = $_POST['pageKeywords'];
            
            $pageSettingsArray = array( "Id" => $id,
                                        "Name" => $name,
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