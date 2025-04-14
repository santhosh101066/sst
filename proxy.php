<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/vnd.apple.mpegurl");

$api_url = "https://allinonereborn.com/tech.m3u8?id=1529"; // API URL

$m3u8_url = file_get_contents($api_url);

if ($m3u8_url) {
    echo $m3u8_url;
} else {
    echo "Error fetching stream URL";
}
?>
