<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <style>
      * {
        margin: 0;
        padding: 0;
      }
      body {
        background: url("https://thumbor.forbes.com/thumbor/711x444/https://specials-images.forbesimg.com/imageserve/614d7dc5823eb50bdd9a5a61/Planet-Venus-/960x0.jpg?fit=scale");
        background-size: cover;
        /* height: 100vh; */
        animation: load 3s 1 ease;
        border-radius: 10px;
        background-repeat: no-repeat;
        overflow: scroll;
        background-attachment: fixed;
        border-bottom: none;
        display: flex;
        flex-direction:column;
      }
      
      #papa_con{
        display: flex;
        flex-direction: row;
      }
      @keyframes load {
        0% {
          opacity: 0;
          border-radius: 0px;
          /* background-size: 100% 0vh; */
        }
        50% {
          opacity: 0.5;
          border-radius: 20px;
        }
        100% {
          opacity: 1;
          border-radius: 10px;
        }
      }
      #main_con {
        display: flex;
        flex-direction: column;
        height: 91vh;
        width: 0vw;
        overflow: hidden;
        transition: all 0.7s ease-out;
        float: right;
      }
      .con {
        width: 100%;
        background-color: rgba(63, 62, 62, 0.5);
        border-radius: 20px;
        /* border: 3px black solid; */
        margin: 0.2vh;
        height: auto;
        animation: dec 0.5s ease;
        display: flex;
        flex-direction: column;
        min-height: 7%;
        /* border: 3px rgb(85 47 40) solid; */
        align-items: center;
        justify-content: center;
      }
      .active {
        /* height: 75%; */
        /* transition: 0.5s ease; */
        background-color: rgba(245, 245, 220, 0.164);
        animation: inc 0.5s ease forwards;
      }

      .active .item {
        animation: inc-item 0.5s ease forwards;
      }

      @keyframes inc {
        0% {
          height: auto;
        }
        20% {
          height: 12%;
        }
        40% {
          height: 24%;
        }
        60% {
          height: 36%;
        }
        80% {
          height: 48%;
        }
        100% {
          height: 60%;
        }
      }
      @keyframes inc-item {
        0% {
          height: auto;
        }
        20% {
          height: 15%;
        }
        40% {
          height: 35%;
        }
        60% {
          height: 55%;
        }
        80% {
          height: 75%;
        }
        100% {
          height: 90%;
        }
      }

      @keyframes dec {
        0% {
          height: 75%;
        }
        20% {
          height: 60%;
        }
        40% {
          height: 45%;
        }
        60% {
          height: 30%;
        }
        80% {
          height: 15%;
        }
        100% {
          height: auto;
        }
      }

      ::-webkit-scrollbar {
        width: 0px;
        background-color: black;
      }

      .item {
        height: auto;
        margin: 0.5vw;
        min-height: 15vh;
        width: 20%;
        max-width: 50%;
        border-radius: 1vw;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        /* border: 5px black solid; */
        transition: width 0.5s ease;
        overflow: hidden;
        justify-content: baseline;
        display: flex;
        flex-direction: row;
      }

      .item .text{
        /* display: none; */
        color: rgb(69, 152, 224);
        margin: 1vw;
        /* width: 0vw; */
        transition: width 0.5s ease;
        /* overflow: hidden; */
        height: 2vw;
        width: 0vw;
        overflow: hidden;
      }

      .item:hover {
        width: 40%;
        border-radius: 1vw;
      }

      #bar{
        min-height: 0.8vh;
        width: 0vw;
        transition: all 0.3s ease-out;
        border-radius: 0px 10px 10px 0px;
        /* overflow: hidden; */
      }

      .item:hover .icon{
        margin: 1vw 1vw;
        transition: margin 0.3s ease;
      }
      .item:hover .text{
        /* width: 34vw; */
        /* height: auto; */
        width: 80%;
        margin: 1vw;
        /* display: block; */
        /* animation: show 1s ease; */
      }

      #timeline{
        margin: auto 0;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 2vw;
        height: 77vh;
        cursor: pointer;
        border-radius: 0px 10px 10px 0px;
      }
      #timeline p{
        transform: rotate(90deg);
        color: #d7b1bd;
        font-weight: bolder;
      }

      .items {
        display: flex;
        flex-direction: row;
        width: 100%;
        height: 100%;
        justify-content: center;
        align-items: center;
      }
      /* .active_lat { */
      /* animation: inc_wid 0.3s ease; */
      /* width: 75%;
        transition-property: width;
        transition-duration: 0.5s;
      } */

      /* @keyframes inc_wid {
        0% {
          width: auto;
        }
        20% {
          width: 15%;
        }
        40% {
          width: 30%;
        }
        60% {
          width: 45%;
        }
        80% {
          width: 60%;
        }
        100% {
          width: 75%;
        }
      } */

      .title{
        margin: 0.5vh auto;
        align-items: center;
        justify-content: center;
      }

      .icon{
        width: 2vw;
        margin: 0.5vw 0.75vw;
        /* float: left; */
        border-radius: 50%;
        bottom: 1vw;
        right: 1vw;
        /* bottom: 1vh; */
      }

      .icon_div{
        height: 100%;
      }
    </style>
    <!-- <meta name="theme-color" content="rgb(255,166,0)"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Venus</title>
  </head>
  <body>
    <?php

    include "_navbar.php";

    ?>
    <div id="bar" style="background-color: #d7b1bd;"></div>
    <div id="papa_con">
    <div id="timeline" onclick="expand()" style="background-color: black;"><p>Timeline</p></div>
    <div id="main_con">
      <div class="con" id="about" onclick="active(this.id,'66%','#7c2c47')">
        <div class="title"><h1>Present</h1></div>
        <div class="items">
          <div
            class="item"
            id="1"
            onmouseenter="active_lat(this.id,'33%','')"
            style="
              background: url('https://img.republicworld.com/republic-prod/stories/promolarge/xhdpi/fcjq1ehethbjc4yf_1602334744.jpeg');
            "
          >
          <div class="icon_div"><img src="https://thumbs.dreamstime.com/b/linear-group-icon-customer-service-outline-collection-thin-line-vector-isolated-white-background-138644548.jpg" alt="" class="icon"></div>
          <div class="text">Population</div>
        </div>
          <div
            class="item"
            id="2"
            onmouseenter="active_lat(this.id)"
            style="
              background: url('https://imageio.forbes.com/blogs-images/startswithabang/files/2019/03/kgill.jpg?fit=bounds&format=jpg&width=960');
            "
          >
            <div><img src="https://thumbs.dreamstime.com/b/linear-group-icon-customer-service-outline-collection-thin-line-vector-isolated-white-background-138644548.jpg" alt="" class="icon"></div>
            <div class="text">Category: Rocky, Extreme case of Green house effect</div>
          </div>
          <div
            class="item"
            id="3"
            onmouseenter="active_lat(this.id)"
            style="
              background: url('https://www.deccanherald.com/sites/dh/files/articleimages/2020/09/17/venus-887594-1600100623-888662-1600313235.png');
            "
          >
          <div><img src="https://thumbs.dreamstime.com/b/linear-group-icon-customer-service-outline-collection-thin-line-vector-isolated-white-background-138644548.jpg" alt="" class="icon"></div>
          <div class="text">Natural Satellite: 0</div>
        </div>
          <div
            class="item"
            id="4"
            onmouseenter="active_lat(this.id)"
            style="
              background: url('https://cff2.earth.com/uploads/2021/10/13090040/Venus-scaled.jpg');
            "
          >
          <div><img src="https://thumbs.dreamstime.com/b/linear-group-icon-customer-service-outline-collection-thin-line-vector-isolated-white-background-138644548.jpg" alt="" class="icon"></div>
          <div class="text">class: Planet</div>
          </div>
        </div>
      </div>
      <div class="con" id="history" onclick="active(this.id,'33%','#d7b1bd')">
        <div class="title"><h1>Past</h1></div>
        <div class="items">
          <div
            class="item"
            id="5"
            onmouseenter="active_lat(this.id)"
            style="background: url('images/past_venus.png')"
          >
            Lorem
          </div>
          <div
            class="item"
            id="6"
            onmouseenter="active_lat(this.id)"
            style="
              background: url('https://cff2.earth.com/uploads/2021/10/13090040/Venus-scaled.jpg');
            "
          >
            Lorem
          </div>
          <div
            class="item"
            id="7"
            onmouseenter="active_lat(this.id)"
            style="
              background: url('https://cff2.earth.com/uploads/2021/10/13090040/Venus-scaled.jpg');
            "
          >
            Lorem
          </div>
          <div
            class="item"
            id="8"
            onmouseenter="active_lat(this.id)"
            style="
              background: url('https://cff2.earth.com/uploads/2021/10/13090040/Venus-scaled.jpg');
            "
          >
            Lorem
          </div>
        </div>
      </div>
      <div class="con" id="future" onclick="active(this.id,'100%','#50031d')">
        <div class="title"><h1>Future</h1></div>
        <div class="items">
          <div
            class="item"
            id="9"
            onmouseenter="active_lat(this.id)"
            style="
              background: url('https://img.republicworld.com/republic-prod/stories/promolarge/xhdpi/fcjq1ehethbjc4yf_1602334744.jpeg');
            "
          ></div>
          <div
            class="item"
            id="10"
            onmouseenter="active_lat(this.id)"
            style="
              background: url('https://imageio.forbes.com/blogs-images/startswithabang/files/2019/03/kgill.jpg?fit=bounds&format=jpg&width=960');
            "
          >
            />
          </div>
          <div
            class="item"
            id="11"
            onmouseenter="active_lat(this.id)"
            style="
              background: url('https://www.deccanherald.com/sites/dh/files/articleimages/2020/09/17/venus-887594-1600100623-888662-1600313235.png');
            "
          ></div>
          <div
            class="item"
            id="12"
            onmouseenter="active_lat(this.id)"
            style="
              background: url('https://cff2.earth.com/uploads/2021/10/13090040/Venus-scaled.jpg');
            "
          >
            Lorem
          </div>
        </div>
      </div>
    </div>
  </div>
  <button>Launch</button>
    <script>
      var currently_active1 = "";

      var currently_active2 = "";

      function active(id,percent,color) {
        if (currently_active1 != "") {
          prev_obj = document.getElementById(currently_active1);
          prev_obj.classList.remove("active");
          console.log("In " + prev_obj.id);
        }

        currently_active1 = id;
        console.log("In active " + currently_active1);
        obj = document.getElementById(id);
        obj.classList.add("active");
        document.getElementById("bar").style.backgroundColor = color;
        document.getElementById("bar").style.width = percent;

      }
      function active_lat(id) {
        if (currently_active2 != "") {
          prev_obj = document.getElementById(currently_active2);
          prev_obj.classList.remove("active-item");
          console.log("out of " + prev_obj.id);
        }

        currently_active2 = id;
        console.log("In active " + currently_active2);
        obj = document.getElementById(id);
        obj.classList.add("active-item");
      }

      function expand(){
        main = document.getElementById('main_con');
        // main.style.height = "100vh";
        
        timeline = document.getElementById("timeline");
        
        if(main.style.width != "0vw"){
          main.style.width = "0vw";

        }
        else{
          main.style.width = "98vw";
        }
      }
    </script>
  </body>
</html>
