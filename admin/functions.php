<?php
  function get_user_count(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password);
    $db = mysqli_select_db($conn, "lms");
    $user_count="";
    $query = "select count(*) as user_count from users";
    $query_run = mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($query_run)){
        $user_count = $row['user_count'];
    }
    return ($user_count);
  }
  function get_book_count(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password);
    $db = mysqli_select_db($conn, "lms");
    $book_count="";
    $query = "select count(*) as book_count from books";
    $query_run = mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($query_run)){
        $book_count = $row['book_count'];
    }
    return ($book_count);
  }
  function get_category_count(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password);
    $db = mysqli_select_db($conn, "lms");
    $cat_count="";
    $query = "select count(*) as cat_count from category";
    $query_run = mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($query_run)){
        $cat_count = $row['cat_count'];
    }
    return ($cat_count);
  }
  function get_authors_count(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password);
    $db = mysqli_select_db($conn, "lms");
    $auth_count="";
    $query = "select count(*) as auth_count from authors";
    $query_run = mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($query_run)){
        $auth_count = $row['auth_count'];
    }
    return ($auth_count);
  }
  function get_issued_book_count(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password);
    $db = mysqli_select_db($conn, "lms");
    $ib_count="";
    $query = "select count(*) as ib_count from issued_books";
    $query_run = mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($query_run)){
        $ib_count = $row['ib_count'];
    }
    return ($ib_count);
  }
  
?>