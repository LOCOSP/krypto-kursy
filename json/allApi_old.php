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

echo number_format($dane['BTC-ADA']->Last, 8, '.', '') . PHP_EOL;
echo number_format($dane['BTC-BCC']->Last, 8, '.', '') . PHP_EOL;
print_r($dane);

/*

  $urlBitBayBTC = 'https://bitbay.net/API/Public/BTCPLN/ticker.json';
  $urlBitBayBCC = 'https://bitbay.net/API/Public/BCCPLN/ticker.json';
  $urlBitBayETH = 'https://bitbay.net/API/Public/ETHPLN/ticker.json';
  $urlBitBayLSK = 'https://bitbay.net/API/Public/LSKPLN/ticker.json';
  $urlBitBayGAME = 'https://bitbay.net/API/Public/GAMEPLN/ticker.json';
  $urlBitBayLTC = 'https://bitbay.net/API/Public/LTCPLN/ticker.json';

  //$jsonStringBeatCoinBTC = file_get_contents($urlBeatCoinBTC);
  //$jsonStringBeatCoinBCC = file_get_contents($urlBeatCoinBCC);
 // $jsonStringBeatCoinETH = file_get_contents($urlBeatCoinETH);
  //$jsonStringBeatCoinLSK = file_get_contents($urlBeatCoinLSK); */



  



  /*$jsonStringBitTrexADA = file_get_contents($urlBitTrexADA);
  $jsonStringBitTrexXLM = file_get_contents($urlBitTrexXLM);
  $jsonStringBitTrexRDD = file_get_contents($urlBitTrexRDD);
  $jsonStringBitTrexXRP = file_get_contents($urlBitTrexXRP);
  $jsonStringBitTrexXMR = file_get_contents($urlBitTrexXMR);
  $jsonStringBitTrexXEM = file_get_contents($urlBitTrexXEM);
  $jsonStringBitTrexBCC = file_get_contents($urlBitTrexBCC);
  $jsonStringBitTrexLTC = file_get_contents($urlBitTrexLTC);
  $jsonStringBitTrexETH = file_get_contents($urlBitTrexETH);
  $jsonStringBitTrexLSK = file_get_contents($urlBitTrexLSK);
  $jsonStringBitTrexGAME = file_get_contents($urlBitTrexGAME);
  $jsonStringBitTrexMUSIC = file_get_contents($urlBitTrexMUSIC);

  $jsonStringBitBayBTC = file_get_contents($urlBitBayBTC);
  $jsonStringBitBayBCC = file_get_contents($urlBitBayBCC);
  $jsonStringBitBayETH = file_get_contents($urlBitBayETH);
  $jsonStringBitBayLSK = file_get_contents($urlBitBayLSK);
  $jsonStringBitBayGAME = file_get_contents($urlBitBayGAME);
  $jsonStringBitBayLTC = file_get_contents($urlBitBayLTC);


  //echo $jsonString;
  //$jsonBeatBTC = json_decode($jsonStringBeatCoinBTC);
  //$jsonBeatBCC = json_decode($jsonStringBeatCoinBCC);
  //$jsonBeatETH = json_decode($jsonStringBeatCoinETH);
  //$jsonBeatLSK = json_decode($jsonStringBeatCoinLSK); */



  /*$jsonBitTrexADA = json_decode($jsonStringBitTrexADA);
  $jsonBitTrexXLM = json_decode($jsonStringBitTrexXLM);
  $jsonBitTrexRDD = json_decode($jsonStringBitTrexRDD);
  $jsonBitTrexXRP = json_decode($jsonStringBitTrexXRP);
  $jsonBitTrexXMR = json_decode($jsonStringBitTrexXMR);
  $jsonBitTrexXEM = json_decode($jsonStringBitTrexXEM);
  $jsonBitTrexLTC = json_decode($jsonStringBitTrexLTC);
  $jsonBitTrexETH = json_decode($jsonStringBitTrexETH);
  $jsonBitTrexLSK = json_decode($jsonStringBitTrexLSK);
  $jsonBitTrexGAME = json_decode($jsonStringBitTrexGAME);
  $jsonBitTrexBCC = json_decode($jsonStringBitTrexBCC);
  $jsonBitTrexMUSIC = json_decode($jsonStringBitTrexMUSIC);

  $jsonBitBTC = json_decode($jsonStringBitBayBTC);
  $jsonBitBCC = json_decode($jsonStringBitBayBCC);
  $jsonBitETH = json_decode($jsonStringBitBayETH);
  $jsonBitLSK = json_decode($jsonStringBitBayLSK);
  $jsonBitGAME = json_decode($jsonStringBitBayGAME);
  $jsonBitLTC = json_decode($jsonStringBitBayLTC);

  //print_r($jsonBit);
  //print_r($json);
  //print_r($json[ count($json) - 1 ]);
  //$ostatniWierszBTC = $jsonBeatBTC[ count($jsonBeatBTC) - 1 ];
  //$ostatniWierszBCC = $jsonBeatBCC[ count($jsonBeatBCC) - 1 ];
 // $ostatniWierszETH = $jsonBeatETH[ count($jsonBeatETH) - 1 ];
 // $ostatniWierszLSK = $jsonBeatLSK[ count($jsonBeatLSK) - 1 ]; */


