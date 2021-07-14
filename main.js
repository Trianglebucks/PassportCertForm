function disableSpouse() {
  var CivilStatus = document.getElementById("CivilStatus");
  var SpouseName = document.getElementById("SpouseName");
  var SpouseBday = document.getElementById("SpouseBday");
  var SpouseNumber = document.getElementById("SpoNumber");
  CivilStatus.addEventListener("change", event => {
    if (CivilStatus.options[CivilStatus.selectedIndex].value == "Sin") {
      SpouseName.disabled = "false";
      SpouseBday.disabled = "false";
      SpouseNumber.disabled = "false";
    } else {
      SpouseName.disabled = "";
      SpouseBday.disabled = "";
      SpouseNumber.disabled = "";
    }
  });
}

disableSpouse();
