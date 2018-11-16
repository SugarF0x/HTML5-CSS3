<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styles/style.css">
        <title>Макет и всё такое</title>
    </head>

    <body>
        <?php require('req/script.php'); ?>
        <?php require('req/header.php'); ?>
        
        <main>
            <div class="mainDiv" id="about">
               <section>
                    <div>
                        <!-- Empty div for the box -->
                    </div>
                   
                    <h1>About your product</h1>
                    
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt deleniti ullam inventore ab excepturi nisi quam odit, recusandae esse earum, non doloribus officiis, eum ipsum rerum hic cum molestias possimus repudiandae enim quia pariatur. Esse sint quia aperiam qui nisi.</p>
                    
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil officia voluptatum ipsam, iusto earum harum accusamus saepe omnis! Error natus sed rem temporibus enim! Culpa perferendis rerum, repellat nisi quaerat omnis, error, quas aut odio, beatae quasi est natus? Temporibus?</p>
               </section>                
            </div>
            
            <div class="mainDiv" id="dignity">
                <h1>Dignity and pluses of the product</h1>
                
                <?php for ($i = 1; $i <= 6; $i++) : ?>
                    <section>
                        <img src="img/Layer%202.png" alt="">
                        
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit voluptatum iure nisi vel fugit similique reiciendis expedita nemo, magni magnam dicta ea maiores culpa necessitatibus soluta voluptates praesentium, sed dolor ipsa qui! Aut nesciunt illum maiores ab, expedita eius, debitis?
                        </p>
                    </section>
                <?php endfor ?>
            </div>
            
            <div class="mainDiv" id="screenshots">
                <h1>Screenshots</h1>
                
                <?php for ($i=1; $i<=4; $i++): ?>
                    <section>
                        <div>
                            <!-- Empty div for the box -->
                        </div>
                        
                        <h1>Desc of screenshot</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, vel explicabo ratione at tenetur, perspiciatis soluta hic odio officiis facilis?
                        </p>
                    </section>
                <?php endfor ?>
            </div>
            
            <div class="mainDiv" id="reviews">
                <h1>Reviews</h1>
                
                <?php for ($i=1; $i<=4; $i++): ?>
                    <section>
                        <div>
                            <!-- Empty fic for the circle -->
                        </div>
                        
                        <article>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla quod saepe repellendus voluptatem fuga aspernatur modi ad pariatur assumenda excepturi.
                            </p>
                            <p>
                                Laurence S.
                            </p>
                        </article>
                    </section>
                <?php endfor ?>
            </div>
            
            <div class="mainDiv" id="buy">
                <h1>Buy now</h1>
                
                <div>
                    <?php
                        require('req/list.php');
                        foreach($list as $ls):
                    ?>

                            <section>
                                <h1>
                                    <?php
                                        echo $ls['name'];
                                    ?>
                                </h1>

                                <h2>
                                    <?php
                                        echo '$';
                                        echo $ls['price'];
                                    ?>
                                </h2>

                                <ul>
                                    <?php
                                        for ($i=1; $i<=$ls['bullets']; $i++):
                                    ?>
                                        <li><?php echo generateRandomString(rand(10,20)) ?></li>
                                    <?php
                                        endfor;
                                    ?>
                                </ul>
                                
                                <a href="#">
                                    BUY
                                </a>
                            </section>
                    <?php endforeach ?>
                </div>
            </div>
        </main>
        
        <?php require('req/footer.php'); ?>
    </body>
</html>