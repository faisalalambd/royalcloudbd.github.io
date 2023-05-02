<!-- ############################## Database Connection ############################## -->
<?php include 'config.php' ?>


<!-- ############################## Header Section ############################## -->
<?php include 'header.php' ?>



<!-- ############################## Page Title ############################## -->
<div class="page section-header text-center">

    <div class="page-title">

        <div class="wrapper">

            <h1 class="page-width">Create an Account</h1>

        </div>

    </div>

</div>
<!--End Page Title-->



<div class="container">

    <div class="row">

        <div class="col-12 col-sm-12 col-md-6 col-lg-6 main-col offset-md-3">

            <div class="mb-4">

                <form method="post" action="confirm_registration.php" id="CustomerLoginForm" accept-charset="UTF-8" class="contact-form">

                    <div class="row">

                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">

                            <div class="form-group">

                                <label for="FirstName"><strong>Full name:</strong></label>

                                <input type="text" name="user_name" class="form-control" placeholder="Full Name">

                            </div>

                        </div>


                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">

                            <div class="form-group">

                                <label for="LastName"><strong>Phone Number:</strong></label>

                                <input type="text" name="phone" class="form-control phone-number" placeholder="01X-XX-XXXXXX">

                            </div>

                        </div>


                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">

                            <div class="form-group">

                                <label for="CustomerEmail"><strong>Email:</strong></label>

                                <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">

                            </div>

                        </div>


                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">

                            <div class="form-group">

                                <label for="CustomerPassword"><strong>Password:</strong></label>

                                <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">

                            </div>

                        </div>


                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">

                            <div class="form-group">

                                <label for="CustomerPassword"><strong>Confirm Password:</strong></label>

                                <input type="password" name="confirm_password" class="form-control" id="inputPassword3" placeholder="Password">

                            </div>

                        </div>


                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">

                            <div class="form-group">

                                <label for="FirstName"><strong>Address:</strong></label>

                                <input type="text" name="address" class="form-control" placeholder="Address">

                            </div>

                        </div>

                    </div>


                    <div class="row">

                        <div class="text-center col-12 col-sm-12 col-md-12 col-lg-12">

                            <input type="submit" name="submit" class="btn mb-3" value="Create">

                        </div>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>



<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>