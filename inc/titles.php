<?php
switch ($_SERVER['PHP_SELF']) {
  case "/index.php":
    $page = 'Home';
    break;
  case "/docs/index.php":
    $page = 'Docs | Getting Started';
    break;
  case "/docs/setup.php":
    $page = 'Docs | Setup';
    break;
  case "/docs/index.php":
    $page = 'Docs | VD-Drugs';
    break;
}

  ?>
