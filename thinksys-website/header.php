 <?php 
  $headerlogoimg = get_header_image(); 

  $GetinTouch = carbon_get_post_meta( get_the_ID(), 'getin_touch');
  // $GetinTouchLink = carbon_get_post_meta( get_the_ID(), 'getin_touch_link');
  // $OpenMenu = carbon_get_post_meta( get_the_ID(), 'open_menu');   
  // $CloseMenu = carbon_get_post_meta( get_the_ID(), 'close_menu');   
  // $TextureBg = carbon_get_post_meta( get_the_ID(), 'texture_bg');  
  ?>   

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <!-- line-awesome cdn -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <!-- swiper css file -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.2/fullpage.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/header.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/footer.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/all.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/new-landing.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">

    <title>Thinksys website</title>
    <style>
      /* header css starts here */
    /* .mainHeader .mobile-navigation,.mainHeader .mobile-slider,.mainHeader .submenu  {
        background-image: url(<?php //echo wp_get_attachment_url($TextureBg) ?>);
    } */
    .software-development-services,.qa-testing,.cloud-computing-services,.big-data,.devops,.design,.iot,.it-infra{
      position:relative;
    }
    /* .software-development-services::before,
    .qa-testing::before,
    .cloud-computing-services::before,
    .big-data::before,
    .devops::before,
    .design::before,
    .iot::before,
    .it-infra::before{
        content: '';
        /* position: absolute; 
        background-image: url(http://localhost:7882/wp-thinksys/wp-content/uploads/2022/07/developement-service.jpg) !important;
        background-repeat: no-repeat !important;
        background-position: top center !important;
        padding-left: 5px !important;
        width: 100% !important;
        height: 200px !important;
        background-size: contain !important;
        display: inline-block;        
    } */
    /* header css ends here */
    </style>
    <?php wp_head(); ?>
  </head>

 <body>
 
