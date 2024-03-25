<?php get_header(); ?>

<div class="container">
  <div class="d-flex align-items-center justify-content-center">
    <?php
    // Check if there are posts
    if (have_posts()) {
      // Loop through posts
      while (have_posts()) {
        the_post();
        ?>
        <div class="m-3">
          <div class="card shadow">  <img class="img-fluid" style="height: 500px; width: 500px;" alt="<?php the_title_attribute(); ?>" src="<?php the_post_thumbnail(); ?>">
            <div class="card-body">
              <h4 class="card-title"><?php the_title(); ?></h4>
              <p class="card-text"><?php the_content(); ?></p>
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
</div>

<?php get_footer(); ?>
