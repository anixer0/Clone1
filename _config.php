<?php 
$conn = mysqli_connect("localhost", 'root' , '', "anime") or die("Connection fail");


$websiteTitle = "ANIXER";
$websiteUrl = "//{$_SERVER['SERVER_NAME']}";
$websiteLogo = $websiteUrl . "/files/images/logo_zoro.png";
$contactEmail = "anixer42@gmail.com";

$version = "0.1";

$discord = "https://discord.com";
$github = "https://github.com";
$twitter = "https://twitter.com";
 
$disqus = "https://anixer2.disqus.com/embed.js";
$api = "https://anixer-api2.vercel.app/"; 

$banner = $websiteUrl . "/files/images/banner.png";
?>
