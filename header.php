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

class MyDB extends SQLite3 
{
  function __construct()
  {
    $this->open("visitors.db");
  }
}
//
//$db = MyDB;
//$db->exec("CREATE TABLE IF NOT EXISTS stat 
//  (total INT NOT NULL AUTOINCREAMENT 
//  , ip CHARACTER NOT NULL DEFAULT ''
//  , agent VARCHAR
//  , ref VARCHAR 
//  , time DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00'
//  , uri VARCHAR NOT NULL DEFAULT ''
//  , PRIMARY KEY (total)
//)");
//
?>
