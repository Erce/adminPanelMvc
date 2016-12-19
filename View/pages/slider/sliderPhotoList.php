<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

        require_once 'Model/sliderPhotoModel.php';
        $slider = new SliderPhoto();
        $slider->setSliderPhotoList();
        $sliderPhotoList = $slider->getSliderPhotoList();
        
        for ($i = 0; $i < count($sliderPhotoList); $i++) {
            echo "<div class='col-lg-2 col-md-2 col-xs-4 col-xsl-5 sliderphotobox' id='sliderphoto".$sliderPhotoList[$i]['Id']."'>".
                 "<img class='' height='100%' width='100%' src='uploads/".$sliderPhotoList[$i]['Name']."'>".
                 "</div>";    
        }