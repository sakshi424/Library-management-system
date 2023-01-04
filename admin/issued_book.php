<?php
require('functions.php');
session_start();
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
$db = mysqli_select_db($conn, "lms");
$book_name ="";
$author ="";
$book_no ="";
$student_name="";
$query = "select issued_books.book_name,issued_books.book_author,issued_books.book_no,users.name from issued_books left join users on issued_books.student_id = users.id";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <style type = "text/css">
        #side_bar{
            background-color : whitesmoke;
            padding : 50px;
            width : 500px;
            height: 450px;

        }
    </style>
    <title>Issued Books</title>
</head>
<body>
   <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
  <div class="container-fluid">
  <div class="navbar-header">
    <a class="navbar-brand" href="admin_dashboard.php">Library Management System</a>
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
          <a class="nav-link" href="../logout.php">Log out</a>
        </li>
    </ul>
        
       
   
  </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd">
  <div class="container-fluid">
    <a class="navbar-brand" href="admin_dashboard.php">Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">
            Books
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="add_book.php">Add New Books</a></li>
            <li><a class="dropdown-item" href="manage_book.php">Manage Books</a></li>
          </ul>
            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">
            Author
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="add_auth.php">Add New Author</a></li>
            <li><a class="dropdown-item" href="manage_auth.php">Manage Author</a></li>
            </ul>
            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">
            Category
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="add_cat.php">Add New Category</a></li>
            <li><a class="dropdown-item" href="manage_cat.php">Manage Category</a></li>
            
          </ul>
          <li class="nav-item">
          <a class="nav-link"  href="issued_book.php" >Issue Book</a>
        </li>
        </li>
      </ul>
    </div>
  </div>
</nav><br>

    <span><marquee behavior="" direction="">This is Library Management System. </marquee></span><br><br><br>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
        <form action="" method="post">
      <div class="mb-3">
    <label for="name" class="form-label">Book Name: </label>
    <input type="text" name ="book_name" class="form-control" required >
  </div>
  <div class="mb-3">
    <label for="author" class="form-label"> Book Author:</label>
    <select  name ="book_author" class="form-control" required>
      <option>-Select Author-</option>
      <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $conn = mysqli_connect($servername, $username, $password);
      $db = mysqli_select_db($conn, "lms");
      $query = "select author_name from authors ";
      $query_run = mysqli_query($conn,$query);
      while($row = mysqli_fetch_assoc($query_run)){
        ?>
        <option value=""><?php echo $row['author_name'] ;?></option>
        <?php
      } 
      ?>
    </select>
  </div>
  <div class="mb-3">
    <label class="form-label">Book Number: </label>
    <input type="text" name="book_no" class="form-control" required >
  </div>
  <div class="mb-3">
    <label  class="form-label">Student ID: </label>
    <input type="text" name="student_id" class="form-control" required >
  </div>
  <div class="mb-3">
    <label  class="form-label">Issue Date: </label>
    <input type="text" name="issue_date" class="form-control" value="<?php echo date("20y-m-d"); ?>" required >
  </div>
  
  
  <button type="submit" name="issue_book" class="btn btn-primary">Issue Book</button>
</form>
        </div>
        <div class="col-md-4"></div>
    </div>
  
           
        </div>
        <div class="col-md-2"></div>
        
    </div>
   
</body>
</html>
<?php
if(isset($_POST['issue_book'])){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password);
    $db = mysqli_select_db($conn, "lms");
    $query = "insert into issued_books values(null, $_POST[book_no], '$_POST[book_name]', '$_POST[book_author]', $_POST[student_id],1, '$_POST[issue_date]')";
    $query_run = mysqli_query($conn,$query);
   
}
?>