<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    require_once 'Model/referencesModel.php';
    $category = isset($_GET['category']) ? $_GET['category'] : "";
    $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";
    $referencesModel = new ReferencesModel($category,$keyword);
    $reference = $referencesModel->getReference($_GET['reference_id']);
    $link = (($keyword != "") ? '&keywords='.$keyword : ("".(($category != "") ? '&category='.$category : "")));
    
    /*require_once 'Model/productCategoriesModel.php';
    $productCategories = new ProductCategories();
    $productCategoriesList = $productCategories->selectAllCategories();*/
    
    require_once 'Controller/admin/referencesController.php';
    $referencesController = new ReferencesController($referencesModel);

    if (isset($_GET['part'])) {
        $referencesController->{$_GET['part']}($_POST);
        $reference = $referencesModel->getReference($_GET['reference_id']);
    }
   ?> 
    <div class="bg-content">
        <div class="container products-container">   
            <div class="product-edit-section">
                <div class="row">
                    <form method="post" action="?controller=pages&action=references&page=edit&reference_id=<?php echo $reference["Id"];?>&part=update" enctype="multipart/form-data">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="">
                                <p>
                                Fotoğraf seç:
                                </p>
                                <div class="image-upload">
                                    <label for="file-input">
                                        <img class="img-responsive img-container-inside" id="image-preview" src="uploads/<?php echo $reference["ImgUrl"]; ?>">
                                    </label>
                                    <input id="file-input" type="file" name="photo">
                                </div>
                                <input type="hidden" name="oldPhotoName" value='<?php echo $reference["ImgUrl"]; ?>'>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">      
                                <label for="productTitle">Ürün Başlığı( title ):</label>
                                <input class="input-class form-control" type="text" name="productTitle" id="productTitle" value="<?php echo $reference["Title"];?>"/>
                            </div>
                            <div class="form-group"> 
                                <label for="productName">Ürün Adı:</label>
                                <input class="input-class form-control" type="text" name="productName" id="productName" value="<?php echo $reference["Name"];?>"/>
                            </div>
                            <div class="form-group">  
                                <label for="productDescription">Sayfa Açıklaması ( description ):</label>
                                <input class="input-class form-control" type="text" name="productDescription" id="productDescription" value="<?php echo $reference["Description"];?>"/>
                            </div>
                            <div class="form-group">    
                                <label for="productKeywords">Anahtar Kelimeler ( keywords ):</label>
                                <textarea class="input-class form-control" rows="3" type="text" name="productKeywords" id="productKeywords" value="<?php echo $reference["Keywords"];?>"></textarea>
                            </div>
                            <br/>
                            <br/>
                            <!--<input TYPE="submit" name="upload" title="Add data to the Database" value="Add Member"/>-->
                            <input class="btn btn-default save-button update-product-submit" type="submit" name="upload" title="Add data to the Database" value="Kaydet" id="sliderSubmit"/>
                            <a href="?controller=pages&action=references" class="btn btn-default save-button">İptal</a>   
                        </div>
                    </form>
                </div>
            </div> 
        </div>
    </div>