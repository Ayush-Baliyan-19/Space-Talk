<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <script>
       function zoom(event) {
  event.preventDefault();

  scale += event.deltaY * -0.01;

  // Restrict scale
  scale = Math.min(Math.max(.125, scale), 4);

  // Apply scale transform
  el.style.transform = `scale(${scale})`;
}

let scale = 1;
const el = document.querySelector('body');
el.onwheel = zoom;
    </script> -->
    <!-- <link rel="stylesheet" href="map_style.css"> -->
    <style>
      /* @import url('https://fonts.googleapis.com/css2?family=Chewy&family=Quicksand:wght@300;400;500;600;700&display=swap'); */
      @import url('https://fonts.googleapis.com/css2?family=Abel&display=swap');
      /* @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap'); */
      /* @import url("https://fonts.googleapis.com/css2?family=Supermercado+One&display=swap"); */
      *{
        font-family: "Abel";
      }
      img {
        display: inline-block;
      }
      .planet {
        /* top:50%;
            left: 50%; */
        position: absolute;
      }
      /* .offcanvas{
           background: transparent;
        } */
      #body {
        height: 90vh;
        background-image: url("../components/images/bg_stars.jpg");
        background-size: cover;
        align-items: center;
        justify-content: center;
        /* overflow: scroll; */
        overflow: hidden;
        /* overflow-x: scroll; */
        /* scroll-behavior: smooth; */
        display: block;
        box-sizing: border-box;
      }
      ::-webkit-scrollbar {
        width: 10px;
        background-color: black;
      }

      ::-webkit-scrollbar-corner {
        background: black;
      }
      ::-webkit-scrollbar-thumb {
        width: 5px;
        background: linear-gradient(45deg, transparent, #0678e4);
        /* background: transparent; */
        border-radius: 6px;
      }
      ::-webkit-scrollbar-thumb:hover {
        background: linear-gradient(45deg, transparent, tomato);
      }.controls{
        display: flex;
        position: absolute;
        right: 10px;
        bottom: 10px;
      }

      .zoom {
        border:2px solid #7c2c47;
        padding: 0.5vw;
        margin: 0.3vw;
        color: #e0a8bb;
        background-color: #7c2c47;
        font-weight: bold;
        border-radius: 10px;
        /* position: fixed; */
      }

      .zoom:hover{
        background-color: #854f85;
      }

      .map {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: row;
        height: 100%;
        font-family: "Quicksand";
        /* top: 50%;
        left: 50%; */
        text-align: center;
        /* animation: zoom 10s infinite linear; */
      }
      /* @keyframes zoom{
       0%{ transform: scale(0.35,0.35);}
       50%{transform: scale(0.35,0.35);}
       100%{transform: scale(0.35,0.35);}
    } */
      #Sun img {
        /* position:fixed; */
        /* position:    ; */
        /* top: 45.5%;
    left: 44%; */
        width: 10vw;
      }
      #Mercury {
        text-decoration: none;
        animation: move-mercury 10s infinite linear;
      }
      #Mercury img {
        width: 1vw;
        padding: 0.5vw;
        border: 1px white solid;
        border-radius: 50%;
        /* transform: translatex() */
      }
      #Mercury p {
        font-size: small;
        font-family: poppins;
        margin: 0;
        color: wheat;
        width: 2vw;
      }
      @keyframes move-mercury {
        0% {
          transform: rotate(0deg) translateX(6vw) rotate(0deg);
        }
        100% {
          transform: rotate(360deg) translateX(6vw) rotate(-360deg);
        }
      }

      #Venus {
        animation: move-venus 18.5s infinite linear;
        text-decoration: none;
      }
      #Venus img {
        width: 1.5vw;
        padding: 0.5vw;
        border: 1px white solid;
        border-radius: 50%;
      }
      #Venus p {
        font-size: small;
        font-family: poppins;
        margin: 0;
        color: wheat;
        width: 2vw;
      }
      @keyframes move-venus {
        0% {
          transform: rotate(0deg) translateX(9.31vw) rotate(0deg);
        }
        100% {
          transform: rotate(360deg) translateX(9.31vw) rotate(-360deg);
        }
      }
      #Earth {
        animation: move-earth 30s infinite linear;
        text-decoration: none;
      }
      #Earth img {
        /* position: fixed; */
        /* position: absolute */

        /* top: 64%;
   left: 65%; */
        width: 1.5vw;
        padding: 0.5vw;
        border: 1px white solid;
        border-radius: 50%;
      }
      #Earth p {
        font-size: small;
        font-family: poppins;
        margin: 0;
        color: wheat;
        width: 2vw;
      }
      @keyframes move-earth {
        0% {
          transform: rotate(0deg) translateX(13vw) rotate(0deg);
        }
        100% {
          transform: rotate(360deg) translateX(13vw) rotate(-360deg);
        }
      }
      #Mars {
        animation: move-mars 56.5s infinite linear;
        text-decoration: none;
      }
      #Mars img {
        /* position: fixed;
   top: 40%;
   left: 31%; */
        width: 1.25vw;
        padding: 0.5vw;
        border: 1px white solid;
        border-radius: 50%;
      }
      #Mars p {
        font-size: small;
        font-family: poppins;
        margin: 0;
        color: wheat;
        width: 2vw;
      }
      @keyframes move-mars {
        0% {
          transform: rotate(0deg) translateX(19.65vw) rotate(0deg);
        }
        100% {
          transform: rotate(360deg) translateX(19.65vw) rotate(-360deg);
        }
      }

      #Jupiter {
        animation: move-jupiter 60s infinite linear;
        text-decoration: none;
      }
      #Jupiter img {
        width: 3vw;
        padding: 0.5vw;
        border: 1px white solid;
        border-radius: 50%;
      }
      #Jupiter p {
        font-size: small;
        justify-content: center;
        text-align: center;

        font-family: poppins;
        margin: 0;
        color: wheat;
        width: 2vw;
      }
      @keyframes move-jupiter {
        0% {
          transform: rotate(0deg) translateX(40vw) rotate(0deg);
        }
        100% {
          transform: rotate(360deg) translateX(40vw) rotate(-360deg);
        }
      }
      #Saturn {
        animation: move-saturn 70s infinite linear;
        text-decoration: none;
      }
      #Saturn img {
        position: fixed;
        width: 3vw;
        padding: 0.5vw;
        border: 1px white solid;
        border-radius: 50%;
      }
      #Saturn p {
        font-size: small;
        font-family: poppins;
        justify-content: center;
        margin: 0;
        color: wheat;
        width: 2vw;
      }
      @keyframes move-saturn {
        0% {
          transform: rotate(0deg) translateX(65vw) rotate(0deg);
        }
        100% {
          transform: rotate(360deg) translateX(65vw) rotate(-360deg);
        }
      }

      #Uranus {
        animation: move-uranus 75s infinite linear;
        text-decoration: none;
      }
      #Uranus img {
        position: fixed;
        width: 3vw;
        padding: 0.5vw;
        border: 1px white solid;
        border-radius: 50%;
      }
      #Uranus p {
        font-size: small;
        font-family: poppins;
        justify-content: center;
        margin: 0;
        color: wheat;
        width: 2vw;
      }
      @keyframes move-uranus {
        0% {
          transform: rotate(0deg) translateX(75vw) rotate(-360deg);
        }
        100% {
          transform: rotate(-360deg) translateX(75vw) rotate(360deg);
        }
      }
      #Neptune {
        animation: move-neptune 80s infinite linear;
        text-decoration: none;
      }
      #Neptune img {
        position: fixed;
        width: 3vw;
        padding: 0.5vw;
        border: 1px white solid;
        border-radius: 50%;
      }
      #Neptune p {
        font-size: small;
        font-family: poppins;
        margin: 0;
        justify-content: center;
        color: wheat;
        width: 2vw;
      }
      @keyframes move-neptune {
        0% {
          transform: rotate(0deg) translateX(90vw) rotate(0deg);
        }
        100% {
          transform: rotate(360deg) translateX(90vw) rotate(-360deg);
        }
      }
      #Pluto {
        animation: move-pluto 100s infinite linear;
        text-decoration: none;
      }
      #Pluto img {
        position: fixed;
        width: 2vw;
        padding: 0.5vw;
        border: 1px white solid;
        border-radius: 50%;
      }
      #Pluto p {
        font-size: small;
        font-family: poppins;
        margin: 0;
        justify-content: center;
        color: wheat;
        width: 2vw;
      }
      @keyframes move-pluto {
        0% {
          transform: rotate(0deg) translateX(100vw) rotate(0deg);
        }
        100% {
          transform: rotate(360deg) translateX(100vw) rotate(-360deg);
        }
      }

      .asteroid-belt {
        position: fixed;
        width: 60vw;
        /* opacity: 1; */
        z-index: -1;
        filter: invert(0.8);
        animation: move-belt 250s infinite linear;
      }
      @keyframes move-belt {
        0% {
          transform: rotate(-360deg);
        }
        100% {
          transform: rotate(360deg);
        }
      }
      .sidenav {
        font-family: "Quicksand";
        height: 80%; /* 100% Full-height */
        width: 0; /* 0 width - change this with JavaScript */
        position: absolute; /* Stay in place */
        /* Stay on top */
        top: 6vw;
        left: 0;
        display: flex;
        border-radius: 0 5% 5% 0;
        background-color: rgba(48, 48, 48, 0.445); /* Black*/
        overflow-x: hidden; /*Disable horizontal scroll*/
        padding-top: 60px; /*Place content 60px from the top*/
        transition: 0.8s; /* 0.5 second transition effect to slide in the sidenav */
        /* color: #f4a907; */
        color: #0099bc;
        min-width: 100px;
        z-index: 3;
        /* border: 0.1px rgb(70, 70, 70) solid; */
      }
      .sidenav .closebtn {
        position: absolute;
        display: block;
        top: 1vw;
        right: 1vw;
        text-decoration: none;
        color: #0099bc;
        height: 20px;
        /* margin: 2vw; */
        /* margin-left: 15vw; */
        align-self: flex-end;
      }

      .content h2 {
        position: absolute;
        /* color: tomato; */
        font-family: Chewy;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        /* z-index: -3; */
      }

      .content {
        height: 100%;
        display: flex;
        justify-content: center;
        animation: show 3s 1;
        overflow: hidden;
      }

      @keyframes show {
        0% {
          height: 0vh;
        }
        100% {
          height: 100%;
        }
      }

      .about {
        margin: 8vh 1vw;
        font-size: medium;
      }

      .go {
        position: absolute;
        color: #0099bc;
        border-radius: 9px;
        bottom: 2vw;
        text-align: center;
        justify-content: center;
        padding: 1vw;
        text-decoration: none;
        /* color: rgb(236, 160, 61); */
        width: 80%;
        font-size: large;
        font-weight: bold;
        font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS",
          sans-serif;
      }
      .go:hover {
        color: tomato;
      }
    </style>
    <title>Galactic Map</title>
  </head>
  <body id="body">
    <?php
    include "_navbar.php"
    ?>
    <div class="map">
      <!-- <a class="planet" type="button" id="sun" href="#"><img src="images/sun.png" alt=""></a> -->
      <span
        style="font-size: 30px; cursor: pointer"
        class="planet"
        id="Sun"
        onclick="openNav(this.id,10,'rgb(236, 160, 61)','The Sun is the star at the center of the Solar System. It is a nearly perfect ball of hot plasma, heated to incandescence by nuclear fusion reactions in its core, radiating the energy mainly as visible light, ultraviolet light, and infrared radiation. It is by far the most important source of energy for life on Earth.')"
        ><img src="images/sun.png" alt=""
      /></span>
      <span
        style="font-size: 30px; cursor: pointer"
        class="planet"
        id="Mercury"
        onclick="openNav(this.id,1,'#ae8a56','Mercury is the smallest planet in the Solar System and the closest to the Sun. Its orbit around the Sun takes 87.97 Earth days, the shortest of all the Suns planets.')"
        href="#"
        ><p>Mercury</p>
        <img src="images/mercury.png" alt=""
      /></span>
      <span
        style="font-size: 30px; cursor: pointer"
        class="planet"
        id="Venus"
        onclick="openNav(this.id,2,'#d8543c','Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty. As the brightest natural object in Earth night sky after the Moon, Venus can cast shadows and can be visible to the naked eye in broad daylight.')"
        href="#"
        ><p>Venus</p>
        <img src="images/venus.png" alt="" width="30px"
      /></span>
      <span
        style="font-size: 30px; cursor: pointer"
        class="planet"
        id="Earth"
        onclick="openNav(this.id,3,'green','Earth is the third planet from the Sun and the only astronomical object known to harbor life. While large amounts of water can be found throughout the Solar System, only Earth sustains liquid surface water. ')"
        href="#"
        ><p>Earth</p>
        <img src="images/earth.png" alt="" width="30px"
      /></span>
      <span
        style="font-size: 30px; cursor: pointer"
        class="planet"
        id="Mars"
        onclick="openNav(this.id,4,'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury.')"
        href="#"
        ><p>Mars</p>
        <img src="images/mars.png" alt="" width="30px"
      /></span>
      <img class="asteroid-belt" src="images/asteroid-belt.png" alt="" />
      <span
        style="font-size: 30px; cursor: pointer"
        class="planet"
        id="Jupiter"
        onclick="openNav(this.id,5,'Jupiter is the fifth planet from the Sun and the largest in the Solar System. It is a gas giant with a mass more than two and a half times that of all the other planets in the Solar System combined, but slightly less than one-thousandth the mass of the Sun.')"
        href="#"
        ><p>Jupiter</p>
        <img src="images/jupiter.png" alt="" width="30px"
      /></span>
      <span
        style="font-size: 30px; cursor: pointer"
        class="planet"
        id="Saturn"
        onclick="openNav(this.id,6,'Saturn is the sixth planet from the Sun and the second-largest in the Solar System, after Jupiter. It is a gas giant with an average radius of about nine and a half times that of Earth.')"
        href="#"
        ><p>Saturn</p>
        <img src="images/saturn.png" alt="" width="30px"
      /></span>
      <span
        style="font-size: 30px; cursor: pointer"
        class="planet"
        id="Uranus"
        onclick="openNav(this.id,7,'Uranus is the seventh planet from the Sun. It has the third-largest planetary radius and fourth-largest planetary mass in the Solar System.')"
        href="#"
        ><p>Uranus</p>
        <img src="images/uranus.png" alt="" width="30px"
      /></span>
      <span
        style="font-size: 30px; cursor: pointer"
        class="planet"
        id="Neptune"
        onclick="openNav(this.id,8,'Neptune is the eighth and farthest-known Solar planet from the Sun. In the Solar System, it is the fourth-largest planet by diameter, the third-most-massive planet, and the densest giant planet.')"
        href="#"
        ><p>Neptune</p>
        <img src="images/neptune.png" alt="" width="30px"
      /></span>
      <span
        style="font-size: 30px; cursor: pointer"
        class="planet"
        id="Pluto"
        onclick="openNav(this.id,9,'Pluto is a dwarf planet in the Kuiper belt, a ring of bodies beyond the orbit of Neptune. It was the first and the largest Kuiper belt object to be discovered.')"
        href="#"
        ><p>Pluto</p>
        <img src="images/pluto.png" alt="" width="30px"
      /></span>
    </div>
    <div id="sidenavs" style="width: 100%"></div>
    <div class="controls">
      <button class="zoom" onclick="zoomin()">Zoom In</button>
      <button class="zoom" onclick="zoomout()">Zoom Out</button>
    </div>
    <!-- <div id="SunSidenav" class="sidenav" style="z-index: 3;">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><h4>&times</h4></a>
      <div class="content">
         <h2>Sun</h2>
         <button class="go">Go to sun</button>
      </div>
    </div>
    <div id="MerSidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeMerNav()"><h4>&times</h4></a>
      <div class="content">
         <h2>Mercury</h2>
         <button class="go">Go to sun</button>
      </div>
    </div>
    <div id="VenSidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeVenNav()"><h4>&times</h4></a>
      <div class="content">
         <h2>Venus</h2>
         <button class="go">Go to Venus</button>
      </div>
    </div>
    <div id="EarSidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeEarNav()"><h4>&times</h4></a>
      <div class="content">
         <h2>Earth</h2>
         <button class="go">Go to Earth</button>
      </div>
    </div>
    <div id="MarSidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeMarNav()"><h4>&times</h4></a>
      <div class="content">
         <h2>Mars</h2>
         <button class="go">Go to Mars</button>
      </div>
    </div>
    <div id="JupSidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeJupNav()"><h4>&times</h4></a>
      <div class="content">
         <h2>Jupiter</h2>
         <button class="go">Go to Jupiter</button>
      </div>
    </div>
    <div id="SatSidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeSatNav()"><h4>&times</h4></a>
      <div class="content">
         <h2>Saturn</h2>
         <button class="go">Go to Saturn</button>
      </div>
    </div>
    <div id="UraSidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeUraNav()"><h4>&times</h4></a>
      <div class="content">
         <h2>Uranus</h2>
         <button class="go">Go to Uranus</button>
      </div>
    </div>
    <div id="NepSidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNepNav()"><h4>&times</h4></a>
      <div class="content">
         <h2>Neptune</h2>
         <button class="go">Go to Neptune</button>
      </div>
    </div>
    <div id="PluSidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closePluNav()"><h4>&times</h4></a>
      <div class="content">
         <h2>Pluto</h2>
         <button class="go">Go to Pluto</button>
      </div>
    </div> -->

    <script>
      var flag = 0;
      var name = "";

      function openNav(id, flag,color, about) {
        if (flag > 0) {
          name = id;
          console.log(id);
          document.getElementById("sidenavs").innerHTML =
            "<div class='sidenav' id='sidenav'><a href='javascript:void(0)' class='closebtn' onclick='closeNav()'><h4>&times</h4></a><div class='content'><h2 style='color:"+color+";'>" +
            id +
            "</h2><h5 class='about'>" +
            about +
            "</h5><a class='go' href='" +
            id +
            ".php' style='background-color:"+color+";' type='button'>Go to " +
            id +
            "</a></div></div>";
          // flag += 1;
          document.getElementById("sidenav").style.width = "20vw";
          // document.getElementById("sidenav").innerHTML = "    <h5 class='content'>The Sun is the star at the center of the Solar System. It is a nearly perfect ball of hot plasma, heated to incandescence by nuclear fusion reactions in its core, radiating the energy mainly as visible light, ultraviolet light, and infrared radiation. It is by far the most important source of energy for life on Earth. </h5>";
        } else {
          closeNav();

          id = "";
          flag = 0;
          openNav(id);
          console.log(id);
        }
      }
      function closeNav() {
        console.log("Closing");
        name = "";
        console.log(name);
        document.getElementById("sidenavs").innerHTML = "";
        document.getElementById("sidenav").style.width = "0";
        flag = 0;
        // document.getElementById("sidenav").style.border = "0px";
      }
      // block.innerHTML +=
      // "<div class='sidenav'>
      //    <a href='javascript:void(0)' class='closebtn' onclick='closeMerNav()'><h4>&times</h4></a>
      //    <div class='content'>
      //       <h2>Mercury</h2>
      //       <button class='go'>Go to sun</button>
      //    </div>
      // </div>"

      //    function openSunNav() {
      //    document.getElementById("SunSidenav").style.width = "25vw";
      //    document.getElementById("main").style.marginLeft = "25vw";
      //    flag = SunSidenav;
      //    }

      // function closeNav(id) {
      // document.getElementById(id).style.width = "0";
      // // document.getElementById("sidenav").style.border = "0px";
      // document.getElementById("main").style.marginLeft= "0";
      // flag = 0;
      // }

      //    function openMerNav() {
      //       if (flag!=0){
      //          closeNav(flag);
      //          console.log("in if mercury");
      //       }
      //       else{
      //    document.getElementById("MerSidenav").style.width = "25vw";
      //    document.getElementById("main").style.marginLeft = "25vw";
      //    flag = 2;
      //    }
      // }

      //    function closeMerNav() {
      //    document.getElementById("MerSidenav").style.width = "0";
      //    // document.getElementById("sidenav").style.border = "0px";
      //    document.getElementById("main").style.marginLeft= "0";
      //    }

      //    function openVenNav() {
      //    document.getElementById("VenSidenav").style.width = "25vw";
      //    // document.getElementById("sidenav").style.border = "1px";
      //    // document.getElementById("sidenav").style.border = "white";
      //    document.getElementById("main").style.marginLeft = "25vw";
      //    }

      //    function closeVenNav() {
      //    document.getElementById("VenSidenav").style.width = "0";
      //    // document.getElementById("sidenav").style.border = "0px";
      //    document.getElementById("main").style.marginLeft= "0";
      //    }

      //    function openEarNav() {
      //    document.getElementById("EarSidenav").style.width = "25vw";
      //    // document.getElementById("sidenav").style.border = "1px";
      //    // document.getElementById("sidenav").style.border = "white";
      //    document.getElementById("main").style.marginLeft = "25vw";
      //    }

      //    function closeEarNav() {
      //    document.getElementById("EarSidenav").style.width = "0";
      //    // document.getElementById("sidenav").style.border = "0px";
      //    document.getElementById("main").style.marginLeft= "0";
      //    }

      //    function openMarNav() {
      //    document.getElementById("MarSidenav").style.width = "25vw";
      //    // document.getElementById("sidenav").style.border = "1px";
      //    // document.getElementById("sidenav").style.border = "white";
      //    document.getElementById("main").style.marginLeft = "25vw";
      //    }

      //    function closeMarNav() {
      //    document.getElementById("MarSidenav").style.width = "0";
      //    // document.getElementById("sidenav").style.border = "0px";
      //    document.getElementById("main").style.marginLeft= "0";
      //    }

      //    function openJupNav() {
      //    document.getElementById("JupSidenav").style.width = "25vw";
      //    // document.getElementById("sidenav").style.border = "1px";
      //    // document.getElementById("sidenav").style.border = "white";
      //    document.getElementById("main").style.marginLeft = "25vw";
      //    }

      //    function closeJupNav() {
      //    document.getElementById("JupSidenav").style.width = "0";
      //    // document.getElementById("sidenav").style.border = "0px";
      //    document.getElementById("main").style.marginLeft= "0";
      //    }
      //    function openSatNav() {
      //    document.getElementById("SatSidenav").style.width = "25vw";
      //    // document.getElementById("sidenav").style.border = "1px";
      //    // document.getElementById("sidenav").style.border = "white";
      //    document.getElementById("main").style.marginLeft = "25vw";
      //    }

      //    function closeSatNav() {
      //    document.getElementById("SatSidenav").style.width = "0";
      //    // document.getElementById("sidenav").style.border = "0px";
      //    document.getElementById("main").style.marginLeft= "0";
      //    }
      //    function openUraNav() {
      //    document.getElementById("UraSidenav").style.width = "25vw";
      //    // document.getElementById("sidenav").style.border = "1px";
      //    // document.getElementById("sidenav").style.border = "white";
      //    document.getElementById("main").style.marginLeft = "25vw";
      //    }

      //    function closeUraNav() {
      //    document.getElementById("UraSidenav").style.width = "0";
      //    // document.getElementById("sidenav").style.border = "0px";
      //    document.getElementById("main").style.marginLeft= "0";
      //    }
      //    function openNepNav() {
      //    document.getElementById("NepSidenav").style.width = "25vw";
      //    // document.getElementById("sidenav").style.border = "1px";
      //    // document.getElementById("sidenav").style.border = "white";
      //    document.getElementById("main").style.marginLeft = "25vw";
      //    }

      //    function closeNepNav() {
      //    document.getElementById("NepSidenav").style.width = "0";
      //    // document.getElementById("sidenav").style.border = "0px";
      //    document.getElementById("main").style.marginLeft= "0";
      //    }
      //    function openPluNav() {
      //    document.getElementById("PluSidenav").style.width = "25vw";
      //    // document.getElementById("sidenav").style.border = "1px";
      //    // document.getElementById("sidenav").style.border = "white";
      //    document.getElementById("main").style.marginLeft = "25vw";
      //    }

      //    function closePluNav() {
      //    document.getElementById("PluSidenav").style.width = "0";
      //    // document.getElementById("sidenav").style.border = "0px";
      //    document.getElementById("main").style.marginLeft= "0";
      //    }
      const zoomElement = document.querySelector(".map");
      let zoom = 1;
      const ZOOM_SPEED = 0.035;
      console.log("in Zoom");
      // document.addEventListener("wheel" || "resize", function (e) {
      function zoomin() {
        if (zoom < 1.5) {
          // console.log(zoom);
          zoomElement.style.transform = `scale(${(zoom += ZOOM_SPEED)})`;
        }
      }
      function zoomout() {
        if (zoom > 0.45) {
          // console.log(zoom);
          zoomElement.style.transform = `scale(${(zoom -= ZOOM_SPEED)})`;
        }
      }
    </script>
  </body>
</html>
