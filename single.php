<?php get_header();?>

<main>

<section id="main-visual">
            <div class="work-main-img">
                <img src="<?php echo get_template_directory_uri(  ); ?>/images/work-main-hands.jpg">
                <div class="work-maintext">つなぐ</div>
            </div>
        </section>
        <section id="works-journey">
                <h2>WORKS</h2>
                <p>Customer Centric E2E digital journey</p>
                <p>インターネット上での情報検索から、問い合わせに辿り着くまでの一連の行動がスムーズに繋がることを考慮したアイデア・デザインをご提案いたします。</p>
            <div class="e2ejourney">
                <a class="journey-step" href="works.html#step1">
                    <p><i class="bi bi-search"></i> 探す・見つける</p>
                </a>
            </div>
            <div class="arrow"><i class="bi bi-caret-down"></i></div>
            <div class="e2ejourney">
                <a class="journey-step" href="works.html#step2">
                    <p><i class="bi bi-book"></i> 知る・学ぶ</p>
                </a>
            </div>
            <div class="arrow"><i class="bi bi-caret-down"></i></div>
            <div class="e2ejourney">
                <a class="journey-step" href="works.html#step4">
                    <p><i class="bi bi-envelope"></i> つながる</p>
                </a>
            </div>           
        </section>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
<!-- コンテンツのHTMLやPHPを書く -->
<h1>
<?php the_title(); ?>
</h1>
<?php the_content(); ?>
<?php endwhile; else: ?>
<!-- コンテンツがないときのHTMLやPHPを書く -->
<?php endif; ?>

</main>

<?php get_footer();?>