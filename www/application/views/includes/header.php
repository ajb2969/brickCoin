<?php
/**
header.php
*/
$style = base_url('css/bootstrap.min.css');
$style2 = base_url('css/mdb.min.css');
$style3 = base_url('css/index.css');
$favicon = base_url('img/favicon.png')
?>
<!DOCTYPE html>
<html>
<head>
	<title>BrickCoin</title>
      <link rel="shortcut icon" href="<?=$favicon?>" />
	<link rel="stylesheet" type="text/css" href="<?=$style?>">
	<link rel="stylesheet" type="text/css" href="<?=$style2?>">
	<link rel="stylesheet" type="text/css" href="<?=$style3?>">
</head>
<body>

<div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="Index.html">Home</a>
      <br/>
      <a href="About.html">About</a>
      <a href="Services.html">Services</a>
      <a href="About.html">Clients</a>
      <a href="Contact.html">Contact</a>
</div>

<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

