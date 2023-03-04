<?
// Check if the Form was submitted:
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    // Variables for the data inserted by user:
    $name = $_POST['firstName'] . ' ' . $_POST['lastName'];
    $email = $_POST['emailAddress'];
    $contact = $_POST['contactNumber'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    // Check if checkbox for Plain Donut was checked off
    if (isset($_POST['plain-donut-checkbox'])) {
        $plainDonut = $_POST['plain-donut-checkbox']; //Variable for Plain Donut Checkbox
        $plainDonutCost = 4.00; //Cost of Plain Donut

    } else {
        echo "Error, plain donut was not selected";
    }


    // Checks if glaze is selected
    if (isset($_POST['glaze-select'])) {
        $glazeSelect = $_POST['glaze-select'];
        $glazeCost = 2.00;

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

        // if the length of the toppings is greater than 3 echo an error, else echo the array
        if ($checkedCount > $max_toppings) {
            echo "Toppings: ERROR! You can only select a maximum of $max_toppings toppings." . '</br>';
        } else {
            foreach ($toppings as $topping) {
                echo "Toppings:  " . $topping . '</br>';
            }
        }
    }

    // Check if Filling was Selected:
    if (isset($_POST['filling-select'])) {
        $fillingSelect = $_POST['filling-select'];

        echo "Filling: $fillingSelect" . '</br>';
    }

    // Check the number of Donuts:
    if (isset($_POST['num-donuts-input'])) {
        $numberOfDonuts = $_POST['num-donuts-input'];
        echo "Number of Donuts: $numberOfDonuts" . '</br>';
    }
}
// Redirect User to Payment Page
header('Location: payment.php?name=' . urlencode($name) . '&email=' . urlencode($email) . '&contact=' . urlencode($contact) . '&date=' . urlencode($date) . '&time=' . urlencode($time) . '&plainDonut=' . urlencode($plainDonut) . '&glazeSelect=' . urlencode($glazeSelect) . '&toppings=' . urlencode(implode(',', $toppings)) . '&fillingSelect=' . urlencode($fillingSelect) . '&numberOfDonuts=' . urlencode($numberOfDonuts) . '&plainDonutCost=' . urlencode($plainDonutCost) . '&glazeCost=' . urldecode($glazeCost));
exit();
