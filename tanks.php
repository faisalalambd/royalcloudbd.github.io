<!-- ############################## Database Connection ############################## -->
<?php include 'config.php' ?>



<!-- #################### Header Section #################### -->
<?php include 'header.php' ?>



<!-- #################### Collection Banner #################### -->
<div class="collection-header">
    <div class="collection-hero" style="margin: 5rem 0;">
        <div class="collection-hero__image">
            <img class="blur-up lazyload" data-src="assets/images/starterKits.jpg" src="assets/images/starterKits.jpg" alt="STARTER KITS" title="STARTER KITS" />
        </div>
    </div>
</div>
<!--End Collection Banner-->



<div class="container new-page">

    <div class="row">

        <!-- #################### Sidebar #################### -->
        <div class="col-12 col-sm-12 col-md-3 col-lg-3 sidebar filterbar">

            <div class="closeFilter d-block d-md-none d-lg-none"><i class="icon icon anm anm-times-l"></i></div>


            <div class="sidebar_tags">

                <!-- ############################## Brand ############################## -->
                <div class="sidebar_widget filterBox filter-widget">

                    <div class="widget-title">
                        <h2><b>Brands</b></h2>
                    </div>

                    <ul>

                        <li>
                            <input type="checkbox" value="allen-vela" id="check1">
                            <label for="check1"><span><span></span></span>Air Factory</label>
                        </li>

                        <li>
                            <input type="checkbox" value="oxymat" id="check3">
                            <label for="check3"><span><span></span></span>Big Boy</label>
                        </li>

                        <li>
                            <input type="checkbox" value="vanelas" id="check4">
                            <label for="check4"><span><span></span></span>Craving Vapor</label>
                        </li>

                        <li>
                            <input type="checkbox" value="pagini" id="check5">
                            <label for="check5"><span><span></span></span> Damn Vape</label>
                        </li>

                        <li>
                            <input type="checkbox" value="monark" id="check6">
                            <label for="check6"><span><span></span></span>Ezzy</label>
                        </li>

                        <li>
                            <input type="checkbox" value="monark" id="check7">
                            <label for="check7"><span><span></span></span>Freemax</label>
                        </li>

                        <li>
                            <input type="checkbox" value="monark" id="check8">
                            <label for="check8"><span><span></span></span>Lost Vape</label>
                        </li>

                        <li>
                            <input type="checkbox" value="monark" id="check9">
                            <label for="check9"><span><span></span></span> ONE Vape </label>
                        </li>

                        <li>
                            <input type="checkbox" value="monark" id="check10">
                            <label for="check10"><span><span></span></span>Suicide Mods</label>
                        </li>

                    </ul>

                </div>
                <!--End Brand-->


                <!-- ############################## Price Filter ############################## -->
                <div class="sidebar_widget filterBox filter-widget">

                    <div class="widget-title">
                        <h2><b>Price</b></h2>
                    </div>

                    <form action="#" method="post" class="price-filter">

                        <div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">

                            <div class="ui-slider-range ui-widget-header ui-corner-all"></div>

                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>

                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>

                        </div>


                        <div class="row">

                            <div class="col-6">
                                <p class="no-margin"><input id="amount" type="text"></p>
                            </div>

                            <div class="col-6 text-right margin-25px-top">
                                <button class="btn btn-secondary btn--small">filter</button>
                            </div>

                        </div>

                    </form>

                </div>
                <!--End Price Filter-->


                <!-- ############################## CBD Vape Type ############################## -->
                <div class="sidebar_widget filterBox filter-widget">

                    <div class="widget-title">
                        <h2><b>CBD Vape Type</b></h2>
                    </div>

                    <ul>

                        <li>
                            <input type="checkbox" value="allen-vela" id="check1">
                            <label for="check1"><span><span></span></span>CBD Vape Type</label>
                        </li>

                    </ul>

                </div>
                <!--End CBD Vape Type-->


                <!-- ############################## Type ############################## -->
                <div class="sidebar_widget filterBox filter-widget">

                    <div class="widget-title">
                        <h2><b>Type</b></h2>
                    </div>

                    <ul>

                        <li>
                            <input type="checkbox" value="allen-vela" id="check1">
                            <label for="check1"><span><span></span></span>Starter Kits </label>
                        </li>

                        <li>
                            <input type="checkbox" value="oxymat" id="check3">
                            <label for="check3"><span><span></span></span>Devices </label>
                        </li>

                        <li>
                            <input type="checkbox" value="vanelas" id="check4">
                            <label for="check4"><span><span></span></span>Tanks</label>
                        </li>

                        <li>
                            <input type="checkbox" value="pagini" id="check5">
                            <label for="check5"><span><span></span></span>Rebuildables </label>
                        </li>

                        <li>
                            <input type="checkbox" value="monark" id="check6">
                            <label for="check6"><span><span></span></span>Accessories</label>
                        </li>

                    </ul>

                </div>
                <!--End Type-->


                <!-- ############################## Starter Kit Type ############################## -->
                <div class="sidebar_widget filterBox filter-widget">

                    <div class="widget-title">
                        <h2><b>Starter Kit Type</b></h2>
                    </div>

                    <ul>

                        <li>
                            <input type="checkbox" value="allen-vela" id="check1">
                            <label for="check1"><span><span></span></span>Box Mod Kits</label>
                        </li>

                        <li>
                            <input type="checkbox" value="oxymat" id="check3">
                            <label for="check3"><span><span></span></span>Temperature Control Kits</label>
                        </li>

                        <li>
                            <input type="checkbox" value="vanelas" id="check4">
                            <label for="check4"><span><span></span></span>All-In-One Systems</label>
                        </li>

                        <li>
                            <input type="checkbox" value="pagini" id="check5">
                            <label for="check5"><span><span></span></span>High Power Kits (150W+)</label>
                        </li>

                        <li>
                            <input type="checkbox" value="monark" id="check6">
                            <label for="check6"><span><span></span></span> Portable Pod Systems</label>
                        </li>

                    </ul>

                </div>
                <!--End Starter Kit Type-->


                <!-- ############################## Capacity ############################## -->
                <div class="sidebar_widget filterBox filter-widget">

                    <div class="widget-title">
                        <h2><b>Capacity</b></h2>
                    </div>

                    <ul>

                        <li>
                            <input type="checkbox" value="allen-vela" id="check1">
                            <label for="check1"><span><span></span></span>0-1.9mL</label>
                        </li>

                        <li>
                            <input type="checkbox" value="oxymat" id="check3">
                            <label for="check3"><span><span></span></span>2-2.9mL</label>
                        </li>

                        <li>
                            <input type="checkbox" value="vanelas" id="check4">
                            <label for="check4"><span><span></span></span>3-4.9mL</label>
                        </li>

                        <li>
                            <input type="checkbox" value="pagini" id="check5">
                            <label for="check5"><span><span></span></span>5mL+</label>
                        </li>

                    </ul>

                </div>
                <!--End Capacity-->


                <!-- ############################## Tanks Type ############################## -->
                <div class="sidebar_widget filterBox filter-widget">

                    <div class="widget-title">
                        <h2><b>Tanks Type</b></h2>
                    </div>

                    <ul>

                        <li>
                            <input type="checkbox" value="allen-vela" id="check1">
                            <label for="check1"><span><span></span></span>Sub-Ohm Tanks</label>
                        </li>

                        <li>
                            <input type="checkbox" value="oxymat" id="check3">
                            <label for="check3"><span><span></span></span>Ceramic Core Tanks</label>
                        </li>

                        <li>
                            <input type="checkbox" value="vanelas" id="check4">
                            <label for="check4"><span><span></span></span>Temperature Control Tanks</label>
                        </li>

                        <li>
                            <input type="checkbox" value="pagini" id="check5">
                            <label for="check5"><span><span></span></span>High Power Tanks (150W+)</label>
                        </li>

                        <li>
                            <input type="checkbox" value="monark" id="check6">
                            <label for="check6"><span><span></span></span>Mouth To Lung (MTL) Tanks</label>
                        </li>

                    </ul>

                </div>
                <!--End Tanks Type-->


                <!-- ############################## Diameter ############################## -->
                <div class="sidebar_widget filterBox filter-widget">

                    <div class="widget-title">
                        <h2><b>Diameter</b></h2>
                    </div>

                    <ul>

                        <li>
                            <input type="checkbox" value="allen-vela" id="check1">
                            <label for="check1"><span><span></span></span>20mm</label>
                        </li>

                        <li>
                            <input type="checkbox" value="oxymat" id="check3">
                            <label for="check3"><span><span></span></span>22mm</label>
                        </li>

                        <li>
                            <input type="checkbox" value="vanelas" id="check4">
                            <label for="check4"><span><span></span></span>23mm</label>
                        </li>

                        <li>
                            <input type="checkbox" value="pagini" id="check5">
                            <label for="check5"><span><span></span></span>24mm</label>
                        </li>

                        <li>
                            <input type="checkbox" value="monark" id="check6">
                            <label for="check6"><span><span></span></span>25mm</label>
                        </li>

                    </ul>

                </div>
                <!--End Diameter-->


                <!-- ############################## Color ############################## -->
                <div class="sidebar_widget filterBox filter-widget">

                    <div class="widget-title">
                        <h2><b>Color</b></h2>
                    </div>

                    <ul>

                        <li>
                            <input type="checkbox" value="allen-vela" id="check1">
                            <label for="check1"><span><span></span></span>Silver / SS</label>
                        </li>

                        <li>
                            <input type="checkbox" value="oxymat" id="check3">
                            <label for="check3"><span><span></span></span>Black</label>
                        </li>

                        <li>
                            <input type="checkbox" value="vanelas" id="check4">
                            <label for="check4"><span><span></span></span>Blue</label>
                        </li>

                        <li>
                            <input type="checkbox" value="pagini" id="check5">
                            <label for="check5"><span><span></span></span>Red</label>
                        </li>

                        <li>
                            <input type="checkbox" value="monark" id="check6">
                            <label for="check6"><span><span></span></span>Rainbow</label>
                        </li>

                    </ul>

                </div>
                <!--End Color-->


                <!-- ############################## Wattage ############################## -->
                <div class="sidebar_widget filterBox filter-widget">

                    <div class="widget-title">
                        <h2><b>Wattage</b></h2>
                    </div>

                    <ul>

                        <li>
                            <input type="checkbox" value="allen-vela" id="check1">
                            <label for="check1"><span><span></span></span>1-49</label>
                        </li>

                        <li>
                            <input type="checkbox" value="oxymat" id="check3">
                            <label for="check3"><span><span></span></span>50-99</label>
                        </li>

                        <li>
                            <input type="checkbox" value="vanelas" id="check4">
                            <label for="check4"><span><span></span></span>100-149</label>
                        </li>

                        <li>
                            <input type="checkbox" value="pagini" id="check5">
                            <label for="check5"><span><span></span></span>150-199</label>
                        </li>

                        <li>
                            <input type="checkbox" value="monark" id="check6">
                            <label for="check6"><span><span></span></span>200+</label>
                        </li>

                    </ul>

                </div>
                <!--End Wattage-->

            </div>

        </div>
        <!--End Sidebar-->



        <!-- #################### Main Content #################### -->
        <div class="col-12 col-sm-12 col-md-9 col-lg-9 main-col shop-grid-5">

            <div class="productList">

                <!--Toolbar-->
                <button type="button" class="btn btn-filter d-block d-md-none d-lg-none"> Product Filters</button>
                <div class="toolbar">
                    <div class="filters-toolbar-wrapper">
                        <div class="row">

                            <div class="col-6 col-md-6 col-lg-6 filters-toolbar__item collection-view-as d-flex justify-content-start align-items-center">

                                <span class="filters-toolbar__product-count">Displays 1-60 of 631</span>

                            </div>


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

                        $sql = "SELECT * FROM products where category='TANKS' order by id desc";

                        $result = $connection->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                        ?>


                                <div class="col-6 col-sm-6 col-md-4 col-lg-2 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="demoProduct.php" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" src="admin/public<?php echo $row['image'] ?>" alt="image" title="New Product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" src="admin/public<?php echo $row['image'] ?>" alt="image" title="New Product">
                                            <!-- End hover image -->
                                            <div class="product-labels rectangular">
                                                <span class="lbl pr-label1">new</span>
                                            </div>
                                        </a>
                                        <!-- end product image -->
                                        <!-- Start product button -->
                                        
                                        <!-- end product button -->
                                    </div>
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="ProductDetails.php?id=<?php echo $row['id']?>"><?php echo $row['products_name'] ?></a>
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