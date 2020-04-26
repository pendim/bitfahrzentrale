<?php
require_once('db.php');
        $db_verbindung = mysqli_connect (
            MYSQL_HOST,
            MYSQL_BENUTZER,
            MYSQL_KENNWORT,
            MYSQL_DATENBANK
        );

        if ($db_verbindung)
        {
            echo 'Verbindung erfolgreich: ';
            print_r($db_verbindung);
        }
        else
        {
            echo 'keine Verbindung möglich: ' ;
        };
?>