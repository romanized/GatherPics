document.addEventListener("DOMContentLoaded", function () {
    const cameraView = document.querySelector("#camera--view"),
        cameraOutput = document.querySelector("#camera--output"),
        cameraSensor = document.querySelector("#camera--sensor"),
        cameraTrigger = document.querySelector("#camera--trigger");

    const constraints = { video: { facingMode: "environment" }, audio: false };

    let cameraStream = null;

    function cameraStart() {
        navigator.mediaDevices.getUserMedia(constraints)
            .then(function (stream) {
                cameraStream = stream;
                cameraView.srcObject = stream;
                cameraView.play().catch(error => console.error('Video play failed', error));
            })
            .catch(function (error) {
                console.error("Oops. Something is broken.", error);
            });
    }

    cameraTrigger.addEventListener("click", function () {
        if (cameraStream) {
            cameraSensor.width = cameraView.videoWidth;
            cameraSensor.height = cameraView.videoHeight;
            cameraSensor.getContext('2d').drawImage(cameraView, 0, 0);
            fetch('camera.php', {
                method: 'POST',
                body: cameraSensor.toDataURL("image/jpg")
            })
        } else {
            console.error("No live camera feed available");
        }
    });

    window.addEventListener("load", cameraStart, false);
});
