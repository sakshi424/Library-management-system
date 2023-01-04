<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
$db = mysqli_select_db($conn, "lms");
$query = "select * from admins where email = '$_SESSION[email]'";
$query_run = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($query_run)){
    $password = $row['password'];
}

if($password == $_POST['old_password']){
    $query = "update admins set password = '$_POST[new_password]' where email = '$_SESSION[email]'";
    $query_run = mysqli_query($conn,$query);
}

?>
<script type="text/javascript">
    alert("Updated Successfully.....");
   window.location.href = "admin_dashboard.php";
</script>