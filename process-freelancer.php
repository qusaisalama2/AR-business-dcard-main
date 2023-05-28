<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  print_r($_POST);
  $cardNumber = $_POST['card-number'];
  $expirationDate = $_POST['expiration-date'];
  $cvv = $_POST['cvv'];
  $name = $_POST['name'];
    $linkedin = $_POST['linkedin-profile'];
    $github = $_POST['github'];
    $resume = $_POST['resume-url'];
    $website = $_POST['website-url'];
    $gmail = $_POST['gmail'];

    

  
    $servername = "localhost";  
    $username = "root";  
    $password = "";  
    $dbname = "yaha";  

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    // Insert the data into the database
    $sql = "INSERT INTO freelancer (namee,linkedin_profile,github,resume,website,gmail)
    VALUES ('$name','$linkedin','$github','$resume','$website','$gmail')";
    

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
