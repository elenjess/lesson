<?
$url = "https://api.content.market.yandex.ru/v2.1.2/shops/id/opinions/.json?sort=date&how=desc&count=2&grade=>4";

$headers = array(
	"Host: api.content.market.yandex.ru",
	"Accept: */*",
	"Authorization: 06fc63f7-4062-484e-86c4-e52c85edfd87"
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$data = curl_exec($ch);
curl_close($ch);
 
$obj = json_decode($data);

$TOTAL = $obj->shopOpinions->total;

foreach($obj->shopOpinions->opinion as $op) {
 
	$id = $op->id;
	$date = $op->date;
	$author = $op->author;
	$pro = $op->pro;
 
	echo '<pre>'; print_r($op); echo '</pre>';
}