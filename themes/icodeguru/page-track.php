<?php get_header(); ?>

<div class="container mt-5">
<nav>
  <div class="nav nav-tabs d-flex align-items-center justify-content-center" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Fully Funded Scholarships</button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Coding and Data Science</button>
    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Natural Science and Bootcamp</button>
  </div>
</nav>
<div class="tab-content shadow rounded mb-2" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"><!-- Track 1 -->
        <div class="about-us container-fluid">
            <div class="container">
                <div class="row session-title">
                    <p>Our Fully Funded Scholarships session schedule is available in the calendar</p>
                </div>
                <div class="row m-2 no-margin calendar-track-div">

                <iframe src="https://calendar.google.com/calendar/embed?src=b1204900a8b4caf3d89cc594f4f312759934df605f22373ecea3fe986315b694%40group.calendar.google.com&ctz=Asia%2FKarachi&amp;showDate=1&amp;showPrint=0&amp;showCalendars=1&amp;mode=WEEK&amp;wkst=2" style="border: 0" frameborder="0" scrolling="no"></iframe>
                </div>
            </div>
        </div>
        <!-- Track 1 End --></div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"><!-- Track 1 -->
        <div class="about-us container">
            <div class="container">
                <div class="row session-title">
                    <p>Our Coding and Data Science session schedule is available in the calendar</p>
                </div>
                <div class="row m-2 no-margin calendar-track-div">

                <iframe src="https://calendar.google.com/calendar/embed?src=5ed9f05f32cb98df8204a7c5468b1b578cdedce66df1ccc46e6ae3c6b12e08ba%40group.calendar.google.com&ctz=Asia%2FKarachi&amp;showDate=1&amp;showPrint=0&amp;showCalendars=1&amp;mode=WEEK&amp;wkst=2"  frameborder="0" scrolling="no"></iframe>

                </div>
            </div>
        </div>
        <!-- Track 1 End --></div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"><!-- Track 1 -->
        <div class="about-us container-fluid">
            <div class="container">
                <div class="row session-title">
                    <p>Our Natural Science and Bootcamp session schedule is available in the calendar</p>
                </div>
                <div class="row m-2 no-margin calendar-track-div">

                        <iframe src="https://calendar.google.com/calendar/embed?src=cbc08d11084d4d92f0d19c1cbac6da74405dc6bbd6ba09dd6a4594549c22f11f%40group.calendar.google.com&ctz=Asia%2FKarachi&amp;showDate=1&amp;showPrint=0&amp;showCalendars=1&amp;mode=WEEK&amp;wkst=2" style="border: 0"  frameborder="0" scrolling="no"></iframe>

                </div>
            </div>
        </div>
        <!-- Track 1 End --></div>
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

</body>


</html>