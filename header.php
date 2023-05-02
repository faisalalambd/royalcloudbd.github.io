<?php include_once 'config.php'?>
<!DOCTYPE html>
<html class="no-js" lang="en">


<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Royal Techno - Online Vape Shop - Vape Mods, Kits &amp; E-Liquid</title>

    <meta name="description" content="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon/favicon.png" />

    <!-- ############################## Font Awesome CDN ############################## -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">

    <!-- Bootstap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

</head>



<body class="template-index home8-jewellery belle">

    <!-- <div id="pre-loader">
        <img src="assets/images/loader.gif" alt="Loading..." />
    </div> -->


    <div class="pageWrapper">

        <!--Search Form Drawer-->
        <div class="search">
            <div class="search__form">
                <form class="search-bar__form" action="#">
                    <button class="go-btn search__button" type="submit"><i class="icon anm anm-search-l"></i></button>
                    <input class="search__input" type="search" name="q" value="" placeholder="Search entire store..."
                        aria-label="Search" autocomplete="off">
                </form>
                <button type="button" class="search-trigger close-btn"><i class="anm anm-times-l"></i></button>
            </div>
        </div>
        <!--End Search Form Drawer-->


        <!-- ############################## Top Header ############################## -->
        <div class="top-header home8-jewellery-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 d-none d-lg-none d-md-block d-lg-block">
                        <div class="text-center">
                            <p class="top-header_middle-text">WARNING: This product contains nicotine. Nicotine is an
                                addictive chemical.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Top Header-->



        <!-- ############################## Header ############################## -->
        <div class="header-wrap animated d-flex home8-jewellery-header">

            <div class="container-fluid">

                <div class="row align-items-center">

                    <div class="col-3 col-sm-3 col-md-3 col-lg-8 d-block d-lg-none">
                        <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open">
                            <i class="icon anm anm-times-l"></i>
                            <i class="anm anm-bars-r"></i>
                        </button>
                    </div>


                    <!--Search Icon-->
                    <div class="col-4 col-sm-3 col-md-3 col-lg-2 d-none d-lg-block">
                        <!-- <div class="site-header__search text-left">
                                <button type="button" class="search-trigger"><i
                                        class="icon anm anm-search-l"></i></button>
                            </div> -->
                    </div>
                    <!--End Search Icon-->


                    <!-- ############################## Desktop Logo ############################## -->
                    <div class="logo col-5 col-sm-6 col-md-6 col-lg-8 text-center">
                        <a href="index.php">
                            <img src="assets/images/logo/logo.png" alt="Element Vape" title="Element Vape" />
                        </a>
                    </div>
                    <!--End Desktop Logo-->


                    <div class="col-4 col-sm-3 col-md-3 col-lg-2">
                        <div class="site-cart">

                            <!-- ############################## Search Icon ############################## -->
                            <button type="button" class="search-trigger">
                                <i class="icon anm anm-search-l"></i>
                            </button>
                            <!--End Search Icon-->


                            <!-- ############################## User ############################## -->
                            <a href="login.php" class="" title="User">
                                <i class="fas fa-user"></i>
                            </a>
                            <!--End User-->


                            <a href="#;" class="site-header__cart" title="Cart">
                                <i class="icon anm anm-bag-l"></i>
                                <span id="CartCount" class="site-header__cart-count"
                                    data-cart-render="item_count">2</span>
                            </a>


                            <!--Minicart Popup-->
                            <div id="header-cart" class="block block-cart">
                                <ul class="mini-products-list">
                                    <li class="item">
                                        <a class="product-image" href="#">
                                            <img src="assets/images/product-images/cape-dress-1.jpg"
                                                alt="3/4 Sleeve Kimono Dress" title="" />
                                        </a>
                                        <div class="product-details">
                                            <a href="#" class="remove"><i class="anm anm-times-l"
                                                    aria-hidden="true"></i></a>
                                            <a href="#" class="edit-i remove"><i class="anm anm-edit"
                                                    aria-hidden="true"></i></a>
                                            <a class="pName" href="cart.html">Sleeve Kimono Dress</a>
                                            <div class="variant-cart">Black / XL</div>
                                            <div class="wrapQtyBtn">
                                                <div class="qtyField">
                                                    <span class="label">Qty:</span>
                                                    <a class="qtyBtn minus" href="javascript:void(0);"><i
                                                            class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                    <input type="text" id="Quantity" name="quantity" value="1"
                                                        class="product-form__input qty">
                                                    <a class="qtyBtn plus" href="javascript:void(0);"><i
                                                            class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="priceRow">
                                                <div class="product-price">
                                                    <span class="money">$59.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <a class="product-image" href="#">
                                            <img src="assets/images/product-images/cape-dress-2.jpg"
                                                alt="Elastic Waist Dress - Black / Small" title="" />
                                        </a>
                                        <div class="product-details">
                                            <a href="#" class="remove"><i class="anm anm-times-l"
                                                    aria-hidden="true"></i></a>
                                            <a href="#" class="edit-i remove"><i class="anm anm-edit"
                                                    aria-hidden="true"></i></a>
                                            <a class="pName" href="cart.html">Elastic Waist Dress</a>
                                            <div class="variant-cart">Gray / XXL</div>
                                            <div class="wrapQtyBtn">
                                                <div class="qtyField">
                                                    <span class="label">Qty:</span>
                                                    <a class="qtyBtn minus" href="javascript:void(0);"><i
                                                            class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                    <input type="text" id="Quantity" name="quantity" value="1"
                                                        class="product-form__input qty">
                                                    <a class="qtyBtn plus" href="javascript:void(0);"><i
                                                            class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="priceRow">
                                                <div class="product-price">
                                                    <span class="money">$99.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="total">
                                    <div class="total-in">
                                        <span class="label">Cart Subtotal:</span><span class="product-price"><span
                                                class="money">$748.00</span></span>
                                    </div>
                                    <div class="buttonSet text-center">
                                        <a href="cart.html" class="btn btn-secondary btn--small">View Cart</a>
                                        <a href="checkout.html" class="btn btn-secondary btn--small">Checkout</a>
                                    </div>
                                </div>
                            </div>
                            <!--End Minicart Popup-->

                        </div>


                        <!--Mobile Search-->
                        <div class="site-header__search d-block d-lg-none">
                            <button type="button" class="search-trigger"><i class="icon anm anm-search-l"></i></button>
                        </div>
                        <!--End Mobile Search-->

                    </div>

                </div>


                <!-- ############################## Desktop Menu ############################## -->
                <div class="row">

                    <nav class="belowlogo" id="AccessibleNav">

                        <ul id="siteNav" class="site-nav medium center hidearrow">

                            <li class="lvl1"><a href="new.php"><b>NEW</b> <i class="anm anm-angle-down-l"></i></a>
                            </li>


                            <li class="lvl1 parent megamenu"><a href="brands.php"><b>Brands</b><i
                                        class="anm anm-angle-down-l"></i></a>

                                

                                    <div class="megamenu style4">
