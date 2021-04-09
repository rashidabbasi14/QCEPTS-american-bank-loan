
<?php
    if(stristr($_SERVER['HTTP_HOST'],'localhost'))
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "security_crm";
    }else{ 
        $servername = "localhost";
        $username = "hoxodiry_pon1";
        $password = "Hello321*";
        $dbname = "hoxodiry_security_crm";
    }

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>