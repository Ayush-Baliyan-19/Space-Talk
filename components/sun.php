<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
<!-- <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> -->
  <style>
          @import url('https://fonts.googleapis.com/css2?family=Abel&display=swap');

    * {
      margin: 0;
      padding: 0;
      font-family: 'Abel';
    }
    /* html{

    } */

    body {
      background: url("https://wallpaperaccess.com/full/2995430.jpg");
      background-repeat: no-repeat;
      width: 100%;
      background-size: 100%; 
      background-position: center;
      backdrop-filter: blur(1px);
      /* width: 100vw; */
      filter: brightness(0.8);
      position: relative;
      border: 3px rgb(255, 166, 0) solid;
      border-bottom: 0px;
      min-height: 100vh;
      animation: load 2s 1 ease forwards;
      border-radius: 10px;
      background-origin: content-box;
      background-attachment: fixed;
      /* overflow: scroll; */
    }

    ::-webkit-scrollbar {
        width: 0px;
        background-color: black;
      }

      ::-webkit-scrollbar-corner {
        background: black;
      }
      ::-webkit-scrollbar-thumb {
        width: 5px;
        background: linear-gradient(45deg, transparent, rgb(255, 166, 0));
        /* background: transparent; */
        border-radius: 6px;
      }
      ::-webkit-scrollbar-thumb:hover {
        background: linear-gradient(45deg, transparent, tomato);
      }
    
    /* #back{
      content: "";
      position: absolute;
      height: 100%;
      top: 0px;
      left: 0px;
      width: 100%;
      z-index: -2;
    } */

    @keyframes load {
      0% {
        /* opacity: 0; */
        backdrop-filter: blur(5px);
        border-radius: 0px;
        background-size: 100%;
        /* background-position: ; */
        /* background-size: 100% 0vh; */
      }

      25% {
        /* opacity: 0.5; */
        backdrop-filter: blur(10px);
        border-radius: 20px;
        background-size: 104%;
      }
      50%{
        backdrop-filter: blur(5px);
        background-size: 108%;
      }
      75%{
        backdrop-filter: blur(3px);
        background-size: 106%;
      }
      100% {
        /* opacity: 1; */
        backdrop-filter: blur(1px);
        border-radius: 10px;
        background-size: 110%;
      }
    }
    #about
    {
      /* overflow: hidden; */
      height: max-content;
      overflow:visible;
      display: flex;
      flex-direction: row;
      overflow-x: hidden;
      flex-wrap: wrap;
      justify-content: space-around;
    }

    .head{
      max-width: 6%;
      color: #da5128;
      text-align:center;
      justify-content:center;
      margin: 4vh auto;
      display: block;
      font-weight: bolder;
    }

    .links,
    .project {
      width: max-content;
      padding: 1vh;
      text-decoration: none;
      color: whitesmoke;
      margin: 2vh auto;
      /* text-shadow: 2px 2px gray; */
      /* box-shadow: 1px 1px 2px 0px gray; */
    }

    .links:hover,
    .project:hover {
      color: rgb(255, 166, 0);
      width: max-content;
      /* text-decoration: underline; */
      /* margin: 1vw; */
      padding: 1vh;
      margin: 2vh;
      /* transition: 1s; */
      background: rgb(59, 58, 58);
      border-radius: 10px;
      border: 3px rgb(255, 166, 0) solid;
      animation: popup 0.3s ease;      
      /* display: flex;
      flex-direction: column; */
      /* animation: move 0.3s infinite; */
      /* margin-left: 2vw; */

    }

    /* @keyframes move {
      100% {
        color: tomato;
      }
    } */

    .info,
    .projects {
      display: flex;
      width: 25%;
      flex-direction: column;
      margin: 1vw;
    }

    h2 {
      margin: 2vh auto;
      color: rgb(255, 237, 186);
      /* margin: 1vw; */
    }

    h2:hover{
      text-decoration: underline;
    }
    /* .head:hover + {
      background-image: url("images/main_sun.jpg");
    } */

    .in_img{
      /* max-width: 25vw; */
      padding: 0.5vh 0.5vw;
      border-radius: 10px;
      animation: popup 0.3s ease;
      object-fit: cover;
      width: 25vw;
      height: 28vh;
      /* object-position: 0% 20%; */ 
      /* transition: 0.9s ease-out; */

    }
    @keyframes popup{
      0%{
        /* width: 5vw; */
        height: 5vh;
      }
      10%{
        /* width: 7vw; */
        height: 7vh;
      }
      20%{
        /* width: 9vw; */
        height: 9vh;
      }
      30%{
        /* width: 11vw; */
        height: 11vh;
      }
      40%{
        /* width: 13vw; */
        height: 13vh;
      }
      50%{
        /* width: 15vw; */
        height: 15vh;
      }
      60%{
        /* width: 17vw; */
        height: 17vh;
      }
      70%{
        /* width: 19vw; */
        height: 19vh;
      }
      80%{
        /* width: 21vw; */
        height: 21vh;
      }
      90%{
        /* width: 23vw; */
        height: 23vh;
      }
      100%{
        /* width: 25vw; */
        height: 25vh;
      }
    }
   
  </style>
  <!-- <meta name="theme-color" content="rgb(255,166,0)"> -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sun</title>
