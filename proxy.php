<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/vnd.apple.mpegurl");

$api_url = "https://stalker.santhosh-home-101066.site/live.m3u8?cmd=ffrt%20http%3A%2F%2Flocalhost%2Fch%2F24059"; // API URL

$m3u8_url = file_get_contents($api_url);

if ($m3u8_url) {
    echo $m3u8_url;
} else {
    echo "Error fetching stream URL";
}
?>
