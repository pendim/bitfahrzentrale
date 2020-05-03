<!DOCTYPE html> 
<html>
    <head>
        <title>bitfahrzentrale</title>    
</head> 
<body>

    <?php 
        //Verbindungsaufbau
               $servername = "localhost";
               $benutzernameDB = "UserWrite";
               $passwortDB = "Hellofromyourcat";
               $datenbankName = "bitfahrzentrale";
               $conn = new mysqli($servername, $benutzernameDB, $passwortDB, $datenbankName);

        //Verbindungsprüfung
               if ($con->connect_error){
                   die("Fehler bei der Verbindung: ".$con->connect_error);
               }
               echo "Verbindung aufgebaut";

        //Formular auslesen
               $email = $_POST['email'];
               $passwort = $_POST['passwort'];
               $passwort2 = $_POST['passwort2'];
            
        //Daten in Datenbank schreiben
               $sql = "INSERT INTO users(email,passwort) VALUES ('$email','$passwort')";

                if ($conn->query($sql) === TRUE) { echo "Neuer Eintrag erfolgreich erstellt"; } 
                else { echo "Fehler: " . $sql . "<br>" . $conn->error; }

        //Verbindung schließen
               $conn->close();
    ?>     

    <form action="register.php" method="post">
            <input type="email" size="40" maxlength="250" name="email" placeholder="Email Adresse" required><br>
            <input type="password" size="40" maxlength="250" name="passwort" placeholder="Passwort" required><br>
            <input type="password" size="40" maxlength="250" name="passwort2" placeholder="Passwort wiederholen" required><br>
            <button type="submit" name="submit">Registrieren</button>
    </form>
</body>
</html>