<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confession Website</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="gif">
            <img src="Happy Happy Happy.gif" alt="Cat animation">
        </div>
        <h1 id="dateOutput"></h1>

        <div class="audio">
            <audio id="audioPlayer" controls>
                <source src="George Michael - Careless Whisper (Official Video).mp3">
            </audio>
        </div>
    </div>

    <script>
        function getQueryParam(param) {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(param);
        }

        const date = getQueryParam("date");
        const dateOutput = document.getElementById("dateOutput");

        if (date) {
            const [year, month, day] = date.split('-');
            const formattedDate = `${month}-${day}-${year}`;
            dateOutput.innerText = "SEE YOU AT " + formattedDate;
            sendEmail(date);
        } else {
            dateOutput.innerText = "No date selected.";
        }

        function sendEmail(date) {
            fetch('Notification.php?date=' + date)
                .then(response => response.text())
                .then(data => {
                    console.log(data);
                })
                .catch(error => console.error('Error:', error));
        }

        window.onload = function () {
            const audioPlayer = document.getElementById('audioPlayer');
            let audioStarted = false;

            audioPlayer.volume = 0.01;

            document.body.addEventListener('click', function () {
                if (!audioStarted) {
                    audioPlayer.muted = true;
                    audioPlayer.play().then(() => {
                        audioPlayer.muted = false;
                        audioStarted = true;
                    }).catch(error => {
                        console.log("Autoplay error:", error);
                    });
                }
            });
        };
    </script>
</body>
</html>
        