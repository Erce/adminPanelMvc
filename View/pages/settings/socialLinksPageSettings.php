<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

        <div class="container-fluid admin-main-container">
            <div class="row">
                <div class="col-md-1 col-sm-1 col-lg-1"></div>
                <div class="col-xs-18 col-md-10 col-sm-10 col-lg-10 container-title">
                    <div class="row first-row">
                        <div class="col-md-12 col-xs-18">
                            <h3>Sosyal Linkler</h3>
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
                                <form method="post" action="addSocialLinks.php" enctype="multipart/form-data">
                                    <p>
                                    Twitter:
                                    </p>
                                    <input class="input-class form-control" type="text" name="twitter"/>
                                    <p>
                                    Facebook
                                    </p>
                                    <input class="input-class form-control" type="text" name="facebook"/>
                                    <p>
                                    Skype
                                    </p>
                                    <input class="input-class form-control" type="text" name="skype"> 
                                    <p>
                                    Youtube
                                    </p>
                                    <input class="input-class form-control" type="text" name="youtube"> 
                                    <p>
                                    RSS
                                    </p>
                                    <input class="input-class form-control" type="text" name="rss">
                                    <br/>
                                    <br/>
                                    <input class="btn btn-default save-button" TYPE="submit" name="upload" title="Add data to the Database" value="Kaydet"/>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
                <div class="col-md-1 col-sm-1 col-lg-1"></div>
            </div>
        </div> 