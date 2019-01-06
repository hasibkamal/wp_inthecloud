<div id="maincol_container">
    <?php
    	$portfolioPost = new WP_Query([
    		'post_type'=> 'portfolio',
    		'posts_per_page'=>2
    	]); 
    	while($portfolioPost->have_posts()):$portfolioPost->the_post(); 
    ?>
    <div class="maincol">
        <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
        <p><?php the_post_thumbnail('medium'); ?></p>
        <p>Custom Data 1 : <?php echo get_post_meta(get_the_id(),'portfolio_designation',true); ?></p>
        <p>Custom Data 2 : <?php echo get_post_meta(get_the_id(),'portfolio_details',true); ?></p>

        <p>
        	<?php
        		the_content(); 
        	?>
        		
        </p>
    </div>
    <div class="maincol_bottom"></div>
    <?php endwhile; wp_reset_postdata(); ?>

</div>