<?php /*Template Name: Toolkit*/?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Primary Meta Tags -->
  <title>"<%HomePageTitle%>"</title>
  <meta name="description" content="<%HomePageMetaDescription%>">
  <meta name="keywords" content="<%HomePageKeywords%>">
  <meta name="language" content="English">
  <meta name="author" content="Thinksys">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="<%HomePageOgurl%>">
  <meta property="og:title" content="<%HomePageOgtitle%>">
  <meta property="og:description" content="<%HomePageOgdescription%>">
  <meta property="og:image" content="<%HomePageOgimage%>">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="<%HomePageTwitterurl%>">
  <meta property="twitter:title" content="<%HomePageTwittertitle%>">
  <meta property="twitter:description" content="<%HomePageTwitterdescription%>">
  <meta property="twitter:image" content="<%HomePageTwitterimage%>">

  <!--Robots tag-->
  <meta name="robots" content=<%HomePageTobotscontent1%>, <%HomePageTobotscontent2%>>

  <!--structure data-->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
   "@type":"<%Service%>"
    "mainEntityOfPage": {
      "@type": "WebPage",
      "@id": "<%HomePageMainEntityOfPageid%>"
    },
    "headline": "<%HomePagejsonheadline%>",
    "description": "<%HomePagejsondescription%>",
    "image": "<%HomePagejsonimage%>",
    "author": {
      "@type": "Organization",
      "name": "<%HomePagejsonauthorName%>"
    },
    "publisher": {
      "@type": "Organization",
      "name": "<%HomePagejsonpublisherName%>",
      "logo": {
        "@type": "ImageObject",
        "url": "<%HomePagejsonpublisherUrl%>"
      }
    },
    "datePublished": "<%HomePagejsonDatePublished%>",
    "dateModified": "<%HomePagejsonDateModified%>"
  }
  </script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M3GBTJ');</script>
<!-- End Google Tag Manager -->
</head>

<?php 
$HeroImage = carbon_get_post_meta( get_the_ID(), 'bgimage' );
$HeroHeading = carbon_get_post_meta(get_the_ID(), 'bannerheading');

$HomeText = carbon_get_post_meta(get_the_ID(), 'home');
$HomeLink = carbon_get_post_meta(get_the_ID(), 'homelink');
$SubmenuText = carbon_get_post_meta(get_the_ID(), 'submenu');
$SubmenuLink = carbon_get_post_meta(get_the_ID(), 'submenulink');
$InnerPageText = carbon_get_post_meta(get_the_ID(), 'inner');

$FirstNavImage = carbon_get_post_meta(get_the_ID(), 'firstnavimg');
$FirstNavText = carbon_get_post_meta(get_the_ID(), 'firstnavtext');
$RemainingNav = carbon_get_post_meta(get_the_ID(), 'otheroptions');

$DevToolkitHeading = carbon_get_post_meta(get_the_ID(), 'devheading');
$DevFirstBtnText = carbon_get_post_meta(get_the_ID(), 'devfirstbtntext');
$DevFirstBtnCls = carbon_get_post_meta(get_the_ID(), 'devfirstbtncls');
$DevOtherBtns = carbon_get_post_meta(get_the_ID(), 'devotherbuttons');
$DevLogoBlocks = carbon_get_post_meta(get_the_ID(), 'devlogoblocks');

$MobToolkitHeading = carbon_get_post_meta(get_the_ID(), 'mobheading');
$MobFirstBtnText = carbon_get_post_meta(get_the_ID(), 'mobfirstbtntext');
$MobFirstBtnCls = carbon_get_post_meta(get_the_ID(), 'mobfirstbtncls');
$MobOtherBtns = carbon_get_post_meta(get_the_ID(), 'mobotherbuttons');
$MobLogoBlocks = carbon_get_post_meta(get_the_ID(), 'moblogoblocks');

$TestToolkitHeading = carbon_get_post_meta(get_the_ID(), 'testheading');
$TestFirstBtnText = carbon_get_post_meta(get_the_ID(), 'testfirstbtntext');
$TestFirstBtnCls = carbon_get_post_meta(get_the_ID(), 'testfirstbtncls');
$TestOtherBtns = carbon_get_post_meta(get_the_ID(), 'testotherbuttons');
$TestLogoBlocks = carbon_get_post_meta(get_the_ID(), 'testlogoblocks');

?>

<?php get_header();?>

