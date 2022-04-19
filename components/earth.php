<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Abel&display=swap');
      /* @import url('https://fonts.googleapis.com/css2?family=Inconsolata&display=swap'); */
      * {
        margin: 0;
        padding: 0;
        font-family: "Abel";
      }
      /* html{
                
            } */

      body {
        background: url("https://www.azonano.com/images/Article_Images/ImageForArticle_5836_16341147249074630.jpg");
        background-repeat: no-repeat;
        min-width: 100%;
        background-size: cover;
        background-position: center;
        backdrop-filter: blur(1px);
        /* width: 100vw; */
        filter: brightness(0.8);
        position: relative;
        border: 3px rgb(105 170 208) solid;
        border-bottom: 0px;
        min-height: 100vh;
        /* animation: load 2s ease-in-out forwards; */
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
        /* background: black; */
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
          background-size: 102%;
        }
        50% {
          backdrop-filter: blur(5px);
          background-size: 104%;
        }
        75% {
          backdrop-filter: blur(3px);
          background-size: 103%;
        }
        100% {
          /* opacity: 1; */
          backdrop-filter: blur(1px);
          border-radius: 10px;
          background-size: 105%;
        }
      }
      #about {
        /* overflow: hidden; */
        height: max-content;
        overflow: visible;
        display: flex;
        flex-direction: row;
        overflow-x: hidden;
        flex-wrap: wrap;
        justify-content: space-around;
      }

      .head {
        max-width: 6%;
        color: #da5128;
        text-align: center;
        justify-content: center;
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
        color: rgb(53 97 133);
        width: max-content;
        /* text-decoration: underline; */
        /* margin: 1vw; */
        padding: 1vh;
        margin: 1vh auto;
        /* transition: 1s; */
        background: rgb(59, 58, 58);
        border-radius: 10px;
        border: 3px rgb(53 97 133) solid;
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

      h2:hover {
        text-decoration: underline;
      }
      /* .head:hover + {
      background-image: url("images/main_sun.jpg");
    } */

      .in_img {
        /* max-width: 25vw; */
        padding: 0.5vh 0.5vw;
        border-radius: 10px;
        animation: popup 0.3s ease-in-out;
        object-fit: cover;
        margin: 1vh auto;
        width: 25vw;
        height: 28vh;
        /* transition: 0.3s ease; */
        /* animation: close 0.5s ease-in-out; */
        /* object-position: 0% 20%; */
        /* transition: 0.9s ease-out; */
      }

      .links {
        display: flex;
        flex-direction: column;
        overflow: hidden;
        /* animation: close 0.5s ease; */
      }

      @keyframes popup {
        0% {
          /* width: 5vw; */
          height: 5vh;
        }
        10% {
          /* width: 5vw; */
          height: 7vh;
        }
        20% {
          /* width: 5vw; */
          height: 9vh;
        }
        30% {
          /* width: 5vw; */
          height: 11vh;
        }
        40% {
          /* width: 5vw; */
          height: 13vh;
        }
        50% {
          /* width: 5vw; */
          height: 15vh;
        }
        60% {
          /* width: 5vw; */
          height: 17vh;
        }
        70% {
          /* width: 5vw; */
          height: 19vh;
        }
        80% {
          /* width: 5vw; */
          height: 21vh;
        }
        90% {
          /* width: 5vw; */
          height: 23vh;
        }
        100% {
          /* width: 25vw; */
          height: 25vh;
        }
      }
    </style>
    <!-- <meta name="theme-color" content="rgb(255,166,0)"> -->

    <title>Earth</title>
  </head>
  <body>
    <?php

    include "../components/_navbar.php";

    ?>

    <!-- <img class="image" id="radius" src="https://nineplanets.org/wp-content/uploads/2020/09/Planets_and_sun_size_comparison.jpg" alt=""> -->
    <h1 class="head">Earth</h1>
    <div id="back"></div>
    <!-- <div class="hover_sun">
    <img src="images/main_sun.jpg" alt="" width="50%" id="hover_sun">
  </div> -->
    <div id="about">
      <div class="projects">
        <h2>Facts</h2>
        <div
          class="links"
          id="pop"
          onmouseenter="change_img('pop','https://environment-review.yale.edu/sites/default/files/styles/flexslider_full/public/earth-population-sustainable-yer-sq.jpg?itok=ZZoadUgJ')"
          onmouseleave="return_img('pop','Population: 775.28 Crore Humans')"
        >
          Population: 775.28 Crore Humans
        </div>
        <div
          class="links"
          id="Radius"
          onmouseenter="change_img(this.id,'https://media.cheggcdn.com/study/af3/af3c6556-43d6-400d-a799-661697920588/13010-P-17EEI1.png')"
          onmouseleave="return_img(this.id,'Radius: 6,371 KM' )"
        >
          Radius: 6,371 KM
        </div>
        <!-- <button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button> -->
        <div
          class="links"
          id="Type"
          onmouseenter="change_img(this.id,'https://images.labroots.com/content_article_profile_image_d73857bc317b4085930fc50b220b2e8d1221cd0c_3458.jpg')"
          onmouseleave="return_img(this.id,'Category: Rocky, Suitable for Carbon based life forms(atleast for now)')"
        >
          Category: Rocky, Suitable for Carbon based life forms(atleast for now)
        </div>
        <div
          class="links"
          id="Satelite"
          onmouseenter="change_img(this.id,'https://worldatlas.com/r/w1200/upload/b6/58/d9/shutterstock-379876714.jpg')"
          onmouseleave="return_img(this.id,'Natural Satelite: Moon')"
        >
          Natural Satelite: Moon
        </div>
      </div>
      <div class="projects">
        <h2>Previous Mass Extinctions</h2>
        <div
          href=""
          class="links"
          id="discovr"
          onmouseenter="change_img(this.id,'https://alchetron.com/cdn/ordoviciansilurian-extinction-events-78f99716-a5eb-4861-b978-56e39b2232f-resize-750.png')"
          onmouseleave="return_img(this.id,'Ordovician-silurian Extinction 440 Million years ago')"
        >
          Ordovician-silurian Extinction 440 Million years ago
        </div>
        <div
          href=""
          class="links"
          id="parker"
          onmouseenter="change_img(this.id,'http://pangaeabio.com/wp-content/uploads/2015/07/download-1.png')"
          onmouseleave="return_img(this.id,'Devonian Extinction: 365 million years ago')"
        >
          Devonian Extinction: 365 million years ago
        </div>
        <div
          href=""
          class="links"
          id="orbiter"
          onmouseenter="change_img(this.id,'https://s3-us-west-1.amazonaws.com/scifindr/articles/image4s/000/002/753/large/extinction2.jpg?1475472339')"
          onmouseleave="return_img(this.id,'Permian-triassic Extinction: 250 million years ago')"
        >
          Permian-triassic Extinction: 250 million years ago
        </div>
        <div
          href=""
          class="links"
          id="aditya"
          onmouseenter="change_img(this.id,'https://listverse.com/wp-content/uploads/2012/03/dinosaurs-wallpaper-4.jpg')"
          onmouseleave="return_img(this.id, 'Triassic-jurassic Extinction: 210 million years ago')"
        >
          Triassic-jurassic Extinction: 210 million years ago
        </div>
        <div
          href=""
          class="links"
          id="Extinction"
          onmouseenter="change_img(this.id,'https://prehistoricaonline.com/wp-content/uploads/2017/07/Cretaceous-%E2%80%93-Paleogene-Extinction-Event.jpg')"
          onmouseleave="return_img(this.id, 'Cretaceous-tertiary Extinction: 65 Million Years Ago')"
        >
          Cretaceous-tertiary Extinction: 65 Million Years Ago
        </div>
      </div>
      <div class="projects">
        <img src="" alt="" />
        <h2>Future Engineering Marvels</h2>
        <div
          href=""
          class="links"
          id="orbital"
          onmouseenter="change_img(this.id,'https://images.squarespace-cdn.com/content/v1/58757ed7f5e231cc32494a1b/1535353869701-ZL3EXSSSIVTLUNA9RZYR/earthring_1024.jpg')"
          onmouseleave="return_img(this.id,'Orbital Ring')"
        >
          Orbital Ring
        </div>
        <div
          href=""
          class="links"
          id="solar"
          onmouseenter="change_img(this.id,'https://qph.fs.quoracdn.net/main-qimg-23b855cac814495e2c8fb37471a49b62')"
          onmouseleave="return_img(this.id,'Becoming a Type 1 Civilization')"
        >
          Becoming a Type 1 Civilization
        </div>
        <!-- <a href="" class="project"></a> -->
      </div>
    </div>
    <script>
      if (window.innerWidth < 992) {
        console.log(window.innerWidth);
        document.getElementById("about").style.flexDirection = "column";
      }

      function change_img(div, link) {
        console.log("In change " + div);
        const obj = document.getElementById(div);
        obj.innerHTML += "<img src='"+link+"' width='auto' id='image' class='in_img'>";
        obj.style.height = "auto";
        // obj.style.transition = "0.9s ease-out";
        // document.getElementById("div").style.backgroundRepeat = "no-repeat";
        // document.getElementById("+div+").style.position = center;
        // document.getElementById("div").style.backgroundSize = "cover";
        // document.getElementById("div").style.filter = "brightness(0.5)"
      }

      function return_img(div, para) {
        console.log("outside");
        document.getElementById(div).innerHTML = para;
        document.getElementById(div).style.transition = "0.3s ease-in-out";
      }
    </script>
    <!-- <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script> -->
  </body>
</html>
