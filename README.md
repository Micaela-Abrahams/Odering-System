
# Odering-System
This is a simple web-based form for ordering donuts. 
This form allows customers to create their own donut by selecting their desired glaze, filling, toppings & the quantity.
Customers can choose up to three toppings for each donut, and the total cost is dynamically calculated based on the number of donuts ordered and the toppings selected.

The Ordering System will take the user through 3 pages:
1. Ordering Form [index.php]
2. Payment page [payment.php]
3. Successful page [successful.php]

### Order Form
The ordering form consists of multiple inputs for users to insert their name, email, contact, collection date & collection time. These fields are required, preventing users to proceed if these details were not filled in.

Further, users are required to select their add on's as per their desire. All these fields are required as well, preventing users to proceed if add on's were not selected.

Users can select the quantity of donuts, with a minimum of 1 & a maximum of 10.

Below, there is a submit button, once this button is clicked the user data in processed through $_POST array superglobal to another php file [processForm.php] where the user data will be processed/handled.

In the processForm.php, all user details are handled/processed & passed through the header, so that the handled data can be displayed on the payment.php page where users will be redirected to.

### Payment page
On the payment page, all the handled/processed data will be visibly displayed in table format, followed by the subtotal, which will be the cost of a single donut with all the add on's. The subtotal is calculated within a function from the processForm.php page.

Below the subtotal the order total is displayed in table format with the total. This total is also calculated within a function from the processForm.php page, which is the Subtotal multiplied by the quantity of donuts.

Lastly users will have to choose a payment method by selecting either the cash or card radio buttons, which is follewed by a pay button. When users click the pay button, they will be redirected to a payment successful page 
 
### Payment page
On the successful.php page a message will be displayed saying Thank You!, and that payment was successful.
A home button will also be displayed which will take users back to the order form.

## Technologies used:

* _PHP_
* _HTML_
* _CSS_
* _JAVASCRIPT_

## Authors

- [@Micaela-Abrahams](https://github.com/Micaela-Abrahams)

