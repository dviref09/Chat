function clock() {
    setInterval(updateClock, 10);
    
    function updateClock() {
        var date = new Date()
        second = date.getSeconds()
        document.getElementById("clock").innerHTML = date.getHours() + ":" + date.getMinutes() + ":" + date.getSeconds();
    }
}