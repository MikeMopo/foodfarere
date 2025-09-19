<?php get_header(); ?>

<div class="container-xxl py-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Our Blog</h5>
                    <h1 class="mb-5">Latest News & Articles</h1>
                </div>
            </div>
        </div>
        <div class="row g-4">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="col-lg-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h2 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <p class="card-text"><?php the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More &rarr;</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
