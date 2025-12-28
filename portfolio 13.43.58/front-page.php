
<?php get_header() ;?>

    <main>
        <div id="about">
            <h1 class="title">ABOUT</h1>

            <div class="about">
                <div class="profile">
                    <div class="img">
                        <img class="image" src="<?php echo get_template_directory_uri(); ?>/img/face.PNG">
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
                            <li class="scroll-infinity__item"><img src="<?php echo get_template_directory_uri(); ?>/img/outdor.jpeg" /></li>                        
                            <li class="scroll-infinity__item"><img src="<?php echo get_template_directory_uri(); ?>/img/english-school.png" /></li>
                            <li class="scroll-infinity__item"><img src="<?php echo get_template_directory_uri(); ?>/img/pasta.png" /></li>
                            <li class="scroll-infinity__item"><img src="<?php echo get_template_directory_uri(); ?>/img/pancake.jpeg" /></li>
                            <li class="scroll-infinity__item"><img src="<?php echo get_template_directory_uri(); ?>/img/haircare.png" /></li>
                            <li class="scroll-infinity__item"><img src="<?php echo get_template_directory_uri(); ?>/img/english-lesson.png" /></li>
                        </ul>
                        <ul class="scroll-infinity__list scroll-infinity__list--left">
                            <li class="scroll-infinity__item"><img src="<?php echo get_template_directory_uri(); ?>/img/bridal.png" /></li>                        
                            <li class="scroll-infinity__item"><img src="<?php echo get_template_directory_uri(); ?>/img/neil.png" /></li>
                            <li class="scroll-infinity__item"><img src="<?php echo get_template_directory_uri(); ?>/img/datumo.png" /></li>
                            <li class="scroll-infinity__item"><img src="<?php echo get_template_directory_uri(); ?>/img/swuitfea.png" /></li>
                            <li class="scroll-infinity__item"><img src="<?php echo get_template_directory_uri(); ?>/img/catcaffe.png" /></li>
                            <li class="scroll-infinity__item"><img src="<?php echo get_template_directory_uri(); ?>/img/mother'sday.png" /></li>
                        </ul>
                    </div>
                </div>

                <a class="more" href="<?php echo home_url('/home'); ?>">view more</a>
            </div>
        </div>

        <!-- service -->
        <div id="service">
            <h1 class="title">SERVICE</h1>

            <div class="service">
                <div class="service-content">
                    <img class="photo" src="<?php echo get_template_directory_uri(); ?>/img/pc_desk.jpg">
                    <h3 class="service-name">Website</h3>
                    <p class="service-detail">
                        ノーコードツールを使用した制作を行います。
                        簡単なコーディングも可能です。
                    </p>
                </div>
                <div class="service-content">
                    <img class="photo" src="<?php echo get_template_directory_uri(); ?>/img/ps_sumaho.jpg">
                    <h3 class="service-name">Banner</h3>
                    <p class="service-detail">
                        クライアント様のご要望をしっかりとヒヤリングし、制作を行います。
                    </p>
                </div>
                <div class="service-content">
                    <img class="photo" src="<?php echo get_template_directory_uri(); ?>/img/insta.jpg">
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