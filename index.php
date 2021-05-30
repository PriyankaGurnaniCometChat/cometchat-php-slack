<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>CometChat PHP</title>
    <!-- firebase -->
    <script src="https://www.gstatic.com/firebasejs/4.8.2/firebase.js"></script>
    <script src="https://www.gstatic.com/firebasejs/4.8.2/firebase-auth.js"></script>

    <!-- cometchat -->
    <script
      type="text/javascript"
      src="https://unpkg.com/@cometchat-pro/chat@2.3.1/CometChat.js"
    ></script>

    <script
      defer
      src="https://widget-js.cometchat.io/v2/cometchatwidget.js"
    ></script>

    <!-- css -->
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div id="main_container" style="display: none">
      <h1>Welcome to CometChat PHP Slack</h1>
      <button onclick="logout();">logout</button>
    </div>

    <div id="cometchat"></div>

    <!-- jQuery -->
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>

    <!-- local scripts -->
    <script src="init.js"></script>
    <script src="index.js"></script>
  </body>
</html>
