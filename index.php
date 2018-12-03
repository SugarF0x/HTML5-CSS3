<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styles/style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <title>Waxom</title>
    </head>

    <body>
        <?php require("req/list.php") ?>
        
        <section class="header">
            <a href="#" class="logo">
                <img src="img/logo.png" alt="logo.png">
            </a>
            
            <div class="nav">
                <ul>
                    <?php foreach($navbutts as $button): ?>
                        <li>
                            <a href="<?php echo $button['link']?>">
                            <?php echo $button['text']?>
                            </a>
                        </li>
                    <?php endforeach ?>
                </ul>
                
                <a href="#" class="nav__cart"></a>
                <form action="#">
                    <input type="search">
                </form>
            </div>
            
            <section class="header__slider">
                <div class="button-left">
                    
                </div>
                
                <div class="text">
                    <h2></h2>
                    <h1></h1>
                    <p></p>
                    
                    <button></button>
                </div>
                
                <div class="button-right">
                    
                </div>
            </section>
            
            <form action="#">
                <input type="radio">
            </form>
        </section>
        
        <section class="figs">
            <div class="figs__top">
                <?php foreach($figs as $fg): ?>
                    <figure>
                        <i></i>
                        <figcaption>
                            
                        </figcaption>
                        
                        <p></p>
                    </figure>
                <?php endforeach ?>
            </div>
            
            <h2></h2>
            <p></p>
            <img src="#" alt="figs.png">
        </section>
        
        <?php require("req/footer.php") ?>
    </body>
</html>