<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <title>Ordering System:</title>
</head>

<body>
    <!-- Logo -->
    <img src="dropping donuts.png" alt="logo" width="500px">

    <!-- Form -->
    <form action="checkout.php" method="post">

        <label for="firstName">First Name:</label>
        <input type="text" name="firstName" id="firstName" required placeholder="First Name">

        <label for="lastName">Last Name:</label>
        <input type="text" name="lastName" id="lastName" required placeholder="Last Name"><br>

        <label for="emailAddress">Email:</label>
        <input type="email" name="emailAddress" id="emailAddress" required placeholder="david@gmail.com"><br>

        <label for="contactNumber">Contact:</label>
        <input type="tel" name="contactNumber" id="contactNumber" required placeholder="071 123 4567"><br>













        <input type="submit" name="checkout" id="checkout" value=checkout>

    </form>

    </form>

</body>

</html>