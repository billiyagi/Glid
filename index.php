<?php get_header(); ?>
    <main>
<?php if( have_posts() ):
	while( have_posts() ): the_post();?>
      <div class="main-post">
        <div class="thumb-post">
          <?php the_post_thumbnail(); ?>
        </div>
        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        <p><?php the_excerpt() ?></p>
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
    <div class="clearfix"></div>
<?php get_footer(); ?>
