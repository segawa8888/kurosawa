<?php
/*
Template Name:Thanks
*/
?>


<?php get_header(); ?>

<main class="page-main">
  <?php get_sidebar(); ?>

    <div class="page page__top">
        <div class="page-inner page__inner main-inner">
        <h2 class="section-tittle load-fade">Contact<br><span class="section-tittle__ja">お問い合わせ</span></h2> 

        <section class="contact load-fade">
          <div class="contact-container">
            <div class="contact-wrapper">
              <p class="contact__text">
                <span class="contact__thanks__text">お問い合わせ内容の送信が完了しました。</span>
                お問い合わせいただきありがとうございます。<br>
                確認のためにお客様に自動返信メールをお送りしております。<br>
                万が一自動返信メールが届かない場合は、お手数ですがお電話にてお問い合わせください。
              </p>
              <div class="contact-form">
              <?php the_content(); ?>
              </div>
              <div class="contact__btn">
                <a href="<?php echo home_url(); ?>" class="btn btn-brown">TOPページに戻る</a>
              </div>
            </div>
          </div>
        </section>

</div>
</div>

</main>

<?php get_footer(); ?>