<div class="mainHeader">
   <header class="header indexHeader" id="myHeader">
      <div class="header-inner">
         <div class="logo">
            <a href="/index.php/">
            <img src="<?php echo $headerlogoimg ?>">
            </a>
         </div>
         <div class="navR">
            <li>
              <a href="/software-services.php/">Services</a>
            </li>
            <li>
              <a href="<?php echo get_template_directory_uri(); ?>/about-us.php">About</a>
            </li>
            <li>
              <a href="/careers.php/">Careers</a>
            </li>
            <li>
              <a href="/get-in-touch.php/">
                <img style="filter: brightness(0);" src="http://localhost:7882/wp-thinksys/wp-content/uploads/2022/07/mail.png">
              </a>
            </li>
            <li class="mobile-menu-icon">
              <img src="http://localhost:7882/wp-thinksys/wp-content/uploads/2022/07/menu.png">  
            </li>
         </div>
      </div>
   </header>
   <div class="filter"></div>
   <div class="mobile-slider">
      <nav class="mobile-navigation">
        <div class="mobile-slider-top">
            <a href="/index.php/"><img src="<?php echo $headerlogoimg ?>" style="width:150px;"></a>
            <div class="closeBtn">
              <img src="http://localhost:7882/wp-thinksys/wp-content/uploads/2022/07/delete.png" class="close-menu">                      
            </div>
        </div>
        <!-- for mobile navigation -->
        <div class="mobile-menu-nav">
          <ul class="mob-nav">
            <li class="mob-nav-services">
              <a href="javascript:void(0);">Services</a>
            </li>
            <li class="mob-nav-about">
              <a href="javascript:void(0);">About</a>
            </li>
            <li class="mob-nav-resources">
              <a href="javascript:void(0);">Resources</a>
            </li>
            <li class="mob-nav-products">
              <a href="https://kryptonqa.com/" target="_blank">Products</a>
            </li>
            <li class="withoutSubmenu"><a href="/careers.php/"> Careers</a></li>
            <li class="withoutSubmenu"><a href="/blogs/"> Blogs</a></li>
            <li class="withoutSubmenu"><a href="/get-in-touch.php/"> Get In Touch</a></li>
            <div class="socialIcon mt-4">
              <a href="https://www.facebook.com/ThinkSysInc"  target="_blank"><i class="fa fa-facebook"></i></a>
              <a href="https://twitter.com/ThinkSysInc"  target="_blank"><i class="fa fa-twitter"></i></a>
              <a  href="https://www.linkedin.com/company/thinksys-inc/mycompany/" target="_blank"><i class="fa fa-linkedin"></i></a>
              <a href="https://www.instagram.com/thinksys_inc/"  target="_blank"><i class="fa fa-instagram"></i></a>
            </div>
          </ul>
          
          <div class="mobile-submenu mobile-submenu-services">
            <div class="ServiceTitle ml-3 mt-3">
                <h4>Services</h4>
            </div>
            <div class="mob-sub-close">
                <img src="../assets/images/icons/delete.svg" class="">                      
            </div>
            <ul class="">
                <li>
                  <a href="/software-development-services.php/" class="boxShadow">
                    <div class="development-img"></div>
                    <p>Development</p>
                  </a>
                </li>
                <li>
                  <a href="/software-testing-services.php/">QA Testing test</a>
                </li>
                <li>
                  <a href="/cloud-computing-services.php/">Cloud Computing</a>
                </li>
                <li>
                  <a href="/big-data-services.php/">Big Data</a>
                </li>
                <li>
                  <a href="/devops-consulting-services.php/">DevOps</a>
                </li>
                <li>
                  <a href="/web-design-services.php/">Design</a>
                </li>
                <li>
                  <a href="/iot-development-services.php/">IOT</a>
                </li>
                <li>
                  <a href="/it-infra-service-providers.php/">IT Infra</a>
                </li>
            </ul>
          </div>
          
          <div class="mobile-submenu mobile-submenu-about">
            <div class="ServiceTitle ml-3 mt-3">
                <h4>About</h4>
            </div>
            <div class="mob-sub-close">
              <img src="../assets/images/icons/delete.svg" class="">                      
            </div>
            <ul class="">
              <li>
                <a href="/about-us.php/">About Us</a>
              </li>
              <li>
                <a href="/clients.php/">Clients</a>
              </li>
              <li>
                <a href="/testimonials.php/">Testimonials</a>
              </li>
            </ul>
          </div>
          <div class="mobile-submenu mobile-submenu-resources">
            <div class="ServiceTitle ml-3 mt-3">
                  <h4>Resources</h4>
              </div>
              <div class="mob-sub-close">
                <img src="../assets/images/icons/delete.svg" class="">                      
              </div>
            <ul class="">
              <li>
                <a href="/pricing.php/">Pricing</a>
              </li>
              <li>
                <a href="/toolkit.php/">Toolkit</a>
              </li>
              <li>
                <a href="/case-studies.php/">Case Studies</a>
              </li>
            </ul>
          </div>
        </div>
        <!-- for mobile navigation end -->
        <ul class="list-inline desktop-menu-nav">
          <!-- <li class="serviceHover" id="service">
              <a href="/software-services.php/" class="service-click"> Services</a> 
              <div class="submenu mb-0" id="serviceMenu">
                <div class="backIcon">
                    <p><i class="fa fa-chevron-left pr-0" aria-hidden="true"></i> Back</p>
                </div>
                <div class="homeIcon">
                    <p><i class="fa fa-home"></i></p>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                      <div class="ServiceTitle">
                          <h4>Services</h4>
                      </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                      <a href="/software-development-services.php/" class="boxShadow">
                          <img src="../assets/images/developement-service.jpg">
                          <p>Development</p>
                      </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                      <a href="/software-testing-services.php/" class="boxShadow">
                          <img src="../assets/images/software-testing.jpg">
                          <p>QA Testing</p>
                      </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                      <a href="/cloud-computing-services.php/" class="boxShadow">
                          <img src="../assets/images/cloud-computing.jpg">
                          <p>Cloud Computing</p>
                      </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                      <a href="/big-data-services.php/" class="boxShadow">
                          <img src="../assets/images/big-data.jpg">
                          <p>Big Data</p>
                      </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                      <a href="/devops-consulting-services.php/" class="boxShadow">
                          <img src="../assets/images/dev-ops.jpg">
                          <p>DevOps</p>
                      </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                      <a href="/web-design-services.php/" class="boxShadow">
                          <img src="../assets/images/design.jpg">
                          <p>Design</p>
                      </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                      <a href="/iot-development-services.php/" class="boxShadow">
                          <img src="../assets/images/iot.jpg">
                          <p>IOT</p>
                      </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                      <a href="/it-infra-service-providers.php/" class="boxShadow">
                          <img src="../assets/images/it-infra.jpg">
                          <p>IT Infra</p>
                      </a>
                    </div>
                </div>
              </div>
          </li>
          <li class="aboutHover" id="about">
              <a href="/about-us.php/" class="removeAnchor">About</a>
              <div class="submenu mb-0">
                <div class="backIcon">
                    <p><i class="fa fa-chevron-left pr-0" aria-hidden="true"></i> Back</p>
                </div>
                <div class="homeIcon">
                    <p><i class="fa fa-home"></i></p>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                      <div class="ServiceTitle">
                          <h4>About</h4>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                      <a href="/about-us.php/" class="boxShadow">
                          <img src="../assets/images/about-us-menu.jpg">
                          <p>About Us</p>
                      </a>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                      <a href="/clients.php/" class="boxShadow">
                          <img src="../assets/images/clients-menu.jpg">
                          <p>Clients</p>
                      </a>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                      <a href="/testimonials.php/" class="boxShadow">
                          <img src="../assets/images/testimonials-menu.jpg">
                          <p>Testimonials</p>
                      </a>
                    </div>
                </div>
              </div>
          </li>
          <li class="resourcesHover" id="resource">
              <a href="javascript:void(0);" class="removeAnchor">Resources</a>
              <div class="submenu mb-0">
                <div class="backIcon">
                    <p><i class="fa fa-chevron-left pr-0" aria-hidden="true"></i> Back</p>
                </div>
                <div class="homeIcon">
                    <p><i class="fa fa-home"></i></p>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                      <div class="ServiceTitle">
                          <h4>Resources</h4>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                      <a href="/pricing.php/" class="boxShadow">
                          <img src="../assets/images/pricebanner.jpg">
                          <p>Pricing</p>
                      </a>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                      <a href="/toolkit.php/" class="boxShadow">
                          <img src="../assets/images/toolkit-menu.jpg">
                          <p>Toolkit</p>
                      </a>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                      <a href="/case-studies.php/" class="boxShadow">
                          <img src="../assets/images/case_study.jpg">
                          <p>Case Studies</p>
                      </a>
                    </div>
                </div>
              </div>
          </li>
          <li class="productsHover" id="product">
              <a href="javascript:void(0);" class="removeAnchor"> Products</a>
              <div class="submenu mb-0">
                <div class="backIcon">
                    <p><i class="fa fa-chevron-left pr-0" aria-hidden="true"></i> Back</p>
                </div>
                <div class="homeIcon">
                    <p><i class="fa fa-home"></i></p>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                      <div class="ServiceTitle">
                          <h4>Products</h4>
                      </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6">
                      <a href="https://kryptonqa.com/" target="_blank" class="productImg">
                      <img src="../assets/images/thinksys-product.png">
                      </a>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6">
                      <div class="productText">
                          <h4>KryptonQA</h4>
                          <p>Krypton, the Selenium-based Free Trial framework for all your QA Automation needs, enables Manual Testers to become experts in Automation without any excessive programming knowledge. Designed for Web and Mobile, Krypton is highly customizable and suitable for diverse testing projects of any domain. Enjoy features like Cross Browser compatibility testing, Keyword Driven Testing, Rich Automated Reporting, Parallel Recovery, etc. and easily maintain all requirements, test cases, and defects in a single place with its Test Management Tools integration</p>
                          <button class="btn buttonDefault" onclick=" window.open('https://kryptonqa.com/', '_blank'); return false;">Read More</button>
                      </div>
                    </div>
                </div>
              </div>
          </li>
          <li class="withoutSubmenu"><a href="/careers.php/"> Careers</a></li>
          <li class="withoutSubmenu"><a href="/blogs/"> Blogs</a></li>
          <li class="withoutSubmenu"><a href="/get-in-touch.php/"> Get In Touch</a></li> -->
          <?php wp_nav_menu(array('theme-location' => 'desktop-menu-nav' )) ?>
        </ul>
        <div class="socialIcon desktop-menu-nav">
          <a href="https://www.facebook.com/ThinkSysInc"  target="_blank"><i class="fa fa-facebook"></i></a>
          <a href="https://twitter.com/ThinkSysInc"  target="_blank"><i class="fa fa-twitter"></i></a>
          <a  href="https://www.linkedin.com/company/thinksys-inc/mycompany/" target="_blank"><i class="fa fa-linkedin"></i></a>
          <a href="https://www.instagram.com/thinksys_inc/"  target="_blank"><i class="fa fa-instagram"></i></a>
          <a href="https://www.thinksys.com/feed/"  target="_blank"><i class="fa fa-rss"></i></a>
        </div>
      </nav>
   </div>
</div>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M3GBTJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->