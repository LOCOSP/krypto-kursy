<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

$marketNames = array (
    'BTC-ADA',
    'BTC-LSK',
    'BTC-ETH',
    'BTC-LTC',
    'BTC-GAME',
    'BTC-MUSIC',
    'BTC-RDD',
    'BTC-XEM',
    'BTC-XMR',
    'BTC-XMG',
    'BTC-XLM',
    'BTC-BCC',
    'BTC-SC',
    'USDT-BTC',
);

$symbolWaluty = array(
    'BTC-ADA' => 'STS',
    'BTC-LSK' => 'STS',
    'BTC-ETH' => 'STS',
    'BTC-LTC' => 'STS',
    'BTC-GAME' => 'STS',
    'BTC-MUSIC' => 'STS',
    'BTC-RDD' => 'STS',
    'BTC-XEM' => 'STS',
    'BTC-XMR' => 'STS',
    'BTC-XMG' => 'STS',
    'BTC-XLM' => 'STS',
    'BTC-BCC' => 'STS',
    'BTC-SC' => 'STS',
    'USDT-BTC' => 'USD',
);


$urlBitTrexAllMarkets = 'https://bittrex.com/api/v1.1/public/getmarketsummaries';
$jsonStringBitTrexAllMarkets = file_get_contents($urlBitTrexAllMarkets);
$jsonBitTrexAllMarkets = json_decode($jsonStringBitTrexAllMarkets);


$dane = array();

foreach($jsonBitTrexAllMarkets->result as $item) {
    if(in_array($item->MarketName, $marketNames)) {
        $dane[$item->MarketName] = $item;
    }
}

$usdPrice = $dane['USDT-BTC']->Last;
//echo '<pre>'; print_r($dane); echo '</pre>'; 