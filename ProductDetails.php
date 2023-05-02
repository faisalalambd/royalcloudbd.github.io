<!-- ############################## Header Section ############################## -->
<?php include 'header.php' ?>

<?php $id=$_GET['id']?>
   
 <?php
include 'config.php';
            $sql = "SELECT * FROM products where id=$id";

            $result = $connection->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
					$name=$row['name'];
					$image=$row['image'];
					$description=$row['description'];
					$sku=$row['sku'];
			}}?>
<!--MainContent-->
<div id="MainContent" class="main-content" role="main">

   


    <div id="ProductSection-product-template" class="product-template__container prstyle2 container">

        <!--#ProductSection-product-template-->
        <div class="product-single product-single-1">

            <div class="row" style="margin-top:30px">

                <div class="col-lg-6 col-md-6 col-sm-12 col-12">

                    <div class="product-details-img product-single__photos bottom">

                        <div class="zoompro-wrap product-zoom-right pl-20">

                            <div class="zoompro-span">
                                <img class="blur-up lazyload zoompro"
                                    data-zoom-image="admin/public<?php echo $image?>" alt=""
                                    src="admin/public<?php echo $image?>" height="600" />
                            </div>

                          

                            <div class="product-buttons">
                                <a href="#" class="btn popup-video"
                                    title="View Video"><i class="icon anm anm-play-r" aria-hidden="true"></i></a>
                                <a href="#" class="btn prlightbox" title="Zoom"><i class="icon anm anm-expand-l-arrows"
                                        aria-hidden="true"></i></a>
                            </div>

                        </div>


                        


                       

                    </div>

                </div>



                <div class="col-lg-6 col-md-6 col-sm-12 col-12">

                    <div class="product-single__meta">

                        <h1 class="product-single__title"><?php echo $name?></h1>


                        <div class="prInfoRow">

                            <div class="product-stock">
                                <span class="instock "><b>In Stock</b></span>
                                <span class="outstock hide"><b>Unavailable</b></span>
                            </div>

                            <div class="product-sku">
                                SKU:
                                <span class="variant-sku"><?php echo $sku?></span>
                            </div>

                        

                        </div>

<?php

            $sql = "SELECT * FROM products where id=$id";

            $result = $connection->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
					?>
                        <p class="product-single__price product-single__price-product-template">

                            <span class="visually-hidden">Regular price</span>
<?php if($row['offer_price']>0){?>
                            <s id="ComparePrice-product-template">
                                <span class="money">BDT: <?php echo $row['price']?></span>
                            </s>

                            <span
                                class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                                <span id="ProductPrice-product-template">
                                    <span class="money">BDT: <?php echo $row['offer_price']?></span>
                                </span>
                            </span>
<?php }else{?>
<span
                                class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                                <span id="ProductPrice-product-template">
                                    <span class="money">BDT: <?php echo $row['price']?></span>
                                </span>
                            </span>
<?php }?>
                        </p>
					<?php  }}?>


                        <!--Product Tabs-->
                        <div class="tabs-listing">

                            <div class="tab-container">

                                <h3 class="acor-ttl active" rel="tab1">Product Details</h3>

				
                                <div id="tab1" class="tab-content">
				 <?php

            $sql = "SELECT * FROM products where id=$id";

            $result = $connection->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
				?>
                                    <div class="product-description rte">

                                       <?php echo $row['description']?>
                                    </div>
			<?php }}?>

                                </div>

                            </div>

                        </div>

                        <!--End Product Tabs-->


                        <form method="post" action="checkout.php?id=<?php echo $id?>" id="product_form_10508262282"
                            accept-charset="UTF-8" class="product-form product-form-product-template hidedropdown"
                            enctype="multipart/form-data">

                            <!-- Product Action -->
                            <div class="product-action clearfix">

                                <div class="product-form__item--quantity">
                                    <div class="wrapQtyBtn">
									
                                        <div class="qtyField">
                                            <a class="qtyBtn minus" href="javascript:void(0);"><i
                                                    class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                            <input type="text" id="Quantity" name="quantity" value="1"
                                                class="product-form__input qty">
                                            <a class="qtyBtn plus" href="javascript:void(0);"><i
                                                    class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>


                                <div class="shopify-payment-button" data-shopify="payment-button">
                                    
                                        <button type="submit" class="shopify-payment-button__button shopify-payment-button__button--unbranded">Buy it now</button>
                                    
                                </div>

                            </div>
                            <!-- End Product Action -->
                        </form>


                        <div class="display-table shareRow">

                            <div class="display-table-cell medium-up--one-third">
                                <div class="wishlist-btn">
                                    <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist">
                                        <i class="icon anm anm-heart-l" aria-hidden="true"></i> 
                                        <span>Add to Wishlist</span>
                                    </a>
                                </div>
                            </div>


                            <div class="display-table-cell text-right">

                                <div class="social-sharing">

                                    <a target="_blank" href="#"
                                        class="btn btn--small btn--secondary btn--share share-facebook"
                                        title="Share on Facebook">
                                        <i class="fa fa-facebook-square" aria-hidden="true"></i> <span
                                            class="share-title" aria-hidden="true">Share</span>
                                    </a>


                                    <a target="_blank" href="#"
                                        class="btn btn--small btn--secondary btn--share share-twitter"
                                        title="Tweet on Twitter">
                                        <i class="fa fa-twitter" aria-hidden="true"></i> <span class="share-title"
                                            aria-hidden="true">Tweet</span>
                                    </a>


                                    <a href="#" title="Share on google+"
                                        class="btn btn--small btn--secondary btn--share">
                                        <i class="fa fa-google-plus" aria-hidden="true"></i> <span class="share-title"
                                            aria-hidden="true">Google+</span>
                                    </a>


                                    <a target="_blank" href="#"
                                        class="btn btn--small btn--secondary btn--share share-pinterest"
                                        title="Pin on Pinterest">
                                        <i class="fa fa-pinterest" aria-hidden="true"></i> <span class="share-title"
                                            aria-hidden="true">Pin it</span>
                                    </a>


                                    <a href="#" class="btn btn--small btn--secondary btn--share share-pinterest"
                                        title="Share by Email" target="_blank">
                                        <i class="fa fa-envelope" aria-hidden="true"></i> <span class="share-title"
                                            aria-hidden="true">Email</span>
                                    </a>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
            <!--End-product-single-->

        </div>
        <!--#ProductSection-product-template-->

    </div>
    <!--MainContent-->



    <!-- ############################## Footer Section ############################## -->
    <?php include 'footer.php' ?>