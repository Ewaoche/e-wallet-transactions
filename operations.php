


<?php
session_start();
require_once('includes/db.php');

 //Collect form data into regular post variables
 if(isset($_POST['submit_btn'])){

    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $reference = 0;

    $sql = "INSERT INTO ecom_customers(email, username, password) VALUES('$email', '$username', '$password')";
    $query = mysqli_query($conn, $sql);

    $last_id = $conn->insert_id;
    
    if((int)($last_id)){
      $sql = "INSERT INTO ecom_customers_wallets(first_name, last_name, phone, email, reference	) VALUES('$first_name', '$last_name', '$phone', '$email', '$reference')";
      $query = mysqli_query($conn, $sql);

      header("Location: index.php");
    }
    else{
      header("Location: register.php");

    }

 }


 if(isset($_POST['login_btn'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

     $sql = "SELECT * FROM ecom_customers WHERE username = '$username' && password = '$password'";
     $query = mysqli_query($conn, $sql);
   
   //  print_r($result) ;
     $result = (mysqli_fetch_array($query));
    if($result){
      $_SESSION['username'] = $username;
      $_SESSION['password'] = $password;
      $_SESSION['email'] = $result['email'];
      header("Location: profile.php");
   }
    else{
      $_SESSION['status'] = 'erro occur';
      header("Location: index.php");

    }

 

 }


 

  


?>