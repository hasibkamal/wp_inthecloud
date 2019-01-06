<div id="maincol_container">
    <?php while(have_posts()):the_post(); ?>
    <div class="maincol">
        <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
        <p>Custom Data : <?php echo get_post_meta(get_the_id(),'hkc',true); ?></p>

        <p>
        	<?php
        		if(is_single()){
        			the_content();
        		}else{
        			$readMore = '<p><a href="'.get_the_permalink().'">Read More</a></p>';
        			echo wp_trim_words(get_the_content(),30,$readMore);
        		} 
        		 
        	?>
        		
        </p>
    </div>
    <div class="maincol_bottom"></div>
    <?php endwhile; ?>
</div>