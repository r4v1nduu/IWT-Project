function chatfix() {
    document.getElementById('chat').style.display = "none";
}

function chat() {
    
    var check1 = document.getElementById('chat');
    var check2 = document.getElementById('chatbox');

    if (check1.style.display === "none") {
        check1.style.display = "block";
        check2.style.backgroundColor = "#ffa880"
    } 
    else {
        check1.style.display = "none";
        check2.style.backgroundColor = "#FF6D28"
    }

}