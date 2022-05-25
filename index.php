<?php `git pull`;
$servername = "sql6.freesqldatabase.com";
$username = "sql6495108";
$password = "wXDCKkRR4v";
$dbname = "sql6495108";

// Create connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

//sql to insert into table
$UserId = $_POST['email'];
$PassId = $_POST['password'];

$sql = "INSERT INTO loginform  VALUES ('$UserId', '$PassId')";
// Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// // echo "Connected successfully";

if (mysqli_query($conn, $sql)) {
    echo "<h3>data stored in a database successfully."
        . " Please browse your localhost php my admin"
        . " to view the updated data</h3>";
} else {
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}
// Close connection
mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <button onclick="window.open('index.html')" class="btn btn-primary" type="submit">Ok</button>
</body>
</html>
