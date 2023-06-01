function checkpw() {
    var pass = document.querySelector('input[name=pass]');
    var cpass = document.querySelector('input[name=cpass]');

    if (pass.value == cpass.value) {
        document.getElementById('checktext').innerHTML = "Password is Matching";
        document.getElementById('checktext').style.backgroundColor = "#23C552";
        document.getElementById('checktext').style.visibility = "visible";
    }
    else {
        document.getElementById('checktext').innerHTML = "Password is Not Matching";
        document.getElementById('checktext').style.backgroundColor = " #F84F31";
        document.getElementById('checktext').style.visibility = "visible";
    }
}
