<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


                    include 'Model/photoModel.php';
                    $photo = new photo();
                    $photo-> editPhoto($_GET['id']);
                ?>

                <form id="firstform" method="post" action="Controller/photoController.php" enctype="multipart/form-data">
                    <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6 container-left">
                        <div class="row first-row">
                            <div class="col-md-12 col-xs-18">
                                <h4>YENİ EKLE</h4>
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
                                    <br>
                                    <p>
                                    Başlık:
                                    </p>
                                    <input class="input-class form-control" type="text" name="photoTitle" value="<?php echo $photo->getTitle(); ?>"/>
                                    <br/>
                                    <p>
                                    Açıklama:
                                    </p>
                                    <input class="input-class form-control" type="text" name="photoDescription" value="<?php echo $photo->getDescription(); ?>"/>
                                    <br/>
                                    <p>
                                    Tarih:
                                    </p>
                                    <input class="input-class form-control" type="text" name="date" value="<?php echo $photo->getDateFromDb(); ?>">
                                    <input type="hidden" name="id" value="<?php echo $photo->getId(); ?>">
                                    <br/>
                                    <input class="btn btn-default save-button update-slider-submit" type="submit" name="upload" title="Add data to the Database" value="Kaydet" id="sliderSubmit"/>
                                    <a href="?controller=pages&action=slider" class="btn btn-default save-button">İptal</a>                               
                                </div>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6 container-right">
                        <div class="row first-row">
                            <div class="col-md-12 col-xs-18">
                                <h4>ÖNIZLEME</h4>
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
                                    <p>
                                    Fotoğraf seç:
                                    </p>
                                    <div class="image-upload">
                                        <label for="file-input">
                                            <img id="image-preview" class="img-responsive logoff-image" src="./uploads/<?php echo $photo->getName(); ?>">
                                        </label>
                                        <input id="file-input" type="file" name="photo">
                                    </div>                                    
                                </div>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                    </div>
                </form>