<?php
namespace Vijay\RandomQuote;

class RandomQuote{
    public function get(){
        $url = "https://dummyjson.com/quotes/random";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        $quote_array = json_decode($response , true);
        curl_close($ch);
        return  $quote_array['quote'].' - '.$quote_array['author'];
    }
}