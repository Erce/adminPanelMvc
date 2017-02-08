<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php     
    require_once('connection.php');
    
    define('INCLUDE_CHECK',true);
    session_start();
    if ($_SESSION["access"] == "granted"){
        if (isset($_GET['controller']) && isset($_GET['action'])) {
            $controller = $_GET['controller'];
            $action     = $_GET['action'];

        } else {
            $controller = 'pages';
            $action     = 'home';
        }
        require_once('View/layout.php');
    }
    else {
        echo "<script type='text/javascript'> document.location = 'admin.php'; </script>";
        //header("Location: admin.php");
    }

