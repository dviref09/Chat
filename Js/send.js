function send_message() {
    ajax = new XMLHttpRequest
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == "200") {
            document.getElementById("messages").innerHTML = document.getElementById("messages").textContent + "<div><h1>hello world</h1></div>"
        }
    }
    ajax.open("GET", "Php/add_message?message=", true)
}