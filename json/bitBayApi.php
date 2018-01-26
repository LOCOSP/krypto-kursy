<?php

$urlBitBayBTC = 'https://bitbay.net/API/Public/BTCPLN/ticker.json';
$urlBitBayBCC = 'https://bitbay.net/API/Public/BCCPLN/ticker.json';
$urlBitBayETH = 'https://bitbay.net/API/Public/ETHPLN/ticker.json';
$urlBitBayLSK = 'https://bitbay.net/API/Public/LSKPLN/ticker.json';
$urlBitBayGAME = 'https://bitbay.net/API/Public/GAMEPLN/ticker.json';
$urlBitBayLTC = 'https://bitbay.net/API/Public/LTCPLN/ticker.json';
$urlBitBayDASH = 'https://bitbay.net/API/Public/DASHPLN/ticker.json';
$urlBitBayBTG = 'https://bitbay.net/API/Public/BTGPLN/ticker.json';

$jsonStringBitBayBTC = file_get_contents($urlBitBayBTC);
$jsonStringBitBayBCC = file_get_contents($urlBitBayBCC);
$jsonStringBitBayETH = file_get_contents($urlBitBayETH);
$jsonStringBitBayLSK = file_get_contents($urlBitBayLSK);
$jsonStringBitBayGAME = file_get_contents($urlBitBayGAME);
$jsonStringBitBayLTC = file_get_contents($urlBitBayLTC);
$jsonStringBitBayDASH = file_get_contents($urlBitBayDASH);
$jsonStringBitBayBTG = file_get_contents($urlBitBayBTG);

$jsonBitBTC = json_decode($jsonStringBitBayBTC);
$jsonBitBCC = json_decode($jsonStringBitBayBCC);
$jsonBitETH = json_decode($jsonStringBitBayETH);
$jsonBitLSK = json_decode($jsonStringBitBayLSK);
$jsonBitGAME = json_decode($jsonStringBitBayGAME);
$jsonBitLTC = json_decode($jsonStringBitBayLTC);
$jsonBitDASH = json_decode($jsonStringBitBayDASH);
$jsonBitBTG = json_decode($jsonStringBitBayBTG);

$bit_format_numberBTC = number_format($jsonBitBTC->last, 2, ',', '');
$bit_format_numberBCC = number_format($jsonBitBCC->last, 2, ',', '');
$bit_format_numberETH = number_format($jsonBitETH->last, 2, ',', '');
$bit_format_numberLSK = number_format($jsonBitLSK->last, 2, ',', '');
$bit_format_numberGAME = number_format($jsonBitGAME->last, 2, ',', '');
$bit_format_numberLTC = number_format($jsonBitLTC->last, 2, ',', '');
$bit_format_numberDASH = number_format($jsonBitDASH->last, 2, ',', '');
$bit_format_numberBTG = number_format($jsonBitBTG->last, 2, ',', '');

$plnPrice = $bit_format_numberBTC;