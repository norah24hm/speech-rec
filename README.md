# Speech-rec
Simple UI used for converting voice to text, then store it in a database.
# Project requirements:
* Local web server to manipulate the database also for testing: download XAMPP.
* Code editor for html, css, php, download Notepad or VS code or any.
# Steps:
* Using XAMPP run both Apache server and MySql and click on admin next to MySql to open phpMyAdmin web page.
* Create a database.
* Create a table inside the database with 2 cloumns, id and transcript col with the type TEXT.
* Using your code editor write html, css, js codes to build and design the interface, also use php to connect to the database and to pass info from the UI to be stored in the database.



---------------------------------------------------------------------------------

# code idea:
* To use js to implement speech-to-text functionality using the Web Speech API. It allows users to speak into their device's microphone, and the spoken words are recognized and transcribed into text. 
* The Web Speech API is a JavaScript API that allows developers to access the user's microphone and perform speech recognition. It's supported by modern browsers, including Chrome, Firefox, and Edge.

The web speech API provides two main interfaces:

1. SpeechRecognition: allows developers to recognize spoken words and transcribe them into text.
2. SpeechSynthesis: allows developers to synthesize text into spoken words.
In this code, we're using the SpeechRecognition interface to recognize spoken words and transcribe them into text.
# The UI for recognizing the speech and converting it to a text:
![speech-rec](https://github.com/user-attachments/assets/5a20c481-4645-4667-bbf6-aaf831521edd)
# The text stored in the database:
![db](https://github.com/user-attachments/assets/276ed541-89b1-4c48-861c-a90d240e6f5d)

-----------------------------------------------------------------------------------



