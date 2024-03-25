<?php get_header(); ?>


<!--  ************************* Apply for funding  Here ************************** -->

<div class="container">
<div class="row session-title">
            <h2>Apply For Funding</h2>
        </div>
        <div class=" d-flex align-items-center justify-content-around " style="padding-left:200px; padding-right:200px;">
            <p>Upload a PDF Portfolio: </p>
            <a href="https://drive.google.com/file/d/1l6fngNSckfhSX4W4HoyD5XRIAztUiXiQ/view?usp=sharing" target="_blank" rel="noopener noreferrer"  class="btn btn-success"> See Sample</a>
        </div>

    <?php do_shortcode( '[apply_for_funding_form]' ); ?>
   
</div>

<!--  ************************* Footer  Starts Here ************************** -->
<?php get_footer(); ?>
