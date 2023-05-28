<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yaha";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM special";
$result = $conn->query($sql);


echo "table special";
echo "<table style='border-collapse: collapse; width: 100%;'>";
echo "<tr><th style='border: 1px solid black; padding: 8px;'>ID</th><th style='border: 1px solid black; padding: 8px;'>Name</th><th style='border: 1px solid black; padding: 8px;'>Location</th><th style='border: 1px solid black; padding: 8px;'>Facebook</th><th style='border: 1px solid black; padding: 8px;'>Website</th><th style='border: 1px solid black; padding: 8px;'>Video</th><th style='border: 1px solid black; padding: 8px;'>Gmail</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td style='border: 1px solid black; padding: 8px;'>{$row['ID']}</td>";
    echo "<td style='border: 1px solid black; padding: 8px;'>{$row['namee']}</td>";
    echo "<td style='border: 1px solid black; padding: 8px;'>{$row['location']}</td>";
    echo "<td style='border: 1px solid black; padding: 8px;'>{$row['facebook']}</td>";
    echo "<td style='border: 1px solid black; padding: 8px;'>{$row['website']}</td>";
    echo "<td style='border: 1px solid black; padding: 8px;'>{$row['video']}</td>";
    echo "<td style='border: 1px solid black; padding: 8px;'>{$row['gmail']}</td>";
    echo "</tr>";
}

echo "</table>";

echo "<br> <br> <br> <br> <br>";

$sql1 = "SELECT * FROM student";
$result1 = $conn->query($sql1);
echo "table student";
echo "<table style='border-collapse: collapse; width: 100%;'>";
echo "<tr><th style='border: 1px solid black; padding: 8px;'>ID</th><th style='border: 1px solid black; padding: 8px;'>Name</th><th style='border: 1px solid black; padding: 8px;'>Location</th><th style='border: 1px solid black; padding: 8px;'>Facebook</th><th style='border: 1px solid black; padding: 8px;'>Website</th><th style='border: 1px solid black; padding: 8px;'>Video</th><th style='border: 1px solid black; padding: 8px;'>Gmail</th></tr>";


while ($row = $result1->fetch_assoc()) {
    echo "<tr>";
    echo "<td style='border: 1px solid black; padding: 8px;'>{$row['ID']}</td>";
    echo "<td style='border: 1px solid black; padding: 8px;'>{$row['namee']}</td>";
    echo "<td style='border: 1px solid black; padding: 8px;'>{$row['linkedin_profile']}</td>";
    echo "<td style='border: 1px solid black; padding: 8px;'>{$row['linkedin_profile']}</td>";
    echo "<td style='border: 1px solid black; padding: 8px;'>{$row['gmail']}</td>";
    echo "<td style='border: 1px solid black; padding: 8px;'>{$row['resume']}</td>";
    echo "</tr>";
}
echo "</table>";


echo "<br> <br> <br> <br> <br>";
$sql1 = "SELECT * FROM freelancer";
$result1 = $conn->query($sql1);
echo "table freelancer";
echo "<table style='border-collapse: collapse; width: 100%;'>";
echo "<tr><th style='border: 1px solid black; padding: 8px;'>ID</th><th style='border: 1px solid black; padding: 8px;'>Name</th><th style='border: 1px solid black; padding: 8px;'>Location</th><th style='border: 1px solid black; padding: 8px;'>Facebook</th><th style='border: 1px solid black; padding: 8px;'>Website</th><th style='border: 1px solid black; padding: 8px;'>Video</th><th style='border: 1px solid black; padding: 8px;'>Gmail</th></tr>";


while ($row = $result1->fetch_assoc()) {
    echo "<tr>";
    echo "<td style='border: 1px solid black; padding: 8px;'>{$row['ID']}</td>";
    echo "<td style='border: 1px solid black; padding: 8px;'>{$row['namee']}</td>";
    echo "<td style='border: 1px solid black; padding: 8px;'>{$row['linkedin_profile']}</td>";
    echo "<td style='border: 1px solid black; padding: 8px;'>{$row['github']}</td>";
    echo "<td style='border: 1px solid black; padding: 8px;'>{$row['website']}</td>";
    echo "<td style='border: 1px solid black; padding: 8px;'>{$row['resume']}</td>";
    echo "<td style='border: 1px solid black; padding: 8px;'>{$row['gmail']}</td>";
    echo "</tr>";
}
echo "</table>";


echo "<br> <br> <br> <br> <br>";
$sql1 = "SELECT * FROM company";
$result1 = $conn->query($sql1);
echo "table compan";
echo "<table style='border-collapse: collapse; width: 100%;'>";
echo "<tr><th style='border: 1px solid black; padding: 8px;'>ID</th><th style='border: 1px solid black; padding: 8px;'>Name</th><th style='border: 1px solid black; padding: 8px;'>Location</th><th style='border: 1px solid black; padding: 8px;'>Facebook</th><th style='border: 1px solid black; padding: 8px;'>Gmail</th><th style='border: 1px solid black; padding: 8px;'>Video</th><th style='border: 1px solid black; padding: 8px;'>Gmail</th></tr>";


while ($row = $result1->fetch_assoc()) {
    echo "<tr>";
    echo "<td style='border: 1px solid black; padding: 8px;'>{$row['ID']}</td>";
    echo "<td style='border: 1px solid black; padding: 8px;'>{$row['namee']}</td>";
    echo "<td style='border: 1px solid black; padding: 8px;'>{$row['location']}</td>";
    echo "<td style='border: 1px solid black; padding: 8px;'>{$row['facebook']}</td>";
    echo "<td style='border: 1px solid black; padding: 8px;'>{$row['gmail']}</td>";
  
    echo "</tr>";
}
echo "</table>";


$conn->close();
?>