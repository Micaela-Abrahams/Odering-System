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
    } else {
        echo "Error, plain donut was not selected";
    }

    // Checks if glaze is selected
    if (isset($_POST['glaze-select'])) {
        $glazeSelect = $_POST['glaze-select'];
    }


    // Check if the Toppings were selected:
        if(isset($_POST['']))
}







$plainDonut = $_POST['plain-donut-checkbox'];


// Echoed user data
echo "Name: $name" . '</br>';
echo "Email: $email" . '</br>';
echo "Contact Number: $contact" . '</br>';
echo "Date: $date" . '</br>';
echo "Collection Time: $time" . '</br>';
echo $plainDonut . '</br>';
echo  $glazeSelect . '</br>';
