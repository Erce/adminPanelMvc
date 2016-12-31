<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class AdminController {
    private $model;
    
    public function __construct($model) {
        $this->model = $model;
    }
    
    public function check() {
        try {
            //This is the directory where images will be saved
            $id = $_SESSION['userId'];
            $username = $_POST['username'];
            $pass = sha1($_POST["password"]);

            $adminArray = array( "Id" => $id,
                                 "UserName" => $username,
                                 "Password" => $pass);
            file_put_contents("log.txt", "admin controller before model check".PHP_EOL, FILE_APPEND);
            $this->model->check($adminArray);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
}