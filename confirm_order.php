<?php
include 'config.php';
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
					
			}}
			$link = mysqli_connect("localhost", "root", "", "royal");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
  $c_name  = ( $_REQUEST['c_name']);
 $c_mail  = ( $_REQUEST['c_mail']);
  $c_phone  = ( $_REQUEST['c_phone']);
  $c_address  = ( $_REQUEST['c_address']);

 $status="confirm";
  $quantity  = ( $_REQUEST['quantity']);
 $total_price=$quantity*$price;
  
 
$sql = "INSERT INTO orders (c_name,c_mail,c_phone,c_address,p_name,p_price,quantity,total_price,status) VALUES ('$c_name','$c_mail','$c_phone','$c_address','$name','$price','$quantity','$total_price','$status')";
if(mysqli_query($link, $sql)){
 echo "Records added successfully.";
} else{
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


// Close connection
mysqli_close($link);
header("Location: order_confirm.php");
?>
