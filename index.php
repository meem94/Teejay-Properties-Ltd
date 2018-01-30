<!-- <img src="https://a0.muscache.com/im/pictures/be6fd9ca-3f13-4b78-a95b-3139b947bc64.jpg?aki_policy=xx_large" alt=""> -->
<?php
$curl = curl_init(); //$curl is going to be data type curl resource

$search_string = "pc video games 2016";
$url = "https://www.airbnb.co.uk/rooms/20994493?location=wc1x%209ds&adults=1&children=0&infants=0&s=teSmnFwh";

curl_setopt($curl, CURLOPT_CURL, $url);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($curl);

preg_match_all("!https://a0.muscache.com/im/pictures/[^\s]*?-3f13-4b78-a95b-3139b947bc64.jpg!", $result, $matches);

$images = array_values(array_unique($matches[0]));
//print_r($images);

for ($i = 0; $i < count ($images); $i++) {
    echo "<div style='float: left; margin: 10 0 0 0; '>";
    echo "<img src='$images[$i]'><br />";
    echo "</div>";
}


curl_close($curl);
?>