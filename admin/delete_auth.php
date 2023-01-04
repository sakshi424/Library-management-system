<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password);
    $db = mysqli_select_db($conn, "lms");
    $query = "delete from authors  where author_id = $_GET[aid]";
    $query_run = mysqli_query($conn,$query);
   


?>
<script type="text/javascript">
    alert("Author deleted");
    window.location.href="manage_auth.php";
</script>