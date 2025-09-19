<?php get_header(); ?>

<div class="container-xxl py-5">
    <div class="container">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="mb-5"><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <?php the_content(); ?>
                </div>
            </div>
        <?php endwhile; endif; ?>
    </div>
</div>

<?php get_footer(); ?>
