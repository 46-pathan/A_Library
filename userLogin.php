<?php
include "connection.php";
?>
<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="style1.css">

  <title>userLogin</title>
</head>

<body>
  <nav class="navbar  navbar-expand-lg navbar-light" aria-label="navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="images/image4.png" alt="..." width="50" height="34">
      </a>


      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="books.php">Books</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="userLogin.php"><span class="glyphicon glyphicon-log-in"> User-login</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="userLogin.php"><span class="glyphicon glyphicon-log-out"> Logout</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="feedback.php">Feedback</a>
          </li>
        </ul>
      </div>


    </div>
  </nav>

  <nav class="navbar-dark top-color" aria-label="navbar">
    <div class="container-fluid">
      <div class="col-sm-2">
        <div class="box1">
          <h1>Welcome Books Lover</h1><br>
          <p class="lbl">User Login Form</p><br>
          <form name="user_login" method="POST">
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <button name="login">
              <p>Login</p>
            </button>
            <p>
              <a href="">Forgot password?</a><br>
              <a href="signUp.php">New to this website? Sign up</a>
            </p>
          </form>
        </div>
        </a>
      </div>

    </div>
  </nav>

  <div class="footer">
    <footer>
      <p>Have nice day</p>
      <p>Email: 19it.aarefapathan@adit.ac.in<br>
        Mobile: +91 8866167279</p>
    </footer>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  <?php
    if(isset($_POST['login']))
    {
      $count=0;
      $sql="SELECT * FROM `student` WHERE username='$_POST[username]' AND password='$_POST[password]';";
      $result=mysqli_query($db,$sql);
      $count=mysqli_num_rows($result);
      
      
      if($count==0){
        ?>
        <script>
          alert("The username and password doesn't match.");
        </script>
        <?php
      }else{
        ?>
        <script>
          window.location="index.php";
        </script>
        <?php
      }
     
    }
  ?>
</body>

</html>