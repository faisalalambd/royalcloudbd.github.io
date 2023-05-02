<?php
include('login.php'); // Includes Login Script
if (isset($_SESSION['login_user'])) {
  header("location: index.php"); // Redirecting To Profile Page
}
?>


<!-- ############################## Database Connection ############################## -->




<!-- ############################## Header Section ############################## -->
<?php include 'header.php' ?>



<!-- ############################## Page Title ############################## -->
<div class="page section-header text-center">

  <div class="page-title">

    <div class="wrapper">

      <h1 class="page-width">Login</h1>

    </div>

  </div>

</div>
<!--End Page Title-->



<div class="container">

  <div class="row">

    <div class="col-12 col-sm-12 col-md-6 col-lg-6 main-col offset-md-3">

      <div class="mb-4">

        <form method="post" action="#" id="CustomerLoginForm" accept-charset="UTF-8" class="contact-form">

          <div class="row">

            <div class="col-12 col-sm-12 col-md-12 col-lg-12">

              <div class="form-group">

                <label for="LastName"><strong>Phone Number:</strong></label>

                <input type="text" name="username" class="form-control phone-number" placeholder="01X-XX-XXXXXX">

              </div>

            </div>


            <div class="col-12 col-sm-12 col-md-12 col-lg-12">

              <div class="form-group">

                <label for="CustomerPassword">Password</label>

                <input type="password" value="" name="password" placeholder="" id="CustomerPassword" class="">

              </div>

            </div>

          </div>


          <div class="row">

            <div class="text-center col-12 col-sm-12 col-md-12 col-lg-12">

              <input type="submit" name="submit" class="btn mb-3" value="Sign In">

              <p class="mb-4">

                <a href="#" id="RecoverPassword">Forgot your password?</a> &nbsp; | &nbsp;

                <a href="register.php" id="customer_register_link">Create account</a>

              </p>

            </div>

          </div>

        </form>

      </div>

    </div>

  </div>

</div>



<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>