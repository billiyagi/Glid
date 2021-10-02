<?php get_header(); ?>
<?php if( have_posts() ):
  while( have_posts() ): the_post();?>
    <article class="article-page">
      <div class="big-thumb">
        <?php the_post_thumbnail(); ?>
      </div>
      <div class="post-article">
        <div class="post-title-article">
          <h1><?php the_title(); ?></h1>
          <div class="cat-dat">
            <p><?php the_date(); ?><?php echo " - "; ?><?php the_category() ?></p>
          </div>
        </div>
        <div class="post-contents-article">
          <?php the_content() ?>
        </div>
      </div>
      <div class="author-box">
        <div class="author">
         <?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
         <?php the_author_posts_link(); ?>
         </div>
      </div>
      <div class="tags">
        <?php the_tags(); ?>
      </div>
      <div class="back-top">
        <a href="#top"><i class="bi bi-arrow-up-circle-fill"></i></a>
      </div>
      <div class="comments">
      <?php 
        comments_template( '', true ); 
       ?>
      
      </div>
    </article>
      <aside class="sticky">
    <?php dynamic_sidebar('sidebar2'); ?>
  </aside>
    <div class="clearfix"></div>
      <div class="widget-footer">
    <?php dynamic_sidebar('sidebar3'); ?>
  </div>
    <?php endwhile;?>
<?php else: ?>
<?php  endif;?>
<?php get_footer(); ?>