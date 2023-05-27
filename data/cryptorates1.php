<?php
//ADA
    $url3 = 'https://api.coinranking.com/v2/coin/qzawljRxB5bYu/price';
    $json3 = json_decode(file_get_contents($url3), true);
    $coin3 = round($json3['data']['price'],4);
//doge    
    $url4 = 'https://api.coinranking.com/v2/coin/a91GCGd_u96cF/price';
    $json4 = json_decode(file_get_contents($url4), true);
    $coin4 = round($json4['data']['price'],4);
//bnb    
    $url6 = 'https://api.coinranking.com/v2/coin/WcwrkfNI4FUAe/price';
    $json6 = json_decode(file_get_contents($url6), true);
    $coin6 = round($json6['data']['price'],2);
//SHIBBA    
    $url5 = 'https://api.coinranking.com/v2/coin/xz24e0BjL/price';
    $json5 = json_decode(file_get_contents($url5), true);
    $coin5 = round($json5['data']['price'],8);

    
    $sheet = array('ADA' => $coin3, 'DOGE' => $coin4, 'BNB' => $coin6, 'SHIBA' => $coin5);
 
    // encode array to json
    $json = json_encode($sheet);
    $bytes = file_put_contents("rates1.json", $json); 
    // $bytes = file_put_contents("public_html/app/data/rates1.json", $json); 
    echo "The number of bytes written are $bytes.";
?>