<ul class="grid grid--uniform mmWrapper">
									
									<?php

            $sql = "SELECT * FROM subcategories where categoryName='Brands'";

            $result = $connection->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
				
			?>
			
                                        <li class="grid__item lvl-1 col-md-6 col-lg-6">

                                            <ul class="subLinks">

                                                <li class="lvl-2">
                                                    <a href="subpage.php?categorySName=<?php echo $row['categorySName']?>" class="site-nav lvl-2"><?php echo $row['categorySName']?></a>
                                                </li>

                                              
                                            </ul>

                                        </li>
										<?php }}?>
										</ul>
</div>

			

                                    
                                

                            </li>


                            <li class="lvl1 parent megamenu"><a href="starterKits.php"><b>STARTER KITS</b><i
                                        class="anm anm-angle-down-l"></i></a>
<div class="megamenu style4">
<ul class="grid grid--uniform mmWrapper">
                           				<?php

            $sql = "SELECT * FROM subcategories where categoryName='STARTER KITS'";

            $result = $connection->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
				
			?>
			
                                        <li class="grid__item lvl-1 col-md-6 col-lg-6">

                                            <ul class="subLinks">

                                                <li class="lvl-2">
                                                    <a href="#" class="site-nav lvl-2"><?php echo $row['categorySName']?></a>
                                                </li>

                                              
                                            </ul>

                                        </li>
										<?php }}?>
										</ul>
