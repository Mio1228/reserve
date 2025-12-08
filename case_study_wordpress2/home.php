<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/style-basic.css"/>
    <title>さわやか歯科クリニック</title>
</head>
<body>
    <header id="head">
        <nav id="nav-pc">
            <img class="log" src="<?php echo get_template_directory_uri(); ?>/img/logo2.png">
            <ul>
                <li><a href="<?php echo get_template_directory_uri(); ?>/index.html#news">お知らせ</a></li>
                <li><a href="<?php echo get_template_directory_uri(); ?>/about.html">クリニック紹介</a></li>
                <li><a href="<?php echo get_template_directory_uri(); ?>/contents.html">診察内容</a></li>
                <li><a href="<?php echo get_template_directory_uri(); ?>/reservation.html">予約</a></li>
                <li><a href="index.html#access">アクセス</a></li>
            </ul>
        </nav>

        <!-- スマホ用メニューボタン-->
        <img id="log-sp" src="./img/logo2.png">
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
    
    <div id="news">
        <h1>- お知らせ -</h1>

        <div class="news">
            <?php 
                $args= array(
                    'post_type' => 'post',
                    'category_name' => 'news',
                    'posts_per_page' => 3,
                );

                $posts = get_posts($args);
            ?>
            <!-- ループ処理 -->
            <?php foreach($posts as $post): ?>
            <?php setup_postdata($post); ?>
                <div class="news_post_small">
                     <div class="news_post_meta">
                        <ul class="D">
                            <li>
                                <a href="<?php echo the_permalink() ;?>"><?php echo get_the_date() ;?></a>
                            </li>
                        </ul>
                    </div>
                    <div class="news_post_small_title">
                        <a href="<?php get_the_permalink() ;?>"><?php the_title();?></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="date-time">
        <h1>- 診察時間 -</h1>
        <div class="date">
             <table border="1" cellspacing="0">
                <tr>
                    <td>診察時間</td>
                    <td>月</td>
                    <td>火</td>
                    <td>水</td>
                    <td>木</td>
                    <td>金</td>
                    <td>土</td>
                    <td>日</td>
                </tr>
                <tr>
                    <td>午前9:30-13:00</td>
                    <td>○</td>
                    <td>○</td>
                    <td>-</td>
                    <td>○</td>
                    <td>○</td>
                    <td>○</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>午後14:00-18:30</td>
                    <td>○</td>
                    <td>○</td>
                    <td>-</td>
                    <td>○</td>
                    <td>○</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
            </table>

            <div class="time">
                <p class="subtitle">休診日</p>
                <p>水・日休診
                <br>土曜日は午前のみ</p>
            </div>

            <div class="tell">
                <p class="subtitle">お問い合わせ</p>
                <p>tell：ooo-ooo-oooo</p>
            </div>
        </div>
        <a class="reserve" href="reservation.html">ネット予約はこちらから</a>
    </div>

    <div id="access">
        <h1>- アクセス -</h1>
        <div class="address">
            <p class="add">〒105-001
                <br>東京都港区虎ノ門1丁目3-1
                <br>東京メトロ 虎ノ門駅より直結・徒歩1分
                <br>
                <br>※駐車場はないので、
                    <br>近隣のコインパーキングをご利用ください
            </p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6482.747324008026!2d139.74235319445714!3d35.667800290366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b5f5a18eac5%3A0x2a8366f3652c80e1!2z5p2x5Lqs6JmO44OO6ZaA44Kw44Ot44O844OQ44Or44K544Kv44Ko44Ki!5e0!3m2!1sja!2sjp!4v1763974307863!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <footer>
        <div id="foot">
            <a class="home" href="home.html"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/img/logo2.png"></a>
            <div class="nav2">
                <a class="a2" href="<?php echo get_template_directory_uri(); ?>/index.html#news">お知らせ</a>
                <a class="a2" href="<?php echo get_template_directory_uri(); ?>/about.html">クリニック紹介</a>
                <a class="a2" href="<?php echo get_template_directory_uri(); ?>/contents.html">診察内容</a>
                <a class="a2" href="<?php echo get_template_directory_uri(); ?>/reservation.html">予約</a>
                <a class="a2" href="<?php echo get_template_directory_uri(); ?>/index.html#access">アクセス</a>
            </div>
        </div>
    </footer>
</body>
</html>