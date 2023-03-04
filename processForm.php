<?
// Check if the Form was submitted:
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    // Variables for the data inserted by user:
    $name = $_POST['firstName'] . ' ' . $_POST['lastName'];
    $email = $_POST['emailAddress'];
    $contact = $_POST['contactNumber'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    // Echoed user data
    echo "Name: $name" . '</br>';
    echo "Email: $email" . '</br>';
    echo "Contact Number: $contact" . '</br>';
    echo "Date: $date" . '</br>';
    echo "Collection Time: $time" . '</br>';


    // Check if checkbox for Plain Donut was checked off
    $plainDonut = $_POST['plain-donut-checkbox'];

    if (isset($_POST['plain-donut-checkbox'])) {
        $plainDonut = $_POST['plain-donut-checkbox']; //Variable for Plain Donut Checkbox

        echo $plainDonut . '</br>';
    } else {
        echo "Error, plain donut was not selected";
    }

    // Checks if glaze is selected
    if (isset($_POST['glaze-select'])) {
        $glazeSelect = $_POST['glaze-select'];
        echo "Selected Glaze: $glazeSelect " . '</br>';
    }

    // Check if the Toppings were selected:
    $toppings = $_POST['toppings']; // Toppings array for the boxes the user checked
    $max_toppings = 3; //Maximum number of toppings allowed
    $checkedCount = count($_POST['toppings']); //Array Length

    if (isset($_POST['toppings'])) {

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
header('Location: payment.php?name=' . urlencode($name) . '&email=' . urlencode($email) . '&contact=' . urlencode($contact) . '&date=' . urlencode($date) . '&time=' . urlencode($time) . '&plainDonut=' . urlencode($plainDonut) . '&glazeSelect=' . urlencode($glazeSelect) . '&toppings=' . urlencode(implode(',', $toppings)) . '&fillingSelect=' . urlencode($fillingSelect) . '&numberOfDonuts=' . urlencode($numberOfDonuts));
exit();
