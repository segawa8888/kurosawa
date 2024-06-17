<aside id="side" class="side">
      <div class="side-container">
        <div class="side-menu">
          <div class="side-top">
          <div class="side-logo">
          <a href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/logo.svg" alt="GINZA KUROSAWA">
          </a>
          </div>
        </div>
          <div class="side-nav">
              <h3 class="side-nav__catch">GINZA KUROSAWA<br>-</h3>
              <p class="side-nav__text">
              Cherishing the land and people we’re linked by fate——<br>
              this is how KUROSAWA has started its business,<br>
              and how our sable cookies are produced.<br><br>
              Land and people form a culture.<br>
              We wish to convey richness of the land and devotion of producers<br>
              to you, and to a lot of people.
              <?php 
        wp_nav_menu( array( 
          'theme_location' => 'side-menu' 
        ) ); 
      ?>
              <div class="side-nav__icon">
                <a href="" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/Instagram.svg" alt="Instagram">
              </a>
              </div>
          </div>
          <div class="side-nav__shop">
            <a href="https://onlineshop.ginzakurosawa.com/">
              オンラインショップ
              <span class="side-nav-angle">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/angle-right-white.svg" alt="白右矢印">
              </span>
            </a>
          </div>
        </div>
      </div>
    </aside>