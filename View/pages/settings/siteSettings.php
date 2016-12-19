<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

        <div class="container-fluid admin-main-container">
            <div class="row">
                <!--<div class="col-lg-1 col-sm-1 col-md-1"></div>-->
                <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6 container-left">
                    <div class="row first-row">
                        <div class="col-md-12 col-xs-18">
                            <h4>GENEL AYARLAR</h4>
                        </div>
                    </div>
                    <div class="row second-row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">   
                            <div class="row" id="records-title">
                                <div class="col-md-5 col-xs-5"></div>
                                <div class="col-md-2 col-xs-2"><h2></h2></div>
                                <div class="col-md-5 col-xs-5"></div>
                            </div>
                            <div id="records" class="message-div">
                                <form method="post" action="addProduct.php" enctype="multipart/form-data">
                                    <br>
                                    <p>
                                    Panel Kullanıcı Adı:
                                    </p>
                                    <input class="input-class form-control" type="text" name="panelUsername"/>
                                    <br/>
                                    <p>
                                    Panel Şifresi:
                                    </p>
                                    <input class="input-class form-control" type="password" name="panelPassword"/>
                                    <br/>
                                    <p>
                                    Telefon Numaranız:
                                    </p>
                                    <input class="input-class form-control" type="text" name="phoneNumber">
                                    <br/>
                                    <p>
                                    Panel Dili: <input type="radio" name="panelLanguage" value="turkish"> Turkish
                                    <input type="radio" name="panelLanguage" value="english"> English<br/><br/>
                                    </p>
                                    <input class="btn btn-default save-button" TYPE="submit" name="upload" title="Add data to the Database" value="Kaydet"/>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6 container-right">
                    <div class="row first-row">
                        <div class="col-md-12 col-xs-18">
                            <h4>GÖRSEL AYARLAR</h4>
                        </div>
                    </div>
                    <div class="row second-row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">   
                            <div class="row" id="records-title">
                                <div class="col-md-5 col-xs-5"></div>
                                <div class="col-md-2 col-xs-2"><h2></h2></div>
                                <div class="col-md-5 col-xs-5"></div>
                            </div>
                            <div id="records" class="message-div">
                                <form method="post" action="addProduct.php" enctype="multipart/form-data">
                                    <p>
                                    Fotoğraf seç:
                                    </p>
                                    <div class="image-upload">
                                        <label for="file-input">
                                            <img class="img-responsive logoff-image" src="./images/Add_image_icon.svg" height="30%" width="30%">
                                        </label>
                                        <input id="file-input" type="file" name="photo">
                                    </div>                                    
                                    <p>
                                    Değiştirmek istediğiniz logoyu seçiniz:
                                    <input type="radio" name="logo" value="mainLogo"> Ana Logo
                                    <input type="radio" name="logo" value="subLogo"> Alt Logo
                                    </p>
                                    <p>
                                      Other Member Information:
                                    </p>
                                    <textarea rows="10" cols="35" name="aboutMember">
                                    </textarea>
                                    <p>
                                      Please Enter any other Bands the Member has been in.
                                    </p>
                                    <p>
                                      Other Bands:
                                    </p>
                                    <input type="text" name="otherBands" size=30 />
                                    <br/>
                                    <br/>
                                    <input class="btn btn-default save-button" TYPE="submit" name="upload" title="Add data to the Database" value="Kaydet"/>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
                <!--<div class="col-lg-1 col-sm-1 col-md-1"></div>-->
            </div>
        </div>