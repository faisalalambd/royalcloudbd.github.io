<!-- ############################## Database Connection ############################## -->
<?php include 'config.php' ?>


<!-- ############################## Header Section ############################## -->
<?php include 'header.php' ?>



<!--Home slider-->
<div class="slideshow slideshow-wrapper pb-section">

    <!-- ############################## Banner Slider ############################## -->
    <div class="home-slideshow">


        <?php

        $sql = "SELECT * FROM sliders";

        $result = $connection->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
        ?>

                <div class="slide">
                    <div class="blur-up lazyload">
                        <a href="">
                            <img class="blur-up lazyload" data-src="admin/public<?php echo $row['image'] ?>" src="admin/public<?php echo $row['image'] ?>" alt="" title="" />
                        </a>
                    </div>
                </div>


        <?php }
        }
        ?>


    </div>

</div>
<!--End Banner Slider-->



<!-- ############################## Small Banner One ############################## -->
<div class="section imgBanners">

    <div class="container">

        <div class="imgBnrOuter">

            <div class="row">

                <?php

                $sql = "SELECT * FROM small_banners limit 2";

                $result = $connection->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                ?>

                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 pl-0">
                            <div class="inner">
                                <a href="#">
                                    <img data-src="admin/public<?php echo $row['image'] ?>" src="admin/public<?php echo $row['image'] ?>" alt="" class="blur-up lazyload" />
                                </a>
                            </div>
                        </div>


                <?php }
                }
                ?>


                <!-- <div class="col-12 col-sm-6 col-md-6 col-lg-6 pl-0">
                    <div class="inner">
                        <a href="#">
                            <img data-src="assets/images/smallBanner/smallBanner_image_2.jpg"
                                src="assets/images/smallBanner/smallBanner_image_2.jpg" alt=""
                                class="blur-up lazyload" />
                        </a>
                    </div>
                </div> -->

            </div>

        </div>

    </div>

</div>
<!--End Small Banner One-->



<!-- ############################## Product Slider (Trending) ############################## -->
<div class="section" style="margin-top: 3rem;">

    <div class="container">

        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="section-header text-center">
                    <h2 class="h2 heading-font"><b>Trending</b></h2>
                </div>
            </div>
        </div>


        <div class="productSlider-style2 grid-products" style="margin-top: 1rem;">

            <?php

            $sql = "SELECT * FROM products WHERE trending='yes'";

            $result = $connection->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
            ?>


                    <div class="col-12 item">
                        <!-- start product image -->
                        <div class="product-image">
                            <!-- start product image -->
                            <a href="ProductDetails.php?id=<?php echo $row['id']?>" class="grid-view-item__link">
                                <!-- image -->
                                <img class="primary blur-up lazyload" src="admin/public<?php echo $row['image'] ?>" alt="image" title="Trending Product">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" src="admin/public<?php echo $row['image'] ?>" alt="image" title="Trending Product">
                                <!-- End hover image -->
                            </a>
                            <!-- end product image -->
                            <!-- Start product button 
                            <form class="variants add" action="add_to_cart.php?id=<?php echo $row['id']?>"  method="post">
                                <button class="btn btn-addto-cart" type="submit" tabindex="0">Add To
                                    Cart</button>
                            </form>-->
                          
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
                            <a class="text-m" aria-label="4 reviews">4 Reviews</a>
                        </div> -->
                        </div>
                        <!-- End product details -->
                    </div>


            <?php }
            }
            ?>

        </div>

    </div>

</div>
<!--Product Slider (Trending)-->



<!-- ############################## Product Slider (New Arrivals) ############################## -->
<div class="section" style="background: #f0f0f0; margin-top: 3rem;">

    <div class="container">

        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="section-header text-center">
                    <h2 class="h2 heading-font"><b>New Arrivals</b></h2>
                </div>
            </div>
        </div>


        <div class="productSlider-style2 grid-products" style="margin-top: 1rem;">

            <?php

            $sql = "SELECT * FROM products order by id desc limit 10";

            $result = $connection->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
            ?>

                    <div class="col-12 item">
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
                                    <span class="lbl pr-label1">new</span>
                                </div>
                            </a>
                            <!-- end product image -->
                            <!-- Start product button 
                            <form class="variants add" action="#" onclick="window.location.href='cart.html'" method="post">
                                <button class="btn btn-addto-cart" type="button" tabindex="0">Add To
                                    Cart</button>
                            </form>-->
                           
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
                        <a class="text-m" aria-label="63 reviews">63 Reviews</a>
                    </div> -->
                        </div>
                        <!-- End product details -->
                    </div>

            <?php }
            }
            ?>




        </div>

    </div>

