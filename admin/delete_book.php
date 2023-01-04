<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password);
    $db = mysqli_select_db($conn, "lms");
    $query = "delete from books  where book_no = $_GET[bn]";
    $query_run = mysqli_query($conn,$query);
   


?>
<script type="text/javascript">
    alert("Book deleted");
    window.location.href="manage_book.php";
</script>