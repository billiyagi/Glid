<?php get_header(); ?>

<div class="author-page">

<!-- This sets the $curauth variable -->

    <?php
    $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
    ?>
    <div class="profiles">
    	<div class="profile-author">
    	<div class="avatar-author">
    		<?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
    	</div>
    	<div class="profile-bio-title">
    <h5><?php echo $curauth->nickname; ?></h5>
     <div class="bio">
     	<p><?php echo $curauth->user_description; ?>
     	</p>
     </div>
     </div>
    </div>
    <h4>Posts by <?php echo $curauth->nickname; ?>:</h4>

    <ul>
<!-- The Loop -->

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <li>
            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
            <?php the_title(); ?></a>,
            <?php the_time('d M Y'); ?> in <?php the_category('&');?>
        </li>

    <?php endwhile; else: ?>
        <p><?php _e('No posts by this author.'); ?></p>

    <?php endif; ?>

<!-- End Loop -->

    </ul>
</div>
<?php get_footer(); ?>