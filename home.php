<?php get_header(); ?>
    <main class="home-page">
      <div class="modal" tabindex="-1" role="dialog">
</div>
<?php if( have_posts() ):
	while( have_posts() ): the_post();?>
      <div class="main-post">
        <div class="thumb-post home">
          <?php the_post_thumbnail(); ?>
        </div>
        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        <div class="cat-dat post-date">
            <?php echo get_the_date(); ?>
          </div>
        <p><?php echo get_the_excerpt() ?> ...
        </p>
      </div>
<?php endwhile;?>
<?php else: ?>
	<div class="mid">
	<h1 style="text-align: center;">HALAMAN TIDAK DITEMUKAN</h1>
	<p>Kembali ke <a href="<?php echo home_url(); ?>">Home</a></p>
	</div>
<?php  endif;?>
	<div class="paginate-link">
	<?php echo paginate_links(); ?>
	</div>
    </main>
  <div class="widget-footer">
    <?php dynamic_sidebar('sidebar1'); ?>
  </div>
    <div class="clearfix"></div>
<?php get_footer(); ?>
