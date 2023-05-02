<?php  $categorySName=$_GET['categorySName']?>







<!-- ############################## Database Connection ############################## -->
<?php include 'config.php' ?>





<!-- #################### Header Section #################### -->
<?php include 'header.php' ?>



<!-- ##############################  Breadcrumb ##############################  -->
<div class="bredcrumbWrap">
    <div class="container breadcrumbs">
        <a href="index.html" title="Back to the home page">Home</a>
        <b>
            <span aria-hidden="true">›</span>
            <span><?php echo $categorySName?></span>
        </b>
    </div>
</div>
<!--End Breadcrumb-->



<!-- ##############################  Title ##############################  -->
<div class="section-header text-center" style="margin: 5rem 0; font-size: 24px; text-transform: capitalize;">
    <h2 class="h2 heading-font"><?php echo $categorySName?></h2>
</div>
<!--End Title-->



<div class="container new-page">

    <div class="row">

        <!-- ##############################  Sidebar ##############################  -->
        <div class="col-12 col-sm-12 col-md-3 col-lg-3 sidebar filterbar">

            <div class="closeFilter d-block d-md-none d-lg-none"><i class="icon icon anm anm-times-l"></i></div>


            <?php// include 'brands_side.php'?>

        </div>
        <!--End Sidebar-->



        <!-- #################### Main Content #################### -->
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col shop-grid-5">

            <div class="productList">

                <!--Toolbar-->
                <button type="button" class="btn btn-filter d-block d-md-none d-lg-none"> Product Filters</button>
                <div class="toolbar">
                    <div class="filters-toolbar-wrapper">
                        <div class="row">


                            <div class="col-6 col-md-6 col-lg-6 filters-toolbar__item collection-view-as d-flex justify-content-start align-items-center">

                                <span class="filters-toolbar__product-count">Displays 1-60 of 606</span>

                            </div>


                            <!-- <div
                                class="col-6 col-md-6 col-lg-6 text-center filters-toolbar__item filters-toolbar__item--count d-flex justify-content-center align-items-center">
                               
                            </div> -->


                            <div class="col-6 col-md-6 col-lg- text-right">

                                <div class="filters-toolbar__item">

                                    <label for="SortBy">Sort By</label>

                                    <select name="SortBy" id="SortBy" class="filters-toolbar__input filters-toolbar__input--sort">

                                        <option value="new_products">New Arrivals</option>

                                        <option value="position" selected="selected">Featured</option>

                                        <option value="price_desc">Price High - Low</option>

                                        <option value="price_asc">Price Low - High</option>

                                    </select>

                                    <input class="collection-header__default-sort" type="hidden" value="manual">

                                </div>

                            </div>

                        </div>

                    </div>

                </div>
                <!--End Toolbar-->



                <div class="grid-products grid--view-items">

                    <div class="row">

                        <!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&& PHP &&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->
                        <?php

                        $sql = "SELECT * FROM products where subcategory='$categorySName' order by id desc";

                        $result = $connection->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                        ?>


                                <div class="col-6 col-sm-6 col-md-4 col-lg-2 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="ProductDetails.php?id=<?php echo $row['id']?>" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" src="admin/public<?php echo $row['image'] ?>" alt="image" title="New Product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" src="admin/public<?php echo $row['image'] ?>" alt="image" title="New Product">
                                            <!-- End hover image -->
                                            <div class="product-labels rectangular">
                                               
                                            </div>
                                        </a>
                                        <!-- end product image -->
                                        <!-- Start product button
                                        <form class="variants add" action="#" onclick="window.location.href='cart.html'" method="post">
                                            <button class="btn btn-addto-cart" type="button" tabindex="0">Add To
                                                Cart</button>
                                        </form> -->
                                       
                                        <!-- end product button -->
                                    </div>
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="demoProduct.php"><?php echo $row['name'] ?></a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <?php if($row['offer_price']>0){?>
                             <div class="product-price">
                                <span class="price"><?php echo 'BDT ' . $row['offer_price'] ?>/-</span>
                                <!-- old price -->
                                <span class="old-price" style="margin-left: 0.5rem;">
                                    <span class="price">BDT : <?php echo $row['price']?></span>
                                </span>
                                <!-- End old price -->
                            </div>
				<?php }else{?>
				<div class="product-price">
                                <span class="price"><?php echo 'BDT ' . $row['price'] ?>/-</span>
                                <!-- old price -->
                                
                                <!-- End old price -->
                            </div>
				<?php }?>
                                        <!-- End product price -->
                                        <!-- <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <a class="text-m" aria-label="63 reviews">63 Reviews</a> -->
                                    </div>
                                    <!-- End product details -->
                                </div>

                        <?php }
                        }
                        ?>

                    </div>

                </div>

            </div>


            <div class="infinitpaginOuter">
                <div class="infinitpagin">
                    <a href="#" class="btn loadMore">Load More</a>
                </div>
            </div>

        </div>
        <!--End Main Content-->

    </div>

</div>



<!-- #################### Footer Section #################### -->
<?php include 'footer.php' ?>