window.onload = function() {
    rotateBackground();
}

function rotateBackground() {
    setInterval(function() {
        var randomRotation = Math.floor(Math.random() * 4); // Generate random number from 0 to 3 (inclusive)
        document.body.style.transform = "rotate(" + (randomRotation * 90) + "deg)";
    }, 5000); // Change rotation every 5 seconds (adjust as needed)
}
