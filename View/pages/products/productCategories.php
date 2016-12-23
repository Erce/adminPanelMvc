<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


        require_once 'Model/productCategoriesModel.php';
        $productCategoriesModel = new ProductCategories();
        $productCategoriesList = $productCategoriesModel->selectAllCategories();
        require_once 'Controller/admin/productCategoriesController.php';
        $productCategoriesController = new ProductCategoriesController($productCategoriesModel);

        if (isset($_GET['part'])) {                     
            $productCategoriesController->{$_GET['part']}($_POST);
            $productCategoriesList = $productCategoriesModel->selectAllCategories();
        }
        
   
        //file_put_contents("log.txt", "productCategoriesChild->catch->   ".$_POST['parent_id'].PHP_EOL, FILE_APPEND);
        $productCategoriesController->selectAllChilds();//print_r($productCategoryChildList);
        $productCategoryChildList = $productCategoriesModel->productCategoryChildList;
        //file_put_contents("log.txt", "productCategoriesChild after model    ".count($productCategoriesModel->productCategoryChildList)."    ".count($productCategoryChilds)."   ".$productCategoryChildList[0]["ProductCategoryListName"]."    ".$productCategoryChildList[1]["ProductCategoryName"].PHP_EOL, FILE_APPEND);

        
        ?>
        <script type="text/javascript">var productCategoryChildList =<?php echo json_encode($productCategoryChildList); ?>;</script>
        <form id="firstform" method="post" action="?controller=pages&action=product&subpage=productscategories&part=add" enctype="multipart/form-data">
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
                            <div class="form-group" id="productCategorySelect">
                                <label for="productCategory">Ürün Kategorisi:</label>
                                <select class="form-control productCategory" type="" id="productCategory" name="productCategory">
                                    <option id="optionUrunler">
                                        Ürünler
                                    </option>
                                    <?php for ($i = 0; $i < sizeof($productCategoriesList); $i++) {
                                        if($productCategoriesList[$i]["ProductCategoryParentId"] == NULL) { ?>
                                            <option id="option<?php echo $productCategoriesList[$i]['ProductCategoryId']; ?>">
                                                <?php echo $productCategoriesList[$i]["ProductCategoryListName"];?>
                                            </option>
                                        <?php } 
                                        ?>

                                    <?php } ?>
                                </select>
                                <input type="hidden" name="productId" value="<?php echo $product["Id"];?>">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="photoDescription">Açıklama:</label>
                                <input class="input-class form-control" type="text" name="photoDescription" id="photoDescription" value=""/>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="photoDescription">Tarih:</label>
                                <input class="input-class form-control" type="text" name="date" value="">
                                <input type="hidden" name="id" value="">
                            </div>
                            <br>
                            <input class="btn btn-default save-button update-slider-submit" type="submit" name="upload" title="Add data to the Database" value="Kaydet" id="sliderSubmit"/>
                            <a href="?controller=pages&action=products&subpage=productcategories" class="btn btn-default save-button">İptal</a>                               
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </form>
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
                        <div class="categoryList" onload="categoryList();">
                            <?php 
                            function child($id,$productCategoriesList,$add) {
                                for ($index1 = 0; $index1 < count($productCategoriesList); $index1++) {
                                    if($id == $productCategoriesList[$index1]["ProductCategoryParentId"]) {
                                        echo "<div> -->".$add.$productCategoriesList[$index1]["ProductCategoryListName"]."</div>";
                                        child($productCategoriesList[$index1]["ProductCategoryId"],$productCategoriesList, $add."-->");
                                    }
                                }
                            }


                            for ($index = 0; $index < count($productCategoriesList); $index++) {
                                if ($productCategoriesList[$index]["ProductCategoryParentId"] == "") {
                                    echo "<div>".$productCategoriesList[$index]["ProductCategoryListName"]."</div>";
                                    child($productCategoriesList[$index]["ProductCategoryId"],$productCategoriesList,"");   
                                }
                            }
                            ?>
                        </div>                                   
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
