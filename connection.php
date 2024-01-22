<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "abhishek";

$conn = mysqli_connect($servername, $username, $password, $database);

if ($conn) {
   //  echo "Connection established";

   echo "WELCOME";
} else {
   echo "Connection failed";
}
?>



<?php
$sql = "CREATE DATABASE  Abhishek";

$result = mysqli_query($conn, $sql);
if ($result) {
   //   echo "Database created successfully";
} else {
   // echo "Database not created successfully";
}

?>



<?php
$sql = "CREATE TABLE `login` (`username`Varchar(200),`password`varchar (200))";

$result = mysqli_query($conn, $sql);
if ($result) {
   //   echo "Table  created successfully";
} else {
   // echo "Table not created successfully";
}

?>





<?php
$username = $_GET['username'];
$password = $_GET['password'];


//   echo $username;
//   echo $password;

$query = "INSERT INTO login VALUES ('$username','$password')";
$data  = mysqli_query($conn, $query);

if ($data) {
   // echo " data is saved successfully";
} else {
   // echo " data is not saved successfully";
}

?>