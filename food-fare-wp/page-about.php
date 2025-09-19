<?php /* Template Name: About Page */ ?>

<?php get_header(); ?>

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="<?php echo get_template_directory_uri(); ?>/img/about-1.webp">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="<?php echo get_template_directory_uri(); ?>/img/about-2.webp" style="margin-top: 25%;">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="<?php echo get_template_directory_uri(); ?>/img/about-3.webp">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="<?php echo get_template_directory_uri(); ?>/img/about-4.png">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
                <h1 class="mb-4">Welcome to Food Fare</h1>
                <p class="mb-4">Welcome to FoodFare, a friendly and welcoming cafe nestled in the heart of Finglas Village.
                    At FoodFare, we pride ourselves on consistently providing an exceptional dining experience in a warm and unique environment.
                    Our mission is simple: to offer the best meals in town.
                <p class="mb-4">At FoodFare, we cherish the feedback of our patrons.
                    Share your journey with us, and let’s continue to create memories together.</p>

                <p class="mb-4"> Thank you for being a part of our culinary adventure.
                    We’re excited to have you at FoodFare and look forward to making your dining experiences truly exceptional.</p>
                <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<?php get_footer(); ?>
