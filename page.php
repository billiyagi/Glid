<?php get_header(); ?>
    <article>
      <div class="post-page">
        <div class="post-page-contents">
          <?php the_content() ?>
        </div>
      </div>
      <div class="comment">
      <?php get_comment(); ?>
      </div>
    </article>
    <div class="clearfix"></div>
<?php get_footer(); ?>