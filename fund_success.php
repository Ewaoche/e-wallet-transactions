<?php

session_start();
require_once('includes/db.php');

if(!$_GET["successfullypaid"]){
  header("Location: fund.php");
  exit;
}else{
  $reference  =  $_GET["successfullypaid"];
}
$firstname = $_SESSION["firstname"];
$lastname = $_SESSION["lastname"];
$phone = $_SESSION["phone"];
$email = $_SESSION["email"];
$amount = $_SESSION["amount"];


//Insert into database
$sql = "UPDATE  ecom_customers_wallets SET amount = amount + '$amount', reference = '$reference' WHERE email = '$email' ";
$query = mysqli_query($conn, $sql);
    if($query){
     echo"<script>alert('Your payment went through!')</script>";
    //  $last_id = $pdo->lastInsertId();
    //  echo $last_id;
     //Prevent resubmission
     session_unset();
     session_destroy(); 
    }else{
        die("Sorry, something went!");
    }

 
?>

<?php 
session_start();
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
        <td>Email :  <?php echo $email; ?> </td>
    </tr>
    <tr>
        <td>Phone : <?php echo $phone; ?> </td>
    </tr>
    <tr>
        <td>Amount transfered :  <?php echo $amount; ?> </td>
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
