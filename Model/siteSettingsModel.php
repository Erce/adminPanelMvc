<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class SiteSettingsModel {
    private $siteSettingsRow = array();
    private $siteSettingsList = array();

    public function setSiteSettingsList() {
        try {
            $db = Db::getInstance();
            $query = "SELECT * FROM template";
            $req = $db->prepare($query);
            $req->execute();
            while($row=$req->fetch()) {
                $this->siteSettingsRow = array( "Id" => $row['id'],
                                              "Name" => $row['name'],
                                              "NavbarColor" => $row['navbar_color'],
                                              "NavbarOpacity" => $row['navbar_opacity'],
                                              "Background" => $row['background'],
                                              "BackgroundColor" => $row['background_color'],
                                              "BackgroundOpacity" => $row['background_opacity'],
                                              "FontSize" => $row['font_size'],
                                              "FontFamily" => $row['font_family'],
                                              "FooterColor" => $row['footer_color'],
                                              "FooterOpacity" => $row['footer_opacity'],
                                              "LogoNavbar" => $row['logo_navbar'],
                                              "LogoFavicon" => $row['logo_favicon'],
                                              "IsOn" => $row['is_on']); 
                array_push($this->siteSettingsList, $this->siteSettingsRow);
            }   
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function getSiteSettingsList() {
        return $this->siteSettingsList;
    }
    
    public function getSiteSettingsWithId($id) {
        try {
            $db = Db::getInstance();
            $query = "SELECT * FROM template WHERE id=".$id;
            $req = $db->prepare($query);
            $req->execute();
            $row=$req->fetch();
            $this->siteSettingsRow = array( "Id" => $row['id'],
                                            "Name" => $row['name'],
                                            "NavbarColor" => $row['navbar_color'],
                                            "NavbarOpacity" => $row['navbar_opacity'],
                                            "Background" => $row['background'],
                                            "BackgroundColor" => $row['background_color'],
                                            "BackgroundOpacity" => $row['background_opacity'],
                                            "FontSize" => $row['font_size'],
                                            "FontFamily" => $row['font_family'],
                                            "FooterColor" => $row['footer_color'],
                                            "FooterOpacity" => $row['footer_opacity'],
                                            "LogoNavbar" => $row['logo_navbar'],
                                            "LogoFavicon" => $row['logo_favicon'],
                                            "IsOn" => $row['is_on']); 
            return $this->siteSettingsRow;
              
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function getSiteSettingsOn() {
        for ($i = 0; $i < count($this->siteSettingsList); $i++) {
            if ($this->siteSettingsList[$i]["IsOn"]) {
                return $this->siteSettingsList[$i];
            }
        }
    }
    
    public function update($siteSettingsArray) {
        $db = Db::getInstance();
        if ($siteSettingsArray['IsOn'] == 1) {
            $query = sprintf("UPDATE template SET is_on= CASE WHEN id ='%s' THEN 1 ELSE 0 END",
                        $siteSettingsArray['Id']);
            $req = $db->prepare($query);
            $req->execute();
            
            file_put_contents("log.txt", "site settings model  in first if ".$siteSettingsArray['IsOn'].PHP_EOL, FILE_APPEND);
        }
        file_put_contents("log.txt", "site settings model after if ".$siteSettingsArray['IsOn'].PHP_EOL, FILE_APPEND);
        move_uploaded_file($siteSettingsArray["TmpName"], $siteSettingsArray["Target"]);
        move_uploaded_file($siteSettingsArray["TmpNameFavicon"], $siteSettingsArray["TargetFavicon"]);
        move_uploaded_file($siteSettingsArray["TmpNameBackground"], $siteSettingsArray["TargetBackground"]);
        
        $query = sprintf("UPDATE template SET name='%s', navbar_color='%s', navbar_opacity='%s', background='%s', background_color='%s', background_opacity='%s',"
                                ."font_size='%s', font_family='%s', footer_color='%s',"
                                ."footer_opacity='%s', logo_navbar='%s', logo_favicon='%s', is_on='%s' WHERE id='%s'",
                                $siteSettingsArray['Name'],
                                $siteSettingsArray['NavbarColor'],
                                $siteSettingsArray['NavbarOpacity'],
                                $siteSettingsArray['ImgUrlBackground'],
                                $siteSettingsArray['BackgroundColor'],
                                $siteSettingsArray['BackgroundOpacity'],
                                $siteSettingsArray['FontSize'],
                                $siteSettingsArray['FontFamily'],
                                $siteSettingsArray['FooterColor'],
                                $siteSettingsArray['FooterOpacity'],
                                $siteSettingsArray['LogoNavbar'],
                                $siteSettingsArray['LogoFavicon'],
                                $siteSettingsArray['IsOn'],
                                $siteSettingsArray['Id']);
        file_put_contents("log.txt", "site settings model  query= ".$query.PHP_EOL, FILE_APPEND);
        $req = $db->prepare($query);
        $req->execute();
    }
    
    public function getAdmin($id) {
        try {
            $db = Db::getInstance();
            $query = "SELECT * FROM users WHERE id=".$id;
            $req = $db->prepare($query);
            $req->execute();
            $row=$req->fetch();
            $this->siteSettingsRow = array( "Id" => $row['id'],
                                            "UserName" => $row['username']); 
            return $this->siteSettingsRow;
              
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function updateadmin($adminArray) {
        $db = Db::getInstance();
        if ($adminArray['Password'] != sha1("")) {
            $query = sprintf("UPDATE users SET username='%s', password='%s' WHERE id='%s'",
                                $adminArray['UserName'],
                                $adminArray['Password'],
                                $adminArray['Id']);
        }else {
            $query = sprintf("UPDATE users SET username='%s' WHERE id='%s'",
                                $adminArray['UserName'],
                                $adminArray['Id']); 
        }
        $req = $db->prepare($query);
        $req->execute();
    }


    public function add() {
        
    }
    
    public function delete() {
        
    }
}