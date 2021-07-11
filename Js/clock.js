function clock() {
    setInterval(updateClock, 1);

    function updateClock() {
        var date = new Date();
        milliseconds = date.getMilliseconds();
        seconds = date.getSeconds();
        minutes = date.getMinutes();
        hours = date.getHours();
        document.getElementById("clock").innerHTML =
            hours + ":" + minutes + ":" + seconds + ":" + milliseconds;
    }
}
