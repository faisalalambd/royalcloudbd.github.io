<!-- ############################## Header Section ############################## -->
<?php include 'config.php';?>
<?php $id=$_GET['id']?>
<?php
include('session.php');
if(isset($_SESSION['login_user'])){
   $sql = "SELECT * FROM registrations where username='$login_session'";

        $result = $connection->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
				$C_name=$row['name'];
				$email=$row['email'];
				$phone=$row['username'];
				$address=$row['address'];
				
		}}
}else{
	header("Location: check.php?id=$id");
}
?>
<?php include 'header.php' ?>
<?php $id=$_GET['id']?>
<?php
$quantity  = ( $_REQUEST['quantity']);
?>

<?php

            $sql = "SELECT * FROM products where id=$id";

            $result = $connection->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
					$name=$row['name'];
					$image=$row['image'];
					$description=$row['description'];
					if($row['offer_price']>0){
						$price=$row['offer_price'];
					}else{
						$price=$row['price'];
					}
					
			}}?>
			
			
			
			

<!--Page Title-->
<div class="page section-header text-center">
    <div class="page-title">
        <div class="wrapper">
            <h1 class="page-width">Checkout</h1>
        </div>
    </div>
</div>
<!--End Page Title-->


<div class="container">

  

<?php $asd=""?>
    <div class="row billing-fields">

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 sm-margin-30px-bottom">

            <div class="create-ac-content bg-light-gray padding-20px-all">

                <form method="post" action="confirm_order.php?id=<?php echo $id?>">

                    <fieldset>

                        <h2 class="login-title mb-3">Billing details</h2>

                        <div class="row">

                            <div class="form-group col-md-12 col-lg-12 col-xl-12 required">
                                <label for="input-firstname">Full Name <span class="required-f">*</span></label>
                                <input name="c_name" value="<?php echo $C_name?>" id="input-firstname" type="text" >
                            </div>

                           
							
							<div class="form-group col-md-12 col-lg-12 col-xl-12">
                                <label for="input-email">email <span class="required-f"></span></label>
                                <input name="c_mail" value="<?php echo $email?>" id="input-email" type="email" >
                            </div>

                            <div class="form-group col-md-12 col-lg-12 col-xl-12 required">
                                <label for="input-telephone">Telephone <span class="required-f">*</span></label>
                                <input name="c_phone" value="<?php echo $phone?>" id="input-telephone" type="tel">
                            </div>

                            <div class="form-group col-md-12 col-lg-12 col-xl-12">
                                <label for="input-company">Address<span class="required-f">*</span></label>
                                <textarea class="form-control resize-both" rows="3" name="c_address" value="<?php echo $address?>"><?php echo $address?></textarea>
                            </div>

                        </div>

                    </fieldset>

                

            </div>

        </div>


        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <div class="your-order-payment">
                <div class="your-order">
                    <h2 class="order-title mb-4">Your Order</h2>

                    <div class="table-responsive-sm order-table">
                        <table class="bg-white table table-bordered table-hover text-center">
                            <thead>
                                <tr>
                                    <th class="text-left">Product Name</th>
                                    <th>Price</th>
                                 
                                    <th>Qty</th>
                                    <th>Total Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-left">
										<div class="form-group col-md-12 col-lg-12 col-xl-12 required">
											 <input type="text" id="fname" name="p_name" value="<?php echo $name?>"readonly><br>
										</div>
									</td>
                                    <td>
									<div class="form-group col-md-12 col-lg-12 col-xl-12 required">
											 <input type="text" id="fname" name="p_price" value="BDT : <?php echo $price?>"readonly><br>
										</div>
										</td>
                                
                                    <td>
									 <div class="form-group col-md-12 col-lg-12 col-xl-12 required">
											 <input type="text" id="fname" name="quantity" value="<?php echo $quantity?>" readonly><br>
										</div>
										</td>
										
										<?php $total_price=$price*$quantity;?>
                                    <td>
									 <div class="form-group col-md-12 col-lg-12 col-xl-12 required">
											 <input type="text" id="fname" name="price" value="<?php echo $total_price?>" readonly><br>
										</div>
									
									</td>
                                </tr>
                                
                            </tbody>
                         
                        </table>
                    </div>
                </div>

                <hr />

                <div class="your-payment">

                    <div class="payment-method">

                        <div class="order-button-payment">
                            <button class="btn" type="submit">Place order</button>
                        </div>

                    </div>

                </div>
</form>
            </div>

        </div>

    </div>

</div>



<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>