
<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location: signin.php"); // Redirecting To Home Page
}
?>	
<!-- ############################## Header Section ############################## -->
<?php include 'header.php' ?>


<?php
include 'config.php';
        $sql = "SELECT * FROM registrations where username='$login_session'";

        $result = $connection->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
				$name=$row['name'];
				$email=$row['email'];
				$phone=$row['username'];
				
		}}?>
<!-- ############################## Page Title ############################## -->
<div class="page section-header text-center">

    <div class="page-title">

        <div class="wrapper">

            <h1 class="page-width">Edit Account Information</h1>

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
        <div class="col-12 col-sm-12 col-md-8 col-lg-8 main-col">

            <div class="column main">

                <input name="form_key" type="hidden" value="QFwD6mzPVfQVUWtM">

                <form class="form form-edit-account" action="" method="post">

                    <fieldset class="fieldset info">

                        <legend class="legend"><span>Account Information</span></legend>
                        
                        <br>

                        <div class="field field-name-firstname required">

                            <div class="control">
							<label class="label mdl-textfield__label" for="firstname">
                                    <span>Name</span>
                                    <span class="text-red">*</span>
                                </label>
                                <input type="text" maxlength="100" id="firstname" name="firstname" value="<?php echo $name?>"
                                    title="First Name" readonly="readonly">
                                
                            </div>
                        </div>


                        <div class="field field-name-lastname required">

                            <div class="control">
								<label class="label mdl-textfield__label" for="lastname">
                                    <span>Email</span>
                                    <span class="text-red">*</span>
                                </label>
                                <input type="text" maxlength="100" id="lastname" name="email" value="<?php echo $email?>"
                                    title="Last Name" readonly="readonly">
                                
                            </div>

                        </div>


                        <div class="field email required">

                            <div class="control">
							<label class="label mdl-textfield__label" for="email">
                                    <span>Phone</span>
                                    <span class="text-red">*</span>
                                </label>
                                <input type="email" autocomplete="email" name="email" id="email"
                                    value="<?php echo $phone?>" title="text" readonly="readonly">
                                
                            </div>
                        </div>

                    </fieldset>

                    <br><br>


                    <fieldset class="fieldset password">

                        <legend class="legend"><span data-title="change-email-password">Change Password</span></legend>

                        <br>

                        <div class="field password current required">

                            <div class="control">


                                <input type="password" name="current_password" id="current-password"
                                    data-input="current-password" autocomplete="off">
                                <label class="label mdl-textfield__label" for="current-password">
                                    <span>Current Password</span>
                                    <span class="text-red">*</span>
                                </label>

                            </div>

                        </div>


                        <div class="field new password required" data-container="new-password" style="display: block;">

                            <div class="control">

                                <input type="password" name="password" id="password" data-input="new-password"
                                    data-validate="{required:true, 'validate-customer-password':true, 'password-not-equal-to-user-name':'faisalalam0195@gmail.com'}">
                                <label class="label mdl-textfield__label" for="password">
                                    <span>New Password</span>
                                    <span class="text-red">*</span>
                                </label>

                            </div>

                        </div>


                        <div class="field confirm password required" data-container="confirm-password"
                            style="display: block;">

                            <div class="control">

                                <input type="password" class="input-text mdl-textfield__input"
                                    name="password_confirmation" id="password-confirmation"
                                    data-validate="{required:true, equalTo:&quot;[data-input=new-password]&quot;}">
                                <label class="label mdl-textfield__label" for="password-confirmation">
                                    <span>Confirm New Password</span>
                                    <span class="text-red">*</span>
                                </label>

                            </div>

                        </div>

                    </fieldset>

                    <br><br>

                    <div class="actions-toolbar">

                        <div class="primary">
                            <button type="submit">
                                <span style="cursor: pointer;">Save</span>
                            </button>
                        </div>

                    </div>

                </form>

            </div>

        </div>
        <!--End Main Content-->

    </div>

</div>



<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>