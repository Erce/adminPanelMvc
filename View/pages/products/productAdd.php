<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
        require_once 'Model/productsModel.php';
        $category = isset($_GET['category']) ? $_GET['category'] : "";
        $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";
        $productModel = new Products($category,$keyword);

        require_once 'Model/productCategoriesModel.php';
        $productCategories = new ProductCategories();
        $productCategoriesList = $productCategories->selectAllCategories();
        
        require_once 'Controller/admin/productController.php';
        $productController = new ProductController($productModel);

        if (isset($_GET['part'])) {
            $productController->{$_GET['part']}($_POST);
        }
   ?> 
    <div class="bg-content">
        <div class="container products-container">   
            <div class="product-edit-section">
                <div class="row">
                    <form method="post" action="?controller=pages&action=products&subpage=products&page=add&part=add" enctype="multipart/form-data">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="">
                                <label>
                                Fotoğraf seç:
                                </label>
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
                                <label for="productTitle">Ürün Başlığı( title ):</label>
                                <input class="input-class form-control" type="text" name="productTitle" id="productTitle" value=""/>
                            </div>
                            <div class="form-group"> 
                                <label for="productName">Ürün Adı:</label>
                                <input class="input-class form-control" type="text" name="productName" id="productName" value=""/>
                            </div>
                            <div class="form-group">  
                                <label for="productDescription">Sayfa Açıklaması ( description ):</label>
                                <input class="input-class form-control" type="text" name="productDescription" id="productDescription" value=""/>
                            </div>
                            <div class="form-group">    
                                <label for="productKeywords">Anahtar Kelimeler ( keywords ):</label>
                                <textarea class="input-class form-control" rows="3" type="text" name="productKeywords" id="productKeywords" value=""></textarea>
                            </div>
                            <div class="form-group">
                                <label for="productCategory">Ürün Kategorisi:</label>
                                <select class="form-control" type="" id="productCategory" name="productCategory">
                                    <?php for ($i = 0; $i < sizeof($productCategoriesList); $i++) { ?>
                                        <option id="option<?php echo $productCategoriesList[$i]['Id']; ?>">
                                            <?php echo $productCategoriesList[$i]["ProductCategoryListName"];?>
                                        </option>
                                    <?php } ?>
                                </select>
                                <input type="hidden" name="productId" value="">
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