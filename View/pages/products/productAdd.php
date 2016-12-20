<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    require_once 'Model/productCategoriesModel.php';
    $productCategories = new ProductCategories();
    $productCategoriesList = $productCategories->selectAllCategories();
   ?> 
    <div class="bg-content">
        <div class="container products-container">   
            <div class="product-edit-section">
                <div class="row">
                    <form method="post" action="Controller/productAddController.php" enctype="multipart/form-data">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="">
                                <p>
                                Fotoğraf seç:
                                </p>
                                <div class="image-upload">
                                    <label for="file-input">
                                        <img class="img-responsive img-container-inside" id="image-preview" src="Public/images/image_add.png">
                                    </label>
                                    <input id="file-input" type="file" name="photo">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">       
                                <p>
                                Ürün Başlığı( title ):
                                </p>
                                <input class="input-class form-control" type="text" name="productTitle"/>
                            </div>
                            <div class="form-group"> 
                                <p>
                                Ürün Adı:
                                </p>
                                <input class="input-class form-control" type="text" name="productName"/>
                            </div>
                            <div class="form-group">  
                                <p>
                                Sayfa Açıklaması ( description ):
                                </p>
                                <input class="input-class form-control" type="text" name="productDescription"/>
                            </div>
                            <div class="form-group">         
                                <p>
                                Anahtar Kelimeler ( keywords ):
                                </p>
                                <textarea class="input-class form-control" rows="3" type="text" name="productKeywords"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="productCategory">Ürün Kategorisi:</label>
                                <select class="form-control" type="" id="productCategory" name="productCategory">
                                    <?php for ($i = 0; $i < sizeof($productCategoriesList); $i++) { ?>
                                        <option id="option <?php echo $productCategoriesList[$i]['Id']; ?>">
                                            <?php echo $productCategoriesList[$i]["ProductCategoryListName"];?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <br/>
                            <br/>
                            <input TYPE="submit" name="upload" title="Add data to the Database" value="Add Member"/>
                        </div>
                    </form>
                </div>
            </div> 
        </div>
    </div>