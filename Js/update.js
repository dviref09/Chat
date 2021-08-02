function init() {
    setInterval(update, 10);
    function update() {
        if (window.XMLHttpRequest) {
            var xmlhttp = new XMLHttpRequest();
        }
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.responseText != "none") {
                document.getElementById("messages").innerHTML =
                    xmlhttp.responseText + document.getElementById("messages");
            }
        };
        xmlhttp.open("GET", "Php/update_messages.php", true);
        xmlhttp.send();
    }
}
