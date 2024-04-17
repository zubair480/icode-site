<?php get_header(); ?>
<!--  ************************* Page Title Starts Here ************************** -->
<div class="page-nav no-margin row">
  <div class="container">
    <div class="row">
      <h2>Join iCodeGuru</h2>
    </div>
  </div>
</div>

<!--  ************************* Contact Us Starts Here ************************** -->

<div class="container">
  <div class="m-5 p-5" style="background-color: white;">
    <div class="">
       <?php do_shortcode( '[join_form]' ); ?>     
    </div>
  </div>
</div>
<!-- Video Tutorial -->
<div class="about-us container-fluid" style="margin-top: 0px;">
    <div class="container" style="margin-top: 0px;">
        <div class="row session-title" style="padding-top: 0px;">
            <h2>Watch Video Tutorial</h2>
            <p>Our moderator has clearly explained the steps you need to take in order to join us.</p>
        </div>
        <div style="margin-top:0px;" class="row m-2 no-margin row align-items-center justify-content-center">

        <iframe width="800" height="400" src="https://www.youtube.com/embed/aF1yrtv1jwQ?si=6oX4FzJKjv94Ke2K" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </div>
</div>
<!-- Track 1 End -->
<!--  ************************* Footer  Starts Here ************************** -->

<?php get_footer(); ?>