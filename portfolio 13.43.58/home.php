
<?php get_header('category'); ?>

    <main>
        <div id="work">
            <div class="work-title">
                <h1 class="title2">Works</h1>
                <h4 class="sub-title2">制作実績</h4>
            </div>

            <div id="category">
                <ul class="category">
                    <li class="category-list">すべて</li>
                    <li class="category-list">Webサイト</li>
                    <li class="category-list">バナー</li>
                    <li class="category-list">LP</li>
                </ul>
            </div>

            <div class="all-works">
                <?php
                    $args = array(
                        'post_type' => 'post',
                        'category_name' => 'all',
                        'posts_per_page' => '10',
                    );
                    $posts = get_posts($args);
                ?>

                <?php foreach($posts as $post): ?>
                <?php setup_postdata($post); ?>
                <div class="work-ex">
                    <img class="work-img" src="./img/bridal.png">
                    <h3 class="work-category">バナー</h3>
                    <h3 class="work-name"><?php the_title(); ?></h3>
                </div>
                <div class="work-ex">
                    <img class="work-img" src="./img/catcaffe.png">
                    <h3 class="work-category">バナー</h3>
                    <h3 class="work-name"><?php the_title(); ?></h3>
                </div>
                <div class="work-ex">
                    <img class="work-img" src="./img/datumo.png">
                    <h3 class="work-category">バナー</h3>
                    <h3 class="work-name"><?php the_title(); ?></h3>
                </div>

                <?php endforeach; ?>
            </div>

            
        </div>
    </main>
</body>
</html>