<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: text/plain"); // returning a URL as plain text

$api_url = "https://stalker.santhosh-home-101066.site/live.m3u8?cmd=ffrt%20http%3A%2F%2Flocalhost%2Fch%2F24059";

// Instead of downloading the content, just echo the URL
echo $api_url;
?>
