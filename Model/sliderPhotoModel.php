<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class SliderPhoto {
    private $sliderPhotoRow = array();
    private $sliderPhotoList = array();
    private $sliderPhotoId;
    private $sliderPhotoName;
    
    public function setSliderPhotoList() {
        require_once 'connect.php';

        $query = sprintf("SELECT * FROM sliderphotos");

        //Writes the information to the database
        $retval = mysql_query($query) or die(mysql_error());

        while($row = mysql_fetch_array($retval)) {
                if(isset($row['id'])) { $this->sliderPhotoId = $row['id'];}
                if(isset($row['name'])) { $this->sliderPhotoName = $row['name'];}
                $this->sliderPhotoRow = array( "Id" => $this->sliderPhotoId,
                                               "Name" => $this->sliderPhotoName);
                array_push($this->sliderPhotoList, $this->sliderPhotoRow);
        }
    }
    
    public function getSliderPhotoList() {
        return $this->sliderPhotoList;
    }
}