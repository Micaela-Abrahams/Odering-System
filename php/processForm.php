<?php
// Check if the Form was submitted:
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    // Variables for the data inserted by user:
    $name = $_POST['firstName'] . ' ' . $_POST['lastName']; //Name Variable
    $email = $_POST['emailAddress']; //Email Variable
    $contact = $_POST['contactNumber']; //Contact Variable
    $date = $_POST['date']; //Date Variable
    $time = $_POST['time']; //Time Variable

    // Check if checkbox for Plain Donut was checked off
    if (isset($_POST['plain-donut-checkbox'])) {
        $plainDonut = $_POST['plain-donut-checkbox']; //Variable for Plain Donut Checkbox
        $plainDonutCost = 4.00; //Cost of Plain Donut

    } else {
        echo "Error, plain donut was not selected";
    }

    // Checks if glaze is selected
    if (isset($_POST['glaze-select'])) {
        $glazeSelect = $_POST['glaze-select']; //Variable for the Glaze
        $glazeCost = 2.00; //base cost of Glaze

        /*The below states;
        *If the selected glaze is strictly equal to 'None' the the glaze cost should be 0.00,
        *Else any other selected glaze should be equal to 2.00 */
        if ($glazeSelect == 'None') {
            $glazeCost = 0.00;
        } else {
            $glazeCost = 2.00;
        }
    }

    // Check if the Toppings were selected:
    if (isset($_POST['toppings'])) {

        $toppings = $_POST['toppings']; // Toppings array for the boxes the user checked
        $max_toppings = 3; //Maximum number of toppings allowed
        $checkedCount = count($_POST['toppings']); //Array Length
        $toppingCost = 0.00; //base cost of Toppings

        // if the length of the toppings is greater than 3 echo an error, else echo the array
        if ($checkedCount > $max_toppings) {
            echo "Toppings: ERROR! You can only select a maximum of $max_toppings toppings." . '</br>';
        }

        foreach ($toppings as $topping) {
            if ($topping == 'None') {
                $toppingCost = 0.00;
                break;
            } else {
                $toppingCost = 2.00;
            }
        }
    }

    // Check if Filling was Selected:
    if (isset($_POST['filling-select'])) {
        $fillingSelect = $_POST['filling-select'];
        $fillingCost = 2.00; //Base cost for the filling

        /*The below states;
        * If the selected filling is strictly equal to 'None' then the filling cost should be 0.00,
        *Else if the selected filling is anything else the filling cost should be 2.00 */
        if ($fillingSelect == 'None') {
            $fillingCost = 0.00;
        } else {
            $fillingCost = 2.00;
        }
    }

    // Check the number of Donuts:
    if (isset($_POST['num-donuts-input'])) {
        $numberOfDonuts = $_POST['num-donuts-input']; //Variable for the number of donuts
    }

    /*
    *Price of Single Donut with all the add on's (SubTotal):
    * This function takes the cost variables as parameters
    * 1) The total of the plain donut, glaze & filling is added & stored in the variable $total.
    * 2) The total of the topping & amount of toppings selected are multiplied & stored in variable $totalToppingCost.
    * 3) The $total variable & $totalToppingCost variable are added & stored in $totalCostOfDonut 
    * This value is then returned for the function to hold this value
     */
    function calcPriceOfDonut($plainDonutCost, $glazeCost, $fillingCost,  $checkedCount, $toppingCost): float
    {
        $total = $plainDonutCost + $glazeCost + $fillingCost;
        $totalToppingCost =  $toppingCost *  $checkedCount;
        $totalCostOfDonut =  $total + $totalToppingCost;

        return number_format($totalCostOfDonut, 2);
    }
    // Subtotal variable is created to be equal to the calcPriceOfDonut Function in order to pass this to the payment.php script through the below header.
    $totalPriceOfSingleDonut =  calcPriceOfDonut($plainDonutCost, $glazeCost,  $fillingCost,  $checkedCount,  $toppingCost);


    /*
    * Total Cost of Order Subtotal x Number of Donuts:
    * This function is created to calculate the cost of the total order.
    * This function take 2 parameters, the number of donuts variable ($numberOfDonuts) & the subtotal variable ($totalPriceOfSingleDonut).
    * Variable  $orderTotal is initialized to multiply & store the multiplied calculation  between $numberOfDonuts & $orderTotal.
    * The total of this calculation is then returned & stored as the value of the getOrderTotal function
    */
    function getOrderTotal($numberOfDonuts, $totalPriceOfSingleDonut)
    {
        $orderTotal = $numberOfDonuts * $totalPriceOfSingleDonut;
        return number_format($orderTotal, 2);
    }

    // the order total variable is created to be equal to getOrderTotal function  in order to pass this to the payment.php script  through the below header.
    $donutTotalOrder = getOrderTotal($numberOfDonuts, $totalPriceOfSingleDonut);


    /*
    * Redirect User to Payment Page 
    * The below header stores all the variables needed to be used & displayed in the payment.php page.
    */
    header('Location: ./payment.php?name=' . urlencode($name) . '&email=' . urlencode($email) . '&contact=' . urlencode($contact) . '&date=' . urlencode($date) . '&time=' . urlencode($time) . '&plainDonut=' . urlencode($plainDonut) . '&glazeSelect=' . urlencode($glazeSelect) . '&toppings=' . urlencode(implode(',', $toppings)) . '&fillingSelect=' . urlencode($fillingSelect) . '&numberOfDonuts=' . urlencode($numberOfDonuts) . '&plainDonutCost=' . urlencode($plainDonutCost) . '&glazeCost=' . urldecode($glazeCost) . '&fillingCost=' . urldecode($fillingCost) . '&toppingCost=' . urldecode($toppingCost) . '&totalPriceOfSingleDonut=' . urldecode($totalPriceOfSingleDonut) . '&donutTotalOrder=' . urldecode($donutTotalOrder));
    exit();
}
