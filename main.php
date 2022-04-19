<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="components/stylesheet.css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <title>Talking Space</title>
</head>
<body id="body" style="height: 100%;background-image: url(components/bg_stars2.jpg);background-attachment: fixed;color:#b7b7b7;object-fit: cover">
    <?php
    include "components/conn.php";
    // include 'components/signupModal.html';
    // include 'components/loginModal.php';

    echo '
    <div class="container">
  <div class="welcome">
    <div class="pinkbox">
      <div class="signup nodisplay">
        <h1>register</h1>
        <form autocomplete="off" action="components/handle_signup.php" method="post">
          <input type="text" id="username" name="username" placeholder="Unique Identity">
          <input type="email" id="signupemail" name="signupemail" placeholder="Coordinates (Email)">
          <input type="password" id="signuppassword" name="signuppassword" placeholder="Access Key">
          <input type="password" id="signupcpassword" name="signupcpassword" placeholder="Confirm Access Key">
          <button class="button submit" type="submit">Create Account </button>
        </form>
      </div>
      <div class="signin">
        <h1>sign in</h1>
        <form class="more-padding" autocomplete="off" action="components/handle_login2.php" method="post">
          <input type="email" id="loginemail" name="loginemail" placeholder="Email">
          <input type="password" id="loginpassword" name="loginpassword" placeholder="Password">
          <div class="checkbox">
            <input type="checkbox" id="remember" /><label for="remember">Remember me</label>
          </div>

          <button class="button submit" type="submit">login</button>
        </form>
      </div>
    </div>
    <div class="leftbox">
      <h2 class="title"><span>TALKING</span><br>SPACE</h2>
      <p class="desc">Talk among the <span>stars</span></p>
      <p class="account">have an account?</p>
      <button class="button" id="signin">login</button>
    </div>
    <div class="rightbox">
      <h2 class="title"><span>TALKING</span><br>SPACE</h2>
      <p class="desc"> Talk among the<span> stars </span></p>
      <p class="account">dont have an account?</p>
      <button class="button" id="signup">sign up</button>
    </div>
  </div>
 </div>

</div>

<div >
<img class="rocket" src="components/images/rocket.png" alt="">
</div>
<!-- partial -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script><script  src="./script.js"></script>

   ' ;

//  echo '
//         <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-md-top">
//             <div class="container-fluid">
//                 <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
//                     <span class="navbar-toggler-icon"></span>
//                 </button>
//                 <div class="collapse navbar-collapse" id="navbarSupportedContent">
//                     <a href="components/signupModal.html" type="button"></a>
//                     <button class="btn my-2 mx-2 " data-bs-target="#signupModal" data-bs-toggle="modal" style="background-color: white">Signup</button>
                    
                    
//                 </div>
//             </div>
//         </nav>



//         <div style="top: 0px;right: 0px;left: 0px;bottom: 0px;height: 50vh"  >

//         <h1 class="text-center" style="position: absolute;
//         top: 47%;right: 40%;font-size: 4vw">Talking space</h1>

//         </div>
//     </div>
//     '
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script><script src="components/mainscript.js"></script>

</body>
</html>
<!-- 
<div class="container-fluid" style="height: 100%">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-md-top">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <button class="btn ml-2 " data-bs-target="#loginModal" data-bs-toggle="modal" style="background-color: white">Login</button>
                    <button class="btn mx-2 " data-bs-target="#signupModal" data-bs-toggle="modal" style="background-color: white">Signup</button>
                </div>
            </div>
        </nav> -->




        <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-5">
<li class="nav-item">
<button class="btn ml-2 " data-bs-target="#loginModal" data-bs-toggle="modal" style="background-color: white">Login</button>
</li>
<li class="nav-item">
<button class="btn mx-2 " data-bs-target="#signupModal" data-bs-toggle="modal" style="background-color: white">Signup</button>
</li>
</ul> -->
