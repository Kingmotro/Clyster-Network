<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Clyster Network&trade;</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>

    <?php
    $playeronline = file_get_contents('http://minecraft-api.com/api/ping/playeronline.php?ip=149.202.150.189&port=25565');
    ?>

    <?php
    $maxplayer = file_get_contents('http://minecraft-api.com/api/ping/maxplayer.php?ip=149.202.150.189&port=25565');
    ?>

    <!-- RESPONSIVE MOBILE EVENTS -->

    <div id="mobileMenu">
      <div id="mobilemenuClose">
        <i class="material-icons" onclick="mobileMenuClose()">close</i>
      </div>
      <div id="mobilemenuNavs">
        <a href="#">
          <div class="Navs">
            <h1>SHOP</h1>
          </div>
        </a>
        <a href="http://forums.clyster.net/">
          <div class="Navs">
            <h1>FORUM</h1>
          </div>
        </a>
        <a href="http://www.clyster.net/punishments">
          <div class="Navs">
            <h1>BANS</h1>
          </div>
        </a>
        <div class="Navs" onclick="menuCloseRules()">
          <h1>RULES</h1>
        </div>
        <div class="Navs" onclick="menuCloseChangelog()">
          <h1>CHANGELOG</h1>
        </div>
        <div class="Navs" onclick="menuCloseTerms()">
          <h1>TERMS AND CONDITIONS</h1>
        </div>
      </div>
    </div>

    <div id="mobileActionbar">
      <div id="actionbarLeft">
        <i class="material-icons" onclick="mobileMenuOpen()">menu</i>
        <h1>Clyster Network</h1>
      </div>
      <div id="actionbarRight">
        <i class="material-icons">more_vert</i>
      </div>
    </div>

    <!-- WEBSITE COMPUTER FORMAT -->

    <div id="contents">
      <div id="rules">
        <div class="tabClose">
          <i class="material-icons" onclick="rulesClose()">close</i>
        </div>
        <div id="rulesContent">
          <h1>RULES</h1>
          <hr>
          <article id="allRules">
            <h3>• Respect All Server Members</h3>
            <p>- Penalty: ?</p>
            <h3>• Account &amp; Responsibility</h3>
            <p>- Penalty: ?</p>
            <h3>• Cheating &amp; Scamming</h3>
            <p>- Penalty: ?</p>
            <h3>• Ranks &amp; Shop</h3>
            <p>- Penalty: ?</p>
            <h3>• Advertising &amp; Spamming</h3>
            <p>- Penalty: ?</p>
            <h3>• Language &amp; Skins</h3>
            <p>- Penalty: ?</p>
            <h3>• Bullying &amp; Fraud</h3>
            <p>- Penalty: ?</p>
          </article>
        </div>
      </div>

      <div id="changelog">
        <div class="tabClose">
          <i class="material-icons" onclick="changelogClose()">close</i>
        </div>
        <div id="changelogContent">
          <h1>CHANGELOG</h1>
          <hr>
        </div>
      </div>

      <div id="terms">
        <div class="tabClose">
          <i class="material-icons" onclick="termsClose()">close</i>
        </div>
        <div id="termsContent">
          <h1>TERMS AND CONDITIONS</h1>
          <hr>
        </div>
      </div>
    </div>

    <div id="particles-js">
    </div>

    <div id="Logo">

      <div id="Menu">
        <a href="http://shop.clyster.net/">
          <div class="navs">
            <i class="material-icons">shopping_cart</i><h1>SHOP</h1>
          </div>
        </a>
        <a href="http://forums.clyster.net/">
          <div class="navs">
            <i class="material-icons">account_circle</i><h1>FORUM</h1>
          </div>
        </a>
        <a href="http://www.clyster.net/punishments">
          <div class="navs">
            <i class="material-icons">block</i><h1>BANS</h1>
          </div>
        </a>
        <a href="#">
          <div class="navs" onclick="rulesOpen()">
            <i class="material-icons">assignment</i><h1>RULES</h1>
          </div>
        </a>
        <a href="http://forums.clyster.net/forums/changelogs.3/">
          <div class="navs">
            <i class="material-icons">folder</i><h1>CHANGELOG</h1>
          </div>
        </a>
        <a href="#">
          <div class="navs" onclick="termsOpen()">
            <i class="material-icons">error</i><h1>TERMS AND CONDITIONS</h1>
          </div>
        </a>
      </div>

      <div id="Info" class="ip" data-clipboard-text="mc.clyster.net">
        <div id="copiedIP">
          <div class="checkmark">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
          	 viewBox="0 0 161.2 161.2" enable-background="new 0 0 161.2 161.2" xml:space="preserve">
             <path class="path" fill="none" stroke="#0C707F" stroke-miterlimit="10" d="M425.9,52.1L425.9,52.1c-2.2-2.6-6-2.6-8.3-0.1l-42.7,46.2l-14.3-16.4
            	c-2.3-2.7-6.2-2.7-8.6-0.1c-1.9,2.1-2,5.6-0.1,7.7l17.6,20.3c0.2,0.3,0.4,0.6,0.6,0.9c1.8,2,4.4,2.5,6.6,1.4c0.7-0.3,1.4-0.8,2-1.5
            	c0.3-0.3,0.5-0.6,0.7-0.9l46.3-50.1C427.7,57.5,427.7,54.2,425.9,52.1z"/>
              <circle class="path" fill="none" stroke="#0C707F" stroke-width="4" stroke-miterlimit="10" cx="80.6" cy="80.6" r="62.1"/>
              <polyline class="path" fill="none" stroke="#0C707F" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="113,52.8
            	74.1,108.4 48.2,86.4 "/>

          <circle class="spin" fill="none" stroke="#0C707F" stroke-width="4" stroke-miterlimit="10" stroke-dasharray="120.2175,12.2175" cx="80.6" cy="80.6" r="73.9"/>

          </svg>

          </div>
          <p id="copiedText">See you soon!</p>
          <p id="copiedText2">copied mc.clyster.net</p>
        </div>
		    <p id="ip">MC.CLYSTER.NET</p>
		    <div id="playersOnline">
            <p id="online">Online:</p>
			      <p class="onlinePlayers"><?php echo $playeronline; ?></p>
		    </div>
	    </div>
    </div>

    <div id="ClysterLogo">
      <img id="" src="./img/logo.png" alt="logo">
    </div>

    <style type="text/css">
    body {
      background-image: url("./img/bg1.png");
      background-size: cover;
      background-attachment: fixed;
      height: 100vh;
      margin: 0;
    }

    a, a:link, a:visited {
      text-decoration: none;
    }

    /* RESPONSIVE */

    #mobileActionbar {
      height: 48pt;
      width: 100%;
      background-color: rgba(43, 58, 127, 0.2);
      display: none;
      justify-content: space-between;
      align-items: center;
      z-index: 8;
    }

    #mobileActionbar i {
      cursor: pointer;
    }

    #actionbarLeft {
      display: flex;
      align-items: center;
      color: white;
      margin-left: 16pt;
    }

    #actionbarLeft h1 {
      margin: 0;
      font-family: sans-serif;
      font-size: 15pt;
      margin-left: 8pt;
    }

    #actionbarRight {
      display: flex;
      align-items: center;
      color: white;
      margin-right: 16pt;
    }

    #mobileMenu {
      height: 100vh;
      width: 0;
      background-color: rgba(255, 255, 255, 0.9);
      position: fixed;
      z-index: 10;
      overflow-y: auto;
    }

    #mobilemenuClose {
      height: 36pt;
      display: flex;
      justify-content: flex-end;
      align-items: center;
    }

    #mobilemenuClose i {
      margin-right: 12pt;
      cursor: pointer;
    }

    #mobilemenuNavs {
      display: flex;
      flex-direction: column;
      color: #aaa;
      overflow: hidden;
    }

    #mobilemenuNavs a {
      color: #aaa;
    }

    .Navs {
      height: 48pt;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .Navs h1 {
      margin: 0;
      font-size: 14pt;
      font-family: sans-serif;
      padding: 0pt 16pt 0pt 16pt;
    }

    /* RESPONSIVE MOBILE EVENTS */

    @media screen and (max-width: 960pt) {

      /* STANDARD MENU DISPLAY NONE */

      #Menu {
        display: none;
      }

      #Menu a {
        display: none;
      }

      .navs {
        display: none;
      }

      .navs h1 {
        display: none;
      }

      .navs i {
        display: none;
      }

      #Info {
        display: none;
      }

      #playersOnline p {
        display: none;
      }

      #playerofmax {
        display: none;
      }

      .onlinePlayers {
        display: none;
      }

      #playersOnline {
        display: none;
      }

      #ip {
        display: none;
      }

      /* MOBILE EVENTS APPEAR */

      #mobileActionbar {
        display: flex;
      }

    }

    @media screen and (min-width: 960pt) {
      #Info {
        background-color: rgba(000, 0, 0, 0.1);
      }
    }

    /* CONTENTS */

    #contents {
      width: 60%;
      height: 95vh;
      z-index: 5;
      display: flex;
      justify-content: center;
      align-items: center;
      position: absolute;
      left: 20%;
    }

    #contents hr {
      width: 30vh;
    }

    #contents h1 {
      font-family: sans-serif;
      text-align: center;
      margin: 0;
    }

    .tabClose {
      width: 100%;
      height: 30pt;
      display: flex;
      justify-content: flex-end;
      align-items: center;
    }

    .tabClose i {
      margin-right: 8pt;
      cursor: pointer;
    }

    #rules {
      width: 90%;
      height: 80vh;
      background-color: white;
      box-shadow: 0pt 16pt 10pt rgba(000, 0, 0, 0.2);
      display: flex;
      flex-direction: column;
      overflow-y: auto;
    }

    #allRules {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    #allRules h3 {
      font-family: sans-serif;
      margin: 0;
      margin-top: 2vh;
      color: #aaa;
    }

    #allRules p {
      margin-top: 1vh;
      font-style: italic;
      color: #000;
    }

    #rulesContent {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    #rulesContent h1, #rulesContent hr {
      color: #0C707F;
    }

    #rules {
      display: none;
    }

    #changelog {
      width: 90%;
      height: 80vh;
      background-color: white;
      box-shadow: 0pt 16pt 10pt rgba(000, 0, 0, 0.2);
      display: flex;
      flex-direction: column;
      color: #aaa;
      overflow-y: auto;
    }

    #changelogContent {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    #changelog {
      display: none;
    }

    #terms {
      width: 90%;
      height: 80vh;
      background-color: white;
      box-shadow: 0pt 16pt 10pt rgba(000, 0, 0, 0.2);
      display: flex;
      flex-direction: column;
      color: #aaa;
      overflow-y: auto;
    }

    #termsContent {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    #terms {
      display: none;
    }

    /* MAIN PAGE */

    #particles-js {
      position: absolute;
      width: 100%;
      height: 98vh;
      z-index: 1;
      -webkit-touch-callout: none;
      -webkit-user-select: none;
      -khtml-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    #Logo {
      height: 95vh;
      width: 100%;
      display: flex;
      justify-content: space-between;
      align-items: center;
      z-index: 3;
      position: absolute;
    }

    #ClysterLogo {
      width: 100%;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      position: absolute;
    }

    #ClysterLogo img {
      width: 30vh;
      height: 30vh;
    }

    /* MENU */

    #Menu {
      width: 20%;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .navs {
      width: 11vh;
      height: 10vh;
      background-color: rgba(000, 0, 0, 0.1);
      display: flex;
      align-items: center;
      transition: 0.3s;
      overflow: hidden;
      cursor: pointer;
    }

    .navs h1 {
      font-size: 3vh;
      font-family: sans-serif;
      color: white;
      margin-left: 5vh;
    }

    .navs i {
      font-size: 6vh;
      color: white;
      margin-left: 2vh;
    }

    .navs:hover {
      width: 40vh;
      border-bottom-right-radius: 10pt;
      border-top-right-radius: 10pt;
    }

    /* INFO */

    #Info {
      width: 20%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      height: 25vh;
      cursor: pointer;
      border-bottom-left-radius: 10pt;
      border-top-left-radius: 10pt;
    }

    #playersOnline {
      font-size: 10vh;
      font-family: sans-serif;
      margin: 0;
      font-weight: bold;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .onlinePlayers {
      color: white;
      margin: 0;
    }

    #ip {
      font-size: 4vh;
      font-family: sans-serif;
      padding: 5pt;
      margin: 0;
      color: white;
      text-align: center;
      font-weight: bold;
      cursor: pointer;
    }

    #online {
      font-size: 4vh;
      font-family: sans-serif;
      color: #0C707F;
      margin: 0;
    }

    #copiedIP {
      width: 45vh;
      height: 30vh;
      background-color: #f5f5f5;
      position: absolute;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      left: 50%;
      margin-left: -23vh;
      border-radius: 10pt;
    }

    #copiedIP {
      display: none;
    }

    #copiedIP p {
      margin: 0;
    }

    #copiedCheck {
      font-size: 12vh;
      color: green;
      font-family: sans-serif;
      width: 100%;
      display: flex;
      justify-content: center;
    }

    #copiedText {
      width: 100%;
      font-size: 5vh;
      font-family: sans-serif;
      color: #777;
      display: flex;
      justify-content: center;
    }

    #copiedText2 {
      width: 100%;
      font-size: 2vh;
      font-family: sans-serif;
      color: #aaa;
      display: flex;
      margin-top: 20pt;
      justify-content: center;
    }

    /* CHECKMARK */

    .checkmark {
  width: 14vh;
  margin: 0 auto;
  padding-top: 4vh;
}

