<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NZ Portfolio</title>
    <meta name="description" content="蔵面奈々ポートフォリオ">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- CDN読み込みをHeadで入れる。i タグは挿入したいアイコンフォントをコピペするだけでいい-->
</head>
<body>
    <!-- HEADER-->
    <header>
        <!-- MENU -->
        <div class="header">
            <!-- Header,navigation / Smart Phone -->
            <div class="header-sp">
                <a href="index.html"><p class="logo">藏</p></a>
            </div>
            <i id="menu-sp" class="bi bi-list" alt="ナビゲーションを開く" onclick="document.getElementById('nav-sp').style.display = 'block'"></i>
        </div>
        <nav id="nav-sp">
            <i id="close-sp" class="bi bi-x-circle" alt="ナビゲーションを閉じる" onclick="document.getElementById('nav-sp').style.display = 'none'"></i>
              <ul>
                <li class="logo"><a href="index.html">藏</a></li>
                <li class="menu"><a href="index.html#works" onclick="document.getElementById('nav-sp').style.display = 'none'">WORKS</a></li>
                <li class="menu"><a href="index.html#skills" onclick="document.getElementById('nav-sp').style.display = 'none'">SKILLS</a></li>
                <li class="menu"><a href="index.html#about" onclick="document.getElementById('nav-sp').style.display = 'none'">ABOUT</a></li>
                <li class="menu"><a href="index.html#contact" onclick="document.getElementById('nav-sp').style.display = 'none'">CONTACT</a></li>
              </ul>
        </nav>
        <!-- Header,navigation / PC -->
        <nav id="nav-pc">
            <ul class="nav-pc-list">
                <li class="menu-pc"><a href="index.html#works">WORKS</a></li>
                <li class="menu-pc"><a href="index.html#skills">SKILLS</a></li>
                <li class="logo"><a href="index.html">藏</a></li>
                <li class="menu-pc"><a href="index.html#about">ABOUT</a></li>
                <li class="menu-pc"><a href="index.html#contact">CONTACT</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="main-visual">
            <div ><img src="images/main.jpg" alt=""></div>
            <div class="main-message">
                <div class="main-text">
                    <h1>つなげる<br>デザイン</h1>
                    <p>藏面奈々</p>
                </div>
            </div>
        </section>
        <section id="works">
            <h2>WORKS</h2>
            <div class="work-container">
                <div class="work-item">
                    <a href="works.html#step1">
                        <div class="work-img"><img src="images/works/photoshop.png" alt="パソコンに向かう女性"></div>
                        <h4>ITスクールのバナー</h4>
                        <p>Adobe Photoshop</p>
                    </a>
                </div>
                <div class="work-item">
                    <a href="works.html#step2">
                        <div class="work-img"><img src="images/works/wordpress1.png" alt="流行ヘアスタイルの若い女性"></div>
                        <h4>美容室のHP</h4>
                        <p>WordPress</p>
                    </a>
                </div>
                <div class="work-item">
                    <a href="works.html#step3">
                        <div class="work-img"><img src="images/works/wordpress2.png" alt="大学の校舎"></div>
                        <h4>大学のHP</h4>
                        <p>WordPress/PHP</p>
                    </a>
                </div>
                <div class="work-item">
                    <a href="works.html#step4">
                        <div class="work-img"><img src="images/works/htmlcss.png" alt="workwork"></div>
                        <h4>企業のHP</h4>
                        <p>HTML/CSS</p>
                    </a>
                </div>
            </div>
        </section>
        <section id="skills">
            <h2>SKILLS</h2>
            <div class="skill-container">
                <div class="skill-item">
                    <div class="skill-img"><img src="images/skills/photoshop.png" alt="Photoshop"></div>
                    <div class="skill-text">
                        <h3>Adobe Photoshop</h3>
                        <p>Webサイトに必要不可欠なクリエイティブバナーを作ることが可能です。</p>
                    </div>
                </div>
                <div class="skill-item">
                    <div class="skill-img"><img src="images/skills/html.png" alt="html"></div>
                    <div class="skill-text">
                        <h3>HTML/CSS</h3>
                        <p>スマホで見ても表示崩れのないレスポンシブ対応も可能です。</p>
                    </div>
                </div>
                <div class="skill-item">
                    <div class="skill-img"><img src="images/skills/wordpress.png" alt="wordpress"></div>
                    <div class="skill-text">
                        <h3>WordPress</h3>
                        <p>WordPress製のWebサイトを0から構築することが可能です。</p>
                    </div>
                </div>
                <div class="skill-item">
                    <div class="skill-img"><i class="bi bi-globe2"></i></div>
                    <div class="skill-text">
                        <h3>海外対応</h3>
                        <p>多国間のプロジェクトマネジメントもご相談ください。（英・仏語）</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="about">
            <h2>ABOUT</h2>
            <div class="about-container">
                <div class="about-img"><img src="images/aboutme.jpg" alt=""></div>
                <div class="about-text">
                    <p>藏面奈々（ゾウメンナナ）</p>
                    <p>兵庫県在住。会社員の仕事を継続しながら2024年10月にNPOを設立。息子の難病をきっかけに得た経験や社会人として仕事で得た知識を活かし、ITを活用した難病患者とその家族の支援を充実させていくことを目指しています。コミュニティーや患者会立ち上げ、情報発信（会報、ブログ）の立ち上げ等のお手伝いをします。お気軽にご相談ください。<br>フランスでの就労経験10年、海外患者会・コミュニティ等のリサーチもお任せください。</p>
                </div>
            </div>
        </section>
        <section id="contact">
            <h2>CONTACT</h2>
            <p>お問い合わせはSNSからお願いします。</p>
            <div class="sns">
                <a href="#"><img src="images/sns/icon_instagram.gif" alt="Instagram"></a>
                <a href="#"><img src="images/sns/icon_facebook.gif" alt="Facebook"></a>
            </div>
        </section>
    <footer>
        <p class="logo"><a href="index.html">藏</a></p>
    </footer>
</body>
</html>