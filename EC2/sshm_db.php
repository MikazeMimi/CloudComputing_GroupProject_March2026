<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "sshm-db.cerwuoiqwew3.us-east-1.rds.amazonaws.com";
$username   = "admin";   // master user
$password   = "sshmdb2026";   // master password
$dbname     = "sshm_db";         // database you created

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query the students table
$sql = "SELECT id, name, course, year FROM student";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "<h2>✅ Connected successfully!</h2>";
    echo "<table border='1' cellpadding='5'>";
    echo "<tr><th>ID</th><th>Name</th><th>Course</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['course']."</td></tr>".$row['year']."</td></tr>";
    }
    echo "</table>";
} else {
    echo "❌ Query failed: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
