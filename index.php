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
    <img src="dropping donuts.png" alt="logo" width="480px" id="brand-logo">

    <h3>Contact Form:</h3>

    <!-- Form -->
    <form action="checkout.php" method="post">

        <label for="firstName">First Name:</label>
        <input type="text" name="firstName" id="firstName" required placeholder="First Name">

        <label for="lastName">Last Name:</label>
        <input type="text" name="lastName" id="lastName" required placeholder="Last Name"><br>

        <label for="emailAddress">Email:</label>
        <input type="email" name="emailAddress" id="emailAddress" required placeholder="david@gmail.com"><br>

        <label for="contactNumber">Contact:</label>
        <input type="tel" name="contactNumber" id="contactNumber" required placeholder="(+27) 71 123 4567"><br>


        <!-- Custom Made Donuts: -->
        <p>Donut List:</p>

        <div class="plain-donut">
            <input type="checkbox" name="plain-donut-checkbox" id="plain-donut-checkbox">

            <img src="Plain-Doughnut.webp" alt="plain-donut">


            <div class="cardBody-1">
                <h5 id="plain-donut-title">Plain Donut:</h5>
                <p id="plain-donut-description">No additional flavor or sweetener is added for the lovers of plain donuts.</p>

                <div class="plain-donut-price">
                    <p>Cost: R4.00</p>
                </div>
                <label for="quantity" name="quantity" id="quantity">Quantity:</label>
                <select name="plain-donut-quantity" id="plain-donut-quantity">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </div>
        </div>




        <!-- PRICE -->


        </span>

        <!-- QUANTITY SELECT -->
        <!-- <span class="form-sub-label-container" style="vertical-align: top;">
            <label class="form-sub-label" for="input_9_quantity_1000_0" aria-hidden="false" style="min-height: 13px;">Quantity</label>
            <span class="select_cont">
                <select class="form-dropdown" name="q9_bagelList[special_1000][item_0]" id="input_9_quantity_1000_0" aria-label="Select Quantity">

                </select>
            </span>
        </span>
        </div> -->



        <br>

        <input type="submit" name="checkout" id="checkout" value=checkout>

    </form>

    </form>

    <script src="/Javascript/script.js"></script>
</body>

</html>