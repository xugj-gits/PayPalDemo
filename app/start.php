<?php
require "vendor/autoload.php"; //载入sdk的自动加载文件
define('SITE_URL', 'http://localhost/PayPalDemo'); //网站url自//创建支付对象实例
$paypal = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'AV5Sf9TKTxEj1AdJU8V8LzAVyTydiLDqfwe4B5F3N-LQXoP5WJA26cTt_SDgd27h_luMhFluAVpExKLl',
        'EH_LNiwaOE6cZamkoAo0z5NGfLb2yReagFNueRN8AlZ7vEOxPR7poR9pH58SPgj7EHEiK-LpRgdSOfk-'
    )
);