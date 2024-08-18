//Function to use Mini Navigation bar
document.getElementById("line3").addEventListener("click", function shownavbar() {
    var status = document.getElementById("mininavbar");
    
    if (status.style.display == "") {
        status.style.display = "flex";
    }
    else if (status.style.display == "none") {
        status.style.display = "flex";
    }
    else {
        status.style.display = "none";
    }
});
