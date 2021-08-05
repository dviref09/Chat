function send_message() {
    xmlhttp = new XMLHttpRequest();
    document.forms[0].reset();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status != "200") {
            alert("!השליחה נכשלה");
        }
    };
    document.querySelector('[name="text"]').innerHTML = "";
    xmlhttp.open(
        "GET",
        "Php/add_message?message=" +
            document.querySelector('[name="text"]').value,
        true
    );
    xmlhttp.send();
}
