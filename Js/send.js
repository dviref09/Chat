function send_message() {
    ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            document.querySelector('[name="text"]').innerHTML = "";
        }
        if (ajax.readyState == 4 && ajax.status != "200") {
            alert("!השליחה נכשלה");
        }
    };
    document.querySelector('[name="text"]').innerHTML = "";
    ajax.open(
        "GET",
        "Php/add_message?message=" +
            document.querySelector('[name="text"]').value,
        true
    );
    ajax.send();
}
