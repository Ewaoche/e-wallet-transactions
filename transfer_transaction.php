<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>transfer transaction</title>
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="container mt-5">

<form action="transfer.php" method="POST">

<label>First Name</label>
<input type="text" placeholder="First Name" name="firstname" required><br>

<label>Last Name</label>
<input type="text" placeholder="Last Name" name="lastname" required><br>

<label>Email of Receiver</label>
<input type="email" placeholder="Email" name="email" required><br>

<label>Phone Number of Receiver</label>
<input type="tel" placeholder="Enter phone number" name="phone" required><br>

<label>Amount To Transfer</label>
<input type="text" placeholder="Enter  Amount to tansfer in Naira " name="amount" required><br>
<button>Transfer!</button> 
</form> 
</div>

</body>
</html>
