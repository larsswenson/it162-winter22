<?php include 'portal-config.php'?>
<!DOCTYPE html>
<html>
<head>
    <title><?=$title?></title>
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="noindex,nofollow" />
    <meta charset="utf-8">
    <script src="https://use.fontawesome.com/6a71565c22.js"></script>
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/portal.css" />
    <link rel="stylesheet" href="css/form.css" />
    <script src="https://use.fontawesome.com/f9b5b6cec1.js"></script>
</head>

<body>
<!-- START WRAPPER -->
<main class="wrapper">
<header>
  <h1><a href="index.php"><i class="logo fa <?=$logo?>"<?=$logo_color?>></i></i>Lars Swenson's IT 162 Portal</a></h1>
  <nav>
    <ul class="topnav" id="myTopnav">
      <?=makeLinks($nav1)?>
      <!-- START COMMENT OUT NAV
      <li><a href="index.php" class="selected">Home</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart/Layout</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contact.php">Contact Lars</a></li>
      END COMMENT OUT NAV -->
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>
        
<!-- START LEFT COL -->
<section>
 <h2 class="pageID"><?=$PageID?></h2>