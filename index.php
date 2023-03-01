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
    <div id="form-body">
        <!-- Logo -->
        <div id="image-background">
            <img src="dropping donuts.png" alt="logo" width="480px" id="brand-logo">
        </div>
        <h3 class="order-form-title">Donut Order Form:</h3>
        <p class="requirements">Enter your details for the below required fields.</p>

        <!-- Form -->
        <form action="checkout.php" method="post">

            <div id="form-inputs">
                <label for="firstName">First Name:</label>
                <input type="text" name="firstName" id="firstName" required placeholder="First Name">

                <label for="lastName">Last Name:</label>
                <input type="text" name="lastName" id="lastName" required placeholder="Last Name"><br>

                <label for="emailAddress">Email:</label>
                <input type="email" name="emailAddress" id="emailAddress" required placeholder="david@gmail.com"><br>

                <label for="contactNumber">Contact:</label>
                <input type="tel" name="contactNumber" id="contactNumber" required placeholder="(+27) 71 123 4567"><br>

                <label for="date">Date:</label>
                <input type="date" name="date" value="date" id="date" required>

                <label for="time">Time:</label>
                <input type="time" name="time" value="time" id="date" required><br>
            </div>

            <!-- Plain Donut -->
            <h3>Build a Donut</h3>
            <div class="plain-donut">

                <input type="checkbox" name="plain-donut-checkbox" id="plain-donut-checkbox">

                <img src="Plain-Doughnut.webp" alt="plain-donut">


                <div class="cardBody-1">
                    <h5 id="plain-donut-title">Plain Donut:</h5>
                    <p id="plain-donut-description">No additional flavor or sweetener is added for the lovers of plain donuts.</p>

                    <div class="plain-donut-price">
                        <p>Cost: R4.00 each</p>
                    </div>
                </div>
            </div>

            <!-- Choose a Glaze -->

            <div id="glaze-box">
                <h3 id="glaze-heading">Select A Glaze (Only 1 Required):</h3>
                <select name="glaze-select" id="glaze-select">
                    <option value="plain" name="plain">Plain (Default)</option>
                    <option value="vanilla-glaze" name="vanilla-glaze">Vanilla Glaze - R2.00
                    <option value="chocolate-glaze" name="chocolate-glaze">Chocolate Glaze - R2.00
                    <option value="strawberry-glaze" name="strawberry-glaze">Strawberry Glaze - R2.00
                    <option value="lemon-glaze" name="lemon-glaze">Lemon Glaze - R2.00
                    <option value="Cinnamon-sugar-glaze" name="Cinnamon-sugar-glaze">Cinnamon Sugar Glaze - R2.00
                    </option>
                </select>
            </div>

            <!-- Choose a Topping: -->
            <div id="toppings-box">
                <h3 id="toppings-heading">Choose Toppings (Max 3):</h3>
                <p id="topping-description">Cost: R2.00 per topping.</p>
                <div id="row-top">

                    <!-- None -->
                    <div id="none-box">
                        <label for="none-label" name="none-label" id="none-label">None:</label>
                        <input type="checkbox" name="none-checkbox" id="none-checkbox">
                    </div>

                    <!-- Sprinkles -->
                    <div id="sprinkle-box">
                        <label for="sprinkles-label" name="sprinkles-label" id="sprinkles-label">Sprinkles:</label>
                        <input type="checkbox" name="sprinkles-checkbox" id="sprinkles-checkbox">
                    </div>

                    <!-- Chocolate Chips -->
                    <div id="chocolate-chip-box">
                        <label for="chocolate-chip-label" name="chocolate-chip-label" id="chocolate-chip-label">Chocolate Chips:</label>
                        <input type="checkbox" name="chocolate-chip-checkbox" id="chocolate-chip-checkbox">
                    </div>

                    <!-- Nuts -->
                    <div id="nuts-box">
                        <label for="nuts-label" name="nuts-label" id="nuts-label">Nuts:</label>
                        <input type="checkbox" name="nuts-checkbox" id="nuts-checkbox">
                    </div>


                    <!-- Fruit -->
                    <div id="fruit-box">
                        <label for="fruit-label" name="fruit-label" id="fruit-label">Mixed Fruit:</label>
                        <input type="checkbox" name="fruit-checkbox" id="fruit-checkbox">
                    </div>
                </div>

                <div id="row-bottom">
                    <!-- Icing -->
                    <div id="icing-box">
                        <label for="icing-label" name="icing-label" id="icing-label">Icing:</label>
                        <input type="checkbox" name="icing-checkbox" id="icing-checkbox">
                    </div>

                    <!-- Caramel -->
                    <div id="caramel-box">
                        <label for="caramel-label" name="caramel-label" id="caramel-label">Caramel:</label>
                        <input type="checkbox" name="caramel-checkbox" id="caramel-checkbox">
                    </div>


                    <!-- Marshmallows -->
                    <div id="marshmallow-box">
                        <label for="marshmallow-label" name="marshmallow-label" id="marshmallow-label">Marshmallows:</label>
                        <input type="checkbox" name="marshmallow-checkbox" id="marshmallow-checkbox">
                    </div>

                    <!-- Coconut -->
                    <div id="coconut-box">
                        <label for="coconut-label" name="coconut-label" id="coconut-label">Coconut:</label>
                        <input type="checkbox" name="coconut-checkbox" id="coconut-checkbox">
                    </div>
                </div>
            </div>

            <!-- Select a Filing: -->
            <div id="filling-box">
                <h3 id="filling-heading">Select a Filling (Only 1 Required):</h3>
                <select name="filling-select" id="filling-select">
                    <option value="filling-none" name="filling-none">None</option>
                    <option value="strawberry-jam" name="strawberry-jam">Jam (Strawberry) - R2.00</option>
                    <option value="blueberry-jam" name="blueberry-jam">Jam (Blueberry) - R2.00</option>
                    <option value="raspberry-jam" name="raspberry-jam">Jam (Raspberry) - R2.00</option>
                    <option value="vanilla" name="vanilla">Vanilla - R2.00</option>
                    <option value="chocolate" name="chocolate">Chocolate - R2.00</option>
                    <option value="strawberry" name="strawberry">Strawberry - R2.00</option>
                    <option value="nutella" name="nutella">Nutella - R2.00</option>
                    <option value="marshmallow-fluff" name="marshmallow-fluff">Marshmallow Fluff - R2.00</option>
                </select>
            </div>

            <!-- Select Amount of Donuts: -->
            <div id="number-of-donuts-box">
                <h3 id="donut-amount-heading">Enter Amount of Donuts:</h3>
                <label for="num-donuts" name="num-donuts">Number of Donuts:</label>
                <input type="number" name="num-donuts-input" id="num-donuts-input" min="1" max="10" value="1">
            </div>



            <br>

            <input type="submit" name="checkout" id="checkout" value=checkout>

        </form>
    </div>


    <script src="/Javascript/script.js"></script>
</body>

</html>