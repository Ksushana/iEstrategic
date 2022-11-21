<footer class="footer">
    <div class="footer__container">
        <section class="footer__categories footer-categories">
            <ul class="footer-categories__list">
                <li class="footer-categories__list-item">
                    <ul class="footer-categories__sublist">
                        <?php
                            foreach ($footer_1_menu as $url => $label) {
                        ?>
                            <li class='footer-categories__sublist-item'>
                                <a class='footer-categories__sublist-link' href='<?=$url?>'><?=$label?></a>
                            </li> 
                        <?php   
                        }
                        ?>
                    </ul>
                </li>
                <li class="footer-categories__list-item">
                    <ul class="footer-categories__sublist">
                        <?php
                            foreach ($footer_2_menu as $url => $label) {
                        ?>
                            <li class='footer-categories__sublist-item'>
                                <a class='footer-categories__sublist-link' href='<?=$url?>'><?=$label?></a>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                </li>
                <li class="footer-categories__list-item">
                    <ul class="footer-categories__sublist">
                        <?php
                            foreach ($footer_3_menu as $url => $label) {
                        ?>
                            <li class='footer-categories__sublist-item'>
                                <a class='footer-categories__sublist-link' href='<?=$url?>'><?=$label?></a>
                            </li>    
                        <?php
                        }
                        ?>
                    </ul>
                </li>
                <li class="footer-categories__list-item">
                    <ul class="footer-categories__sublist">
                        <?php
                            foreach ($footer_4_menu as $url => $label) {
                        ?>
                            <li class='footer-categories__sublist-item'>
                                <a class='footer-categories__sublist-link' href='<?=$url?>'><?=$label?></a>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                </li>
                <li class="footer-categories__list-item">
                    <ul class="footer-categories__sublist">
                        <?php
                            foreach ($footer_5_menu as $url => $label) {
                        ?> 
                            <li class='footer-categories__sublist-item'>
                                <a class='footer-categories__sublist-link' href='<?=$url?>'><?=$label?></a>
                            </li>
                        <?php
                            }
                        ?>
                   </ul>
                </li>

                <li class="footer-categories__list-item">
                    <ul class="footer-categories__sublist">
                        <?php
                            foreach ($footer_6_menu as $url => $label) {
                        ?>
                            <li class='footer-categories__sublist-item'>
                                <a class='footer-categories__sublist-link' href='<?=$url?>'><?=$label?></a>
                            </li> 
                        <?php
                            }
                        ?>
                    </ul>
                </li>
                <li class="footer-categories__list-item">
                    <ul>
                        <?php
                            foreach ($footer_7_menu as $url => $label) {
                        ?>
                            <li class='footer-categories__sublist-item'>
                                <a class='footer-categories__sublist-link' href='<?=$url?>'><?=$label?></a>
                            </li>
                        <?php
                            }
                        ?>
                    </ul>
                </li>
            </ul>
        </section>
        <div class="footer__logo">
        <?php 
            $homepage = "/";
            $homeurl = 'index.php';  
            $currentpage = $_SERVER['REQUEST_URI'];
            if($currentpage == $homepage or $currentpage == 'index.php') {
            ?>
             <span class="footer__logo-link">
                <img src="<?=$_logo_image ?>" alt="logo">
            </span>
            <?php 
            } else {
            ?>
            <a class="footer__logo-link" href="/">
                <img src="<?=$_logo_image ?>" alt="logo">
            </a>
            <?php 
            } 
            ?>
           
        </div>
        <nav class="footer__nav">
            <?php
                foreach ($footer_nav_menu as $url => $label) {
            ?>
                <a href='<?=$url?>'><?=$label?></a>
            <?php
               }
            ?>
        </nav>
        <nav class="footer__subnav">
            <span>Copyright © <?php echo date("Y"); ?> iEstrategic</span>
            <?php
                foreach ($footer_disclaimer_menu as $url => $label) {
            ?>
                <a class='footer__subnav-link' href='<?=$url?>'><?=$label?></a>
            <?php
                }
            ?>
            <span>Website by <a  class="footer__tiny-link" href="https://www.iestrategic.es/">iEstrategic</a></span>
        </nav>
    </div>
</footer>