<section class="subpage-banner toolkit-banner" style="background-image: url(<?php echo wp_get_attachment_image_src($HeroImage, 'full')[0];?>);">
    <div class="banner-gradient">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-xl-6 offset-xl-3 text-center text-white">
                    <h1 class=""><?php echo $HeroHeading?></h1>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="<?php echo $HomeLink?>"><?php echo $HomeText?></a></li>
            <li><a href="<?php echo $SubmenuLink?>"><?php echo $SubmenuText?></a></li>
            <li class="active"><?php echo $InnerPageText?></li>
        </ol>
        <hr class="m-0">
    </div>
</section>
<section class="toolkit-main mt-7">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 mt-lg-5 pt-lg-3 mb-5">
                <nav class="navigation mt-4" id="mainNav">
                    <a class="navigation__link active" href="#development-toolkit">
                        <img src="<?php echo wp_get_attachment_image_url($FirstNavImage)?>" alt="">
                        <p><?php echo $FirstNavText?></p>
                    </a>
                    <?php foreach($RemainingNav as $key){?>
                        <a class="navigation__link" href="<?php echo $key['othernavlink']?>">
                            <img src="<?php echo wp_get_attachment_image_url($key['othernavimg'])?>" alt="">
                            <p><?php echo $key['othernavtext']?></p>
                        </a>
                    <?php }?>
                </nav>
            </div>
            <div class="col-lg-9">
                <!-- Development Toolkit -->
                <div id="development-toolkit"></div>
                <div class="container toolkit-section p-0 pt-7">
                    <h2 class="mb-4"><?php echo $DevToolkitHeading?></h2>
                    <div class="controls mb-5">
                        <div class="Innercontainer">
                            <div class=" d-block d-xl-flex justify-content-around text-center">
                                <button class="view-filter active <?php echo $DevFirstBtnCls?>" data-filter="all"><?php echo $DevFirstBtnText?></button>
                                <?php foreach($DevOtherBtns as $keys){?>
                                    <button class="view-filter <?php echo $keys['devotherbtnclass']?>" data-filter="<?php echo $keys['devotherbtnfilter']?>"><?php echo $keys['devotherbtntext']?></button>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="developement-toolkit-wrap toolkit-wrap pt-7">
                                <?php foreach($DevLogoBlocks as $val){?>
                                    <li class="developement-toolkit toolkit <?php echo $val['devlistclass']?>">
                                        <div class="toolkit-container">
                                            <div class="text-center">
                                                <img src="<?php echo wp_get_attachment_image_url($val['devlogoimage'])?>" alt="" class="img-fluid">
                                                <p><?php echo $val['devlogotext']?></p>
                                            </div>
                                        </div>
                                    </li>
                                <?php }?>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Mobile Development Toolkit -->
                <div id="mob-development-toolkit"></div>
                <div class="container toolkit-section p-0 pt-7 mt-5" >
                    <h2 class="mb-4"><?php echo $MobToolkitHeading?></h2>
                    <div class="controls mb-5">
                        <div class="Innercontainer">
                            <div class=" d-block d-xl-flex justify-content-around text-center">
                                <button class="view-filter active <?php echo $MobFirstBtnCls?>" data-filter="all"><?php echo $MobFirstBtnText?></button>
                                <?php foreach($MobOtherBtns as $keys){?>
                                    <button class="view-filter <?php echo $keys['mobotherbtnclass']?>" data-filter="<?php echo $keys['mobotherbtnfilter']?>"><?php echo $keys['mobotherbtntext']?></button>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="mobile-developement-toolkit-wrap toolkit-wrap pt-7">
                                <?php foreach($MobLogoBlocks as $val){?>
                                    <li class="mobile-developement-toolkit toolkit <?php echo $val['moblistclass']?>">
                                        <div class="toolkit-container">
                                            <div class="text-center">
                                                <img src="<?php echo wp_get_attachment_image_url($val['moblogoimage'])?>" alt="" class="img-fluid">
                                                <p><?php echo $val['moblogotext']?></p>
                                            </div>
                                        </div>
                                    </li>
                                <?php }?>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Testing Toolkit -->
                <div id="testing-toolkit" class="mb-5"></div>
                <div class="container toolkit-section p-0 pt-7 mt-5"  id="">
                    <h2 class="mb-4"><?php echo $TestToolkitHeading?></h2>
                    <div class="controls mb-5">
                        <div class="Innercontainer">
                            <div class=" d-block d-xl-flex justify-content-around text-center">
                                <button class="view-filter active <?php echo $TestFirstBtnCls?>" data-filter="all"><?php echo $TestFirstBtnText?></button>
                                <?php foreach($TestOtherBtns as $keys){?>
                                    <button class="view-filter <?php echo $keys['testotherbtnclass']?>" data-filter="<?php echo $keys['testotherbtnfilter']?>"><?php echo $keys['testotherbtntext']?></button>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="testing-toolkit-wrap toolkit-wrap py-7 mb-5">
                                <?php foreach($TestLogoBlocks as $val){?>
                                    <li class="testing-toolkit toolkit <?php echo $val['testlistclass']?>">
                                        <div class="toolkit-container">
                                            <div class="text-center">
                                            <img src="<?php echo wp_get_attachment_image_url($val['testlogoimage'])?>" alt="" class="img-fluid">
                                                <p><?php echo $val['testlogotext']?></p>
                                            </div>
                                        </div>
                                    </li>
                                <?php }?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</section>
<?php get_footer();?>
<script>
      $(document).ready(function() {
		$('a[href*=#]').bind('click', function(e) {
            e.preventDefault(); // prevent hard jump, the default behavior

            var target = $(this).attr("href"); // Set the target as variable

            // perform animated scrolling by getting top-position of target-element and set it as scroll target
            $('html, body').stop().animate({
                scrollTop: $(target).offset().top
            }, 600, function() {
                location.hash = target; //attach the hash (#jumptarget) to the pageurl
            });

            return false;
        });
    });

  $(window).scroll(function() {
      var scrollDistance = $(window).scrollTop();

      // Show/hide menu on scroll
      //if (scrollDistance >= 850) {
      //		$('nav').fadeIn("fast");
      //} else {
      //		$('nav').fadeOut("fast");
      //}
    
      // Assign active class to nav links while scolling
      $('.toolkit-section').each(function(i) {
          if ($(this).position().top <= scrollDistance) {
              $('.navigation a.active').removeClass('active');
              $('.navigation a').eq(i).addClass('active');
          }
      });
  }).scroll();

      (function() {
    'use strict';
    $.MixItUp = function() {
        var self = this;
        self._execAction('_constructor', 0);
        $.extend(self, {
            controls: {
                enable: true,
                live: false,
                toggleFilterButtons: false,
                toggleLogic: 'or',
                activeClass: 'active'
            }
        });
        self._execAction('_constructor', 1);
    };
   }
)(jQuery);
$(document).ready(function () {
  // Developement toolkit
    $(".controls button").on("click", function () {
          $(".controls button").removeClass("active");
          $(this).addClass("active");
    });
    $(".ide-editors-tab").on("click", function () {
          $('.developement-toolkit').removeClass("animate animateTwo").addClass('animateTwo').hide();
          $('.ide-editor').removeClass("animate animateTwo").addClass('animate').show();
    });
    $(".developement-tab").on("click", function () {
          $('.developement-toolkit').removeClass("animate animateTwo").addClass('animateTwo').hide();
          $('.developement').removeClass("animate animateTwo").addClass('animate').show();
    });
    $(".containers-tab").on("click", function () {
          $('.developement-toolkit').removeClass("animate animateTwo").addClass('animateTwo').hide();
          $('.containers').removeClass("animate animateTwo").addClass('animate').show();
    });
    $(".cloud-tab").on("click", function () {
          $('.developement-toolkit').removeClass("animate animateTwo").addClass('animateTwo').hide();
          $('.cloud').removeClass("animate animateTwo").addClass('animate').show();
    });
    $(".restclient-tab").on("click", function () {
          $('.developement-toolkit').removeClass("animate animateTwo").addClass('animateTwo').hide();
          $('.restclient').removeClass("animate animateTwo").addClass('animate').show();
    });
    $(".version-control-tab").on("click", function () {
          $('.developement-toolkit').removeClass("animate animateTwo").addClass('animateTwo').hide();
          $('.version-control').removeClass("animate animateTwo").addClass('animate').show();
    });
    $(".version-cont-server-tab").on("click", function () {
          $('.developement-toolkit').removeClass("animate animateTwo").addClass('animateTwo').hide();
          $('.version-control-server').removeClass("animate animateTwo").addClass('animate').show();
    });
    $(".ci-cd-tab").on("click", function () {
          $('.developement-toolkit').removeClass("animate animateTwo").addClass('animateTwo').hide();
          $('.ci-cd').removeClass("animate animateTwo").addClass('animate').show();
    });
    $(".misc-tab").on("click", function () {
          $('.developement-toolkit').removeClass("animate animateTwo").addClass('animateTwo').hide();
          $('.misc').removeClass("animate animateTwo").addClass('animate').show();
    });
    $(".virtualization-tab").on("click", function () {
          $('.developement-toolkit').removeClass("animate animateTwo").addClass('animateTwo').hide();
          $('.virtualization').removeClass("animate animateTwo").addClass('animate').show();
    });
    $(".all-developement-tab").on("click", function () {
          $('.developement-toolkit').removeClass("animate animateTwo").addClass('animate').show();
    });
    
    // mobile development toolkit
    $(".app-developement-tab").on("click", function () {
          $('.mobile-developement-toolkit').removeClass("animate animateTwo").addClass('animateTwo').hide();
          $('.app-dev-tool').removeClass("animate animateTwo").addClass('animate').show();
    });
    $(".tppm-tab").on("click", function () {
          $('.mobile-developement-toolkit').removeClass("animate animateTwo").addClass('animateTwo').hide();
          $('.tppm').removeClass("animate animateTwo").addClass('animate').show();
    });
    $(".bug-traking-tab").on("click", function () {
          $('.mobile-developement-toolkit').removeClass("animate animateTwo").addClass('animateTwo').hide();
          $('.bug-traking').removeClass("animate animateTwo").addClass('animate').show();
    });
    $(".distribution-tab").on("click", function () {
          $('.mobile-developement-toolkit').removeClass("animate animateTwo").addClass('animateTwo').hide();
          $('.distribution').removeClass("animate animateTwo").addClass('animate').show();
    });
    $(".backend-tab").on("click", function () {
          $('.mobile-developement-toolkit').removeClass("animate animateTwo").addClass('animateTwo').hide();
          $('.backend').removeClass("animate animateTwo").addClass('animate').show();
    });
    $(".local-database-tab").on("click", function () {
          $('.mobile-developement-toolkit').removeClass("animate animateTwo").addClass('animateTwo').hide();
          $('.local-database').removeClass("animate animateTwo").addClass('animate').show();
    });
    $(".profiling-tools-tab").on("click", function () {
          $('.mobile-developement-toolkit').removeClass("animate animateTwo").addClass('animateTwo').hide();
          $('.profiling-tools').removeClass("animate animateTwo").addClass('animate').show();
    });
    $(".mobile-all-tab").on("click", function () {
          $('.mobile-developement-toolkit').removeClass("animate animateTwo").addClass('animate').show();
    });
    // Testing toolkit
    $(".automation-tab").on("click", function () {
          $('.testing-toolkit').removeClass("animate animateTwo").addClass('animateTwo').hide();
          $('.automation-tool').removeClass("animate animateTwo").addClass('animate').show();
    });
    $(".load-performance-tab").on("click", function () {
          $('.testing-toolkit').removeClass("animate animateTwo").addClass('animateTwo').hide();
          $('.load-performance').removeClass("animate animateTwo").addClass('animate').show();
    });
    $(".bug-traking-tool-tab").on("click", function () {
          $('.testing-toolkit').removeClass("animate animateTwo").addClass('animateTwo').hide();
          $('.bug-traking-tool').removeClass("animate animateTwo").addClass('animate').show();
    });
    $(".test-mgt-tab").on("click", function () {
          $('.testing-toolkit').removeClass("animate animateTwo").addClass('animateTwo').hide();
          $('.test-mangement').removeClass("animate animateTwo").addClass('animate').show();
    });
    $(".repo-tab").on("click", function () {
          $('.testing-toolkit').removeClass("animate animateTwo").addClass('animateTwo').hide();
          $('.repo').removeClass("animate animateTwo").addClass('animate').show();
    });
    $(".others-tab").on("click", function () {
          $('.testing-toolkit').removeClass("animate animateTwo").addClass('animateTwo').hide();
          $('.others').removeClass("animate animateTwo").addClass('animate').show();
    });
    $(".testing-all-tab").on("click", function () {
          $('.testing-toolkit').removeClass("animate animateTwo").addClass('animate').show();
    });
});
    </script>