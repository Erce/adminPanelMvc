<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    require_once 'Model/productsModel.php';
    $category = isset($_GET['category']) ? $_GET['category'] : "";
    $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";
    $product = new Products($category,$keyword);
    $product->setPaging();
    $product->setProductList();
    $productList = $product->getProductList();
    $link = (($keyword != "") ? '&keywords='.$keyword : ("".(($category != "") ? '&category='.$category : "")));
    
    require_once 'Controller/admin/productController.php';
    $productController = new ProductController($product);
    
    if(isset($_POST['part']) || isset($_GET['part'])){
        file_put_contents("log.txt", "product page in if post".$_POST['id'].PHP_EOL, FILE_APPEND);
        $productController->delete();
    }
   ?> 
    <div class="bg-content">
        <div class="container products-container">   
            <div class="product-section">
                <div class="row button-div">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">                                   
                            <?php 
                                try {
                                    // The "back" link
                                    $prevlink = ($product->page > 1) ? '<a href="?controller=pages&action=products&subpage=products&page=1" title="First page">&laquo;</a> <a href="?controller=pages&action=products&subpage=products'.$link.'&page=' . ($product->page - 1) . '" title="Previous page">&lsaquo;</a>' : '<span class="disabled">&laquo;</span> <span class="disabled">&lsaquo;</span>';

                                    // The "forward" link
                                    $nextlink = ($product->page < $product->pages) ? '<a href="?controller=pages&action=products&subpage=products'.$link.'&page=' . ($product->page + 1) . '" title="Next page">&rsaquo;</a> <a href="?controller=pages&action=products&subpage=products&page=' . $product->pages . '" title="Last page">&raquo;</a>' : '<span class="disabled">&rsaquo;</span> <span class="disabled">&raquo;</span>';

                                    // Display the paging information
                                    echo '<div id="paging"><p>', $prevlink, ' Page ', $product->page, ' of ', $product->pages, ' pages, displaying ', $product->start, '-', $product->end, ' of ', $product->total, ' results ', $nextlink, ' </p></div>';

                                } catch (Exception $exc) {
                                    echo $exc->getTraceAsString();
                                }
                            ?>                           
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <a href="?controller=pages&action=products&subpage=products&page=add" id="add-slider">
                                <img class="img-responsive product-add-icon" src="Public/images/plus-icon.png" height="45px" width="45px">       
                            </a>
                        </div>
                    </div>
                </div>
                <?php for($i = 0; $i <  sizeof($productList); $i++) { ?>
                <a href="?controller=pages&action=products&subpage=products&page=edit&product_id=<?php echo $productList[$i]["Id"] ?>" id="productRow<?php echo $productList[$i]["Id"] ?>">
                    <div class="row vertical-align products-page-row <?php if($i % 2 == 0) {echo "products-page-row-light";}else{echo "products-page-row-dark";} ?>">
                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4 product-page-row-img-container">
                            <div class="item-image">
                                <img class="img-responsive img-container-inside" id="myImg<?php echo $productList[$i]["Id"] ?>" src="../uploads/<?php echo $productList[$i]["ImgUrl"]; ?>">
                            </div>
                        </div><!--
                        --><div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
                            <div class="row item-content">
                                <div class="item-text">
                                    <h4><?php echo $productList[$i]["Title"]; ?></h4>
                                </div>
                            </div>
                        </div><!--
                    --><div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
                            <div class="row item-content">
                                <div class="item-text">
                                    <h5>Caption Text2</h5>
                                </div>
                            </div>
                        </div><!--
                        --><div class="col-lg-5 col-md-4"><!--
                        --></div><!--
                        --><div class="col-lg-1 col-md-2 col-sm-3 col-xs-2" id="product-delete-icon">
                            <img class="img-responsive product-delete-icon" id="product<?php echo $productList[$i]['Id'];?>" src="Public/images/delete.ico" height="45px" width="45px" onclick="deleteProductRow(this); return false">
                        </div>
                    </div>
                </a>
                <?php } ?>
            </div> 
        </div>
    </div>