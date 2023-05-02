<!-- ############################## Header Section ############################## -->

<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location: signin.php"); // Redirecting To Home Page
}
?>
<?php include 'header.php';
include 'config.php' ?>

                         







<!-- ############################## Page Title ############################## -->
<div class="page section-header text-center">

  <div class="page-title">

    <div class="wrapper">

      <h1 class="page-width">My Account</h1>

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

      <div class="block block-dashboard-info">

        <div class="block-title">
          <legend class="legend"><span>Account Information</span></legend>
        </div>

        <div class="block-content">

          <div class="box box-information">

            <strong class="box-title">
              <span>Contact Information</span>
            </strong>

            <div class="box-content">
			<?php

        $sql = "SELECT * FROM registrations where username='$login_session'";

        $result = $connection->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
        ?>

              <p>
                <?php echo $row['name']?><br>
                <?php echo $row['email']?><br>
				<?php echo $row['username']?><br>
              </p>
		<?php }}?>
            </div>

            <div class="box-actions">
              <a class="action edit" href="#" alt="Edit">
                <span>Edit</span>
              </a>
              <a href="#" class="action change-password"
                alt="Change Password">
                Change Password </a>
            </div>

          </div>

        </div>

      </div>

    </div>
    <!--End Main Content-->



    <!-- #################### Main Content #################### -->
    <div class="col-12 col-sm-12 col-md-4 col-lg-4 main-col">

      <div class="block block-dashboard-addresses">

        <div class="block-title">

          <legend class="legend"><span>Address Book</span></legend>

          <a class="action edit" href="https://www.elementvape.com/customer/address/"
            alt="Manage Addresses"><span>Manage Addresses</span></a>

        </div>

        <div class="block-content">
		<?php

        $sql = "SELECT * FROM registrations where username='$login_session'";

        $result = $connection->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
        ?>
          <div class="box box-billing-address">

            <strong class="box-title">
              <span>Default Billing Address</span>
            </strong>

            <div class="box-content">
              <address>
                <?php echo $row['address']?> </address>
            </div>

            <div class="box-actions">
              <a class="action edit" href="https://www.elementvape.com/customer/address/edit/"
                data-ui-id="default-billing-edit-link" alt="Edit Address"><span>Edit Address</span></a>
            </div>

          </div>
		<?php  }}?>
 

        </div>

      </div>

    </div>
    <!--End Main Content-->

  </div>

</div>



<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>