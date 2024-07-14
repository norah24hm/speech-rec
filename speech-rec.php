<?php
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'ydb';


$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
    <title>Speech to Text</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgba(201, 202, 214, 0.397);
        }
       
    </style>
</head>
<body>
    
    <div class="container">
    <h1>Speak to the robot</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="transcript-form">
        <input type="hidden" id="transcript-input" name="transcript">
        <button id="start-btn">Start listening</button>
        <button id="stop-btn" disabled>Stop listening</button>
        <p id="transcript"></p>
    </form>
    </div>

    <script>
        const startBtn = document.getElementById('start-btn');
        const stopBtn = document.getElementById('stop-btn');
        const transcriptPara = document.getElementById('transcript');
        const transcriptInput = document.getElementById('transcript-input');
        const transcriptForm = document.getElementById('transcript-form');

        let recognition = new webkitSpeechRecognition();
        recognition.lang = 'en-US';
        recognition.maxResults = 10;

        startBtn.addEventListener('click', () => {
            recognition.start();
            startBtn.disabled = true;
            stopBtn.disabled = false;
        });

        stopBtn.addEventListener('click', () => {
            recognition.stop();
            startBtn.disabled = false;
            stopBtn.disabled = true;
        });

        recognition.onresult = event => {
            const transcript = event.results[0][0].transcript;
            transcriptPara.textContent = transcript;
            transcriptInput.value = transcript;
            transcriptForm.submit(); // Submit the form automatically
        };
    </script>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $transcript = $_POST['transcript'];
    $sql = "INSERT INTO notes (transcript) VALUES ('$transcript')";
    $conn->query($sql);
}

// Close connection
$conn->close();

exit();
?>