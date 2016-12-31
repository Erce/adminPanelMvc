<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'connection.php';
class AdminModel {
    private $adminFlag = false;
    private $adminRow;

    public function getAdminFlag() {
        return $this->adminFlag;
    }
    
    public function check($adminArray) {
        try {
            $db = Db::getInstance();
            $query = sprintf("SELECT id FROM users WHERE username = '%s' AND password = '%s'",
                    $adminArray["UserName"],
                    $adminArray["Password"]);
            file_put_contents("log.txt", "query=".$query.PHP_EOL, FILE_APPEND);
            //Query the database
            $req = $db->prepare($query);
            //file_put_contents("log.txt", "req=".$req.PHP_EOL, FILE_APPEND);
            $req->execute();
            file_put_contents("log.txt", "adminArray username=".$adminArray["UserName"].PHP_EOL, FILE_APPEND);
            file_put_contents("log.txt", "adminArray password=".$adminArray["Password"].PHP_EOL, FILE_APPEND);
            file_put_contents("log.txt", "admin model after db stuff".PHP_EOL, FILE_APPEND);
            /* Allow access if a matching record was found, else deny access. */
            $row = $req->fetch();
            file_put_contents("log.txt", "rowww====".$row["id"].PHP_EOL, FILE_APPEND);
            if (isset($row["id"])) {
                /* access granted */
                session_start();
                header("Cache-control: private");
                $_SESSION['user_is_loggedin'] = 1;

                if (isset($_POST['rememberMe']) && $_POST['rememberMe'] == '1') {
                    $cookiehash = md5(sha1(username . user_ip));
                    setcookie("uname",$cookiehash,time()+3600*24*365,'/','.localhost');
                }
                else {
                    alert($_POST['rememberMe']);
                }

                $_SESSION["access"] = "granted";
                $_SESSION["userId"] = $row['id'];
                file_put_contents("log.txt", "admin model after db stuff if".PHP_EOL, FILE_APPEND);
                header('Location: index.php');
            } 
            else {
                file_put_contents("log.txt", "admin model after db stuff else".PHP_EOL, FILE_APPEND);
                /* access denied &#8211; redirect back to login */
                header("Location: admin.php");
            }

        } catch (Exception $exc) {
            file_put_contents("log.txt", "admin check db catch".PHP_EOL, FILE_APPEND);
        }
    }
    
    public function getAdmin($id) {
        try {
            $db = Db::getInstance();
            $query = "SELECT * FROM users WHERE id=".$id;
            $req = $db->prepare($query);
            $req->execute();
            $row=$req->fetch();
            $this->adminRow = array( "Id" => $row['id'],
                                            "UserName" => $row['username']); 
            return $this->adminRow;
              
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
}