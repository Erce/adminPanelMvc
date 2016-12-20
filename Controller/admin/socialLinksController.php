<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    class SocialLinksController {
        private $socialLinks;
               
        public function __construct($model) {
            $this->socialLinks = $model;
        }


        public function update() {
            try {
                $twitter = isset($_POST['twitter']) ? $_POST['twitter'] : "";
                $facebook = isset($_POST['facebook']) ? $_POST['facebook'] : "";
                $skype = isset($_POST['skype']) ? $_POST['skype'] : "";
                $youtube = isset($_POST['youtube']) ? $_POST['youtube'] : "";
                $rss = isset($_POST['rss']) ? $_POST['rss'] : "";

                $socialLinksRow = array(
                    array(
                        "Name" => "Twitter",
                        "Url" => $twitter
                    ),
                    array(
                        "Name" => "Facebook",
                        "Url" => $facebook
                    ),
                    array(
                        "Name" => "Skype",
                        "Url" => $skype
                    ),
                    array(
                        "Name" => "Youtube",
                        "Url" => $youtube
                    ),
                    array(
                        "Name" => "Rss",
                        "Url" => $rss
                    )
                );
                $this->socialLinks->updateSocialLinks($socialLinksRow);   
            } catch (Exception $exc) {
                echo $exc->getTraceAsString();
            }
        }
    }