</head>

<body>
  <?php

    include "_navbar.php";

    ?>

  <!-- <img class="image" id="radius" src="https://nineplanets.org/wp-content/uploads/2020/09/Planets_and_sun_size_comparison.jpg" alt=""> -->
  <h1 class="head">Sun</h1>
  <div id="back"></div>
  <!-- <div class="hover_sun">
    <img src="images/main_sun.jpg" alt="" width="50%" id="hover_sun">
  </div> -->
  <div id="about">
    <div class="projects">
      <h2>Facts</h2>
      <div class="links" id="position" onmouseenter="change_img(this.id,'https://qph.fs.quoracdn.net/main-qimg-c6ae74b02c1d17e1d14ee2b573871de2.webp')" onmouseleave="return_img(this.id,'Location: In Orion Arm , Milky Way Galaxy')" >Location: In Orion Arm , Milky Way Galaxy</div>
      <div class="links" id="Radius" onmouseenter="change_img(this.id,'https://starlust.org/wp-content/uploads/2020/11/how-big-is-the-sun-compated-to-the-planets.jpg')" onmouseleave="return_img(this.id,'Radius: 696,342 km OR 109 times Earth radii' )">Radius: 696,342 km OR 109 times Earth radii </div>
      <!-- <button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button> -->
      <div class="links" id="Type" onmouseenter="change_img(this.id,'https://qph.fs.quoracdn.net/main-qimg-3f56f5849f4e0f102dfe4d4fbf8e28db-lq')" onmouseleave="return_img(this.id,'Category: Red Dwarf')">Category: Red Dwarf</div>
      <div class="links" id="Age" onmouseenter="change_img(this.id,'https://cdn1.byjus.com/wp-content/uploads/2019/08/life-cycle-of-a-star.jpeg')"
      onmouseleave="return_img(this.id,'Age: 4.6 Billion years(Half of life is spent)')">Age: 4.6 Billion years(Half of it's life is spent)</div>
    </div>
    <div class="projects">
      <h2>Recent Missions</h2>
      <div href="" class="links" id="discovr" onmouseenter="change_img(this.id,'https://cdn.mos.cms.futurecdn.net/erPu48TmaMbX9ka4PMJJT9.jpg')" onmouseleave="return_img(this.id,'DISCOVR')">DISCOVR</div> 
      <div href="" class="links" id="parker" onmouseenter="change_img(this.id,'http://bsmedia.business-standard.com/_media/bs/img/article/2017-06/01/full/1496292467-7455.jpg?im=Resize,width=1200')" onmouseleave="return_img(this.id,'Parker Solar Probe')">Parker Solar Probe</div>
      <div href="" class="links" id="orbiter" onmouseenter="change_img(this.id,'https://i.guim.co.uk/img/static/sys-images/Guardian/Pix/pictures/2015/3/14/1426330001055/c5aa3065-eec8-45d5-8269-f147973d4bbc-1020x612.jpeg?width=465&quality=45&auto=format&fit=max&dpr=2&s=0bac21c5ace1739f09b4ec02908932a8')" onmouseleave="return_img(this.id,'Solar Orbiter')">Solar Orbiter</div>
      <div href="" class="links" id="aditya" onmouseenter="change_img(this.id,'http://iasgatewayy.com/wp-content/uploads/2019/12/30-of-Poshan-Abhiyaan-Funds-used_0003_Layer-4.jpg')" onmouseleave="return_img(this.id, 'Aditya L1')">Aditya L1</div>
    </div>
    <div class="projects">
      <img src="" alt="">
      <h2>Future Engineering Marvels</h2>
      <div href="" class="links" id="dyson" onmouseenter="change_img(this.id,'https://miro.medium.com/max/1200/0*0Hv1MVOj0-jK1dOM.jpg')" onmouseleave="return_img(this.id,'Dyson Swarm(Sphere)')">Dyson Swarm(Sphere)</div>
      <div href="" class="links" id="solar" onmouseenter="change_img(this.id,'https://innovationfrontier.org/wp-content/uploads/2021/08/11-Space_Solar_Power_proof-1005x495.jpg')" onmouseleave="return_img(this.id,'Space based Solar Thermal Energy')">Space based Solar Thermal Energy</div>
      <!-- <a href="" class="project"></a> -->
    </div>
  </div>
  <script>
    if (window.innerWidth<992){
      console.log(window.innerWidth);
      document.getElementById("about").style.flexDirection = "column";
    }

    function change_img(div,link){
      console.log("In change "+div);
      const obj = document.getElementById(div)
      obj.innerHTML = "<img src='"+link+"' width='auto' class='in_img'>";
      // obj.style.transition = "0.9s ease-out"; 
    // document.getElementById("div").style.backgroundRepeat = "no-repeat";
    // document.getElementById("+div+").style.position = center;
    // document.getElementById("div").style.backgroundSize = "cover";
    // document.getElementById("div").style.filter = "brightness(0.5)"
    }

    function return_img(div,para){
      console.log("outside");
      document.getElementById(div).innerHTML = para;
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
