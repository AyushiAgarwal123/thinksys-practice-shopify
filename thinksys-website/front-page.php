<?php
get_header(); 
?>

 <?php 
    // banner section
    $AnnouncementText = carbon_get_post_meta( get_the_ID(), 'announcement_text');
    $LearnMore = carbon_get_post_meta( get_the_ID(), 'learn_more');  
    $BannerTextBlack = carbon_get_post_meta( get_the_ID(), 'banner_txt1_black');
    $BannerTextBlue = carbon_get_post_meta( get_the_ID(), 'banner_txt1_blue');
    $BannerTextTwo = carbon_get_post_meta( get_the_ID(), 'banner_txt2'); 
    $BannerImage = carbon_get_post_meta( get_the_ID(), 'banner_image1');  
    $BannerBtnOne = carbon_get_post_meta( get_the_ID(), 'banner_btnone' );
    $BannerBtnOneLink = carbon_get_post_meta( get_the_ID(), 'banner_btnone_link' );
    $BannerRightArrow = carbon_get_post_meta( get_the_ID(), 'right_arrow' );
    $BannerBtnTwo = carbon_get_post_meta( get_the_ID(), 'banner_btn_two' );
    $BannerBtnTwoLink = carbon_get_post_meta( get_the_ID(), 'banner_btn_two_link' );
    $BannerRightArrowDark = carbon_get_post_meta( get_the_ID(), 'right_arrow_dark' );
      
    // swiper section
    $swiperHeading = carbon_get_post_meta( get_the_ID(), 'swiper_heading');
    $HomepageImgSecTwo = carbon_get_post_meta( get_the_ID(), 'homepage_img_sec_two');

    //   services section
    
    $HomeServicesBg = carbon_get_post_meta( get_the_ID(), 'home_services_bg');
    $SecThreeHeading = carbon_get_post_meta( get_the_ID(), 'sec_three_heading');
    $SecThreeSubHeading = carbon_get_post_meta( get_the_ID(), 'sec_three_sub_heading');
    $SecThreeSubHeadingTwo = carbon_get_post_meta( get_the_ID(), 'sec_three_sub_heading_two');    
    $SecThreeDescription = carbon_get_post_meta( get_the_ID(), 'sec_three_description');
    $ServicesArrowImg = carbon_get_post_meta( get_the_ID(), 'services_arrow_img');

    $servicesGridTextOne = carbon_get_post_meta( get_the_ID(), 'services_grid_text_one');
    $servicesGridTextTwo = carbon_get_post_meta( get_the_ID(), 'services_grid_text_two');
    $servicesGridTextThree = carbon_get_post_meta( get_the_ID(), 'services_grid_text_three');
    $servicesGridTextFour = carbon_get_post_meta( get_the_ID(), 'services_grid_text_four');
    $servicesGridTextFive = carbon_get_post_meta( get_the_ID(), 'services_grid_text_five');
    $servicesGridTextSix = carbon_get_post_meta( get_the_ID(), 'services_grid_text_six');
    $servicesGridTextSeven = carbon_get_post_meta( get_the_ID(), 'services_grid_text_seven');
    $servicesGridTextEight = carbon_get_post_meta( get_the_ID(), 'services_grid_text_eight');

    $servicesGridImageOne = carbon_get_post_meta( get_the_ID(), 'services_grid_image_one');
    $servicesGridImageTwo = carbon_get_post_meta( get_the_ID(), 'services_grid_image_two');
    $servicesGridImageThree = carbon_get_post_meta( get_the_ID(), 'services_grid_image_three');
    $servicesGridImageFour = carbon_get_post_meta( get_the_ID(), 'services_grid_image_four');
    $servicesGridImageFive = carbon_get_post_meta( get_the_ID(), 'services_grid_image_five');
    $servicesGridImageSix = carbon_get_post_meta( get_the_ID(), 'services_grid_image_six');
    $servicesGridImageSeven = carbon_get_post_meta( get_the_ID(), 'services_grid_image_seven');
    $servicesGridImageEight = carbon_get_post_meta( get_the_ID(), 'services_grid_image_eight');

    $servicesGridButton = carbon_get_post_meta( get_the_ID(), 'services_grid_button');
    $servicesGridButtonLink = carbon_get_post_meta( get_the_ID(), 'services_grid_button_link');
    $servicesGridButtonArrow = carbon_get_post_meta( get_the_ID(), 'services_grid_button_arrow');

    
    // case-study section 
    $HomeCaseStudyHeading = carbon_get_post_meta( get_the_ID(), 'home_case_study_heading');
    $HomeCaseStudySubHeading = carbon_get_post_meta( get_the_ID(), 'home_case_study_sub_heading');
    $HomeCaseStudySubHeadingTwo = carbon_get_post_meta( get_the_ID(), 'home_case_study_sub_heading_two');
    $HomeCaseStudyDescription = carbon_get_post_meta( get_the_ID(), 'home_case_study_description');
    $HomeCaseStudyDescriptionTwo = carbon_get_post_meta( get_the_ID(), 'home_case_study_description_two');

    $HomepageCasestudySec = carbon_get_post_meta( get_the_ID(), 'homepage_casestudy_sec');
    
    // about us section 

    $HomeAboutusHeading = carbon_get_post_meta( get_the_ID(), 'home_aboutus_heading');
    $HomeAboutusSubHeading = carbon_get_post_meta( get_the_ID(), 'home_aboutus_sub_heading');
    $HomeAboutusSubHeadingTwo = carbon_get_post_meta( get_the_ID(), 'home_aboutus_sub_heading_two');

    $homeAboutusAboutBox = carbon_get_post_meta( get_the_ID(), 'home_aboutus_about_box');

    $homeAboutusOurStoryHeading = carbon_get_post_meta( get_the_ID(), 'home_aboutus_our_story_heading');
    $homeAboutusOurStorySubheading = carbon_get_post_meta( get_the_ID(), 'home_aboutus_our_story_subheading');
    $homeAboutusOurStoryBtn = carbon_get_post_meta( get_the_ID(), 'home_aboutus_our_story_btn');
    $homeAboutusOurStoryBtnLink = carbon_get_post_meta( get_the_ID(), 'home_aboutus_our_story_btn_link');
   
    $homeAboutusWhyUsHeading = carbon_get_post_meta( get_the_ID(), 'home_aboutus_why_us_heading');
    $homeAboutusWhyUsSubheading = carbon_get_post_meta( get_the_ID(), 'home_aboutus_why_us_subheading');
    $homeAboutusWhyUsDescription = carbon_get_post_meta( get_the_ID(), 'home_aboutus_why_us_description');
    $homeAboutusWhyUsBtn = carbon_get_post_meta( get_the_ID(), 'home_aboutus_why_us_btn');
    $homeAboutusWhyUsBtnLink = carbon_get_post_meta( get_the_ID(), 'home_aboutus_why_us_btn_link');
   
    $homeAboutusAboutBox2 = carbon_get_post_meta( get_the_ID(), 'home_aboutus_about_box_2');

    $homeAboutusWhoWeAreHeading = carbon_get_post_meta( get_the_ID(), 'home_aboutus_who_we_are_heading');
    $homeAboutusWhoWeAreSubheading = carbon_get_post_meta( get_the_ID(), 'home_aboutus_who_we_are_subheading');
    $homeAboutusWhoWeAreDescription = carbon_get_post_meta( get_the_ID(), 'home_aboutus_who_we_are_description');
    $homeAboutusWhoWeAreBtn = carbon_get_post_meta( get_the_ID(), 'home_aboutus_who_we_are_btn');
    $homeAboutusWhoWeAreBtnLink = carbon_get_post_meta( get_the_ID(), 'home_aboutus_who_we_are_btn_link');

    // Testimonials section 

    $HomeTestimonialsHeading = carbon_get_post_meta( get_the_ID(), 'home_testimonials_heading');
    $HomeTestimonialsSubHeading = carbon_get_post_meta( get_the_ID(), 'home_testimonials_sub_heading');
    $HomeTestimonialsSubHeadingTwo = carbon_get_post_meta( get_the_ID(), 'home_testimonials_sub_heading_two');
    $HomeTestimonialsSubHeadingThree = carbon_get_post_meta( get_the_ID(), 'home_testimonials_sub_heading_three');
    $HomeTestimonialsQuotesImg = carbon_get_post_meta( get_the_ID(), 'home_testimonials_quotes_img');
    

    $HomeTestimonialsCarouselDescription = carbon_get_post_meta( get_the_ID(), 'home_testimonials_carousel_description');
    $HomeTestimonialsCarouselHeading = carbon_get_post_meta( get_the_ID(), 'home_testimonials_carousel_heading');
    $HomeTestimonialsCarouselSubheading = carbon_get_post_meta( get_the_ID(), 'home_testimonials_carousel_subheading');

    $HomeTestimonialsCarouselDescriptionTwo = carbon_get_post_meta( get_the_ID(), 'home_testimonials_carousel_description_two');
    $HomeTestimonialsCarouselHeadingTwo = carbon_get_post_meta( get_the_ID(), 'home_testimonials_carousel_heading_two');
    $HomeTestimonialsCarouselSubheadingTwo = carbon_get_post_meta( get_the_ID(), 'home_testimonials_carousel_subheading_two');

    $HomeTestimonialsCarouselDescriptionThree = carbon_get_post_meta( get_the_ID(), 'home_testimonials_carousel_description_three');
    $HomeTestimonialsCarouselHeadingThree = carbon_get_post_meta( get_the_ID(), 'home_testimonials_carousel_heading_three');
    $HomeTestimonialsCarouselSubheadingThree = carbon_get_post_meta( get_the_ID(), 'home_testimonials_carousel_subheading_three');

    // partners section

    $HomePartnersHeading = carbon_get_post_meta( get_the_ID(), 'home_partners_heading');

    $HomePartnersImageOne = carbon_get_post_meta( get_the_ID(), 'home_partners_image_one');
    $HomePartnersImageTwo = carbon_get_post_meta( get_the_ID(), 'home_partners_image_two');
    $HomePartnersImageThree = carbon_get_post_meta( get_the_ID(), 'home_partners_image_three');
    $HomePartnersImageFour = carbon_get_post_meta( get_the_ID(), 'home_partners_image_four');
    

   ?>

   <style>
    .all-services:before{
        background-image: url(<?php echo wp_get_attachment_url($HomeServicesBg) ?>)
    }
    .testimonials-wrap .testimonials-container::before{
        background-image: url(<?php echo wp_get_attachment_url($HomeTestimonialsQuotesImg) ?>)
    }
   
   </style>

    <!-- main content starts here -->
     <section class="home-banner">
        <div class="announcement">
          <div class="container d-md-flex align-items-center justify-content-between">
             <p><?php echo $AnnouncementText ?></p>
             <a class="mt-2 mt-md-0 d-inline-block"  target="_blank" href="https://cloudforestx.com/"><?php echo $LearnMore ?></a>
          </div>
        </div>
        
        <div class="card-header-text">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-lg-6 col-12 d-flex align-items-center">
                        <div class="main-text">
                            <h1 class="home-heading">
                            <span><?php echo $BannerTextBlack ?></span>
                            <?php echo  $BannerTextBlue ?>
                            </h1>
                            <p class=" my-4"><?php echo $BannerTextTwo ?></p>
                                <div class="homebanner-btn-wrap">                                 
                                    <button class="btn btn-primary">
                                     <a href="<?php echo $BannerBtnOneLink ?>">
                                        <?php echo $BannerBtnOne ?>
                                        <img class="img-fluid ml-2" src="<?php echo wp_get_attachment_url($BannerRightArrow) ?>" alt="">
                                     </a>                                    
                                    </button>  
                                    <button class="btn btn-outline-primary">
                                     <a href="<?php echo $$BannerBtnTwoLink ?>">
                                        <?php echo $BannerBtnTwo ?>                                        
                                        <img class="img-fluid ml-2" src="<?php echo wp_get_attachment_url($BannerRightArrowDark) ?>" alt="">
                                      </a>
                                    </button>                                
                                </div>                            
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 d-lg-flex align-items-center">
                        <img src="<?php echo wp_get_attachment_image_url($BannerImage) ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
       </div>
    </section>
    <!-- main content starts here -->

    <!-- swiper starts here -->
    <section>
        <div class="top-brands-main mt-3">
        <div class="container overflow-hidden">
            <div class="swiper top-brands overflow-hidden">
                <h5 class=""><?php echo $swiperHeading ?></h5>
                <div class="swiper-wrapper">
                        <?php foreach ( $HomepageImgSecTwo as $homepage_sec_two_img ) { ?>
                            <div class="swiper-slide">
                                <figure>
                                <img src="<?php echo wp_get_attachment_url($homepage_sec_two_img['section_two_swiper']) ?>" alt="swiper-image" />
                                </figure>
                            </div>
                        <?php } ?>
                </div>
            </div> 
        </div>
        </div>
    </section>
    <!-- swiper ends here -->

    <!-- services section starts here -->
    <section id="all-services" class="section all-services pb-5 pb-md-0 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 d-flex align-items-center my-md-5">
                    <div class="section-content text-center">
                        <h5 class="section-extra-responsive"><?php echo $SecThreeHeading ?></h5>
                        <h2 class="home-heading"><span><?php echo $SecThreeSubHeading ?></span><?php echo $SecThreeSubHeadingTwo ?> </h2>
                        <p class="mt-5"><?php echo $SecThreeDescription ?></p>

                    </div>
                </div>
                <div class="col-lg-12 text-center pb-5">
                    <div class="services-wrapper">
                        <img class="img-fluid right-arrow" src="<?php echo wp_get_attachment_url($ServicesArrowImg) ?>"
                            alt="">
                        <div class="first-row">
                            <a href="software-development-services.php" class="service-container service1">
                                <div class="text-center woh">
                                    <img class="img-fluid" src="<?php echo wp_get_attachment_url( $servicesGridImageOne) ?>" alt="">
                                    <span><?php echo $servicesGridTextOne ?></span>
                                </div>
                                <p><?php echo $servicesGridTextOne ?></p>
                            </a>
                            <a href="software-testing-services.php" class="service-container service2">
                                <div class="text-center woh">
                                    <img class="img-fluid" src="<?php echo wp_get_attachment_url( $servicesGridImageTwo) ?>" alt="">
                                    <span><?php echo $servicesGridTextTwo ?></span>
                                </div>
                                <p><?php echo $servicesGridTextTwo ?></p>
                            </a>
                            <a href="web-design-services.php" class="service-container service3">
                                <div class="text-center woh">
                                    <img class="img-fluid" src="<?php echo wp_get_attachment_url($servicesGridImageThree) ?>" alt="">
                                    <span><?php echo $servicesGridTextThree ?></span>
                                </div>
                                <p><?php echo $servicesGridTextThree ?></p>
                            </a>
                            <a href="big-data-services.php" class="service-container service4">
                                <div class="text-center woh">
                                    <img class="img-fluid" src="<?php echo  wp_get_attachment_url($servicesGridImageFour) ?>" alt="">
                                    <span><?php echo $servicesGridTextFour ?></span>
                                </div>
                                <p><?php echo $servicesGridTextFour ?></p>
                            </a>
                        </div>
                        <div class="second-row">
                            <a href="devops-consulting-services.php" class="service-container service5">
                                <div class="text-center woh">
                                    <img class="img-fluid" src="<?php echo  wp_get_attachment_url($servicesGridImageFive) ?>" alt="">
                                    <span><?php echo $servicesGridTextFive ?></span>
                                </div>
                                <p><?php echo $servicesGridTextFive ?></p>
                            </a>
                            <a href="cloud-computing-services.php" class="service-container service6">
                                <div class="text-center woh">
                                    <img class="img-fluid" src="<?php echo wp_get_attachment_url( $servicesGridImageSix) ?>" alt="">
                                    <span><?php echo $servicesGridTextSix ?></span>
                                </div>
                                <p><?php echo $servicesGridTextSix ?></p>
                            </a>
                            <a href="iot-development-services.php" class="service-container service7">
                                <div class="text-center woh">
                                    <img class="img-fluid" src="<?php echo wp_get_attachment_url($servicesGridImageSeven) ?>" alt="">
                                    <span><?php echo $servicesGridTextSeven ?></span>
                                </div>
                                <p><?php echo $servicesGridTextSeven ?></p>
                            </a>
                            <a href="it-infra-service-providers.php" class="service-container service8">
                                <div class="text-center woh">
                                    <img class="img-fluid" src="<?php echo  wp_get_attachment_url($servicesGridImageEight) ?>" alt="">
                                    <span><?php echo $servicesGridTextEight ?></span>
                                </div>
                                <p><?php echo $servicesGridTextEight ?></p>
                            </a>
                        </div>
                    </div>
                    <button class="btn btn-primary mt-5 ml-auto mr-auto">
                        <a href=" <?php echo $servicesGridButtonLink ?>">
                            <?php echo $servicesGridButton ?>
                            <img class="img-fluid ml-3" src="<?php echo wp_get_attachment_url($servicesGridButtonArrow) ?>" alt="">
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- services section ends here -->

    <!-- case-study starts here -->
     <section id="case-studies" class="section case-studies position-relative mb-5 py-7">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-content">
                        <h5 class="section-extra-responsive"><?php echo $HomeCaseStudyHeading ?></h5>
                        <h2 class="home-heading"> <?php echo $HomeCaseStudySubHeading ?> <span><?php echo $HomeCaseStudySubHeadingTwo ?></span></h2>
                        <p class=" mt-5"><?php echo $HomeCaseStudyDescription?></p>
                        <p class=""><?php echo $HomeCaseStudyDescriptionTwo?> </p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="casestudy-wrap mt-5">
                        <div class="row">
                             <?php foreach ( $HomepageCasestudySec as $HomepageCasestudy ) { ?>
                            <div class="col-lg-6 col-12 col-sm-6">
                                <a href="case-studies.php">
                                    <div class="casestudy-container">
                                        <div class="content-wrap">
                                            <img width="80" height="80" loading="lazy" class="img-fluid casestudy-icon" src="<?php echo wp_get_attachment_url($HomepageCasestudy['home_case_study_grid_image']) ?>" alt="">
                                            <h5><?php echo $HomepageCasestudy['home_case_study_grid_head'] ?></h5>
                                            <p><?php echo $HomepageCasestudy['home_case_study_grid_desc'] ?></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php } ?>                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- case-study ends here -->

    <!-- about us starts here -->
    <section class="section about-us py-7">
        <div class="section-content text-center mb-5 pb-3">
            <h5 class="section-extra-responsive text-center"><?php echo $HomeAboutusHeading ?></h5>
            <h2 class="text-center home-heading"><?php echo $HomeAboutusSubHeading ?> <span><?php echo $HomeAboutusSubHeadingTwo ?></span> </h2>
        </div>
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-8 pb-3 pb-lg-0">
                    <div class="row no-gutters pr-lg-2">
                        <div class="col-md-6 mb-3">
                            <div class="about-box">
                                <img  width="384" height="330" loading="lazy" class="img-fluid" src="<?php echo wp_get_attachment_url($homeAboutusAboutBox) ?>" alt="">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3 pl-md-3">
                            <div class="our-story about-box h-100 p-xl-5 p-4">
                                <h2><?php echo $homeAboutusOurStoryHeading ?></h2>
                                <h4><?php echo $homeAboutusOurStorySubheading ?></h4>
                                <a href="<?php echo $homeAboutusOurStoryBtnLink ?>"><?php echo $homeAboutusOurStoryBtn ?></a>                                
                            </div>
                        </div>
                        <div class="col-md-8 pr-md-3 pb-3 pb-md-0">
                            <div class="why-us about-box h-100 p-xl-5 p-4">
                                <h2 class="mb-3"><?php echo $homeAboutusWhyUsHeading ?></h2>
                                <h5 class="mb-4"><?php echo $homeAboutusWhyUsSubheading ?></h5>
                                <p>
                                    <?php echo $homeAboutusWhyUsDescription ?>
                                </p>
                                <a href="<?php echo $homeAboutusWhyUsBtnLink ?>"><?php echo $homeAboutusWhyUsBtn ?></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="about-box">
                                <img  width="384" height="330" loading="lazy" class="img-fluid" src="<?php echo wp_get_attachment_url($homeAboutusAboutBox2) ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pl-lg-2">
                    <div class="who-we-are h-100 p-xl-5 p-4">
                        <h2 class="mb-3"><?php echo $homeAboutusWhoWeAreHeading ?></h2>
                        <h5 class="mb-5"><?php echo $homeAboutusWhoWeAreSubheading ?></h5>
                        <p><?php echo $homeAboutusWhoWeAreDescription ?></p>
                        <a href="<?php echo $homeAboutusWhoWeAreBtnLink ?>"><?php echo $homeAboutusWhoWeAreBtn ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about us ends here -->

    <!-- testimonials starts here -->
    <section class="section testimonials-wrap">
        <!-- <span class="section-extra">Testimonials</span> -->
        <div class="section-content text-center pt-5">
            <h5 class="section-extra-responsive text-center"><?php echo $HomeTestimonialsHeading ?></h5>
            <h2 class="text-center home-heading"><?php echo $HomeTestimonialsSubHeading ?> <span><?php echo $HomeTestimonialsSubHeadingTwo ?></span> <?php echo $HomeTestimonialsSubHeadingThree ?></h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-sm-10 offset-sm-1">
                    <div class="testimonials-container">
                        <div id="testimonials" class="carousel slide " data-ride="carousel">

                            <!-- Indicators -->
                            <ul class="carousel-indicators">
                                <li data-target="#testimonials" data-slide-to="0" class="active"></li>
                                <li data-target="#testimonials" data-slide-to="1"></li>
                                <li data-target="#testimonials" data-slide-to="2"></li>
                            </ul>

                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <p><?php echo $HomeTestimonialsCarouselDescription ?></p>
                                    <div class="author mt-4">
                                        <h4><?php echo $HomeTestimonialsCarouselHeading ?></h4>
                                        <h6><?php echo $HomeTestimonialsCarouselSubheading ?></h6>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <p><?php echo $HomeTestimonialsCarouselDescriptionTwo ?></p>
                                    <div class="author mt-4">
                                        <h4><?php echo $HomeTestimonialsCarouselHeadingTwo ?></h4>
                                        <h6><?php echo $HomeTestimonialsCarouselSubheadingTwo ?></h6>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <p><?php echo $HomeTestimonialsCarouselDescriptionThree ?></p>
                                    <div class="author mt-4">
                                        <h4><?php echo $HomeTestimonialsCarouselHeadingThree ?></h4>
                                        <h6><?php echo $HomeTestimonialsCarouselSubheadingThree ?></h6>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial ends here -->

    	
