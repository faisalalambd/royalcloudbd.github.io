<!-- ############################## Database Connection ############################## -->
<?php include 'config.php' ?>



<!-- #################### Header Section #################### -->
<?php include 'header.php' ?>



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

            <!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&& PHP &&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->
            <?php

            $sql = "SELECT * FROM brands order by id desc";

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



<!-- #################### Footer Section #################### -->
<?php include 'footer.php' ?>