<?php
//btc
    $url = 'https://api.coinranking.com/v2/coin/Qwsogvtv82FCd/price';
    $json = json_decode(file_get_contents($url), true);
    $coin = round($json['data']['price'],2);
    
    $url1 = 'https://api.coinranking.com/v2/coin/razxDUgYGNAdQ/price';
    $json1 = json_decode(file_get_contents($url1), true);
    $coin1 = round($json1['data']['price'],2);
    
    $url2 = 'https://api.coinranking.com/v2/coin/D7B1x_ks7WhV5/price';
    $json2 = json_decode(file_get_contents($url2), true);
    $coin2 = round($json2['data']['price'],2);
    
    $url3 = 'https://api.coinranking.com/v2/coin/ZlZpzOJo43mIo/price';
    $json3 = json_decode(file_get_contents($url3), true);
    $coin3 = round($json3['data']['price'],2);
    
    $sheet = array('BTC' => $coin, 'ETH' => $coin1, 'LTC' => $coin2, 'BCH' => $coin3);
 
    // encode array to json
    $json = json_encode($sheet);
    $bytes = file_put_contents("rates.json", $json); 
    echo "The number of bytes written are $bytes.";
?>