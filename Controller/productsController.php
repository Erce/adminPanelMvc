<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    if (isset($_GET['subpage'])) {
        $subpage = $_GET['subpage'];
        if($subpage == "products") {
            require_once 'View/pages/products/products.php';
        }
        elseif ($subpage == "productcategories") {
            require_once 'View/pages/products/productCategories.php';
        }
        elseif ($subpage == "productcomments") {
            require_once 'View/pages/products/productComments.php';
        }
    }