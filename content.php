
<div id="pagewrap">
		
	<section id="content">
	</section>
	
	<section id="middle">

    <?php while ( have_posts() ) : the_post(); ?>
       
        <h3><a href=<?php the_permalink(); ?>/> <?php the_title(); ?> </a></h3>
       
        <div id="contentmargin"><?php $con = get_the_content(); echo mb_strimwidth($con, 0, 250, '...'); ?>
        <br>

        <strong><?php the_category('name') ?></strong>
        <?php if (strlen($con) > 250 ) :?>
        <strong><a href=<?php the_permalink(); ?>/> | Read more</a></strong>
        <?php endif ?>
        </div>
    <?php endwhile; ?>
    
    </section>

	<aside id="aside">
        <?php get_sidebar('primary'); ?>
    </aside>
</div>