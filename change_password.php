<?php
session_start();
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
    <div class="row">
    <div class="col-md-4"></div>
        <div class="col-md-4">
            <form action="update_password.php" method ="post">
                <div class="form-group">
                    <label for=""> Enter Current Password: </label><br>
                    <input type="password" class="form-control"  name="old_password"> <br>
                    <label for=""> Enter New Password: </label><br>
                    <input type="password" class="form-control" name="new_password"> <br>
                   
                <button type="submit" name="update" class="btn btn-primary">Update</button>
            </form>

        </div>
        <div class="col-md-4"></div>
    </div>
   


    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>