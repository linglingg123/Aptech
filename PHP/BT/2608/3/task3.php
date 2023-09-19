<?php
function getBrowserType()
{
    $userAgent = $_SERVER['HTTP_USER_AGENT'];

    if (strpos($userAgent, 'MSIE') !== false || strpos($userAgent, 'Trident') !== false) {
        return "Internet Explorer";
    } elseif (strpos($userAgent, 'Firefox') !== false) {
        return "Mozilla Firefox";
    } elseif (strpos($userAgent, 'Chrome') !== false) {
        return "Google Chrome";
    } elseif (strpos($userAgent, 'Safari') !== false) {
        return "Apple Safari";
    } elseif (strpos($userAgent, 'Opera') !== false || strpos($userAgent, 'OPR') !== false) {
        return "Opera";
    } else {
        return "Unknown";
    }
}

$browser = getBrowserType();
echo "Your browser is: $browser";
?>