</div>
<!--End Product Slider (New Arrivals)-->



<!-- ############################## Small Banner Two ############################## -->
<div class="section imgBanners" style="margin-top: 3rem;">

    <div class="container">

        <div class="imgBnrOuter">

            <div class="row">

                <?php

                $sql = "SELECT * FROM down_banners order by id desc limit 2";

                $result = $connection->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                ?>

                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 pl-0">
                            <div class="inner">
                                <a href="#">
                                    <img data-src="admin/public<?php echo $row['image'] ?>" src="admin/public<?php echo $row['image'] ?>" alt="" class="blur-up lazyload" />
                                </a>
                            </div>
                        </div>


                <?php }
                }
                ?>

            </div>

        </div>

    </div>

</div>
<!--End Small Banner Two-->



<!-- ############################## Product Slider (Bestsellers) ############################## -->
<div class="section" style="background: #f0f0f0; margin-top: 3rem;">

    <div class="container">

        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="section-header text-center">
                    <h2 class="h2 heading-font"><b>Bestsellers</b></h2>
                </div>
            </div>
        </div>


        <div class="productSlider-style2 grid-products" style="margin-top: 1rem;">

            <?php

            $sql = "SELECT * FROM products WHERE bestseller='yes'";

            $result = $connection->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
            ?>

                    <div class="col-12 item">
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
                                    <span class="lbl pr-label1">new</span>
                                </div>
                            </a>
                            <!-- end product image -->
                            <!-- Start product button 
                            <form class="variants add" action="#" onclick="window.location.href='cart.html'" method="post">
                                <button class="btn btn-addto-cart" type="button" tabindex="0">Add To
                                    Cart</button>
                            </form>-->
                          
                            <!-- end product button -->
                        </div>
                        <!-- end product image -->
                        <!--start product details -->
                        <div class="product-details text-center">
                            <!-- product name -->
                            <div class="product-name">
                                <a href="ProductDetails.php?id=<?php echo $row['id']?>"><?php echo $row['name'] ?></a>
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
            <a class="text-m" aria-label="63 reviews">63 Reviews</a>
        </div> -->
                        </div>
                        <!-- End product details -->
                    </div>

            <?php }
            }
            ?>


        </div>

    </div>

</div>
<!--End Product Slider (Bestsellers)-->



<!-- ############################## Featured Brands Slider ############################## -->
<div class="section" style="margin-top: 4rem;">

    <div class="container">

        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="section-header text-center">
                    <h2 class="h2 heading-font"><b>Featured brands</b></h2>
                </div>
            </div>
        </div>


        <div class="productSlider-style2 grid-products">

            <?php

            $sql = "SELECT * FROM brands";

            $result = $connection->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
            ?>

                    <div class="col-12 item">
                        <div class="product-image imgBnrOuter">
                            <div class="inner">
                                <a href="#">
                                    <img src="admin/public<?php echo $row['image'] ?>" alt="" class="blur-up lazyload" />
                                </a>
                            </div>

                            <!-- <div class="inner">
                        <a href="#">
                            <img
                                src="<?php echo $row['logo'] ?>" alt=""
                                class="blur-up lazyload" />
                        </a>
                    </div> -->
                        </div>
                    </div>

            <?php }
            }
            ?>

        </div>

    </div>

</div>
<!--Featured Brands Slider-->



