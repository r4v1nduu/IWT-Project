document.getElementById("check").addEventListener("keyup", function checkpw() {
    var pass = document.querySelector('input[name=pass]');
    var cpass = document.querySelector('input[name=cpass]');

    if (pass.value == cpass.value) {
        document.getElementById('check').style.borderBottomColor = "#23C552";
    }
    else {
        document.getElementById('check').style.borderBottomColor = "#F84F31";
    }
});