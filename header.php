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

function sqlite_open()
{
  $conn = new SQLite3('visitors.db');
  $conn->exec("CREATE TABLE IF NOT EXISTS stats
  (id INTEGER PRIMARY KEY  
  , ip CHARACTER NOT NULL DEFAULT ''
  , agent VARCHAR
  , ref VARCHAR 
  , time DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00'
  , uri VARCHAR DEFAULT ''
  , sid VARCHAR NOT NULL)");
  return $conn;
}

function insertIntoDB()
{
  if(array_key_exists('HTTP_REFERER', $_SERVER))
    $ref = $_SERVER['HTTP_REFERER'];
  else 
    $ref = '';
  $remote = $_SERVER['REMOTE_ADDR'];
  $agent = $_SERVER['HTTP_USER_AGENT'];
  $uri = $_SERVER['REQUEST_URI'];
  $time = $_SERVER['REQUEST_TIME'];
  $sid = $_SERVER['HTTP_COOKIE'];
  $conn = sqlite_open();
  $conn->exec("REPLACE INTO stats (id, ip, agent, time, uri, sid, ref)
    VALUES ((SELECT max(id) FROM stats)+1, '$remote', '$agent', '$time', '$uri', '$sid', '$ref')");
  $conn->close();
}


?>
