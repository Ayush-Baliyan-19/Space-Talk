<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar</title>
  <style>
    /* @import url("https://fonts.googleapis.com/css2?family=Supermercado+One&display=swap"); */
    @import url('https://fonts.googleapis.com/css2?family=Chewy&family=Quicksand:wght@300;400;500;600;700&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Abel&display=swap');
      * {
        font-family: Chewy;
      }
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,300&display=swap');
    .navigation{
      background-color: black;
      background-attachment = fixed;
      border-radius: auto;
      width: auto;
      position: relative;
    }

    .nav-item a{
            position:static;
            margin: 1vh 2vw;
            text-decoration: none;
            display: inline-flex;
            color: #865478;
        }

        .nav-item a:hover{
            /* font-size: larger; */
            padding-bottom: 2vh;
            color: #7697e2;
            /* text-decoration: underline; */
            border-bottom: 3px solid #5276ca;
            transition: 0.2s ease;
        }

        .nav-item a{
            padding: 0.5vh;
        }
    
  </style>
</head>
<body>
<?php

include '../components/loginModal.php';

?>
<nav class="navbar container-fluid navigation navbar-expand-lg navbar-dark sticky-md-top" style="border-bottom: 2px tomato solid;">
  <div class="container-fluid">
    <a class="navbar-brand fs-2 fw-bold mx-4" href="#">Talking Space.</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left: 10vw">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">
          <img src="../components/images/Home_button.png" height="30vh" >  
          Home
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../chat/index.html" >
          <img src="../components/images/chat_button.png" height="30vh" >
          Chat</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="explore.php">
          <img src="../components/images/Search_button.png" height="30vh" >
           Explore</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="profile.php">
          <img src="../components/images/P.png" height="30vh" >
          Profile
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="map.php"style="padding: 0vw">
          <img src="../components/images/logosolar.png" height="50vh" >
          Galactic Map
          </a>
        </li>
      </ul>
      <a href="logout.php" class="btn" style="background-color: tomato ;font-weight: bold;">Logout</a>
      
      
    </div>
  </div>
</nav>

<!-- // <button type="button" class="btn btn-primary" href="../logout.php">Logout</button>
// <button class="btn btn-success mx-2 " data-bs-target="#signupModal" data-bs-toggle="modal">Signup</button> -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
</body>
</html>


