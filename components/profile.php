<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>

<?php
session_start();

include "_navbar.php";
include "conn.php";
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "talking_space";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

if(isset($_SESSION['email'])){
$email = $_SESSION['email'];
$sql = "SELECT `uname` FROM `profile` where `email`= '$email'";
$result = mysqli_query($conn, $sql);
$numrows = mysqli_num_rows($result);
if ($numrows > 0) {
  // output data of each row
  $row = mysqli_fetch_assoc($result);
  $username = $row['uname'];
  echo '
  <!-- profile body -->
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" width="80%" style="border:none;">
<div class="card" style="max-width:400px">
  <div class="card-header">
  <h3>
  '.$username.'
  </h3>
  </div>
  <img src="images/1.jpg" class="card-img-top" alt="..." style="width: 400px;
    height: 400px;
    object-fit: cover;">
  <div class="card-body">
    <h5 class="card-title">Description</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
';
} 
else {
  echo "0 results";
}
}
else{
  echo 'Session not started';
}
// $conn->close();
?>
<!-- navbar -->
<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-md-top">
  <div class="container-fluid">
    <a class="navbar-brand fs-2 fw-bold mx-4" href="#">Talking Space</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-5">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">
          <img src="../components/images/Home_button.png" width="30px" >  
          Home
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="chat.php" >
          <img src="../components/images/chat_button.png" width="33px" >
          Chat</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="explore.php">
          <img src="../components/images/Search_button.png" width="30px" >
          Explore</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="profile.php">
          <img src="../components/images/P.png" width="30px" >
          Profile
          </a>
        </li>
      </ul>
      <a href="logout.php" class="btn" style="background-color: #fd890d;font-weight: bold;">Logout</a>
      
      
    </div>
  </div>
</nav> -->




</body>
</html>