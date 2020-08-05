<?php
session_start();
require_once('includes/db.php');

if(!$_GET["successfullypaid"]){
  header("Location: transfer.php");
  exit;
}else{
  $reference  =  $_GET["successfullypaid"];
}
$firstname = $_SESSION["firstname"];
$lastname = $_SESSION["lastname"];
$phone = $_SESSION["phone"];
$email = $_SESSION["email"];
$amount = $_SESSION["amount"];

$getMyWithdrableMoney = "SELECT amount FROM  ecom_customers_wallets WHERE first_name = '$firstname' && last_name = '$lastname' ";
 $getMyWithdrableMoney = mysqli_query($conn, $getMyWithdrableMoney);
 $getMyWithdrableMoney = mysqli_fetch_array($getMyWithdrableMoney);
 $getMyWithdrableMoney = $getMyWithdrableMoney['amount'];
 if($getMyWithdrableMoney){
   $remainingMoney = $getMyWithdrableMoney - $amount;
   if($remainingMoney < 200){
     echo "insufficient Account !";
   }
   else{
      $sql = " UPDATE ecom_customers_wallets SET amount = amount + '$amount', phone = '$phone' WHERE email = '$email'";
      $query = mysqli_query($conn, $sql);

      $sql2 = " UPDATE ecom_customers_wallets SET amount =  '$remainingMoney', reference = '$reference' WHERE first_name = '$firstname' && last_name = '$lastname'";
      $query2 = mysqli_query($conn, $sql2);
   }
 }

    if($query2){
     echo"<script>alert('Your payment went through!')</script>";

    //Prevent resubmission
     session_unset();
     session_destroy(); 
    }else{
        die("Sorry, something went!");
    }

  
?>

<?php 
session_start();
 $sql = "SELECT email FROM  ecom_customers_wallets WHERE first_name = '$firstname'";
 $query =  mysqli_query($conn, $sql);
 $fetch = mysqli_fetch_array($query);
 $email = $fetch['email'];

 $sql2 = "SELECT username FROM  ecom_customers WHERE email = '$email'";
 $query =  mysqli_query($conn, $sql2);
 $fetch = mysqli_fetch_array($query);
 $username = $fetch['username'];
 
  $_SESSION["username"] = $username;
 $_SESSION["email"] = $email;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Success</title>
	<link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" >
</head>
<body>
<div class="container">
<h2>Success, your payment went through. You can download your Transaction by clicking on the Download button below!</h2>
<table>
    <tr>
        <th>Transaction Summary </th>
    </tr>
    <tr>
        <td>First Name : <?php echo $firstname; ?> </td>
    </tr>
    <tr>
        <td>Last Name :  <?php echo $lastname; ?> </td>
    </tr>
    <tr>
        <td>Email Of Reciever:  <?php echo $email; ?> </td>
    </tr>
    <tr>
        <td>Phone Number of Reciever : <?php echo $phone; ?> </td>
    </tr>
    <tr>
        <td>Amount transfered :  <?php echo $amount; ?>
   </td>
    </tr>
    <tr>
        <td> Your Ballance:  <?php echo $remainingMoney; ?> </td>
    </tr>
  
    <tr>
        <td>Reference Code :  <?php echo $reference; ?> </td>
    </tr>
    <tr>
        <td><a href="#">Download Now!</a> </td>
    </tr>
    <span><a href="profile.php">Back to Profile</a></span>

</table>
</div>
</body>
</html>
