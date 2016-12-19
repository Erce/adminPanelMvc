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
                <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 main-container">
                    <div class="row first-row">
                        <div class="col-md-12 col-xs-18">
                            <h4>ANA SAYFA AYARLARI</h4>
                        </div>
                    </div>
                    <div class="row second-row">
                        <div class="col-md-10">   
                            <div class="row" id="records-title">
                                <div class="col-md-5 col-xs-5"></div>
                                <div class="col-md-2 col-xs-2"><h2></h2></div>
                                <div class="col-md-5 col-xs-5"></div>
                            </div>
                            <div id="records" class="message-div">
                                <form method="post" action="mainpage-settings-background.php" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-lg-5 col-sm-5 col-md-5 col-xs-12">        
                                            <p>
                                            Sayfa Başlığı( title ):
                                            </p>
                                            <input class="input-class form-control" type="text" name="pageTitle"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-7 col-sm-7 col-md-7 col-xs-12">   
                                            <p>
                                            Sayfa Açıklaması ( description ):
                                            </p>
                                            <input class="input-class form-control" type="text" name="pageDescription"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">           
                                            <p>
                                            Anahtar Kelimeler ( keywords ):
                                            </p>
                                            <textarea class="input-class form-control" rows="3" type="text" name="pageKeywords"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">   
                                            <p>
                                            Anasayfa Duyuru Metni:
                                            </p>
                                            <input class="input-class form-control" type="text" name="pageAnnounceText"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-5 col-sm-5 col-md-5 col-xs-12">   
                                            <p>
                                            Other Bands:
                                            </p>
                                            <input class="input-class form-control" type="text" name="otherBands" size=30 />
                                        </div>
                                    </div>
                                    <br/>
                                    <br/>
                                    <input TYPE="submit" name="upload" title="Add data to the Database" value="Add Member"/>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
                <!--<div class="col-lg-1 col-sm-1 col-md-1"></div>-->
            </div>
        </div> 