<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
try {
    echo "<script>alert(asdfasdfasdfasdfasdf);</script>";
    file_put_contents("log.txt", "photoController.php->before req->".PHP_EOL, FILE_APPEND);
    require_once '../Model/photoModel.php';
    file_put_contents("log.txt", "photoController.php->after req->".PHP_EOL, FILE_APPEND);
    $photo = new photo();
    $oldPhotoName = $photo->getName();
    echo $oldPhotoName;
    //This is the directory where images will be saved
    $target = "../uploads/";
    $target = $target . basename( $_FILES['photo']['name']);
    $pic=($_FILES['photo']['name']);
    $name = $_FILES['photo']['name'];
    $tmpName = $_FILES['photo']['tmp_name'];
    $title = $_POST['photoTitle'];
    $description = $_POST['photoDescription'];
    $date = $_POST['date'];
    $id = $_POST['id'];
    file_put_contents("log.txt", "photoController.php->after initialize->".PHP_EOL, FILE_APPEND);
    $photoArray = array( "Target" => $target,
                         "Pic" => $pic,
                         "Name" => $name,
                         "TmpName" => $tmpName,
                         "Title" => $title,
                         "Description" => $description,
                         "Date" => $date,
                         "Id" => $id,   
                         "OldPhotoName" => $oldPhotoName);
    
    $photo->updatePhoto($photoArray);
}
 catch (Exception $e) {
     file_put_contents("log.txt", "photoController.php->catch->".$e.PHP_EOL, FILE_APPEND);
 }
 
