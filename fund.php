<?php

 
 //Collect form data into regular post variables

 //Sanitize form inputs from harmful data
$sanitizer = filter_var_array($_POST, FILTER_SANITIZE_STRING);
 $firstname = $sanitizer['firstname'];
 $lastname = $sanitizer['lastname'];
 $phone = $sanitizer['phone'];
 $amount = $sanitizer['amount'];
 $email = $sanitizer['email'];

 session_start();
$_SESSION['firstname'] =  $firstname;
$_SESSION['lastname'] =  $lastname;
$_SESSION['phone']  = $phone;
$_SESSION['email']  = $email;
$_SESSION['amount']  = $amount;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paystack pay page</title>
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body style="margin-top: 150px;" >
<h2>Hi, <?php echo $email; ?></h2>
<form action="" method="POST">
  <script src="https://js.paystack.co/v1/inline.js"></script>
  <button name="sub" type="button" onclick="payPageWithPaystack()"> Proceed </button> 
</form>
 
<script>
  function payPageWithPaystack(){
const api = "pk_test_765a437d32253a34e3a51082aad3dcd54d5dc00a";
    var handler = PaystackPop.setup({
      key: api,
      email: "<?php echo $email; ?>",
      amount: <?php echo $amount*100; ?>,
      currency: "NGN",
      ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
      firstname: "<?php echo". $firstname."; ?>",
      lastname: "<?php echo $lastname; ?>",
      phone: "<?php echo $phone; ?>",
      // label: "Optional string that replaces customer email"
      metadata: {
         custom_fields: [
            {
                display_name: "First Name:",
                variable_name: "firstname",
                value: "<?php echo $firstname; ?>"
            },
             {
                display_name: "Last Name:",
                variable_name: "lastname",
                value: "<?php echo $lastname; ?>"
            },
             {
                display_name: "Phone Number:",
                variable_name: "phonenumber",
                value: "<?php echo $phone; ?>"
            },
             {
                display_name: "Amount Deposite",
                variable_name: "amount",
                value: "<?php echo $amount; ?>"
            }
         ]
      },
      callback: function(response){
           const referenced = response.reference;
		  window.location.href='fund_success.php?successfullypaid='+ referenced;
      },
      onClose: function(){
          alert('window closed');
      }
    });
    handler.openIframe();
  }
</script>
</body>
</html>