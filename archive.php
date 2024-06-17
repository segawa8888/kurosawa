<?php get_header(); ?>

  <main class="page-main archive-main">
  <?php get_sidebar(); ?>

    <div class="page page__top">
        <div class="page-inner page__inner main-inner">
        <h2 class="section-tittle load-fade">News<br><span class="section-tittle__ja">お知らせ</span></h2> 

    <section class="page-news">
        <div class="page-news__inner">
            <div class="page-news__contents">
                <ul class="page-news__lists">
                  <?php
                  $paged = get_query_var('paged', 1);
                    $args = array(
                      'post_type' => 'post',
                      'posts_per_page' => 7,
                      'paged' => $paged,
                      'post_status' => 'publish',
                      'orderby' => 'post_date',
                      'order' => 'DESC',
                    );
                    $query = new WP_Query( $args );
                    if ( $query->have_posts() ) :
                        while ( $query->have_posts() ) : $query->the_post();?>
                    <li class="page-news__list load-fade">
                            <div class="page-news__image">
                            <?php
                              if(has_post_thumbnail()):
                                the_post_thumbnail();
                              else: ?>
                               <?php endif; ?>
                            </div>
                            <div class="page-news__content">
                                <time class="page-news__date"><?php echo get_the_date('Y.m.d'); ?></time>
                                <h4 class="page-news__tittle"><?php the_title(); ?></h4>
                                <div class="page-news__text"><?php the_content(); ?></div>
                        </div>
                    </li>
                    <? endwhile;?>
                    <?php else: ?>
                      <p style="margin-bottom:100vw;">まだ記事がありません。</p>
                  <?php endif; wp_reset_postdata();
                  ?>

                  <?php the_posts_pagination(
                    array(
                        'mid_size' => 7,
                        'prev_next' => false, 
                        'type' => 'list',
                        'order' => 'DESC',
                        'orderby' => 'modified',
                          )
                      ); ?>
                </ul>

            </div>
        </div>
    </section>

</div>
</div>

</main>

<div class="space"></div>

<?php get_footer(); ?>
