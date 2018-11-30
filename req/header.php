<header>
    <div class="header__topbar">
        <a href="">
            <img src="img/waxom.png" alt="Waxom.png" class="topbar__logo">
            
            <div class="topbar__name">
                Waxom
            </div>
        </a>

        <div class="topbar__navbar">
            <?php foreach($navbutts as $button): ?>
                <a href="<?php echo $button['link']?>">
                    <?php echo $button['text']?>
                </a>
            <?php endforeach ?>
            
            <div class="navbar__icons">
                <a href="#">
                    <i class="fas fa-shopping-bag"></i>
                </a>
                <a href="#">
                    <i class="fas fa-search"></i>
                </a>
            </div>
        </div>
    </div>
    
    <div class="header__main">
        <!-- иконки стрелок влево и вправо как линки -->
    </div>
</header>