<?php
  require 'config.php';
  require 'titles.php';
?>
  <?php
switch ($_SERVER['PHP_SELF']) {
  case "/home.php":?>
    <nav>
      <div class="logo"></div>
      <ul class="menu">
        <div class="menu__item toggle"><span></span></div>
        <li class="menu__item"><a href="index.php" class="link link--dark"><i class="fa-solid fa-house"></i> Home</a></li>
        <li class="menu__item"><a href="docs/index.php" class="link link--dark"><i class="fa fa-book"></i> Documentation</a></li>
        <li class="menu__item"><a href="products/index.php" class="link link--dark"><i class="fa-solid fa-box"></i> Products</a></li>
        <li class="menu__item"><a href="https://vaughansdev.tebex.io" class="link link--dark"><i class="fa-solid fa-store"></i> Store</a></li>
      </ul>
    </nav>
    <?php break;
  case "/docs/getting-started.php":?>
    <div class="doc__bg"></div>
    <nav class="header">
      <h1 class="logo">VaughansDev <span class="logo__thin">Docs</span></h1>
      <ul class="menu">
        <div class="menu__item toggle"><span></span></div>
        <li class="menu__item"><a href="../index.php" class="link link--dark"><i class="fa-solid fa-house"></i> Home</a></li>
        <li class="menu__item"><a href="index.php" class="link link--dark"><i class="fa fa-book"></i> Documentation</a></li>
        <li class="menu__item"><a href="../products/index.php" class="link link--dark"><i class="fa-solid fa-box"></i> Products</a></li>
        <li class="menu__item"><a href="https://vaughansdev.tebex.io" class="link link--dark"><i class="fa-solid fa-store"></i> Store</a></li>
      </ul>
    </nav>
  <?php break;
    case "/docs/vd-drugs.php":?>
    <div class="doc__bg"></div>
    <nav class="header">
      <h1 class="logo">VaughansDev <span class="logo__thin">Docs</span></h1>
      <ul class="menu">
        <div class="menu__item toggle"><span></span></div>
        <li class="menu__item"><a href="../index.php" class="link link--dark"><i class="fa-solid fa-house"></i> Home</a></li>
        <li class="menu__item"><a href="index.php" class="link link--dark"><i class="fa fa-book"></i> Documentation</a></li>
        <li class="menu__item"><a href="../products/index.php" class="link link--dark"><i class="fa-solid fa-box"></i> Products</a></li>
        <li class="menu__item"><a href="https://vaughansdev.tebex.io" class="link link--dark"><i class="fa-solid fa-store"></i> Store</a></li>
      </ul>
    </nav>
    <?php break;
    case "/docs/vd-tequilalajob.php":?>
    <div class="doc__bg"></div>
    <nav class="header">
      <h1 class="logo">VaughansDev <span class="logo__thin">Docs</span></h1>
      <ul class="menu">
        <div class="menu__item toggle"><span></span></div>
        <li class="menu__item"><a href="../index.php" class="link link--dark"><i class="fa-solid fa-house"></i> Home</a></li>
        <li class="menu__item"><a href="index.php" class="link link--dark"><i class="fa fa-book"></i> Documentation</a></li>
        <li class="menu__item"><a href="../products/index.php" class="link link--dark"><i class="fa-solid fa-box"></i> Products</a></li>
        <li class="menu__item"><a href="https://vaughansdev.tebex.io" class="link link--dark"><i class="fa-solid fa-store"></i> Store</a></li>
      </ul>
    </nav>
    <?php break;
    case "/docs/vd-coffeeshopjob.php":?>
    <div class="doc__bg"></div>
    <nav class="header">
      <h1 class="logo">VaughansDev <span class="logo__thin">Docs</span></h1>
      <ul class="menu">
        <div class="menu__item toggle"><span></span></div>
        <li class="menu__item"><a href="../index.php" class="link link--dark"><i class="fa-solid fa-house"></i> Home</a></li>
        <li class="menu__item"><a href="index.php" class="link link--dark"><i class="fa fa-book"></i> Documentation</a></li>
        <li class="menu__item"><a href="../products/index.php" class="link link--dark"><i class="fa-solid fa-box"></i> Products</a></li>
        <li class="menu__item"><a href="https://vaughansdev.tebex.io" class="link link--dark"><i class="fa-solid fa-store"></i> Store</a></li>
      </ul>
    </nav>
    <?php break;
    case "/docs/vd-lalinternas.php":?>
    <div class="doc__bg"></div>
    <nav class="header">
      <h1 class="logo">VaughansDev <span class="logo__thin">Docs</span></h1>
      <ul class="menu">
        <div class="menu__item toggle"><span></span></div>
        <li class="menu__item"><a href="../index.php" class="link link--dark"><i class="fa-solid fa-house"></i> Home</a></li>
        <li class="menu__item"><a href="index.php" class="link link--dark"><i class="fa fa-book"></i> Documentation</a></li>
        <li class="menu__item"><a href="../products/index.php" class="link link--dark"><i class="fa-solid fa-box"></i> Products</a></li>
        <li class="menu__item"><a href="https://vaughansdev.tebex.io" class="link link--dark"><i class="fa-solid fa-store"></i> Store</a></li>
      </ul>
    </nav>
    <?php break;
    case "/products/products.php":?>
    <nav>
      <div class="logo"></div>
      <ul class="menu">
        <div class="menu__item toggle"><span></span></div>
        <li class="menu__item"><a href="../index.php" class="link link--dark"><i class="fa-solid fa-house"></i> Home</a></li>
        <li class="menu__item"><a href="../docs/index.php" class="link link--dark"><i class="fa fa-book"></i> Documentation</a></li>
        <li class="menu__item"><a href="index.php" class="link link--dark"><i class="fa-solid fa-box"></i> Products</a></li>
        <li class="menu__item"><a href="https://vaughansdev.tebex.io" class="link link--dark"><i class="fa-solid fa-store"></i> Store</a></li>
      </ul>
    </nav>
    <?php break;
    case "/products/vd-drugs.php":?>
    <nav>
      <div class="logo"></div>
      <ul class="menu">
        <div class="menu__item toggle"><span></span></div>
        <li class="menu__item"><a href="../index.php" class="link link--dark"><i class="fa-solid fa-house"></i> Home</a></li>
        <li class="menu__item"><a href="../docs/index.php" class="link link--dark"><i class="fa fa-book"></i> Documentation</a></li>
        <li class="menu__item"><a href="index.php" class="link link--dark"><i class="fa-solid fa-box"></i> Products</a></li>
        <li class="menu__item"><a href="https://vaughansdev.tebex.io" class="link link--dark"><i class="fa-solid fa-store"></i> Store</a></li>
      </ul>
    </nav>
    <?php break;
}
  ?>
