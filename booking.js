function calcPrice() {
    var route = document.querySelector('input[name=rnumber]:checked').value;
    var boat = document.querySelector('input[name=bnumber]:checked').value;
    var seat = document.querySelector('#scount').value;

    var routeValue, boatValue, total;

         if (route == '01') {routeValue = 200;}
    else if (route == '02') {routeValue = 400;}
    else if (route == '03') {routeValue = 600;}
    else if (route == '04') {routeValue = 800;}

         if (boat == '01') {boatValue = 0;}
    else if (boat == '02') {boatValue = 100;}
    else if (boat == '03') {boatValue = 200;}
    else if (boat == '04') {boatValue = 400;}
    else if (boat == '05') {boatValue = 500;}

    total = (routeValue + boatValue) * seat ;

         if (seat >= 5)  {total = total * 0.9} //10% Discount
    else if (seat >= 10) {total = total * 0.8} //20% Discount
    else if (seat >= 15) {total = total * 0.6} //40% Discount

    if (seat <= 20 && seat > 0) {
        document.getElementById('price').innerHTML = "Rs. "+total+".00"
    }
}