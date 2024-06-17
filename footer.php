<footer id="footer" class="footer">
        <div class="footer-container">
          <div class="footer-wrapper-sp">
            <p class="footer__text">
            <span>商品の発送日について</span>商品の到着までに約2週間程度のお時間をいただきます。発送日の詳細はオンラインショップよりご確認ください。
            </p>
            <div class="footer__border"></div>
            <div class="footer-nav">
              <div class="footer-nav__content">
                <div class="footer-logo">
                <a href="<?php echo home_url(); ?>">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/common/footer-logo-white.svg" alt="KUROSAWA">
                </a>
                </div>
                <?php
                        wp_nav_menu( array( 
                          'theme_location' => 'footer-menu-sp'
                        ) );
                      ?>
              </div>
            </div>
            <p class="footer__catch">
              Cherishing the land and people<br>
              we’re linked by fate—<br>
              this is how KUROSAWA has started its business,<br>
              and how our sable cookies are produced.<br><br>
              Land and people form a culture.<br>
              We wish to convey richness of the land and<br>
              devotion of producers<br>
              to you, and to a lot of people.
            </p>
            <div class="footer__btn">
              <a href="https://onlineshop.ginzakurosawa.com/" class="btn btn-white footer-btn">オンラインショップ
                <span class="footer-angle">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/common/angle-right-white.svg" alt="白右矢印">
                </span>
              </a>
            </div>
            <div class="footer__icon">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/Instagram-white.svg" alt="Instagram">
            </div>
          </div>

          <!-- footer-menu-pc -->
          <div class="footer-wrapper">
            <div class="footer-logo">
            <a href="<?php echo home_url(); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/footer-logo.svg" alt="KUROSAWA">
            </a>
            </div>
            <div class="footer-nav">
            <?php 
        wp_nav_menu( array( 
          'theme_location' => 'footer-menu'
        ) ); 
      ?>
            </div>
            <div class="footer__icon">
              <a href="" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/Instagram-white.svg" alt="Instagram">
            </a>
            </div>
            <div class="footer__btn">
              <a href="https://onlineshop.ginzakurosawa.com/" class="btn btn-white footer-btn">オンラインショップ
                <span class="footer-angle">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/common/angle-right-white.svg" alt="白右矢印">
                </span>
              </a>
            </div>
          </div>
        </div>
        <p class="footer-copyright">© ginza kurosawa 2023</p>
      </footer>

      <?php wp_footer(); ?>
</body>
</html>