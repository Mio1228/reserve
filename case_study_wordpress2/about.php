<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/style-about.css">
    <title>さわやかクリニック/クリニック紹介</title>
</head>

<body>
    <header>
        <p class="title">クリニック紹介</p>

    
            <nav id="nav-pc">
                <a class="log" href="<?php echo get_template_directory_uri(); ?>/index.html"><img class="log1" src="<?php echo get_template_directory_uri(); ?>/img/logo2.png"></a>
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
        <div id="main">
            <!-- コンセプト -->
            <div class="concept-pc">
                <h3>地域の皆様が安心して通える、家族みんなのための歯科医院</h3>
                <p>
                    当院は、小さなお子さまからご年配の方まで、
                    <br>どなたでも安心して通える歯科クリニックを目指しています。
                    <br>単に「治療をする」のではなく、患者さんの不安を和らげ、笑顔で通えることを大切にし、
                    <br>最新の設備とやさしい診療で家族みんなの健康な歯を守れるようサポートしていきます。
                </p>
            </div>

            <!-- スマホ -->
            <div class="concept-sp">
                <h3>地域の皆様が安心して通える,
                    <br>家族みんなのための歯科医院</h3>
                <p>
                    当院は、小さなお子さまからご年配の方まで、どなたでも安心して通える歯科クリニックを目指しています。
                    <br>単に「治療をする」のではなく、患者さんの不安を和らげ、笑顔で通えることを大切にし、最新の設備とやさしい診療で家族みんなの健康な歯を守れるようサポートしていきます。
                </p>
            </div>
            
            <!-- こだわり -->
            <div class="pride">
                <h1>- こだわり -</h1>
                <div class="point">
                    <div class="sub-title">
                        <img class="number" src="./img/1.png">
                        <h2>痛みの少ないやさしい治療</h2>
                    </div>
                    <p class="point-c">
                        麻酔の工夫や最新の技術を取り入れ、痛みを最小限に抑えた治療を心がけています。
                        <br>歯医者が苦手な方も、安心して通っていただけるよう配慮しています。
                    </p>
                </div>

                <div class="point">
                    <div class="sub-title">
                        <img class="number" src="./img/2.png">
                        <h2>お口の健康を守る予防歯科</h2>
                    </div>
                    <p class="point-c">
                        「痛くなったら行く」のではなく、むし歯や歯周病を防ぐ予防ケアを大切にしています。
                        <br>定期検診・クリーニングで、大切な歯を一生涯守ります。
                    </p>
                </div>

                <div class="point">
                    <div class="sub-title">
                        <img class="number" src="./img/3.png">
                        <h2>清潔で最新の設備</h2>
                    </div>
                    <p class="point-c">
                        患者さんが安心して治療を受けられるよう、徹底した衛生管理と最新の歯科医療機器を導入。
                        <br>快適な環境で、質の高い治療を提供します。
                    </p>
                </div>

                <div class="point">
                    <div class="sub-title">
                        <img class="number" src="./img/4.png">
                        <h2>清潔で快適な診療環境</h2>
                    </div>
                    <p class="point-c">
                        患者さんに安心して治療を受けていただけるよう、衛生管理を徹底し、最新の滅菌システムを導入。
                        <br>院内は明るく、清潔感のある快適な空間づくりを心がけています。
                    </p>
                </div>

                <div class="point">
                    <div class="sub-title">
                        <img class="number" src="./img/5.png">
                        <h2 class="h2-pc">小さなお子さまからご年配の方まで通いやすい</h2>
                        <!-- スマホ -->
                         <h2 class="h2-sp">小さなお子さまから<br>ご年配の方まで通いやすい</h2>
                    </div>
                    <p class="point-c">
                       お子さまが楽しく通えるように、キッズスペースを完備。
                       <br>また、ご年配の方やお身体が不自由な方にも安心してご来院いただけるよう、バリアフリー設計になっています。
                    </p>
                </div>
            </div>

            <!-- 院長挨拶 -->
            <div class="greed">
                <h1>- 院長挨拶 -</h1>
                <p class="greed-c">
                    みなさま、こんにちは。
                    <br>「さわやか歯科クリニック」院長の松本 貴子です。
                    <br>当院は、小さなお子さまからご年配の方まで、安心して通える歯科クリニックを目指しています。
                    <br>歯医者に苦手意識を持つ方にも、やさしく丁寧な治療を提供し、リラックスできる環境を整えています。
                    <br>痛みを抑えた治療やわかりやすい説明を心がけ、不安なく通えるよう努めています。
                    <br>また、歯の健康は全身の健康につながるため、治療だけでなく予防歯科にも力を入れています。
                    <br>定期検診やクリーニングを通じて、みなさまの大切な歯を守り続けるお手伝いをしていきます。
                    <br>地域のみなさまにとって、「ここなら安心して通える」と思っていただけるクリニックを目指し、スタッフ一同、努力してまいります。
                    <br>どうぞよろしくお願いいたします。
                </p>
            </div>

            <!-- スタッフ紹介 -->
            <div class="staff">
                <h1>- スタッフ紹介 -</h1>
                <div class="staffs">
                    <img class="face" src="./img/doctor2_matsumoto.jpg">
                    <div class="staff-pc">
                        <h4 class="name">松本 貴子　まつもとたかこ</h4>
                        <h5 class="hobies">
                            得意な治療: むし歯治療・予防歯科・小児歯科
                            <br>趣味: 旅行・読書・カフェ巡り"
                        </h5>
                        <p class="coment">
                            "患者さん一人ひとりに寄り添い、安心して通える歯科医院を目指しています。
                            <br>痛みの少ない治療と、わかりやすい説明を心がけ、地域の皆さまのお口の健康をサポートいたします。
                            <br>歯医者が苦手な方も、リラックスできるよう丁寧に対応いたしますので、どうぞ安心してご来院ください。
                        </p>
                    </div>
                    <!-- スマホ -->
                     <div class="staff-sp">
                        <details>
                            <summary><h4 class="name">松本 貴子　まつもとたかこ</h4></summary>
                            <h5 class="hobies">
                                得意な治療: むし歯治療・予防歯科・小児歯科
                                <br>趣味: 旅行・読書・カフェ巡り"
                            </h5>
                            <p class="coment">
                                "患者さん一人ひとりに寄り添い、安心して通える歯科医院を目指しています。
                                <br>痛みの少ない治療と、わかりやすい説明を心がけ、地域の皆さまのお口の健康をサポートいたします。
                                <br>歯医者が苦手な方も、リラックスできるよう丁寧に対応いたしますので、どうぞ安心してご来院ください。
                            </p>
                        </details>
                    </div>
                </div>

                <div class="staffs">
                    <img class="face" src="./img/doctor1_tanaka.jpg">
                    <div class="staff-pc">
                        <h4 class="name">田中 健吾　たなかけんご</h4>
                        <h5 class="hobies">
                            得意な治療: 口腔外科・親知らずの抜歯・歯周病治療
                            <br>趣味: ランニング・映画鑑賞・登山
                        </h5>
                        <p class="coment">
                            お口の健康は、全身の健康にも大きく関わっています。
                            <br>患者さんが長く健康な歯を維持できるよう、最適な治療とアドバイスを提供いたします。
                            <br>治療に対する不安や疑問があれば、何でもお気軽にご相談ください。
                        </p>
                    </div>
                    <!-- スマホ -->
                    <div class="staff-sp">
                        <details>
                            <summary><h4 class="name">田中 健吾　たなかけんご</h4></summary>
                            <h5 class="hobies">
                                得意な治療: 口腔外科・親知らずの抜歯・歯周病治療
                                <br>趣味: ランニング・映画鑑賞・登山
                            </h5>
                            <p class="coment">
                                お口の健康は、全身の健康にも大きく関わっています。
                                <br>患者さんが長く健康な歯を維持できるよう、最適な治療とアドバイスを提供いたします。
                                <br>治療に対する不安や疑問があれば、何でもお気軽にご相談ください。
                            </p>
                        </details>
                    </div>
                </div>

                <div class="staffs">
                    <img class="face" src="./img/staff1suzuki.jpg">
                    <div class="staff-pc">
                        <h4 class="name">鈴木 由佳　すずきゆか</h4>
                        <h5 class="hobies">
                            得意な分野: クリーニング・ホワイトニング・歯磨き指導
                            <br>趣味: ヨガ・お菓子作り・音楽鑑賞
                        </h5>
                        <p class="coment">
                            患者さんのお口の健康を守るため、クリーニングや予防ケアを担当しています。
                            <br>歯磨きのコツや、デンタルフロスの使い方など、日々のケアについてもお伝えしていますので、お気軽にご相談ください。
                        </p>
                    </div>
                    <!-- スマホ -->
                     <div class="staff-sp">
                        <details>
                            <summary><h4 class="name">鈴木 由佳　すずきゆか</h4></summary>
                            <h5 class="hobies">
                                得意な分野: クリーニング・ホワイトニング・歯磨き指導
                                <br>趣味: ヨガ・お菓子作り・音楽鑑賞
                            </h5>
                            <p class="coment">
                                患者さんのお口の健康を守るため、クリーニングや予防ケアを担当しています。
                                <br>歯磨きのコツや、デンタルフロスの使い方など、日々のケアについてもお伝えしていますので、お気軽にご相談ください。
                            </p>
                        </details>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div id="foot">
                <a class="home" href="index.html"><img class="icon" src="./img/logo2.png"></a>
                <div class="nav2">
                    <a class="a2" href="index.html#news">お知らせ</a>
                    <a class="a2" href="about.html">クリニック紹介</a>
                    <a class="a2" href="contents.html">診察内容</a>
                    <a class="a2" href="reservation.html">予約</a>
                    <a class="a2" href="index.html#access">アクセス</a>
                </div>
        </div>
    </footer>
</body>
</html>