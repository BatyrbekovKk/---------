<!-- <!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Галерея</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Галерея.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.12.14, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Галерея">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode"><header class="u-clearfix u-header u-sticky u-sticky-849b u-header" id="sec-ed6c"><div class="u-clearfix u-sheet u-sheet-1">
        <nav class="shapka u-menu u-menu-one-level u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
             
              </g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-light-1 u-text-hover-palette-2-base" href="Главная.html" style="padding: 10px 52px;">Главная</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-light-1 u-text-hover-palette-2-base" style="padding: 10px 52px;" href="Галерея.html">Галерея</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-light-1 u-text-hover-palette-2-base" style="padding: 10px 52px;" href="Новости.html">Новости</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-light-1 u-text-hover-palette-2-base" href="Участники.html" style="padding: 10px 52px;" href="Участники.html">Участники</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Главная.html">Главная</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Галерея.html">Галерея</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Новости.html">Новости</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Участники.html">Участники</a>
</li></ul>
              </div>
            </div>
            

            


            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
        <img class="u-image u-image-default u-image-1" src="images/Main_Black.svg" alt="" data-image-width="484" data-image-height="241" data-href="Главная.html" data-page-id="111703238">
        <a href="/index.html" class="u-border-none u-btn u-btn-round u-button-style u-palette-1-light-2 u-radius-15 u-btn-1">Войти</a>
      </div></header>  -->


          <?php

          include 'shapka.php';
          ?>  
      <!-- ---------- -->

      <div class="gallery">
        <style>
          * {
              box-sizing: border-box;
          }
          
          body {
              margin: 0;
              font-family: Arial;
          }
          
          .header {
              text-align: center;
              padding: 32px;
          }
          
          .row {
              display: -ms-flexbox; /* IE10 */
              display: flex;
              -ms-flex-wrap: wrap; /* IE10 */
              flex-wrap: wrap;
              padding: 0 4px;
          }
          
          /* Create four equal columns that sits next to each other */
          .column {
              -ms-flex: 25%; /* IE10 */
              flex: 25%;
              max-width: 25%;
              padding: 0 4px;
          }
          
          .column img {
              margin-top: 8px;
              vertical-align: middle;
          }
          
          /* Responsive layout - makes a two column-layout instead of four columns */
          @media screen and (max-width: 800px) {
              .column {
                  -ms-flex: 50%;
                  flex: 50%;
                  max-width: 50%;
              }
          }
          
          /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
          @media screen and (max-width: 600px) {
              .column {
                  -ms-flex: 100%;
                  flex: 100%;
                  max-width: 100%;
              }
          }


          /* анимация увеличения фото */

          #myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

/* Caption of Modal Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation */
.modal-content, #caption {    
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)} 
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    position: sticky;
    top: 30px;
    left: 1300px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
    /* margin-top: auto; */
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
}
          </style>


          <!-- Header -->
          <div class="header">
            <h1>Галерея Дня открытых дверей в ГУАП</h1>
            <p>22 ноября</p>
            <p>День&nbsp;Открытых&nbsp;Дверей ГУАП.&nbsp;<br>Презентация вуза и выступление представителя приемной комиссии.&nbsp;<br>Узнай больше о поступлении в ГУАП.<br></p>
                    <!-- <br>22 ноября -->
          </div>

          <style>

            .header{
              background: linear-gradient( to right, #183a66, #195ba8 );
              color: #fff;
            }
          </style>

          <!-- Photo Grid -->
          <div class="row"> 
            <div class="column">
              <img id="myImg"  src="/images/-1.png" style="width:100%">
                <!-- The Modal -->
                      <div id="myModal" class="modal">
                        <span class="close">×</span>
                        <img class="modal-content" id="img01">
                        <div id="caption"></div>
                      </div>
              <img id="myImg" src="/images/-11.png" style="width:100%">
              <div id="myModal" class="modal">
                <span class="close">×</span>
                <img class="modal-content" id="img01">
                <div id="caption"></div>
              </div>
              <img src="/images/-1.png" style="width:100%">
              <img src="/images/-1.png" style="width:100%">
              <img src="/images/-1.png" style="width:100%">
              <img src="/images/-1.png" style="width:100%">
              <img src="/images/-1.png" style="width:100%">
            </div>
            <div class="column">
              <img src="/images/-1.png" style="width:100%">
              <img src="/images/-1.png" style="width:100%">
              <img src="/images/-1.png" style="width:100%">
              <img src="/images/-1.png" style="width:100%">
              <img src="/images/-1.png" style="width:100%">
              <img src="/images/-1.png" style="width:100%">
            </div>  
            <div class="column">
              <img src="/images/-1.png" style="width:100%">
              <img src="/images/-1.png" style="width:100%">
              <img src="/images/-1.png" style="width:100%">
              <img src="/images/-1.png" style="width:100%">
              <img src="/images/-1.png" style="width:100%">
              <img src="/images/-1.png" style="width:100%">
              <img src="/images/-1.png" style="width:100%">
            </div>
            <div class="column">
              <img src="/images/-1.png" style="width:100%">
              <img src="/images/-1.png" style="width:100%">
              <img src="/images/-1.png" style="width:100%">
              <img src="/images/-1.png" style="width:100%">
              <img src="/images/-1.png" style="width:100%">
              <img src="/images/-1.png" style="width:100%">
            </div>
          </div>

      </div>

      <script>
        // Get the modal
        var modal = document.getElementById('myModal');
        
        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById('myImg');
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function(){
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }
        
        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];
        
        // When the user clicks on <span> (x), close the modal
        span.onclick = function() { 
            modal.style.display = "none";
        }
        </script>






    
    
    <?php
        include 'podval.php';
    ?>