<?php get_sidebar( 'primary' ); ?>

    

    <!-- partners starts here -->

       <section class="section partners-wrap ">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="row no-gutters">
                        <div class="col-6 d-flex align-items-center justify-content-center">
                            <div class="partner">
                                <img  width="95" height="43" loading="lazy" class="img-fluid w-50" src="<?php echo wp_get_attachment_url($HomePartnersImageOne) ?>" alt="">
                            </div>
                        </div>
                        <div class="col-6 d-flex align-items-center justify-content-center">
                            <div class="partner">
                                <img  width="95" height="13" loading="lazy" class="img-fluid w-50" src="<?php echo wp_get_attachment_url($HomePartnersImageTwo) ?>" alt="">
                            </div>
                        </div>
                        <div class="col-6 d-flex align-items-center justify-content-center">
                            <div class="partner">
                                <img  width="95" height="11" loading="lazy" class="img-fluid w-50" src="<?php echo wp_get_attachment_url($HomePartnersImageThree) ?>" alt="">
                            </div>
                        </div>
                        <div class="col-6 d-flex align-items-center justify-content-center">
                            <div class="partner">
                                <img  width="95" height="39" loading="lazy" class="img-fluid w-50" src="<?php echo wp_get_attachment_url($HomePartnersImageFour) ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 pl-lg-5 mt-4 mt-lg-0 d-flex align-items-center">
                    <h2 class="partner-home-heading"><?php echo $HomePartnersHeading ?></h2>
                </div>
            </div>
        </div>
    </section>

    <!-- partners ends here -->

<?php
get_footer(); 
?>