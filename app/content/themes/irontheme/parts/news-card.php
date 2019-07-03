<?php $id = uniqid(); ?>
<div class="col-md-6 col-lg-4">
  <div class="news-card">
    <div class="news-card__img-wrap">
      <div class="news-card__publish">
        <div class="news-card__publish-left">
          <span class="news-card__publish-day"><?php echo get_post_time('d'); ?></span>
        </div>
        <div class="news-card__publish-right">
          <span class="news-card__publish-month"><?php echo get_post_time('M', '', '', true); ?></span>
          <span class="news-card__publish-year"><?php echo get_post_time('Y'); ?></span>
        </div>
      </div>
      <a href="#" class="news-<?php echo $id; ?>_open">
        <?php the_post_thumbnail('news-card'); ?>
      </a>
    </div>
    <h3 class="news-card__title"><a href="#" class="news-<?php echo $id; ?>_open"><?php the_title(); ?></a></h3>
    <div class="news-card__excerpt">
      <?php echo apply_filters( 'the_content' , wp_trim_words(get_the_content(), 15) ); ?>
    </div>
    <a href="#" class="news-card__more news-<?php echo $id; ?>_open">Подробнее</a>
  </div>

  <div id="news-<?php echo $id; ?>" class="modal modal--news">
    <button type="button" class="modal__close news-<?php echo $id; ?>_close"></button>

    <div class="news-card__img-wrap">
      <?php the_post_thumbnail('full'); ?>
    </div>
    <h3 class="news-card__title"><?php the_title(); ?></h3>
    <div class="news-card__content"><?php the_content(); ?></div>

  </div>

</div>