<!-- ############################## Small Banner Three ############################## -->
<!-- <div class="section imgBanners">

    <div class="container">

        <div class="imgBnrOuter">

            <div class="row">

                <div class="col-12 col-sm-3 col-md-3 col-lg-3 pl-0">
                    <div class="inner">
                        <a href="#">
                            <img data-src="assets/images/smallBanner/smallBanner_image_5.jpg"
                                src="assets/images/smallBanner/smallBanner_image_5.jpg" alt=""
                                class="blur-up lazyload" />
                        </a>
                    </div>
                </div>


                <div class="col-12 col-sm-3 col-md-3 col-lg-3 pl-0">
                    <div class="inner">
                        <a href="#">
                            <img data-src="assets/images/smallBanner/smallBanner_image_6.jpg"
                                src="assets/images/smallBanner/smallBanner_image_6.jpg" alt=""
                                class="blur-up lazyload" />
                        </a>
                    </div>
                </div>


                <div class="col-12 col-sm-3 col-md-3 col-lg-3 pl-0">
                    <div class="inner">
                        <a href="#">
                            <img data-src="assets/images/smallBanner/smallBanner_image_7.jpg"
                                src="assets/images/smallBanner/smallBanner_image_7.jpg" alt=""
                                class="blur-up lazyload" />
                        </a>
                    </div>
                </div>


                <div class="col-12 col-sm-3 col-md-3 col-lg-3 pl-0">
                    <div class="inner">
                        <a href="#">
                            <img data-src="assets/images/smallBanner/smallBanner_image_8.jpg"
                                src="assets/images/smallBanner/smallBanner_image_8.jpg" alt=""
                                class="blur-up lazyload" />
                        </a>
                    </div>
                </div>

            </div>

        </div>

    </div>

</div> -->
<!--End Small Banner Three-->



<!-- ############################## Gallery (Element Vape) ############################## -->
<div class="product-rows section" style="margin-top: 1rem; margin-bottom: 6rem;">

    <div class="container">

        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="section-header text-center">
                    <h2 class="h2">#ElementVape</h2>
                </div>
            </div>
        </div>


        <div class="grid-products">

            <div class="row">

                <!--Image Banners-->
                <div class="section imgBanners">

                    <div class="imgBnrOuter">

                        <div class="container-fluid">

                            <div class="row">

                                <?php

                                $sql = "SELECT * FROM galleries where banner = 'yes'";

                                $result = $connection->query($sql);

                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                ?>

                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 pl-0 image-banner-1">
                                            <div class="inner topleft">
                                                <a href="#">
                                                    <img src="admin/public<?php echo $row['image'] ?>" alt="𝗩𝗢𝗢𝗣𝗢𝗢 𝗗𝗥𝗔𝗚 𝗦 𝗣𝗻𝗣-𝗫" title="𝗩𝗢𝗢𝗣𝗢𝗢 𝗗𝗥𝗔𝗚 𝗦 𝗣𝗻𝗣-𝗫" class="blur-up lazyload" />
                                                </a>
                                            </div>
                                        </div>

                                <?php }
                                } ?>



                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 pr-0 image-banner-2">

                                    <div class="row">
                                        <?php

                                        $sql = "SELECT * FROM galleries";

                                        $result = $connection->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while ($row = $result->fetch_assoc()) {
                                        ?>
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 image-banner-3" style="margin-top:10px">
                                                    <div class="inner topleft">
												
                                                        <a href="#">
                                                            <img src="admin/public<?php  echo $row['image'] ?>" alt="𝗩𝗮𝗻𝗱𝘆 𝗩𝗮𝗽𝗲 𝗣𝗨𝗟𝗦𝗘 𝗔𝗜𝗢 𝟴𝟬𝗪" title="𝗩𝗮𝗻𝗱𝘆 𝗩𝗮𝗽𝗲 𝗣𝗨𝗟𝗦𝗘 𝗔𝗜𝗢 𝟴𝟬𝗪" class="blur-up lazyload" />
                                                        </a>
												
                                                    </div>
                                                </div>
                                        <?php }
                                        } ?>





                                    </div>




                                </div>

                            </div>

                        </div>

                    </div>

                </div>
                <!--End Image Banners-->

            </div>


            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <a href="#" class="btn load_more">Load More</a>
                </div>
            </div>

        </div>

    </div>

</div>
<!--End Gallery (Element Vape)-->



<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>