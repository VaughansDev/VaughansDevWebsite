<?php
  require 'config.php';
  require 'titles.php';
?>
<!doctype html>
<html>
  <head>
      <meta charset="utf-8">
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title><?php echo $site . ' | ' . $page?></title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/railscasts.min.css">
      <script src="https://kit.fontawesome.com/cef1fcc158.js" crossorigin="anonymous"></script>

      <link rel="stylesheet" href="../assets/css/scribbler-global.css">
      <?php
      switch ($_SERVER['PHP_SELF']) {
        case "/home.php":?>
          <link rel="stylesheet" href="../assets/css/scribbler-landing.css">
          <?php break;
        case "/docs/getting-started.php":?>
          <link rel="stylesheet" href="../assets/css/scribbler-doc.css">
          <?php break;
        case "/docs/vd-drugs.php":?>
          <link rel="stylesheet" href="../assets/css/scribbler-doc.css">
          <?php break;
        case "/docs/vd-tequilalajob.php":?>
          <link rel="stylesheet" href="../assets/css/scribbler-doc.css">
          <?php break;
        case "/docs/vd-coffeeshopjob.php":?>
          <link rel="stylesheet" href="../assets/css/scribbler-doc.css">
          <?php break;
        case "/docs/vd-lalinternas.php":?>
          <link rel="stylesheet" href="../assets/css/scribbler-doc.css">
          <?php break;
        case "/products/products.php":?>
          <link rel="stylesheet" href="../assets/css/scribbler-landing.css">
          <?php break;
        case "/products/vd-drugs.php":?>
          <link rel="stylesheet" href="../assets/css/scribbler-landing.css">
          <?php break;
      }
      ?>
  </head>
  <body>
  <?php
    require 'nav.php';
?>
