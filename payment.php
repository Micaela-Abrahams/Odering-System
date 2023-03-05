<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/payment.css">
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
            <p>Collection Date: <?php echo htmlspecialchars($_GET['date']); ?></p>
            <p>Collection Time: <?php echo htmlspecialchars($_GET['time']); ?></p>
        </div>

        <!-- Order Details Below: -->
        <h4 id="order-details-title">Order Details:</h4>

        <div class="order-details">
            <table id="table1">

                <tr>
                    <th id="item-title">Item</th>
                    <th id="cost-title">Cost</th>
                </tr>

                <tr>
                    <td>Plain Donut:
                        <!-- <?php echo htmlspecialchars($_GET['plainDonut']); ?> -->
                    </td>
                    <td><?php
                        /*
                        * Check if plainDonutCost is set in the query string
                        *If its set, the value is retrieved using $_GET 
                        *number_format is used to display it as currency value
                        */
                        if (isset($_GET['plainDonutCost'])) {
                            $plainDonutCost = $_GET['plainDonutCost'];
                            echo "R" . number_format($plainDonutCost, 2);
                        } ?> </td>
                </tr>

                <tr>
                    <td>
                        Glaze:
                        <?php echo htmlspecialchars($_GET['glazeSelect']); ?>
                    </td>
                    <td>
                        <!-- Checks if glazeCost is set in the query string -->
                        <!--If its set, the value is retrieved using $_GET number_format is used to display it as currency value  -->
                        <?
                        if (isset($_GET['glazeCost'])) {
                            $glazeCost = $_GET['glazeCost'];
                            echo "R" . number_format($glazeCost, 2);
                        }
                        ?>
                    </td>
                </tr>

                <tr>
                    <td>Toppings:
                        <ul>
                            <?php
                            $toppingCost = isset($_GET['toppingCost']) ? floatval($_GET['toppingCost']) : 0.00;
                            if (isset($_GET['toppings'])) {
                                $toppings = explode(',', $_GET['toppings']);
                            }
                            foreach ($toppings as $topping) {
                                $cost = $toppingCost > 0 ? 'R' . number_format($toppingCost, 2) : 'R0.00';
                                echo '<li>' . $topping . ' - ' .  $cost . '</li>';
                            }
                            ?>
                        </ul>
                    </td>
                    <td>
                        <!-- Display the total cost of all toppings -->
                        <?php
                        $totalToppingCost = $toppingCost * count($toppings);
                        echo "R" . number_format($totalToppingCost, 2);
                        ?>
                    </td>
                </tr>

                <tr>
                    <td>
                        Filling:
                        <?php echo htmlspecialchars($_GET['fillingSelect']); ?>
                    </td>

                    <td>
                        <!-- Check if fillingCost is set in the query string. -->
                        <!-- If its set, the value is retrieved using $_GET number_format is used to display it as currency value -->
                        <?
                        if (isset($_GET['fillingCost'])) {
                            $fillingCost = $_GET['fillingCost'];
                            echo "R" . number_format($fillingCost, 2);
                        }
                        ?>
                    </td>
                </tr>

                <tr>
                    <td>
                        <h4>Subtotal</h4>
                    </td>

                    <td>
                        <h4>
                            <?
                            if (isset($_GET['totalPriceOfSingleDonut'])) {
                                $priceOfSingleDonut = $_GET['totalPriceOfSingleDonut'];
                                echo "R" .  number_format($priceOfSingleDonut, 2);
                            }

                            ?>
                        </h4>
                    </td>
                </tr>
            </table>

            <h4 id="order-total-title">Order Total:</h4>

            <table id="table2">
                <tr>
                    <td>
                        Number of Donuts:

                    </td>
                    <td>
                        <?php echo htmlspecialchars($_GET['numberOfDonuts']); ?>
                    </td>
                </tr>

                <tr>
                    <td>
                        <h4>
                            Order Total
                        </h4>
                    </td>

                    <td>
                        <h4>
                            <?
                            if (isset($_GET['donutTotalOrder'])) {
                                $getOrderTotal = $_GET['donutTotalOrder'];
                                echo "R" . number_format($getOrderTotal, 2);
                            }
                            ?>

                        </h4>
                    </td>
                </tr>

            </table>


        </div>


    </div>

</body>

</html>