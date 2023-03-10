// This function checks for when the "None" checkbox was selected.
function toggleCheckboxes() {

  const noneCheckbox = document.getElementById("none-checkbox");
  const sprinkles = document.getElementById("sprinkles-checkbox");
  const chocolateChips = document.getElementById("chocolate-chip-checkbox");
  const nuts = document.getElementById("nuts-checkbox");
  const icingSugar = document.getElementById("icing-checkbox");
  const caramel = document.getElementById("caramel-checkbox");
  const marshmallows = document.getElementById("marshmallow-checkbox");
  const coconutFlakes = document.getElementById("coconut-checkbox");

  // If the "None checkbox was selected, all other checkboxes will be disabled, else if the "None" checkbox is unchecked, all other checkboxes will be enabled by setting the disabled function to false"
  if (noneCheckbox.checked) {
    sprinkles.disabled = true;
    chocolateChips.disabled = true;
    nuts.disabled = true;
    icingSugar.disabled = true;
    caramel.disabled = true;
    marshmallows.disabled = true;
    coconutFlakes.disabled = true;
  } else {
    sprinkles.disabled = false;
    chocolateChips.disabled = false;
    nuts.disabled = false;
    icingSugar.disabled = false;
    caramel.disabled = false;
    marshmallows.disabled = false;
    coconutFlakes.disabled = false;
  }
  
}

//This function checks if more than 3 checkboxes have been selected for the Toppings:
function checkToppings(){
  const checkboxes = document.querySelectorAll('input[type="checkbox"][name="toppings[]"]:checked');

  // If the checkbox length is greater than 3 the below message will appear in p tag with an ID of 'error-message', Else the p tag with an ID of 'error-message' will be empty
  if (checkboxes.length > 3) {
    document.getElementById("error-message").innerText = "Please select a maximum of 3 toppings.";
  } else {
    document.getElementById("error-message").innerText = "";
  }
}