</div>

			

                            </li>


                            <li class="lvl1 parent megamenu"><a href="devices.php"><b>DEVICES</b><i
                                        class="anm anm-angle-down-l"></i></a>
<div class="megamenu style4">
<ul class="grid grid--uniform mmWrapper">
                                      				<?php

            $sql = "SELECT * FROM subcategories where categoryName='DEVICES'";

            $result = $connection->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
				
			?>
			
                                        <li class="grid__item lvl-1 col-md-6 col-lg-6">

                                            <ul class="subLinks">

                                                <li class="lvl-2">
                                                    <a href="#" class="site-nav lvl-2"><?php echo $row['categorySName']?></a>
                                                </li>

                                              
                                            </ul>

                                        </li>
										<?php }}?>
										</ul>
</div>

			

                            </li>


                            <li class="lvl1 parent megamenu"><a href="rebuildables.php"><b>REBUILDABLES</b><i
                                        class="anm anm-angle-down-l"></i></a>
										<div class="megamenu style4">
<ul class="grid grid--uniform mmWrapper">

                                                    				<?php

            $sql = "SELECT * FROM subcategories where categoryName='REBUILDABLES'";

            $result = $connection->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
				
			?>
			
                                        <li class="grid__item lvl-1 col-md-6 col-lg-6">

                                            <ul class="subLinks">

                                                <li class="lvl-2">
                                                    <a href="#" class="site-nav lvl-2"><?php echo $row['categorySName']?></a>
                                                </li>

                                              
                                            </ul>

                                        </li>
										<?php }}?>
										</ul>
</div>

			

                            </li>


                            <li class="lvl1 parent megamenu"><a href="tanks.php"><b>TANKS</b><i
                                        class="anm anm-angle-down-l"></i></a>
<div class="megamenu style4">
<ul class="grid grid--uniform mmWrapper">
                              		<?php

            $sql = "SELECT * FROM subcategories where categoryName='TANKS'";

            $result = $connection->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
				
			?>
			
                                        <li class="grid__item lvl-1 col-md-6 col-lg-6">

                                            <ul class="subLinks">

                                                <li class="lvl-2">
                                                    <a href="#" class="site-nav lvl-2"><?php echo $row['categorySName']?></a>
                                                </li>

                                              
                                            </ul>

                                        </li>
										<?php }}?>
										</ul>
</div>

			

                            </li>


                            <li class="lvl1 parent megamenu"><a href="accessories.php"><b>ACCESSORIES</b><i
                                        class="anm anm-angle-down-l"></i></a>
<div class="megamenu style4">
<ul class="grid grid--uniform mmWrapper">
                                    		<?php

            $sql = "SELECT * FROM subcategories where categoryName='ACCESSORIES'";

            $result = $connection->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
				
			?>
			
                                        <li class="grid__item lvl-1 col-md-6 col-lg-6">

                                            <ul class="subLinks">

                                                <li class="lvl-2">
                                                    <a href="#" class="site-nav lvl-2"><?php echo $row['categorySName']?></a>
                                                </li>

                                              
                                            </ul>

                                        </li>
										<?php }}?>
										</ul>
</div>

			

                            </li>


                            <li class="lvl1 parent megamenu"><a href="eLiquids.php"><b>E-LIQUIDS</b><i
                                        class="anm anm-angle-down-l"></i></a>
<div class="megamenu style4">
<ul class="grid grid--uniform mmWrapper">
                                                  		<?php

            $sql = "SELECT * FROM subcategories where categoryName='E-LIQUIDS'";

            $result = $connection->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
				
			?>
			
                                        <li class="grid__item lvl-1 col-md-6 col-lg-6">

                                            <ul class="subLinks">

                                                <li class="lvl-2">
                                                    <a href="#" class="site-nav lvl-2"><?php echo $row['categorySName']?></a>
                                                </li>

                                              
                                            </ul>

                                        </li>
										<?php }}?>
										</ul>
