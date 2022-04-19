<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>

  </style>
  <title>User Details</title>
</head>
<body style="color:white;background-image: url(bg_stars.jpg);background-size: 100%">

<!-- navbar -->
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid justify-content-end ">
    <h5 style="margin: 0.5vw">Check here for availability of username <img src="images/right-arrow.png" alt="=>"></h5>
    <form action="user_details.php" method="get" class="d-flex ">
      <input class="form-control me-2" type="text" name="username" id="username" placeholder="Available username" aria-label="Search" width="auto">
      <button class="btn btn-outline-success" type="submit" name="check">Search</button>      
    </form>

    
  </div>
</nav>

    <?php

    if(array_key_exists('check', $_GET)){

    include "conn.php";

    $uname = $_GET['username'];

    // checking availability of username
    $sql = "SELECT * FROM `profile` WHERE uname = '$uname'";
    $result = mysqli_query($conn, $sql);
    $numrows = mysqli_num_rows($result);

    if($numrows==0){
        // header("Location: ?Hard_Luck...Username_is_already_occupied...");
        // echo "<script type='text/JavaScript'>";
        // echo "alert('Username is available..')";
        // echo "</script>";
        // sleep(5);
        header('Location: ?Username_is_available');
        exit(); 
    }
    else{
        // alert_msg('Congratulations...username is available..');
        // echo "<script type='text/JavaScript'>";
        // echo "alert('Username already taken')";
        // echo "</script>";
        // sleep(3);
        header('Location: ?Username_is_already_taken');
        exit();    
    }
  }
    ?>

  <h1 class="text-center">Account Details</h1>
  <div class="user_form">
    <form action="handle_user_details.php" method="post" style="margin: 2vw" >
      <div class="mb-3">
        <label for="username" class="form-label"><h4>Username</h4></label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Name you want to show other humans">
      </div>
      <br>

      <!-- profile images -->
        <!-- <input type="file" name="file"> -->
      
      <br>
      <div class="mb-3">
        <label for="desc" class="form-label"><h4>Description</h4></label>
        <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
      </div>
        <button type="submit" name="submit" class="btn btn-primary " style="width:30%; margin: auto;">Submit</button>
    </form>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
</body>
</html>