<?php include 'fp-config.php'?>
<!DOCTYPE html>
<html>
<head>
    <title><?=$title?></title>
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="noindex,nofollow" />
    <meta charset="utf-8">
    <script src="https://use.fontawesome.com/6a71565c22.js"></script>
    <link rel="stylesheet" href="css/fpnav.css" />
    <link rel="stylesheet" href="css/forms.css" />
    <link rel="stylesheet" href="css/fp.css" />
</head>

<body>
<main class="wrapper">
<header>
  <h1><a href="template.php"><i class="logo fa <?=$logo?>"<?=$logo_color?>></i>Alejandro Ulloa Hair</a></h1>
  <nav>
    <ul class="topnav" id="myTopnav">
      <?=makeLinks($nav1)?>
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>
        
<section>
<h2 class="pageID"><?=$PageID?></h2>