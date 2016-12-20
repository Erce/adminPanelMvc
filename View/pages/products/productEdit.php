<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    require_once 'Model/productsModel.php';
    $category = isset($_GET['category']) ? $_GET['category'] : "";
    $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";
    $productObj = new Products($category,$keyword);
    $product = $productObj->getProduct($_GET['product_id']);
    $link = (($keyword != "") ? '&keywords='.$keyword : ("".(($category != "") ? '&category='.$category : "")));
    
    require_once 'Model/productCategoriesModel.php';
    $productCategories = new ProductCategories();
    $productCategoriesList = $productCategories->selectAllCategories();
   ?> 
    <div class="bg-content">
        <div class="container products-container">   
            <div class="product-edit-section">
                <div class="row">
                    <form method="post" action="Controller/productEditController.php" enctype="multipart/form-data">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="">
                                <p>
                                Fotoğraf seç:
                                </p>
                                <div class="image-upload">
                                    <label for="file-input">
                                        <img class="img-responsive img-container-inside" id="image-preview" src="uploads/<?php echo $product[0]["ImgUrl"]; ?>">
                                    </label>
                                    <input id="file-input" type="file" name="photo">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">      
                                <label for="productTitle">Ürün Başlığı( title ):</label>
                                <input class="input-class form-control" type="text" name="productTitle" id="productTitle" value="<?php echo $product[0]["Title"];?>"/>
                            </div>
                            <div class="form-group"> 
                                <label for="productName">Ürün Adı:</label>
                                <input class="input-class form-control" type="text" name="productName" id="productName" value="<?php echo $product[0]["Name"];?>"/>
                            </div>
                            <div class="form-group">  
                                <label for="productDescription">Sayfa Açıklaması ( description ):</label>
                                <input class="input-class form-control" type="text" name="productDescription" id="productDescription" value="<?php echo $product[0]["Description"];?>"/>
                            </div>
                            <div class="form-group">    
                                <label for="productKeywords">Anahtar Kelimeler ( keywords ):</label>
                                <textarea class="input-class form-control" rows="3" type="text" name="productKeywords" id="productKeywords" value="<?php echo $product[0]["Keywords"];?>"></textarea>
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
                                <input type="hidden" name="productId" value="<?php echo $product[0]["Id"];?>">
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