<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bduct";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

try {

    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $role = $_POST['role'];

    $sql = "INSERT INTO registration (email, pass, userrole) 
VALUES ('$email','$pass','$role')";

    if ($conn->query($sql) === TRUE) {
        echo "Registered Successful";
    } else {
        echo "Error Registering: " . $conn->error;
    }

} catch (e) {

}



$conn->close();

?>