<?php
session_start();
function get_user_issue_book_count(){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $conn = mysqli_connect($servername, $username, $password);
  $db = mysqli_select_db($conn, "lms");
  $user_issue_book_count ="";
  $query = "select count(*) as user_issue_book_count from issued_books where student_id = $_SESSION[id]";
  $query_run = mysqli_query($conn,$query);
  while($row = mysqli_fetch_assoc($query_run)){
    $user_issue_book_count =$row['user_issue_book_count'];

  }
  return ($user_issue_book_count);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <style type = "text/css">
        #side_bar{
            background-color : whitesmoke;
            padding : 50px;
            width : 500px;
            height: 450px;

        }
    </style>
    <title>User DashBoard</title>
</head>
<body>
   <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
  <div class="container-fluid">
  <div class="navbar-header">
    <a class="navbar-brand" href="index.php">Library Management System</a>
</div>
   <font style="color: white"> <span><strong>Welcome: <?php echo $_SESSION['name'];?></strong></span>
   </font>
   <font style="color: white"> <span><strong>Email: <?php echo $_SESSION['email'];?></strong></span>
   </font>
      <ul class="nav navbar-nav navbar-right">
       
          <li class="nav-item">
          <a class="nav-link"  href="view_profile.php" >View Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="edit_profile.php" >Edit Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="change_password.php">Change password</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Log out</a>
        </li>
    </ul>
        
       
   
  </div>
</nav><br>
    <span><marquee behavior="" direction="">This is Library Management System. </marquee></span><br><br>
     <div class="row" style="margin:auto">
        <div class = "col-md-3">
        <div class="card" style="width: 18rem;">
        <div class="card-header">Issued Books:</div>
  <div class="card-body">
   
    <p class="card-text">No. of total users :<?php echo get_user_issue_book_count();?></p>
    <a href="view_issued_book.php" target="_blank" class="btn btn-primary">View Issued Books</a>
  </div>
</div>

   </div>
   


    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>