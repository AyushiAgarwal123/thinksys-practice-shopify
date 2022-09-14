<footer class="border-top">
    <div class="container pb-4">
        <div class="footer-top py-4">
            <div id="footer-top" class="footerTop">
                <?php dynamic_sidebar( 'footer-top' ); ?>
            </div>
        </div>
        <div class="row footer_menu_line">
            <div class="col-lg-3 col-sm-6">
                 <div id="footerCol1" class="footerCol1">
                    <?php dynamic_sidebar( 'footer-col-1' ); ?>
                </div>
            </div>
            <div class="col-lg-2  col-sm-6">
                <div id="footerColumn2" class="footerColumnMenu">
                    <?php dynamic_sidebar( 'footer-col-2' ); ?>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mt-4 mt-sm-0">
                 <div id="footerColumn3" class="footerColumnMenu">
                    <?php dynamic_sidebar( 'footer-col-3' ); ?>
                </div>
            </div>
            <div class="col-lg-3  col-sm-6 mt-4 mt-sm-0">
                 <div id="footerColumn4" class="footerColumnMenu">
                    <?php dynamic_sidebar( 'footer-col-4' ); ?>
                </div>
            </div>
        </div>
        <div class="row mt-7 align-items-center">
            <div class="col-lg-6">
                <div class="row align-items-center">

                    <div class="col-lg-8 col-sm-8">
                        <div class="social-media">
                            <ul class="list-unstyled">
                                <li><a style="padding-left: 0;" href="https://www.linkedin.com/company/thinksys-inc/mycompany/"
                                        target="_blank"><i class="lab la-linkedin"></i></a></li>
                                <li><a href="https://www.facebook.com/ThinkSysInc" target="_blank"><i
                                            class="lab la-facebook-square"></i></a></li>
                                <li><a href="https://twitter.com/ThinkSysInc" target="_blank"><i
                                            class="lab la-twitter-square"></i></a></li>
                                <li><a href="https://www.instagram.com/thinksys_inc/" target="_blank"><i
                                            class="lab la-instagram"></i></a></li>
                                <!-- <li><a href="https://www.thinksys.com/feed/"  target="_blank"><i class="las la-rss-square"></i></a></li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">

                    </div>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="awards">
                    <div class="row">                        
                        <div id="right-footer-logo" class="rightfooterlogo">
                            <?php dynamic_sidebar( 'right-footer-logo' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container border-top py-4">
        <div class="pt-2 pb-2">
            <div class="row footer__nav justify-content-between">
                <div class="col-lg-6 copyright align-self-center">
                    <!-- <span><img src="../assets/images/footerlogo.png" alt="footer logo"></span> -->
                    <span class="d-block text-center text-lg-left"> © <script>
                        document.write(new Date().getFullYear())
                        </script> ThinkSys Inc.<span class="mx-4 text-muted">|</span>All rights reserved</span>
                </div>
                <div class="col-lg-6 ">
                    <ul class="footer-nav d-sm-flex d-block justify-content-center justify-content-lg-end align-items-center text-center">                       
                        <div id="rightBottomFooter" class="rightBottomFooter">
                            <?php dynamic_sidebar( 'right-bottom-footer' ); ?>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>


    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
    <!-- bootstrap js file -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/popper.min.js"></script>
    <!-- swiper js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/TweenMax.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer> </script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
    <script>
    //  top brands swiper
    var swiper = new Swiper(".top-brands", {
        slidesPerView: 7,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        breakpoints: {
            1024: {
                slidesPerView: 8,
                spaceBetween: 40,
                slidesPerColumn: 1,
            },
            768: {
                slidesPerView: 6,
                spaceBetween: 30,
                slidesPerColumn: 1,
            },
            640: {
                slidesPerView: 5,
                spaceBetween: 20,
                slidesPerColumn: 1,
            },
            320: {
                slidesPerView: 5,
                spaceBetween: 10,
                slidesPerColumn: 1,
            }
        }
    });
    </script>
</body>

</html>
<?php wp_footer(); ?>