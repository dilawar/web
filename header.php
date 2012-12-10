<?php 
session_start();
$base_url = "http://10.107.105.13/";
$_SESSION['url'] = $base_url;
$header = "<!DOCTYPE HTMddL PUBLIC '-//W3C//DTD HTML 4.0 Transitional//EN'>";
$header .= "<HEAD>";
$header .= "<link rel=StyleSheet href='index_files/dilawar.css' type='text/css' media=screen>";
$header .= "<TITLE>Dilawar Singh</TITLE>";
$header .= "<!-- Site navigation menu -->";
$header .= "</HEAD>";
$header .= "<ul class='navbar'>";
$header .= '<li><a href="index.php">Home</a></li>';
$header .= '<li><a href="About.php">About</a></li>';
$header .= '<li><a href="Research.php">Research</a></li>';
$header .= '<li><a href="Writings.php">Writings</a></li>';
$header .= '<li><a href="Readings.php">Readings</a></li>';
$header .= '<li><a href="Resources.php">Resources</a></li>';
$header .= '</ul>';
$header .= '</HEAD>';
echo $header;
?>
