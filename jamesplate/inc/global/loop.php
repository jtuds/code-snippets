<?php if(have_posts()): ?>
<?php while(have_posts()): the_post(); ?>
                    
    <?php if (has_post_thumbnail($post->ID)){ ?>
        <?php $thumbnail = get_the_post_thumbnail($post->ID,array(150,150),array('alt'=>$post->post_title,'title'=>$post->post_title)); ?>
        <a href="<?php the_permalink(); ?>"><?php echo $thumbnail; ?></a>
    <?php } else { ?>
        <a href="<?php the_permalink(); ?>"><img src="http://placehold.it/150x150&text=No%20image" alt="Blog post thumbail placeholder"/></a>
    <?php } // end if ?>
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    <?php the_date('d/m/Y'); ?>
    <?php the_tags(); ?>
    <?php the_excerpt(); ?>
    <a class="blog__cta" href="<?php the_permalink(); ?>">Read more</a>
            
<?php endwhile; ?>

		<?php if ( $wp_query->max_num_pages > 1 ) : ?>
    		<?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'boilerplate' ) ); ?>
            <?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'boilerplate' ) ); ?>
		<?php endif; ?>
    
    <?php else: ?>
    
    	<p>There are currently no posts in this category.</p>
        
    <?php endif; ?>