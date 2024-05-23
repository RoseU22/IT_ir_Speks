window.onload = function() {
    rotateBackground();
}

function rotateBackground() {
    setInterval(function() {
        var randomRotation = Math.floor(Math.random() * 4);
        document.body.style.transform = "rotate(" + (randomRotation * 90) + "deg)";
    }, 5000);
}
