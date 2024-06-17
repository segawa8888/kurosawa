<?php
/*
Template Name:About
*/
?>


<?php get_header(); ?>

  <main class="page-main">
  <?php get_sidebar(); ?>

    <div class="page page-back__top">
        <div class="page-back-inner about__inner main-inner load-fade">
            <!-- ここはwp時 get-attachmentで背景画像出力 -->
        <h2 class="section-tittle white">About us<br><span class="section-tittle__ja white">わたしたちについて</span></h2> 
    </div>
  </div>

    <section class="page-about">
        <div class="page-about__container">
            <div class="page-about__inner main-inner">
                <p class="page-about__text scroll_up">
                2011年に発生した東日本大震災により、<br>
                かつてクロサワがタイプライターの生産工場を持っていた<br>
                福島県伊達市も大きな被害を受けました。<br>
                ゆかりの深い地域に対し、私たちに何かできることはないか――。<br>
                そんな思いから、福島県産の食材でお菓子を作ったことが<br>
                現在のクロサワの原点です。
                </p>
                <div class="page-about__image scroll_up">
                <div class="swiper">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/about/about-slide01.jpg" alt="slide01">
                    </div>
                    <div class="swiper-slide">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/about/about-slide02.jpg" alt="slide02">
                  </div>
                    <div class="swiper-slide">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/about/about-slide01.jpg" alt="slide01">
                    </div>
                    <div class="swiper-slide">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/about/about-slide02.jpg" alt="slide02">
                  </div>
                  </div>
                </div>
                </div>
                <p class="page-about__text mt-1 scroll_up">
                製法にこだわり、ひとつひとつ丁寧に作り上げる焼き菓子。<br>
                素材の風味や食感を活かした個性豊かなサブレには、<br>
                日々お菓子作りと向き合う、職人の真摯な姿が浮かび上がります。
                </p>
                <div class="page-about__image page-about__bottom scroll_up">
                  <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/images/about/about02.png" media="(min-width:768px)">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/about/about02-sp.png" alt="sable">
                  </picture>
                </div>
                <p class="page-about__text mt-2 scroll_up">
                豊かな土地で育まれた食材と、<br>
              素朴であたたかい焼き菓子に込めた職人のこだわり。<br>
              私たちが大切にしてきた人と土地への思いが、<br>
              この場所から多くの人へ届きますように。
                </p>

                <h2 class="section-tittle mt-3 scroll_up">History</h2> 
                <div class="page-about__history scroll_up">
                    <div class="page-about__history__wrapper">
                      <div class="page-about__history__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/about/history.jpg" alt="歴史">
                      </div>
                      <div class="page-about__history__wrap">
                    <p class="page-about__text">
                    1901年、現在の銀座4丁目に黒沢商店を創業した黒澤貞次郎は、タイプライターの輸入業を開始します。その経験をもとに、日本初の和文印刷電子機の開発にも成功。
                    1912年には銀座６丁目に日本初となる鉄筋コンクリート造りの建物を建設し、不動産業を展開していきました。<br>
                    当時、福島県の伊達市に自社工場を持っていたことから、その後タイプライターの製造も開始。東北の豊かな自然と人々のあたたかさに触れ、その出会いが「地域と人を大切にする」というクロサワの理念の礎となりました。
                    </p>
                    <div class="page-about__btn">
                        <a href="https://www.kurosw.co.jp/" target="_blank" class="page-about-btn">
                            クロサワグループサイトへ
                            <span class="ex-link">
                              <picture>
                                <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/external.svg" media="(min-width:768px)">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/common/external-black.svg" alt="外部リンク">
                              </picture>
                            </span>
                        </a>
                    </div>
                  </div>
                </div>
                </div>
            </div>
        </div>
    </section>
  </main>

  <?php get_footer(); ?>
