<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>fund transaction</title>
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="container mt-5">

<form action="fund.php" method="POST">
<label>First Name</label>
<input type="text" placeholder="First Name" name="firstname" required><br>
<label>Last Name</label>
<input type="text" placeholder="Last Name" name="lastname" required><br>
<label>Email</label>
<input type="email" placeholder="Email" name="email" required><br>
<label>Phone Number</label>
<input type="tel" placeholder="Enter phone number" name="phone" required><br>
<label>Amount</label>
<input type="text" placeholder="Enter Amount in Naira " name="amount" required><br>
<button>Fund!</button> 
</form> 
</div>
</body>
</html>
