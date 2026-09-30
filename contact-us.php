<?php
require_once __DIR__ . '/vendor/autoload.php';
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="slick/slick.css">
  <link rel="stylesheet" href="slick/slick-theme.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="icon" type="image/x-icon" href="assets/icons/favicon.ico">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Contact Us | Netmatters</title>
</head>

<body>
<div id="container">
  <?php require __DIR__ . '/partials/header.php'; ?>

  <!-- Contact Us content will go here -->

  <?php require __DIR__ . '/partials/footer.php'; ?>
</div>

<div id="side-menu-placeholder" class="sidebar"></div>
<div class="sidebar-overlay"></div>
<div id="cookie-placeholder"></div>

<script src="js/jquery-4.0.0.js"></script>
<script src="slick/slick.js"></script>
<script src="js/stickify.js"></script>
<script type="module" src="js/main.js"></script>
</body>
</html>