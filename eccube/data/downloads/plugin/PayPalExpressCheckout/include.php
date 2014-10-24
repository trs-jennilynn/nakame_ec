<?php
// モジュール名
define('MDL_PAYPAL_EXPRESS_CODE', 'mdl_paypal_express');
// Plugin code
define('PLG_PAYPAL_EXPRESS_CODE', 'PayPalExpressCheckout');
// 希望数量の入力は許可しない
define('PAYPAL_EXPRESS_UNDEFINED_QUANTITY', '0');
// US Dollar
define('PAYPAL_EXPRESS_CURRENCY_CODE', 'USD');
// Country code: USA
define('PAYPAL_EXPRESS_COUNTRY_CODE', 'US');
// 文字エンコーディングは UTF-8
define('PAYPAL_EXPRESS_CHARSET', 'utf-8');
// 配送先住所の入力を求めない
define('PAYPAL_EXPRESS_NO_SHIPPING', '1');
// 通信欄の入力を求めない
define('PAYPAL_EXPRESS_NO_NOTE', '1');
// PayPal ログイン画面の URL
define('PAYPAL_EXPRESS_LINK_URL', "https://www.paypal.com/cgi-bin/webscr?cmd=_express-checkout");
define('PAYPAL_EXPRESS_LINK_URL_SANDBOX', "https://www.sandbox.paypal.com/cgi-bin/webscr?cmd=_express-checkout");
// NVP API のエンドポイント
define('PAYPAL_EXPRESS_NVP_URL', 'https://api-3t.paypal.com/nvp');
define('PAYPAL_EXPRESS_NVP_URL_SANDBOX', 'https://api-3t.sandbox.paypal.com/nvp');
// エクスプレスチェックアウトボタン
define('PAYPAL_EXPRESS_CHECKOUT_BUTTON', 'https://fpdbs.paypal.com/dynamicimageweb?cmd=_dynamic-image');
define('PAYPAL_EXPRESS_CHECKOUT_BUTTON_SANDBOX', 'https://fpdbs.sandbox.paypal.com/dynamicimageweb?cmd=_dynamic-image');
// NVP API のバージョン
define('PAYPAL_EXPRESS_API_VERSION', '71.0');
// 支払の動作
define('PAYPAL_EXPRESS_PAYMENTACTION', 'Sale');
// ログファイルのパス
define("PAYPAL_EXPRESS_LOG_PATH", DATA_REALDIR. "logs/paypal.log");
// BUTTONSOURCE
define('PAYPAL_EXPRESS_BUTTONSOURCE', 'EC-CUBE_cart_EC_JP');
/** API署名を取得するURL */
define('PAYPAL_API_SIGNATURE_URL', 'https://www.paypal.com/row/cgi-bin/webscr?cmd=_get-api-signature&generic-flow=true');
define('PAYPAL_SANDBOX_API_SIGNATURE_URL' , 'https://www.sandbox.paypal.com/row/cgi-bin/webscr?cmd=_get-api-signature&generic-flow=true');
