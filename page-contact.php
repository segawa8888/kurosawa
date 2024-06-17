<?php
/*
Template Name:Contact
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
                送信完了後、受領確認の自動送信メールをお送りしております。<br>
                概ね一週間程度を目安にメールでご連絡をさせていただきます。<br>
                内容によってはお答えできかねる場合もございますので予めご了承ください。<br>
                弊社からの回答メールの転用・転載はご遠慮ください。<br><br>
                携帯電話のメールアドレスやフリーメール（Gmail等）をご登録いただくお客様は、「メールの受信拒否、ドメイン指定受信、迷惑メール防止機能」などにより返信のご連絡が受信できない場合がございますのでご注意ください。
                （「@<a href="mailto:ginzakurosawa.com">ginzakurosawa.com</a>」のドメイン指定解除をお願いいたします。）
                ※メールが送信エラーとなる場合、お電話にてご確認させていただく場合がございます。
              </p>
              <div class="contact-form">
                <p class="contact-form__required"><span>＊</span>印は必須項目です。</p>
                <?php the_content(); ?>
              </div>
            </div>
          </div>
        </section>

</div>
</div>

</main>

<?php get_footer(); ?>