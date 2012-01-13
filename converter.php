<?php


$amount = $_GET['amount'];
$from = $_GET['from'];
$to = $_GET['to'];

if($from == $to){
    echo $amount;
    exit;
}
 
$string = $amount.$from.'%3D%3F'.$to;
$url = 'http://www.google.com/ig/calculator?hl=en&q='. $amount . $from .'%3D%3F'. $to;
$result = file_get_contents($url);
 
$result = explode('"', $result);
$converted_amount = explode(' ', $result[3]);
$conversion = $converted_amount[0];
echo $conversion;

?>