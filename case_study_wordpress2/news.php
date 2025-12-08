<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/style-news.css">
    <title>さわやかクリニック/ニュース</title>
</head>
<body>
     <header>
        <p class="title">お知らせ</p>

    
            <nav id="nav-pc">
                <a class="log" href="<?php echo get_template_directory_uri(); ?>/index.html"><img class="log1" src="./img/logo2.png"></a>
                <ul>
                    <li><a href="<?php echo get_template_directory_uri(); ?>/index.html#news">お知らせ</a></li>
                    <li><a href="<?php echo get_template_directory_uri(); ?>/about.html">クリニック紹介</a></li>
                    <li><a href="<?php echo get_template_directory_uri(); ?>/contents.html">診察内容</a></li>
                    <li><a href="<?php echo get_template_directory_uri(); ?>/reservation.html">予約</a></li>
                    <li><a href="<?php echo get_template_directory_uri(); ?>/index.html#access">アクセス</a></li>
                </ul>
            </nav>

            <!-- スマホ用メニューボタン-->
            <button id="menu-sp" onclick="document.getElementById('nav-sp').style.display='block'">
                <img class="frame1" src="<?php echo get_template_directory_uri(); ?>/img/Frame1.png" alt="ナビゲーションを開く">
            </button>
            <!-- スマホ用ナビゲーション -->
            <div id="nav-sp">
                <button id="close" onclick="document.getElementById('nav-sp').style.display='none'">
                    <img class="frame2" src="<?php echo get_template_directory_uri(); ?>/img/Frame2.png" alt="ナビゲーションを閉じる">
                </button>
                <nav class="nav-sp">
                    <!-- <a class="home" href="home.html"><img class="icon" src="./img/logo2.png"></a> -->
                    <ul>
                        <li><a class="rink" href="<?php echo get_template_directory_uri(); ?>/index.html" onclick="document.getElementById('nav-sp').style.display='none'">ホーム</a></li>
                        <li><a class="rink" href="<?php echo get_template_directory_uri(); ?>/index.html#news" onclick="document.getElementById('nav-sp').style.display='none'">お知らせ</a></li>
                        <li><a class="rink" href="<?php echo get_template_directory_uri(); ?>/about.html" onclick="document.getElementById('nav-sp').style.display='none'">クリニック紹介</a></li>
                        <li><a class="rink" href="<?php echo get_template_directory_uri(); ?>/contents.html" onclick="document.getElementById('nav-sp').style.display='none'">診察内容</a></li>
                        <li><a class="rink" href="<?php echo get_template_directory_uri(); ?>/reservation.html" onclick="document.getElementById('nav-sp').style.display='none'">予約</a></li>
                        <li><a class="rink" href="<?php echo get_template_directory_uri(); ?>/index.html#access" onclick="document.getElementById('nav-sp').style.display='none'">アクセス</a></li>
                    </ul>
                </nav>
            </div>
       
    </header>

    <main>
        <?php if(have_posts()): ?>
            <?php while(have_posts()) : the_post() ;?>
                <div class="news.detail">
                    <div class="news_detail_title">
                        <h2><?php the_title() ;?></h2>
                    </div>
                    <div class="news_date">
                        <?php the_date() ;?>
                    </div>
                    <div class="news_post_meta">
                        <?php the_content() ;?>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </main>

    <!-- <footer>
        <div id="foot">
                <a class="home" href="<?php echo get_template_directory_uri(); ?>/index.html.html"><img class="icon" src="./img/logo2.png"></a>
                <div class="nav2">
                    <a class="a2" href="<?php echo get_template_directory_uri(); ?>/index.html#news">お知らせ</a>
                    <a class="a2" href="<?php echo get_template_directory_uri(); ?>/about.html">クリニック紹介</a>
                    <a class="a2" href="<?php echo get_template_directory_uri(); ?>/contents.html">診察内容</a>
                    <a class="a2" href="<?php echo get_template_directory_uri(); ?>/reservation.html">予約</a>
                    <a class="a2" href="<?php echo get_template_directory_uri(); ?>/index.html#access">アクセス</a>
                </div>
        </div>
    </footer> -->
</body>
</html>