
  $(document).ready(function() {
    $('#myDropdown').select2();
    $("#myDropdown").val([]).trigger('REALAVID');
	  if (selectedOption === "OE") {
         $('.message.user').css('background-color', '#d28800');
         $('.message.bot').css('background-color', 'orange');
       }
       console.log(selectedOption);
  });
  
  
var selectedValue = "";
var selectedOption = "";

let realavid= "You are an expert in the firearms industry. You respond on brand for the company Real Avid."
let oe= "You are an expert in the outdoors industry. Your specialty is knives. You respond on brand for the company Outdoor Edge."

window.onload = function() {
  var dropdown = document.getElementById("myDropdown");
  selectedValue = dropdown.value;
  dropdown.addEventListener("change", updateHeader);
  var dropdown = document.getElementById("myDropdown");
  var selectedOption = dropdown.options[dropdown.selectedIndex].value;

  if (selectedOption === "Normal") {
    selectedValue = "";
    console.log(selectedValue);		
  } else if (selectedOption === "REALAVID") {
    selectedValue = realavid;
    $('.message.user').css('background-color', '#c10000');
    $('.message.bot').css('background-color', '#f00');
    console.log(selectedOption);
  } else if (selectedOption === "OE") {
    selectedValue = oe;
    $('.message.user').css('background-color', '#d28800');
    $('.message.bot').css('background-color', 'orange');
    console.log(selectedOption);
  } 
}

function updateHeader() {
  var dropdown = document.getElementById("myDropdown");
  var selectedOption = dropdown.options[dropdown.selectedIndex].value;

  if (selectedOption === "Normal") {
    selectedValue = "";
    console.log(selectedOption);		
  } else if (selectedOption === "REALAVID") {
    selectedValue = realavid;
    $('.message.user').css('background-color', '#c10000');
    $('.message.bot').css('background-color', '#f00');
    console.log(selectedOption);
  } else if (selectedOption === "OE") {
    selectedValue = oe;
    $('.message.user').css('background-color', '#d28800');
    $('.message.bot').css('background-color', 'orange');
    console.log(selectedOption);
  } 
}
