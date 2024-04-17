<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>About Us</h5>
                <p><?php echo get_theme_mod('footer_about', 'iCode Guru is a mission to promote the programming at scale. Let us Share our professional skills, Learn from others, and Grow together.'); ?></p>
            </div>
           <div class="col-md-2"></div>
            <div class="col-md-4">
                <h5>Contact Us</h5>
                <p>Email: <?php echo get_theme_mod('footer_email', 'info@icode.guru'); ?><br>Location: <?php echo get_theme_mod('footer_phone', 'S. Bay Area, CA, USA'); ?></p>
            </div>
        </div>
    </div>
</footer>
<div class="copy">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6">
                <p><a href="https://www.icode.guru/"><?php echo date('Y'); ?> &copy; All Rights Reserved | iCodeGuru</a></p>
            </div>
            <div class="col-md-6">
                <span>
                    <a href="https://www.facebook.com/iCodeGuru" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.youtube.com/@iCodeGuru0" target="_blank" rel="noopener noreferrer"><i class="fab fa-youtube"></i></a>
                    <a href="https://www.linkedin.com/company/icode-guru" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a>

                </span>
            </div>
        </div>
    </div>
</div>
</body>


</html>

<?php wp_footer(); ?>