<div id="pagewrap">
		
	<section id="content">
	</section>
	
	<section id="middle">

    <?php while ( have_posts() ) : the_post(); ?>
       
        <h3><?php the_title(); ?></h3>
       
        <div id="contentmargin"><?php the_content(); ?>
    
    <?php endwhile; ?>

    </section>




	<section id="aside">
<!--        <div class = "one_half" style = "border-right: 1px solid #333;">-->
<!--        --><?php //get_sidebar(); ?>
<!--        </div>-->
    </section>

</div>