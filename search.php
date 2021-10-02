<?php get_header(); ?>
    <main>
<?php if( have_posts() ):
	while( have_posts() ): the_post();?>
      <div class="main-post">
        <div class="thumb-post home">
          <?php the_post_thumbnail(); ?>
        </div>
        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        <p><?php the_excerpt() ?></p>
      </div>
<?php endwhile;?>
<?php else: ?>
  <div class="not-found-result">
  Search Result Not Found: <?php echo get_search_query(); ?>
  </div>
<?php  endif;?>
	<div class="paginate-link">
	<?php echo paginate_links(); ?>
	</div>
    </main>
<?php get_footer(); ?>
