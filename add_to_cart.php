<?php
include 'config.php';
include('session.php');
if(isset($_SESSION['login_user'])){
   $sql = "SELECT * FROM registrations where username='$login_session'";

        $result = $connection->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
				$c_name=$row['name'];
				$email=$row['email'];
				$phone=$row['username'];
				$address=$row['address'];
				
		}}
}
$id=$_GET['id'];
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
					$image=$row['image'];
			}}
			$link = mysqli_connect("localhost", "root", "", "royal");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$status="cart";
 $quantity  = "1";
 $total_price=$quantity*$price;
  
 
$sql = "INSERT INTO orders (c_name,c_mail,c_phone,c_address,p_name,p_price,quantity,total_price,status,image) VALUES ('$c_name','$email','$phone','$address','$name','$price','$quantity','$total_price','$status','$image')";
if(mysqli_query($link, $sql)){
// echo "Records added successfully.";
} else{
   echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


// Close connection
mysqli_close($link);
header("Location: cart.php");



?>
