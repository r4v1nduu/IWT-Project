//Calculating the cost by considering user selections
document.getElementById("calc").addEventListener("click", function calcPrice() {
     var route = document.querySelector('input[name=rnumber]:checked').value;
     var boat = document.querySelector('input[name=bnumber]:checked').value;
     var seat = document.querySelector("input[name=scount]").value;

     var routeValue, boatValue, total;

          if (route == 'RT01') {routeValue = 200;}
     else if (route == 'RT02') {routeValue = 400;}
     else if (route == 'RT03') {routeValue = 600;}
     else if (route == 'RT04') {routeValue = 800;}

          if (boat == 'BT01') {boatValue = 0;}
     else if (boat == 'BT02') {boatValue = 100;}
     else if (boat == 'BT03') {boatValue = 200;}
     else if (boat == 'BT04') {boatValue = 400;}
     else if (boat == 'BT05') {boatValue = 500;}

     total = (routeValue + boatValue) * seat ;

          if (seat >= 5)  {total = total * 0.9} //10% Discount
     else if (seat >= 10) {total = total * 0.8} //20% Discount
     else if (seat >= 15) {total = total * 0.6} //40% Discount

     if (seat <= 20 && seat > 0) {
          document.getElementById('price').innerHTML = "Rs. "+(total)+".00";
     }
     else {
          document.getElementById('price').innerHTML = "";
     }
});


//Checking whether the terms and conditions are checked
function termsCheck() {
     var terms = document.querySelector('input[name=terms]');

     if (terms.checked) {
          document.getElementById("submitbutton").style.opacity = "1";
          document.getElementById("submitbutton").disabled = false;
          
     }
     else {
          document.getElementById("submitbutton").style.opacity = "0.4";
          document.getElementById("submitbutton").disabled = true;
     }
}