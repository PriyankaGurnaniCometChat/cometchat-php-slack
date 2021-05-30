<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>CometChat PHP Slack Login</title>

    <!-- firebase -->
    <script src="https://www.gstatic.com/firebasejs/4.8.2/firebase.js"></script>
    <script src="https://www.gstatic.com/firebasejs/4.8.2/firebase-auth.js"></script>
    <script src="https://cdn.firebase.com/libs/firebaseui/2.5.1/firebaseui.js"></script>
    <link
      type="text/css"
      rel="stylesheet"
      href="https://cdn.firebase.com/libs/firebaseui/2.5.1/firebaseui.css"
    />

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
    <!-- The surrounding HTML is left untouched by FirebaseUI.
         Your app may use that space for branding, controls and other customizations.-->
    <h1 style="text-align: center">Login To CometChat PHP Slack</h1>
    <div id="firebaseui-auth-container"></div>

    <!-- jQuery -->
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <script src="init.js"></script>
    <script src="login.js"></script>
  </body>
</html>
