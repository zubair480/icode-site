<?php get_header(); ?>

<div class="container p-5 m-5">
    <?php
    // Check if there are posts
    if (have_posts()) {
        // Loop through posts
        while (have_posts()) {
            the_post();
    ?>
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="<?php the_post_thumbnail_url('large'); ?>" class="card-img" alt="<?php the_title_attribute(); ?>">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?php the_title(); ?></h5>
                            <p class="card-text"><?php the_content(); ?></p>
                            <p class="card-text"><small class="text-muted">Last updated: <?php the_modified_date(); ?></small></p>
                        </div>
                    </div>
                </div>
            </div>
    <?php
        }

        wp_reset_postdata();
    } else {
        // No posts found
        echo '<p>No posts found.</p>';
    }
    ?>
</div>

<?php get_footer(); ?>
