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
                                              "BodyBackground" => $row['body_background'],
                                              "FontFamily" => $row['font_family'],
                                              "BodyColor" => $row['body_color'],
                                              "LogoUrl" => $row['logo_url'],
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
                                          "BodyBackground" => $row['body_background'],
                                          "FontFamily" => $row['font_family'],
                                          "BodyColor" => $row['body_color'],
                                          "LogoUrl" => $row['logo_url'],
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
        $query = sprintf("UPDATE template SET name='%s', body_background='%s', font_family='%s', body_color='%s' WHERE id='%s'",
                                mysql_real_escape_string($siteSettingsArray['Name']),
                                mysql_real_escape_string($siteSettingsArray['BodyBackground']),
                                mysql_real_escape_string($siteSettingsArray['FontFamily']),
                                mysql_real_escape_string($siteSettingsArray['BodyColor']),
                                mysql_real_escape_string($siteSettingsArray['Id']));
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
                                mysql_real_escape_string($adminArray['UserName']),
                                mysql_real_escape_string($adminArray['Password']),
                                mysql_real_escape_string($adminArray['Id']));
        }else {
            $query = sprintf("UPDATE users SET username='%s' WHERE id='%s'",
                                mysql_real_escape_string($adminArray['UserName']),
                                mysql_real_escape_string($adminArray['Id'])); 
        }
        $req = $db->prepare($query);
        $req->execute();
    }


    public function add() {
        
    }
    
    public function delete() {
        
    }
    
    
}