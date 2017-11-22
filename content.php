
<div id="pagewrap">
		
	<section id="content">
	</section>
	
	<section id="middle">

    <?php while ( have_posts() ) : the_post(); ?>

        <hr>

        <h2><a href=<?php the_permalink(); ?>/> <?php the_title(); ?> </a></h2>
       
            <div id="contentwrapper">

                <dev id="posttext"><?php $con = get_the_content(); echo mb_strimwidth($con, 0, 250, '...'); ?></dev>

                    <br>

                <?php if (strlen($con) > 250 ) :?>

                    <strong><a href=<?php the_permalink(); ?>/> Read more</a></strong>

                <?php endif ?>

                    <br>
                <i><small><?php the_category('name') ?></small></i>

            </div>


    <?php endwhile; ?>

        <?php next_posts_link('« Previous Page');?>      <?php  previous_posts_link(' :: Next Page »'); ?>


    </section>

	<aside id="aside">
    </aside>
</div>