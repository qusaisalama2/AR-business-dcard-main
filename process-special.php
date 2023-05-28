<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve the form data
  print_r($_POST);
  $cardNumber = $_POST['card-number'];
  $expirationDate = $_POST['expiration-date'];
  $cvv = $_POST['cvv'];
  $name = $_POST['name'];
  $location = $_POST['location'];
  $facebook = $_POST['facebook'];
  $website = $_POST['website-url'];
  $video = $_POST['video-url'];
  $gmail = $_POST['gmail'];
 
    $servername = "localhost";  // Replace with your server name
    $username = "root";  // Replace with your database username
    $password = "";  // Replace with your database password
    $dbname = "yaha";  // Replace with your database name

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    
    $sql = "INSERT INTO special (namee,location,facebook,website,video,gmail)
    VALUES ('$name','$location','$facebook','$website','$video','$gmail')";

    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

    
    header('Location: success.php');
    exit();
  } else {
    
    header('Location: error.php');
    exit(); 
  }

?>
