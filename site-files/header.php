
<?php include 'common/_settings.php'; ?>

<header class="header">
    <div class="header__container container">
        <?php 
          $homepage = "/";
          $homeurl = 'index.php';  
          $currentpage = $_SERVER['REQUEST_URI'];
          if($currentpage == $homepage or $currentpage == 'index.php') {
        ?>
        <span class="header__logo">
            <img src="<?=$_logo_image ?>" alt="logo">
        </span>
        <?php 
          } else {
        ?>
        <a class="header__logo" href="/">
            <img src="<?=$_logo_image ?>" alt="logo">
        </a>
        <?php 
          } 
        ?>
        <nav class="header__nav">
            <?php
                foreach ($site_menu as $url => $label) {
            ?>
                <a href="<?=$url ?>"><?=$label ?></a>
            <?php
                }
            ?>
        </nav>
        <nav class="header__user-nav">
            <a href="#"><?=$_iconSearch ?></a>
            <a href="#"><?=$_iconCart ?></a>
            <a href="#"><?=$_svg_user ?></a>
        </nav>
    </div>
</header>