<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css//dataHandlingDisplay.css">
    <title>Check Out Page:</title>
</head>

<body>

    <div id="form-body">
        <!-- Logo -->
        <div id="image-background">
            <img src="images/animated donut.png" alt="logo" width="100px" id="brand-logo-1">
            <h1 id="dropping-donuts-title">Dropping Donuts</h1>
            <img src="images/animated donut.png" alt="logo" width="100px" id="brand-logo-2">
        </div>

        <!-- Client Details -->
        <h4 id="customer-details-title">Customer Details:</h4>

        <div id="customer-details-container">
            <p>Name: <?php echo htmlspecialchars($_GET['name']); ?></p>
            <p>Email: <?php echo htmlspecialchars($_GET['email']); ?></p>
            <p>Contact Number: <?php echo htmlspecialchars($_GET['contact']); ?></p>
        </div>

        <!-- Order Details Below: -->
        <h4 id="order-details-title">Order Details:</h4>

        <div class="order-details">
            <p>Date: <?php echo htmlspecialchars($_GET['date']); ?></p>
            <p>Collection Time: <?php echo htmlspecialchars($_GET['time']); ?></p>

            <p>Plain Donut: <?php echo htmlspecialchars($_GET['plainDonut']); ?></p>
            <p><?php
                /*
            * Check if plainDonutCost is set in the query string
            *If its set, the value is retrieved using $_GET 
            *number_format is used to display it as currency value*/
                if (isset($_GET['plainDonutCost'])) {
                    $plainDonutCost = $_GET['plainDonutCost'];
                    echo "R" . number_format($plainDonutCost, 2);
                } ?></p>


            <p>Glaze: <?php echo htmlspecialchars($_GET['glazeSelect']); ?></p>
            <p>
                <?
                if (isset($_GET['glazeCost'])) {
                    $glazeSelect = $_GET['glazeCost'];
                    echo "R" . number_format($glazeCost, 2);
                }
                ?>
            </p>




            <p>Toppings: <?php echo htmlspecialchars($_GET['toppings']); ?></p>
            <p>Filling: <?php echo htmlspecialchars($_GET['fillingSelect']); ?></p>
            <p>Number of Donuts: <?php echo htmlspecialchars($_GET['numberOfDonuts']); ?></p>

            <h5>Subtotal:</h5>
        </div>


    </div>

</body>

</html>