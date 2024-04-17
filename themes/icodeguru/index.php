<?php get_header(); ?>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active slider-item">
            <img class="d-block w-100 slider-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/slider/slider-1.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h1 class=" strong slider-heading">From Screens to Success Stories: Your Journey Begins Here</h1>
                <p class="slider-p">Embark on a digital journey towards impactful stories of success.</p>
                <a href="#" class="btn btn-success hidden-xs">Want Know More </a>
            </div>
        </div>
        <div class="carousel-item slider-item">
            <img class="d-block w-100 slider-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/slider/slider-2.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h1 class=" slider-heading">Break Barriers, Build Dreams: Join the Movement</h1>
                <p class="slider-p">Join a movement dedicated to breaking barriers and nurturing dreams.</p>
                <a href="#" class="btn btn-success hidden-xs">Join our Slack</a>
            </div>
        </div>
        <div class="carousel-item slider-item">
            <img class="d-block w-100 slider-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/slider/slider-3.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <h1 class=" slider-heading ">From Every Corner, One Community: Join Us Today!</h1>
                <p class="slider-p">Join hands with a diverse community united for a common cause.</p>
                <a href="#" class="btn btn-success hidden-xs">Want to know more</a>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>




<!-- ################# Slider Ends Here#######################--->

<div class="about-us container-fluid">
    <div class="container">
        <div class="row session-title">
            <h2>About Us</h2>
            <p>iCode Guru is a mission to promote the programming at scale. (100% Free)
            </p>
        </div>
        <div class="row natur-row no-margin w-100">
            <div class="text-part col-md-6">
                <h2>Our Mission</h2>
                <p>Here at iCode, our ambition is to enhance the employability of the promising talent especially who belong to the underprivileged areas. </p>
                <p> By teaming up with the top talent from the Silicon Valley, we teach, train, mentor and guide these students to enhance their professional skills with the end objective of getting them hired by the top tech companies. </p>
                <p>In this process, these students would be transformed into skilled engineers and meticulous developers. They would not only be ready to be hired but would be skilled enough to become entrepreneurs.</p>
            </div>
            <div class="image-part col-md-6">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about.jpg" alt="">
            </div>
        </div>
    </div>
</div>

<!-- #################  LookingFor #######################--->

<div class="lloking-for container-fluid" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/lov_bg.jpg );">
    <div class="inn-lay">
        <div class="container">
            <div class="row">
                <div class="col-md-10 natur-col text-center mx-auto">
                    <h2> Donate and make a difference</h2>
                    <h4>Empower students' dreams with your philanthropy</h4>
                    <button class="btn btn-light">Donate Now</button>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="our-services container-fluid">
    <div class="container">
        <div class="row session-title">
            <h2>Our Core Values</h2>
            <p>Teaching Students 100 Percent Free programming, under the guidance of Silicon Valley Engineers</p>
        </div>
        <div class="service-row row">
            <div class="col-md-4">
                <div class="service-col">
                    <div class="service-detail-home-img-div">

                        <img class="service-detail-home-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/service/s7.jpg" alt="">
                    </div>
                    <div class="service-detail">
                        <h4>Share You Skills</h4>
                        <p>Do you want to volunteer teaching on our platform, are you looking for an opportunity to learn by teaching? We provide opportunity to all those students who have big dreams in their career. </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="service-col">
                    <div class="service-detail-home-img-div">

                        <img class="service-detail-home-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/service/s6.jpg" alt="">
                    </div>
                    <div class="service-detail">

                        <h4>Learn with others</h4>
                        <p>If you want to boost your learning, you should learn skills in a cohort. We provide many cohorts so you can engage with others to enhance your skills.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="service-col">
                    <div class="service-detail-home-img-div">

                        <img class="service-detail-home-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/service/s5.jpg" alt="">
                    </div>
                    <div class="service-detail">

                        <h4>Grow Professionally</h4>
                        <p>"Your Network is your Networth" We provide opportunity to students to interact with international mentors from Silicon Valley.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Updates -->
<div class="container">
<div class="row session-title">
            <h2>Updates and Announcments</h2>
        </div>
<div class="card-columns d-flex justify-content-between align-items-center">
    <?php $posts_query = new WP_Query(array(
        'post_type' => 'post', // Change 'post' to your custom post type if needed
        'posts_per_page' => 3, // Display a limited number of posts
        'order' => 'DESC' // Display posts in reverse order
    ));
    if ($posts_query->have_posts()) {
        // Loop through posts
        while ($posts_query->have_posts()) {
            $posts_query->the_post();
            ?>
            <div class="col-md-3">
                <div class="card update-card" style="width: 20rem;">
                    <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top img-fluid" alt="<?php the_title_attribute(); ?>">
                    <div class="card-body update-card-img" style="height:16rem;">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <p class="card-text"><?php the_excerpt('10'); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-bottom-card">Read More</a>
                    </div>
                </div>
    </div>
    <?php
            }

          
            
            // Restore original post data
            wp_reset_postdata();
        } else {
            // No posts found
            echo '<p>No posts found.</p>';
        }
        ?>
</div>
</div>
<!--  ************************* Testimonial  Starts Here ************************** -->

<div class="our-services container-fluid">
    <div class="container">
        <div class="row session-title">
            <h2>iCodeGuru Alumni</h2>
        </div>
        <div class="service-row row align-items-center justify-content-between">
        <div class="col-md-3">
                <div class="service-col">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/talha.jpeg" alt="">
                    <div class="service-detail">
                        <h4>Muhammad Talha</h4>
                        <a class="fab fa-linkedin"></a>
                        <a href="https://www.linkedin.com/in/muhammadtalha01/" target="_blank" class="linkedin-link"> LinkedIn</a>

                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="service-col">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/azib.jpeg" alt="">
                    <div class="service-detail">
                        <h4>Azib Farooq</h4>
                        <a class="fab fa-linkedin"></a>
                        <a href="https://www.linkedin.com/in/itsazibfarooq/" target="_blank" class="linkedin-link"> LinkedIn</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="service-col">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/asif.jpeg" alt="">
                    <div class="service-detail">

                        <h4>Asif Rasool</h4>
                        <a class="fab fa-linkedin"></a>
                        <a href="https://www.linkedin.com/in/asifrasool573/" target="_blank" class="linkedin-link"> LinkedIn</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!--  ************************* Footer  Starts Here ************************** -->
<div class="footer-ablove">
    <div class="container">
        <div class="row">
            <p>Know More About iCodeGuru?
                <a href="<?php echo esc_url(home_url('/join')); ?>"><button class="btn btn-default">Join Us</button></a>
            </p>
        </div>
    </div>
</div>

<?php get_footer(); ?>