.path {
  stroke-dasharray: 1000;
  stroke-dashoffset: 0;
  animation: dash 2s ease-in-out;
  -webkit-animation: dash 2s ease-in-out;
}

.spin {
  animation: spin 2s;
  -webkit-animation: spin 2s;
  transform-origin: 50% 50%;
  -webkit-transform-origin: 50% 50%;
}

#copiedIP p {
  font-family: sans-serif;
  font-weight: bold;
  text-align: center;
  animation: text .5s linear .4s;
  -webkit-animation: text .4s linear .3s;
}

@-webkit-keyframes dash {
 100% {
   stroke-dashoffset: 0;
 }
}

@keyframes dash {
 0% {
   stroke-dashoffset: 1000;
 }
 100% {
   stroke-dashoffset: 0;
 }
}

@-webkit-keyframes spin {
  0% {
    -webkit-transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
  }
}

@keyframes spin {
  0% {
    -webkit-transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
  }
}

@-webkit-keyframes text {
  0% {
    opacity: 0; }
  100% {
    opacity: 1;
  }


  @keyframes text {
  0% {
    opacity: 0; }
  100% {
    opacity: 1;
  }
}

    </style>

    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-localScroll/1.4.0/jquery.localScroll.min.js"></script>
    <script src="https://unpkg.com/scrollreveal@3.3.2/dist/scrollreveal.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://mcapi.us/scripts/minecraft.js"></script>
    <script src="./js/clipboard.min.js"></script>
    <script src="./js/particles.js/particles.min.js"></script>
    <script src="./js/script.js"></script>

  </body>
</html>
