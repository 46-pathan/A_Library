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
  <title>Feedback</title>
</head>

<body>
  <nav class="navbar  navbar-expand-lg navbar-light" aria-label="navbar1">
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
            <a class="nav-link" href="userLogin.php">User-login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="adminLogin.php">Admin-login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="feedback.php">Feedback</a>
          </li>
        </ul>
      </div>


    </div>
  </nav>
  <nav class="navbar-dark top-color" aria-label="navbar-2">
    <div class="container-fluid">
      <div class="box2">
      <h1>Feedback</h1><br>
        <p>If you have any suggestions or questions, please give us feedback.</p>
        <form action="" method="POST">
          <p><textarea name="feedback" id="" cols="60" rows="5" placeholder="Give your feedback here..." ></textarea><br></p>
          <button name="submit">
              <p>Submit</p>
            </button>
        </form>
        <br>
        <div class="scroll">
          <?php
          if(isset($_POST['submit']))
          {
            $sql="INSERT INTO `feedbacks` VALUES ('','$_POST[feedback]');";
            if(mysqli_query($db,$sql)){
              $q="SELECT * FROM `feedbacks` ORDER BY `id` DESC;";
              $res=mysqli_query($db,$q);
              
              echo "<table class='table table-bordered'>";  
              while ($row=mysqli_fetch_assoc($res)){
                echo "<tr>";
                echo "<td>"; echo $row['feedback']; echo "</td>";
                echo "</tr>";
              }
            }
          }
          ?>
      </div>
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

</body>

</html>