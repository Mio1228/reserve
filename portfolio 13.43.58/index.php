<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mio Portfolio</title>
    <link rel="stylesheet" href="style.css"></rink>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Hachi+Maru+Pop&family=Italianno&family=Kiwi+Maru&family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Zain:ital,wght@0,200;0,300;0,400;0,700;0,800;0,900;1,300;1,400&family=Zen+Antique&display=swap" rel="stylesheet">
</head>

<body>
    <header id="head">
        <div id="nav-pc">
            <ul class="nav">
                <li><a href="<?php echo get_template_directory_uri(); ?>#about">＊ABOUT</a></li>
                <li><a href="#works">＊WORKS</a></li>
                <li><a href="#service">＊SERVICE</a></li>
                <li><a href="#contact">＊CONTACT</a></li>
            </ul>
        </div>
        <!-- スマホ -->
        <button id="menu-sp" onclick="document.getElementById('nav-sp').style.display='block'">
            <img class="frame1" src="./img/icon.png" alt="ナビゲーションを開く">
        </button>

        <div id="nav-sp">
             <button id="close" onclick="document.getElementById('nav-sp').style.display='none'">
                ×
            </button>
            <ul class="nav">
                <li><a href="#about" onclick="document.getElementById('nav-sp').style.display='none'">＊ABOUT</a></li>
                <li><a href="#works" onclick="document.getElementById('nav-sp').style.display='none'">＊WORKS</a></li>
                <li><a href="#service" onclick="document.getElementById('nav-sp').style.display='none'">＊SERVICE</a></li>
                <li><a href="#contact" onclick="document.getElementById('nav-sp').style.display='none'">＊CONTACT</a></li>
            </ul>
        </div>
    </header>

    <main>
        <div id="about">
            <h1 class="title">ABOUT</h1>

            <div class="about">
                <div class="profile">
                    <div class="img">
                        <img class="image" src="./img/face.PNG">
                    </div>

                    <div class="content">
                        <h2>Mio</h2>
                        <p>
                            ・1997年生まれ/岡山県出身
                            <br>・接客業を主に経験
                            <br>・現在は副業としてデザインのお仕事を承り中
                            <br>
                            <br>WEBデザインだけでなく、バナー制作やLP制作・Instagramの投稿も承っております。
                        </p>
                    </div>
                </div>
            </div>

            <div class="other">
                <div id="skill">
                    <h2 class="sub-title">- Skill -</h2>
                    <ul class="skill">
                        <li class="skill-list">HTML</li>
                        <li class="skill-list">CSS</li>
                        <li class="skill-list">WordPress</li>
                    </ul>
                </div>

                <div id="tool">
                    <h2 class="sub-title">- Tool -</h2>
                    <ul class="tool">
                        <li class="tool-list">Canva</li>
                        <li class="tool-list">Figma</li>
                    </ul>
                </div>

                <div id="time">
                    <h2 class="sub-title">- Time -</h2>
                    <ul class="time">
                        <li class="time-list">平日20時〜23時</li>
                        <li class="time-list">土日祝10時〜18時</li>
                    </ul>
                </div>
            </div>

        </div>

        <div id="works">
            <h1 class="title">WORKS</h1>

            <div class="works">
                <div class="work">
                    <div class="scroll-infinity__wrap">
                        <ul class="scroll-infinity__list scroll-infinity__list--left">
                            <li class="scroll-infinity__item"><img src="./img/outdor.jpeg" /></li>                        
                            <li class="scroll-infinity__item"><img src="./img/english-school.png" /></li>
                            <li class="scroll-infinity__item"><img src="./img/pasta.png" /></li>
                            <li class="scroll-infinity__item"><img src="./img/pancake.jpeg" /></li>
                            <li class="scroll-infinity__item"><img src="./img/haircare.png" /></li>
                            <li class="scroll-infinity__item"><img src="./img/english-lesson.png" /></li>
                        </ul>
                        <ul class="scroll-infinity__list scroll-infinity__list--left">
                            <li class="scroll-infinity__item"><img src="./img/bridal.png" /></li>                        
                            <li class="scroll-infinity__item"><img src="./img/neil.png" /></li>
                            <li class="scroll-infinity__item"><img src="./img/datumo.png" /></li>
                            <li class="scroll-infinity__item"><img src="./img/swuitfea.png" /></li>
                            <li class="scroll-infinity__item"><img src="./img/catcaffe.png" /></li>
                            <li class="scroll-infinity__item"><img src="./img/mother'sday.png" /></li>
                        </ul>
                    </div>
                </div>

                <a class="more" href="category.html">view more</a>
            </div>
        </div>

        <!-- service -->
        <div id="service">
            <h1 class="title">SERVICE</h1>

            <div class="service">
                <div class="service-content">
                    <img class="photo" src="./img/pc_desk.jpg">
                    <h3 class="service-name">Website</h3>
                    <p class="service-detail">
                        ノーコードツールを使用した制作を行います。
                        簡単なコーディングも可能です。
                    </p>
                </div>
                <div class="service-content">
                    <img class="photo" src="./img/ps_sumaho.jpg">
                    <h3 class="service-name">Banner</h3>
                    <p class="service-detail">
                        クライアント様のご要望をしっかりとヒヤリングし、制作を行います。
                    </p>
                </div>
                <div class="service-content">
                    <img class="photo" src="./img/insta.jpg">
                    <h3 class="service-name">SNS </h3>
                    <p class="service-detail">
                        XやInstagramの投稿内容の制作だけでなく、運営代理も承っております。
                    </p>
                </div>
            </div>
        </div>

        <!-- contact -->
        <div id="contact">
            <h1 class="title">CONTACT</h1>
        </div>
    </main>
    
</body>
</html>