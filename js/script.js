function toggleCheckboxes() {

  const noneCheckbox = document.getElementById("none-checkbox");
  const sprinkles = document.getElementById("sprinkles-checkbox");
  const chocolateChips = document.getElementById("chocolate-chip-checkbox");
  const nuts = document.getElementById("nuts-checkbox");
  const icingSugar = document.getElementById("icing-checkbox");
  const caramel = document.getElementById("caramel-checkbox");
  const marshmallows = document.getElementById("marshmallow-checkbox");
  const coconutFlakes = document.getElementById("coconut-checkbox");

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
