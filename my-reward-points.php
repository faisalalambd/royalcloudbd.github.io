<!-- ############################## Header Section ############################## -->
<?php include 'header.php' ?>



<!-- ############################## Page Title ############################## -->
<div class="page section-header text-center">

    <div class="page-title">

        <div class="wrapper">

            <h1 class="page-width">MY REWARD POINTS</h1>

        </div>

    </div>

</div>
<!--End Page Title-->



<div class="container new-page">

    <div class="row">

        <!-- ##############################  Sidebar ##############################  -->
        <div class="col-12 col-sm-12 col-md-4 col-lg-4 sidebar filterbar">

            <div class="closeFilter d-block d-md-none d-lg-none"><i class="icon icon anm anm-times-l"></i></div>


            <div class="sidebar_tags">

                <!-- ############################## My Account ############################## -->
                <div class="sidebar_widget filterBox filter-widget">

                    <a href="my-account.php">
                        <h2><b>My Account</b></h2>
                    </a>

                </div>
                <!--End My Account-->


                <!-- ############################## Account Information ############################## -->
                <div class="sidebar_widget filterBox filter-widget">

                    <a href="account-information.php">
                        <h2><b>Account Information</b></h2>
                    </a>

                </div>
                <!--End Account Information-->


                <!-- ############################## My Reward Points ############################## -->
                <div class="sidebar_widget filterBox filter-widget">

                    <a href="my-reward-points.php">
                        <h2><b>My Reward Points</b></h2>
                    </a>

                </div>
                <!--End My Reward Points-->


                <!-- ############################## Log Out ############################## -->
                <div class="sidebar_widget filterBox filter-widget">

                    <a href="log-out.php">
                        <h2><b>Log Out</b></h2>
                    </a>

                </div>
                <!--End Log Out-->



            </div>

        </div>
        <!--End Sidebar-->



        <!-- ############################## Main Content ############################## -->
        <div class="col-12 col-sm-12 col-md-4 col-lg-4 main-col">

            <div class="block block-rewards-account-summary order-details-items">

                <div class="block-title">

                    <div class="page-title-wrapper">

                        <h2 class="page-title">

                            <legend class="legend"><span>Points Summary</span></legend>

                    </div>

                </div>


                <div class="block-content">

                    <p>You have <b>50 Reward Points</b> in your account.</p>

                </div>

            </div>

        </div>
        <!--End Main Content-->



        <!-- ############################## Main Content ############################## -->
        <div class="col-12 col-sm-12 col-md-4 col-lg-4 main-col">

            <div class="block block-rewards-account-summary order-details-items">

                <div class="page-title-wrapper">
                    <h2 class="page-title">
                        <legend class="legend"><span>Your Transactions</span></legend>
                    </h2>
                </div>


                <span class="unsubscribe">
                    To unsubscribe from points expiring notification click
                    <a href="#" alt="here">here</a>
                </span>


                <div class="block block-rewards-account-summary">

                    <div class="block-title">
                        <strong>Transactions History</strong>
                    </div>

                    <div class="block-content">

                        <div class="table-wrapper orders-recent">

                            <table class="data-table table">

                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Comment</th>
                                        <th>Points</th>
                                        <th>Created</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td data-th="ID">4097784</td>
                                        <td data-th="Comment">Give points for sign up in the store</td>
                                        <td data-th="Points"><span class="green">+50</span></td>
                                        <td data-th="Created">1 day ago</td>
                                    </tr>
                                </tbody>

                            </table>

                        </div>


                        <div class="order-products-toolbar toolbar bottom">
                            <div id="am-page-count" style="display: none">1</div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
        <!--End Main Content-->

    </div>

</div>



<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>