//  echo date('H:i', $ostatniWierszBTC->time) .  "<br />" . PHP_EOL;

  //echo 'Open ' . $ostatniWiersz->open . PHP_EOL;

  //$format_numberBTC = number_format($ostatniWierszBTC->close, 2, '.', '');
  //$format_numberBCC = number_format($ostatniWierszBCC->close, 2, '.', '');
  //$format_numberETH = number_format($ostatniWierszETH->close, 2, '.', '');
  //$format_numberLSK = number_format($ostatniWierszLSK->close, 2, '.', '');
  //$format_numberLTC = number_format($ostatniWierszLTC->close, 2, '.', '');

  //echo 'BeatCoin.pl BTC:  ' . $ostatniWierszBTC->close  .  "   PLN <br />" . PHP_EOL;
  //echo 'BeatCoin.pl BCC:  ' . $ostatniWierszBCC->close  .  "   PLN <br />" . PHP_EOL;
  //echo 'BeatCoin.pl ETH:  ' . $ostatniWierszETH->close  .  "   PLN <br />" . PHP_EOL;
  //echo 'BeatCoin.pl LSK:  ' . $ostatniWierszLSK->close  .  "   PLN <br />" . PHP_EOL;
  //echo 'High ' . $ostatniWiersz->high . PHP_EOL;
  //echo 'Low ' . $ostatniWiersz->low . PHP_EOL;

  //echo '====================='  .  "<br />" . PHP_EOL;

   /* $bitTrexADA = number_format($jsonBitTrexADA->result->Last, 8, '.', '');
    $bitTrexXLM = number_format($jsonBitTrexXLM->result->Last, 8, '.', '');
    $bitTrexRDD = number_format($jsonBitTrexRDD->result->Last, 8, '.', '');
    $bitTrexXRP = number_format($jsonBitTrexXRP->result->Last, 8, '.', '');
    $bitTrexXMR = number_format($jsonBitTrexXMR->result->Last, 8, '.', '');
    $bitTrexXEM = number_format($jsonBitTrexXEM->result->Last, 8, '.', '');
    $bitTrexLTC = number_format($jsonBitTrexLTC->result->Last, 8, '.', '');
    $bitTrexETH = number_format($jsonBitTrexETH->result->Last, 8, '.', '');
    $bitTrexLSK = number_format($jsonBitTrexLSK->result->Last, 8, '.', '');
    $bitTrexGAME = number_format($jsonBitTrexGAME->result->Last, 8, '.', '');
    $bitTrexBCC = number_format($jsonBitTrexBCC->result->Last, 8, '.', '');
    $bitTrexMUSIC = number_format($jsonBitTrexMUSIC->result->Last, 8, '.', '');

    $bit_format_numberBTC = number_format($jsonBitBTC->last, 2, '.', '');
    $bit_format_numberBCC = number_format($jsonBitBCC->last, 2, '.', '');
    $bit_format_numberETH = number_format($jsonBitETH->last, 2, '.', '');
    $bit_format_numberLSK = number_format($jsonBitLSK->last, 2, '.', '');
    $bit_format_numberGAME = number_format($jsonBitGAME->last, 2, '.', '');
    $bit_format_numberLTC = number_format($jsonBitLTC->last, 2, '.', '');

  //echo 'BitBay.net BTC:  ' .  $jsonBitBTC->last  .  "   PLN <br />" . PHP_EOL;
  //echo 'BitBay.net BCC:  ' .  $jsonBitBCC->last  .  "   PLN <br />" . PHP_EOL;
  //echo 'BitBay.net ETH:  ' .  $jsonBitETH->last  .  "   PLN <br />" . PHP_EOL;
  //echo 'BitBay.net LSK:  ' .  $jsonBitLSK->last  .  "   PLN <br />" . PHP_EOL;

  //class Status {
  //  public $status = 'status';
  //  public $message = 'message';
  //}

  //$mojStatus = new Status();

  //print_r($mojStatus);

  //echo json_encode($mojStatus, JSON_PRETTY_PRINT) . PHP_EOL;
//require ('js/script.js');*/
?>
