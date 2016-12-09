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
        <a href="http://www.clyster.net/forums/">
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
        <a href="#">
          <div class="navs">
            <i class="material-icons">shopping_cart</i><h1>SHOP</h1>
          </div>
        </a>
        <a href="http://www.clyster.net/forums/">
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
        <a href="#">
          <div class="navs" onclick="changelogOpen()">
            <i class="material-icons">folder</i><h1>CHANGELOG</h1>
          </div>
        </a>
        <a href="#">
          <div class="navs" onclick="termsOpen()">
            <i class="material-icons">error</i><h1>TERMS AND CONDITIONS</h1>
          </div>
        </a>
      </div>

      <div id="Info">
		      <p id="ip">mc.clyster.net</p>
		      <div id="playersOnline">
			         <p class="onlinePlayers"><?php echo $playeronline; ?></p>
			         <p id="playerofmax">/</p>
               <p class="onlinePlayers"><?php echo $maxplayer; ?></p>
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

    @media screen and (max-width: 1024pt) {

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

    /* CONTENTS */

    #contents {
      width: 80%;
      height: 95vh;
      z-index: 5;
      display: flex;
      justify-content: center;
      align-items: center;
      position: absolute;
      left: 10%;
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
      width: 80%;
      height: 80vh;
      background-color: white;
      box-shadow: 0pt 16pt 10pt rgba(000, 0, 0, 0.2);
      display: flex;
      flex-direction: column;
      color: #aaa;
      overflow-y: auto;
    }

    #rulesContent {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    #rules {
      display: none;
    }

    #changelog {
      width: 80%;
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
      width: 80%;
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
      align-items: center;
      justify-content: center;
      flex-direction: column;
      height: 60vh;
    }

    #playersOnline p {
      font-size: 10vh;
      font-family: sans-serif;
      padding: 5pt;
      margin: 0;
      font-weight: bold;
    }

    #playerofmax {
      color: white;
    }

    .onlinePlayers {
      color: #0C707F;
    }

    #playersOnline {
      display: flex;
    }

    #ip {
      font-size: 4vh;
      font-family: sans-serif;
      padding: 5pt;
      margin: 0;
      color: #0C707F;
      text-align: center;
      margin-bottom: 70pt;
      font-weight: bold;
    }

    </style>

    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-localScroll/1.4.0/jquery.localScroll.min.js"></script>
    <script src="https://unpkg.com/scrollreveal@3.3.2/dist/scrollreveal.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://mcapi.us/scripts/minecraft.js"></script>
    <script src="./js/particles.js/particles.min.js"></script>
    <script src="./js/script.js"></script>

  </body>
</html>
