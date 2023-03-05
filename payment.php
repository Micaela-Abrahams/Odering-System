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
            <!-- Donut Image Left -->
            <img src="images/animated donut.png" alt="logo" width="100px" id="brand-logo-1">
            <h1 id="dropping-donuts-title">Dropping Donuts</h1>
            <!-- Donut Image Right -->
            <img src="images/animated donut.png" alt="logo" width="100px" id="brand-logo-2">
        </div>

        <!-- Client Details -->
        <h4 id="customer-details-title">Customer Details:</h4>

        <!-- This container outputs the clients details -->

        <table id="customer-details-container">
            <!-- Table Row: Name -->
            <tr>
                <td>
                    <p>Name: </p>
                </td>
                <td>
                    <?php echo htmlspecialchars($_GET['name']); ?>
                </td>

            </tr>

            <!-- Table Row: Email -->
            <tr>
                <td>
                    <p>Email: </p>
                </td>
                <td>
                    <?php echo htmlspecialchars($_GET['email']); ?>
                </td>

            </tr>

            <!-- Table Row: Contact Number -->
            <tr>
                <td>
                    <p>Contact Number: </p>

                </td>

                <td>
                    <?php echo htmlspecialchars($_GET['contact']); ?>
                </td>
            </tr>

            <!-- Table Row: Collection Date -->
            <tr>
                <td>
                    <p>Collection Date: </p>

                </td>
                <td>
                    <?php echo htmlspecialchars($_GET['date']); ?>
                </td>
            </tr>

            <!-- Table Row: Collection Time -->
            <tr>
                <td>
                    <p>Collection Time: </p>
                </td>
                <td>
                    <?php echo htmlspecialchars($_GET['time']); ?>
                </td>
            </tr>
        </table>



        <!-- Order Details Below: -->
        <h4 id="order-details-title">Order Details:</h4>

        <!-- The below div has a table, this table will display the data in a more structured manner. -->
        <div class="order-details">
            <table id="table1">

                <tr>
                    <th id="item-title">Item</th>
                    <th id="cost-title">Cost</th>
                </tr>

                <!-- Table Row to display the Plain Donut -->
                <tr>
                    <td>Plain Donut:
                        <!-- This echo's out the clients stored data for Plain Donut -->
                        <?php echo htmlspecialchars($_GET['plainDonut']); ?>
                    </td>
                    <td><?php
                        /*
                        * Check if plainDonutCost is set in the query string
                        * If its set, the value is retrieved using $_GET 
                        * number_format is used to display it as currency value
                        */
                        if (isset($_GET['plainDonutCost'])) {
                            $plainDonutCost = $_GET['plainDonutCost'];
                            echo "R" . number_format($plainDonutCost, 2);
                        } ?> </td>
                </tr>

                <!-- Table Row to display the Glaze -->
                <tr>
                    <td>
                        Glaze:
                        <!-- This echo's out the clients choice of glaze stored in the processForm.php page-->
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

                <!-- Table Row to display the Toppings -->
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
                        <!-- Display the SubTotal-->
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

                <!-- Table Row to display the Subtotal -->
                <tr>
                    <td>
                        <h4>Subtotal</h4>
                    </td>

                    <td>
                        <h4>
                            <!-- Checks if the Subtotal variable is set in the string query -->
                            <!-- If its set, the value is retrieved using $_GET number_format is used to display it as currency value -->
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

            <!-- The below displays another table, which holds the data for the number of donuts & the total of the order -->
            <h4 id="order-total-title">Order Total:</h4>

            <table id="table2">
                <!-- Table Row for number of donuts -->
                <tr>
                    <td>
                        Number of Donuts:

                    </td>
                    <td>
                        <!-- This code displays the number of donuts selected by the client, this data is stored in the processForm.php page -->
                        <?php echo htmlspecialchars($_GET['numberOfDonuts']); ?>
                    </td>
                </tr>

                <!-- Table Row for Order Total -->
                <tr>
                    <td>
                        <h4>
                            Order Total
                        </h4>
                    </td>

                    <td>
                        <h4>
                            <!-- Checks if the order total variable is set in the query string -->
                            <!-- If its set, the value is retrieved using $_GET number_format is used to display it as currency value -->
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

            <h4 id="payment-title">Payment:</h4>
            <form action="successful.php" method="post" id="payment-form">

                <label for="payment_method_cash" id="payment_method_cash">
                    <input type="radio" id="payment_method_cash" name="payment_method" value="cash" <?php if ($_POST['payment_method'] == 'cash') echo 'checked="checked"'; ?>>
                    Cash
                </label> <br>
                <label for="payment_method_card" id="payment_method_card">
                    <input type="radio" id="payment_method_card" name="payment_method" value="card" <?php if ($_POST['payment_method'] == 'card') echo 'checked="checked"'; ?>>
                    Card
                </label> <br>

                <input type="submit" value="Pay" id="pay-button">
            </form>


        </div>


    </div>

</body>

</html>