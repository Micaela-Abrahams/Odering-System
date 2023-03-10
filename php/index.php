<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="../css/style.css">
    <title>Ordering System:</title>
</head>

<body>
    <div id="form-body">
        <!-- Logo -->
        <div id="image-background">
            <!-- Donut Image Left -->
            <img src="../images/animated donut.png" alt="logo" width="100px" id="brand-logo-1">
            <h1 id="dropping-donuts-title">Dropping Donuts</h1>
            <!-- Donut Image Right -->
            <img src="../images/animated donut.png" alt="logo" width="100px" id="brand-logo-2">
        </div>
        <h3 class="order-form-title">Donut Order Form:</h3>
        <p class="requirements">Enter your details for the below required fields.</p>

        <!-- Form -->
        <form action="../php/processForm.php" method="post">

            <div id="form-inputs-box">
                <label for="firstName">First Name:</label>
                <input type="text" name="firstName" id="firstName" required placeholder="First Name">

                <label for="lastName">Last Name:</label>
                <input type="text" name="lastName" id="lastName" required placeholder="Last Name"><br>

                <label for="emailAddress">Email:</label>
                <input type="email" name="emailAddress" id="emailAddress" required placeholder="david@gmail.com"><br>

                <label for="contactNumber">Contact:</label>
                <input type="tel" name="contactNumber" id="contactNumber" required placeholder="(+27) 71 123 4567"><br>

                <label for="date">Collection Date:</label>
                <input type="date" name="date" value="date" id="date" required>

                <label for="time">Collection Time:</label>
                <input type="time" name="time" value="time" id="date" required><br>
            </div>

            <!-- Plain Donut -->
            <div class="plain-donut">

                <input type="checkbox" name="plain-donut-checkbox" id="plain-donut-checkbox" required value="Plain Donut">

                <img src="../images/plain donut.jpg" alt="plain-donut">


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
                <select name="glaze-select" id="glaze-select" required>
                    <option value="" disabled selected>Select a glaze</option>
                    <option value="None" name="None">None</option>
                    <option value="Vanilla Glaze" name="Vanilla Glaze">Vanilla Glaze - R2.00
                    <option value="Chocolate Glaze" name="Chocolate Glaze">Chocolate Glaze - R2.00
                    <option value="Strawberry Glaze" name="Strawberry Glaze">Strawberry Glaze - R2.00
                    <option value="Lemon Glaze" name="Lemon Glaze">Lemon Glaze - R2.00
                    <option value="Cinnamon Sugar Glaze" name="Cinnamon Sugar Glaze">Cinnamon Sugar Glaze - R2.00
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
                        <input type="checkbox" name="toppings[]" id="none-checkbox" value="None" onchange="toggleCheckboxes()">
                    </div>

                    <!-- Sprinkles -->
                    <div id="sprinkle-box">
                        <label for="sprinkles-label" name="sprinkles-label" id="sprinkles-label">Sprinkles:</label>
                        <input type="checkbox" name="toppings[]" id="sprinkles-checkbox" value="Sprinkles">
                    </div>

                    <!-- Chocolate Chips -->
                    <div id="chocolate-chip-box">
                        <label for="chocolate-chip-label" name="chocolate-chip-label" id="chocolate-chip-label">Chocolate Chips:</label>
                        <input type="checkbox" name="toppings[]" id="chocolate-chip-checkbox" value="Chocolate Chips">
                    </div>

                    <!-- Nuts -->
                    <div id="nuts-box">
                        <label for="nuts-label" name="nuts-label" id="nuts-label">Nuts:</label>
                        <input type="checkbox" name="toppings[]" id="nuts-checkbox" value="Nuts">
                    </div>

                </div>

                <div id="row-bottom">
                    <!-- Icing -->
                    <div id="icing-box">
                        <label for="icing-label" name="icing-label" id="icing-label">Icing Sugar:</label>
                        <input type="checkbox" name="toppings[]" id="icing-checkbox" value="Icing Sugar">
                    </div>

                    <!-- Caramel -->
                    <div id="caramel-box">
                        <label for="caramel-label" name="caramel-label" id="caramel-label">Caramel:</label>
                        <input type="checkbox" name="toppings[]" id="caramel-checkbox" value="Caramel">
                    </div>

                    <!-- Marshmallows -->
                    <div id="marshmallow-box">
                        <label for="marshmallow-label" name="marshmallow-label" id="marshmallow-label">Marshmallows:</label>
                        <input type="checkbox" name="toppings[]" id="marshmallow-checkbox" value="Marshmallows">
                    </div>

                    <!-- Coconut -->
                    <div id="coconut-box">
                        <label for="coconut-label" name="coconut-label" id="coconut-label">Coconut Flakes:</label>
                        <input type="checkbox" name="toppings[]" id="coconut-checkbox" value="Coconut Flakes">
                    </div>
                </div>
            </div>

            <!-- Select a Filing: -->
            <div id="filling-box">
                <h3 id="filling-heading">Select a Filling (Only 1 Required):</h3>
                <select name="filling-select" id="filling-select" required>
                    <option value="" disabled selected>Select a filling</option>
                    <option value="None" name="None">None</option>
                    <option value="Strawberry Jam" name="Strawberry Jam">Strawberry Jam - R2.00</option>
                    <option value="Blueberry Jam" name="Blueberry Jam">Blueberry Jam - R2.00</option>
                    <option value="Custard" name="Custard">Custard - R2.00</option>
                    <option value="Vanilla" name="Vanilla">Vanilla Filling - R2.00</option>
                    <option value="Chocolate" name="Chocolate">Chocolate Filling - R2.00</option>
                    <option value="Strawberry" name="Strawberry">Strawberry Filling - R2.00</option>
                    <option value="Nutella Spread" name="Nutella Spread">Nutella Spread - R2.00</option>
                    <option value="Marshmallow Fluff" name="Marshmallow Fluff">Marshmallow Fluff - R2.00</option>
                </select>
            </div>

            <!-- Select Amount of Donuts: -->
            <div id="number-of-donuts-box">
                <h3 id="donut-amount-heading">Enter Amount of Donuts:</h3>
                <label for="num-donuts" name="num-donuts">Number of Donuts:</label>
                <input type="number" name="num-donuts-input" id="num-donuts-input" min="1" max="10" value="1">
            </div>

            <br>

            <!-- Checkout Button -->
            <input type="submit" name="checkout" id="checkout" value="Submit Order">

        </form>

        <!-- Error message for Toppings -->
        <div id="error" style="display:none;">You can only select up to 3 options</div>
    </div>


    <!-- JavaScript -->
    <script src="js/script.js"></script>
</body>

</html>