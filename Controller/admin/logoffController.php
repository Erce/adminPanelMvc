<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class LogoffController {
    
    public function logoff() {
        try {
            $_SESSION = array();
            session_destroy();
            header("Location: admin.php");
            exit;   
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
}