</div>

			

                            </li>


                            <li class="lvl1 parent megamenu"><a href="alternatives.php"><b>ALTERNATIVES</b><i
                                        class="anm anm-angle-down-l"></i></a>
<div class="megamenu style4">
<ul class="grid grid--uniform mmWrapper">
                                	<?php

            $sql = "SELECT * FROM subcategories where categoryName='ALTERNATIVES'";

            $result = $connection->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
				
			?>
			
                                        <li class="grid__item lvl-1 col-md-6 col-lg-6">

                                            <ul class="subLinks">

                                                <li class="lvl-2">
                                                    <a href="#" class="site-nav lvl-2"><?php echo $row['categorySName']?></a>
                                                </li>

                                              
                                            </ul>

                                        </li>
										<?php }}?>
										</ul>
</div>

			


                            </li>

                        </ul>

                    </nav>

                </div>
                <!--End Desktop Menu-->

            </div>

        </div>
        <!--End Header-->



        <!-- ############################## Mobile Menu ############################## -->
        <div class="mobile-nav-wrapper" role="navigation">

            <div class="closemobileMenu"><i class="icon anm anm-times-l pull-right"></i>Close Menu</div>

            <ul id="MobileNav" class="mobile-nav">

                <li class="lvl1"><a href="new.php"><b>NEW</b></a></li>

                <li class="lvl1 parent megamenu"><a href="brands.php">BRANDS<i class="anm anm-plus-l"></i></a>
                    <ul>
                        <li><a href="#" class="site-nav">DEVICE BRANDS<i class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="#" class="site-nav">SMOKTech</a></li>
                                <li><a href="#" class="site-nav">VOOPOO</a></li>
                                <li><a href="#" class="site-nav">Geek Vape</a></li>
                                <li><a href="#" class="site-nav">Innokin</a></li>
                                <li><a href="#" class="site-nav">Joyetech</a></li>
                                <li><a href="#" class="site-nav">Eleaf</a></li>
                                <li><a href="#" class="site-nav">Wismec</a></li>
                                <li><a href="#" class="site-nav">Suorin</a></li>
                                <li><a href="#" class="site-nav">Lost Vape</a></li>
                                <li><a href="#" class="site-nav">Rincoe</a></li>
                                <li><a href="#" class="site-nav">Aspire Vape</a></li>
                                <li><a href="#" class="site-nav">Vandy Vape</a></li>
                                <li><a href="#" class="site-nav">Vaporesso</a></li>
                                <li><a href="#" class="site-nav">Sigelei</a></li>
                                <li><a href="#" class="site-nav">SnowWolf</a></li>
                                <li><a href="#" class="site-nav">iJoy</a></li>
                                <li><a href="#" class="site-nav">HellVape</a></li>
                                <li><a href="#" class="site-nav">Uwell</a></li>
                                <li><a href="#" class="site-nav">Wotofo</a></li>
                                <li><a href="#" class="site-nav last"><b>View All Brands</b></a></li>
                            </ul>
                        </li>

                        <li><a href="#" class="site-nav">E-JUICE BRANDS<i class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="#" class="site-nav">SUA Vapors</a></li>
                                <li><a href="#" class="site-nav">Naked 100</a></li>
                                <li><a href="#" class="site-nav">Finest E-Liquid</a></li>
                                <li><a href="#" class="site-nav">Charlie’s Chalk Dust</a></li>
                                <li><a href="#" class="site-nav">Cosmic Fog</a></li>
                                <li><a href="#" class="site-nav">Vapetasia</a></li>
                                <li><a href="#" class="site-nav">Sadboy E-Liquid</a></li>
                                <li><a href="#" class="site-nav">KILO E-Liquid</a></li>
                                <li><a href="#" class="site-nav">Monster Vape Labs</a></li>
                                <li><a href="#" class="site-nav">Humble Juice Co.</a></li>
                                <li><a href="#" class="site-nav">Finest E-Liquid</a></li>
                                <li><a href="#" class="site-nav">Mad Hatter Juice</a></li>
                                <li><a href="#" class="site-nav">SKWEZED</a></li>
                                <li><a href="#" class="site-nav">Shinjin Vapor</a></li>
                                <li><a href="#" class="site-nav">TWIST E-Liquid</a></li>
                                <li><a href="#" class="site-nav">I Love Salts</a></li>
                                <li><a href="#" class="site-nav">SOLACE Vapor</a></li>
                                <li><a href="#" class="site-nav">GOST Vapor</a></li>
                                <li><a href="#" class="site-nav">BLVK</a></li>
                                <li><a href="#" class="site-nav last"><b>View All Brands</b></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>


                <li class="lvl1 parent megamenu"><a href="starterKits.php">STARTER KITS<i
                            class="anm anm-plus-l"></i></a>
                    <ul>
                        <li><a href="#" class="site-nav">View All Starter Kit<i class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="#" class="site-nav">Box Mod Kits</a></li>
                                <li><a href="#" class="site-nav">Pod Systems</a></li>
                                <li><a href="#" class="site-nav">Pod Mod Systems</a></li>
                                <li><a href="#" class="site-nav">Disposable E-Cigs</a></li>
                                <li><a href="#" class="site-nav">Vape Pen Kits</a></li>
                                <li><a href="#" class="site-nav">All-In-One Systems</a></li>
                                <li><a href="#" class="site-nav">Squonk Kits</a></li>
                                <li><a href="#" class="site-nav">High Power Kits 150W+</a></li>
                                <li><a href="#" class="site-nav last">Clearance Vape Kits</a></li>
                            </ul>
                        </li>

                        <li><a href="#" class="site-nav">Starter Kit Brands<i class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="#" class="site-nav">SMOKTech</a></li>
                                <li><a href="#" class="site-nav">Geek Vape</a></li>
                                <li><a href="#" class="site-nav">VOOPOO</a></li>
                                <li><a href="#" class="site-nav">Innokin</a></li>
                                <li><a href="#" class="site-nav">Vaporesso</a></li>
                                <li><a href="#" class="site-nav">Wismec</a></li>
                                <li><a href="#" class="site-nav">SnowWolf</a></li>
                                <li><a href="#" class="site-nav">UWELL</a></li>
                                <li><a href="#" class="site-nav">Sigelei</a></li>
                                <li><a href="#" class="site-nav last">Joyetech</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>


                <li class="lvl1 parent megamenu"><a href="devices.php">DEVICES<i class="anm anm-plus-l"></i></a>
                    <ul>
                        <li><a href="#" class="site-nav">All Box Mods<i class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="#" class="site-nav">Squonk Mods</a></li>
                                <li><a href="#" class="site-nav">High-End Mods</a></li>
                                <li><a href="#" class="site-nav">Temperature Control</a></li>
                                <li><a href="#" class="site-nav">Built-In Battery Mods</a></li>
                                <li><a href="#" class="site-nav">Light-Up LED Mods</a></li>
                                <li><a href="#" class="site-nav">Touch Screen Mods</a></li>
                                <li><a href="#" class="site-nav">DNA Chip Box Mods</a></li>
                                <li><a href="#" class="site-nav">High Power Mods 150W+</a></li>
                                <li><a href="#" class="site-nav">20700 / 21700 Battery Mods</a></li>
                                <li><a href="#" class="site-nav last">Clearance Vape Mods</a></li>
                            </ul>
                        </li>

                        <li><a href="#" class="site-nav">Device Brands<i class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="#" class="site-nav">DOVPO</a></li>
                                <li><a href="#" class="site-nav">asMODus</a></li>
                                <li><a href="#" class="site-nav">YiHi SXmini</a></li>
                                <li><a href="#" class="site-nav">EHPRO</a></li>
                                <li><a href="#" class="site-nav">iJoy</a></li>
                                <li><a href="#" class="site-nav">dotmod</a></li>
                                <li><a href="#" class="site-nav">Squid Industries</a></li>
                                <li><a href="#" class="site-nav">Smoant</a></li>
                                <li><a href="#" class="site-nav">Eleaf</a></li>
                                <li><a href="#" class="site-nav last">OBS</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>


                <li class="lvl1 parent megamenu"><a href="rebuildables.php">REBUILDABLES<i
                            class="anm anm-plus-l"></i></a>
                    <ul>
                        <li><a href="#" class="site-nav">View All Rebuildables<i class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="#" class="site-nav">RDA</a></li>
                                <li><a href="#" class="site-nav">RTA</a></li>
                                <li><a href="#" class="site-nav">RDTA</a></li>
                                <li><a href="#" class="site-nav">Postless Deck</a></li>
                                <li><a href="#" class="site-nav">Two-Post Deck</a></li>
                                <li><a href="#" class="site-nav">Squonk BF Rebuildables</a></li>
                                <li><a href="#" class="site-nav last">Clearance Rebuildables</a></li>
                            </ul>
                        </li>

                        <li><a href="#" class="site-nav">Rebuildables Brands<i class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="#" class="site-nav">HellVape</a></li>
                                <li><a href="#" class="site-nav">Geek Vape</a></li>
                                <li><a href="#" class="site-nav">Wotofo</a></li>
                                <li><a href="#" class="site-nav">Vandy Vape</a></li>
                                <li><a href="#" class="site-nav">OUMIER</a></li>
                                <li><a href="#" class="site-nav">Damn Vape</a></li>
                                <li><a href="#" class="site-nav">CoilART</a></li>
                                <li><a href="#" class="site-nav last">Augvape</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>


                <li class="lvl1 parent megamenu"><a href="tanks.php">TANKS<i class="anm anm-plus-l"></i></a>
                    <ul>
                        <li><a href="#" class="site-nav">All Sub-Ohm Tanks<i class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="#" class="site-nav">Mesh Coil Tanks</a></li>
                                <li><a href="#" class="site-nav">Temperature Control </a></li>
                                <li><a href="#" class="site-nav">High Power Tanks 150W+</a></li>
                                <li><a href="#" class="site-nav">Disposable Vape Tanks </a></li>
                                <li><a href="#" class="site-nav last">Clearance Tanks</a></li>
                            </ul>
                        </li>

                        <li><a href="#" class="site-nav">Tanks Brands<i class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="#" class="site-nav">Horizon Tech</a></li>
                                <li><a href="#" class="site-nav">FreeMaX</a></li>
                                <li><a href="#" class="site-nav">UWELL</a></li>
                                <li><a href="#" class="site-nav">Aspire</a></li>
                                <li><a href="#" class="site-nav">Innokin</a></li>
                                <li><a href="#" class="site-nav">SMOK</a></li>
                                <li><a href="#" class="site-nav">Geek Vape</a></li>
                                <li><a href="#" class="site-nav last">Sense Tech</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>


                <li class="lvl1 parent megamenu"><a href="accessories.php">ACCESSORIES<i class="anm anm-plus-l"></i></a>
                    <ul>
                        <li><a href="#" class="site-nav">View All Accessories<i class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="#" class="site-nav">Drip Tips </a></li>
                                <li><a href="#" class="site-nav">Batteries</a></li>
                                <li><a href="#" class="site-nav">Chargers</a></li>
                                <li><a href="#" class="site-nav">Replacement Parts</a></li>
                                <li><a href="#" class="site-nav">Rebuildable Materials</a></li>
                                <li><a href="#" class="site-nav">Replacement Coils</a></li>
                                <li><a href="#" class="site-nav">Rebuildable Tools</a></li>
                                <li><a href="#" class="site-nav">Replacement Pod Cartridges</a></li>
                                <li><a href="#" class="site-nav last">Nicotine Pouches</a></li>
                            </ul>
                        </li>

                        <li><a href="#" class="site-nav">Accessories Brands<i class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="#" class="site-nav">Accessories Brands</a></li>
                                <li><a href="#" class="site-nav">Coilology</a></li>
                                <li><a href="#" class="site-nav">Efest</a></li>
                                <li><a href="#" class="site-nav">Nitecore</a></li>
                                <li><a href="#" class="site-nav">Hohm Tech</a></li>
                                <li><a href="#" class="site-nav">Wotofo</a></li>
                                <li><a href="#" class="site-nav">Vandy Vape</a></li>
                                <li><a href="#" class="site-nav last">Geek Vape</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>


                <li class="lvl1 parent megamenu"><a href="eLiquids.php">E-LIQUIDS<i class="anm anm-plus-l"></i></a>
                    <ul>
                        <li><a href="#" class="site-nav">All E-Liquids<i class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="#" class="site-nav">Nicotine Salts E-Liquid </a></li>
                                <li><a href="#" class="site-nav">Combo Packs Deal </a></li>
                                <li><a href="#" class="site-nav">Fruit Flavors E-Liquid </a></li>
                                <li><a href="#" class="site-nav">Dessert Flavors E-Liquid </a></li>
                                <li><a href="#" class="site-nav">Menthol Flavors E-Liquid </a></li>
                                <li><a href="#" class="site-nav">Tobacco Flavors E-Liquid</a></li>
                                <li><a href="#" class="site-nav">Tobacco Free Nicotine </a></li>
                                <li><a href="#" class="site-nav">Clearance E-Liquids </a></li>
                                <li><a href="#" class="site-nav last">Official Retailer Brands </a></li>
                            </ul>
                        </li>

                        <li><a href="#" class="site-nav">E-Liquids Brands<i class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="#" class="site-nav">Naked 100</a></li>
                                <li><a href="#" class="site-nav">Vapetasia</a></li>
                                <li><a href="#" class="site-nav">Finest E-Liquid</a></li>
                                <li><a href="#" class="site-nav">7 Daze E-Liquid</a></li>
                                <li><a href="#" class="site-nav">pod Juice</a></li>
                                <li><a href="#" class="site-nav">Pachamama E-Liquid</a></li>
                                <li><a href="#" class="site-nav">Jam Monster Liquids</a></li>
                                <li><a href="#" class="site-nav">Sadboy E-Liquid</a></li>
                                <li><a href="#" class="site-nav">Hi-Drip E-Liquid</a></li>
                                <li><a href="#" class="site-nav last">BLVK E-Liquid</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>


                <li class="lvl1 parent megamenu"><a href="alternatives.php">ALTERNATIVES<i
                            class="anm anm-plus-l"></i></a>
                    <ul>
                        <li><a href="#" class="site-nav">All Vaporizers<i class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="#" class="site-nav"><b>eGo 510 Battery Device</b></a></li>
                                <li><a href="#" class="site-nav">Dry Herb Vaporizers </a></li>
                                <li><a href="#" class="site-nav">Concentrate Vaporizers </a></li>
                                <li><a href="#" class="site-nav">Portable Vaporizers </a></li>
                                <li><a href="#" class="site-nav">Pen Vaporizers </a></li>
                                <li><a href="#" class="site-nav">Desktop Vaporizers </a></li>
                                <li><a href="#" class="site-nav">Vaporizers Accessories </a></li>
                                <li><a href="#" class="site-nav last">Nicotine Pouches </a></li>
                            </ul>
                        </li>

                        <li><a href="#" class="site-nav">Alternatives Brands<i class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="#" class="site-nav">PAX Labs</a></li>
                                <li><a href="#" class="site-nav">YOCAN</a></li>
                                <li><a href="#" class="site-nav">CCELL</a></li>
                                <li><a href="#" class="site-nav">Leaf Buddi</a></li>
                                <li><a href="#" class="site-nav">DazzVape</a></li>
                                <li><a href="#" class="site-nav last">Storz & Bickel VOLCANO</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul>

        </div>
        <!--End Mobile Menu-->

        <div class="header-shipping-discount">

            <a href="#" title="Shop New Arrivals" class="header-discount-link"
                alt="$10 Off Orders $80+ | Code: BYE2021">
                <p style="background:#850003;"><span>$10 Off Orders $80+ | Code: BYE2021</span></p>
            </a>

        </div>



        <!--Body Content-->
        <div id="page-content">