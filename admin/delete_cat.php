<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password);
    $db = mysqli_select_db($conn, "lms");
    $query = "delete from category  where cat_id = $_GET[cid]";
    $query_run = mysqli_query($conn,$query);
   


?>
<script type="text/javascript">
    alert("Category deleted");
    window.location.href="manage_cat.php";
</script>