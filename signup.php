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
    <title>Library Management System</title>
</head>
<body>
   <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
  <div class="container-fluid">
  <div class="navbar-header">
    <a class="navbar-brand" href="index.php">Library Management System</a>
</div>
    
   
      <ul class="nav navbar-nav navbar-right">
        <li class="nav-item">
          <a class="nav-link "  href="index.php">Admin Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">User Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="signup.php">Register</a>
        </li>
        
       
    
  </div>
</nav><br>
    <span><marquee behavior="" direction="">This is Library Management System. </marquee></span><br><br>
    <div class= "row">
        <div  class = " col-md-4" id = "side_bar">
            <h5>Library Timing</h5>
            <ul>
                <li>Opening time : 9:00 AM</li>
                <li>Closing time : 6:00 PM</li>
                <li>Sunday off</li>
            </ul>
            <h5>What we Provide</h5>
            <ul>
                <li>Full Furniture</li>
                <li>Wifi</li>
                <li>News Paper</li>
                <li>RO Water</li>
                <li>Discussion Room</li>
            </ul>
        </div>
        <div class="col-md-8" id = "main_content">
        <center><h3>User Registeration Form</h3></center>
      <form action="register.php" method="post">
      <div class="mb-3">
    <label for="name" class="form-label">Userame: </label>
    <input type="text" name ="name" class="form-control" required >
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" name = "email" class="form-control" required>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password: </label>
    <input type="password" name= "password" class="form-control" required >
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Mobile Number: </label>
    <input type="text" name= "mobile" class="form-control" required >
  </div>
  
  <div class="mb-3">
    <label for="address" class="form-label">Address: </label>
      <textarea class="form-control" name="address" id="" rows="3" col="40"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Register</button>
</form> </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>