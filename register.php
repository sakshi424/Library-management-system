<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
$db = mysqli_select_db($conn, "lms");
$query = "insert into users values(null, '$_POST[name]', '$_POST[email]','$_POST[password]','$_POST[mobile]','$_POST[address]')";
$query_run = mysqli_query($conn,$query);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
<script type ="text/javascript">
alert("registeration Sucessfully......You may Login")
window.location.href = "index.php"
</script>