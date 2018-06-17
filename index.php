<?php
$url_ycapi = "https://ycapi.org/iframe/?v=";

$url_received = $_POST["url_yt"]; //recebe a url mandada no form

$url_transforming = substr($url_received, -11);
$url_tranformed = $url_ycapi . $url_transforming;

header ('Location: ' . $url_tranformed);
