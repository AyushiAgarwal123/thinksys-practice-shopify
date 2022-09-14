<?php /* Template Name: About Us */?>
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

<?php get_header();

$OpenMenu = carbon_get_post_meta( get_the_ID(), 'open_menu');   
$CloseMenu = carbon_get_post_meta( get_the_ID(), 'close_menu');   
$TextureBg = carbon_get_post_meta( get_the_ID(), 'texture_bg');  ?>

<?php 
$HeroImg = carbon_get_post_meta( get_the_ID(), 'heroimg' );
$BannerHeading = carbon_get_post_meta( get_the_ID(), 'bannerheading' );
$BannerPara = carbon_get_post_meta( get_the_ID(), 'bannerpara' );

$GetToKnowHeading = carbon_get_post_meta( get_the_ID(), 'heading' ); 
$GetToKnowSubHeading = carbon_get_post_meta( get_the_ID(), 'subheading' );
$GetToKnowImage = carbon_get_post_meta( get_the_ID(), 'img' );
$GetToKnowLogoImages = carbon_get_post_meta( get_the_ID(), 'logoimages' );
$GetToKnowBulletPoints = carbon_get_post_meta( get_the_ID(), 'bulletpoints' );

$LeadershipTextureBg = carbon_get_post_meta( get_the_ID(), 'texturebg' ); 
$LeadershipHeading = carbon_get_post_meta( get_the_ID(), 'leaderheading' ); 
$LeadershipText = carbon_get_post_meta( get_the_ID(), 'para' );
$LeadershipDetails = carbon_get_post_meta( get_the_ID(), 'details' );
$LeadershipPeople = carbon_get_post_meta( get_the_ID(), 'people' );

$WhyUsHeading = carbon_get_post_meta( get_the_ID(), 'whyusheading' ); 
$WhyUsSubHeading = carbon_get_post_meta( get_the_ID(), 'whyussubheading' ); 
$WhyUsImage = carbon_get_post_meta( get_the_ID(), 'whyusimg' ); 
$WhyUsPara = carbon_get_post_meta( get_the_ID(), 'whyuspara' ); 
$WhyUsInnerHeading = carbon_get_post_meta( get_the_ID(), 'whyusinnerheading' ); 
$WhyUsInnerPara = carbon_get_post_meta( get_the_ID(), 'whyusinnerpara' ); 
$WhyUsList = carbon_get_post_meta( get_the_ID(), 'whyuslist' ); 

$LifeHeading = carbon_get_post_meta( get_the_ID(), 'lifeheading' ); 
$LifeSubHeading = carbon_get_post_meta( get_the_ID(), 'lifesubheading' ); 
$LifePara = carbon_get_post_meta( get_the_ID(), 'lifepara' ); 
$LifeInnerHeading = carbon_get_post_meta( get_the_ID(), 'lifeinnerheading' ); 
$LifeInnerPara = carbon_get_post_meta( get_the_ID(), 'lifeinnerpara' ); 
$LifeAvailability = carbon_get_post_meta( get_the_ID(), 'availability' ); 

?>
<section class="subpage-banner" style="background-image: url(<?php echo wp_get_attachment_image_src($HeroImg, 'full')[0];?>);">
    <div class="banner-gradient">
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-xl-6 offset-xl-3 text-center text-white">
            <h1 class=""><?php echo $BannerHeading?></h1>
            <p><?php echo $BannerPara?></p>
          </div>
        </div>
      </div>
    </div>
</section>
<section class="section-2 my-7">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="position-sticky top-100">
                    <div class="section-heading">
                        <h2 class="heading-style"><?php echo $GetToKnowHeading?></h2>
                        <h6 class="text-muted"><?php echo $GetToKnowSubHeading?></h6>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-sm-6 mx-auto">
                            <img src="<?php echo wp_get_attachment_image_url($GetToKnowImage)?>" alt="" class="img-fluid ">
                        </div> 
                    </div>
                    <div class="row no-gutters awards">
                        <?php foreach($GetToKnowLogoImages as $images){?>
                            <div class="col">
                                <img src="<?php echo wp_get_attachment_image_url($images['logo'])?>" alt="" class="img-fluid">
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 offset-xl-1 col-lg-6  mt-7 pt-lg-5">
                <div class="about-us-page-story__points pt-lg-4">
                    <?php foreach($GetToKnowBulletPoints as $points){?>
                        <div class="about-us-page-story__point">
                            <h4 class="about-us-page-story__point-title"><?php echo $points['heading']?></h4>
                            <p class="about-us-page-story__point-content paragraph-3 font-default color-default"><?php echo $points['para']?></p>
                        </div>
                    <?php }?>
                </div>  
            </div>
        </div>
    </div>
</section>
<section class="section-3 py-7" style="background-image: url(<?php echo wp_get_attachment_image_src($LeadershipTextureBg)[0]?>);">
    <div class="container">
        <div class="section-heading">
            <h2 class="heading-style"><?php echo $LeadershipHeading?></h2>
            <p class="text-muted"><?php echo $LeadershipText?></p>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <?php foreach($LeadershipDetails as $details){?>
                    <h5 class="mt-4"><?php echo $details['heading']?></h5>
                    <p><?php echo $details['details']?></p>
                <?php }?>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="row position-sticky top-100">
                    <?php foreach($LeadershipPeople as $people){?>
                        <div class="col-6 mb-4 text-center">
                            <img src="<?php echo wp_get_attachment_image_url($people['leaders'])?>" alt="" class="img-fluid mb-3">
                            <h6 class="font-weight-bold"><?php echo $people['heading']?></h6>
                            <p class="text-muted text-center"><em><?php echo $people['para']?></em></p>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-5  py-7">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mt-7 mt-lg-0 pr-lg-5">
                <div class="position-sticky top-100">
                    <div class="section-heading mb-7">
                        <h2 class="heading-style"><?php echo $WhyUsHeading?></h2>
                        <h6 class="text-muted"><?php echo $WhyUsSubHeading?></h6>
                    </div>
                    <div class="why-img" style="background-image: url(<?php echo wp_get_attachment_image_src($WhyUsImage)[0]?>);"></div>
                </div>
            </div>
            <div class="col-lg-6 mt-7 mt-lg-0">
                <div>
                    <p><?php echo $WhyUsPara?></p>
                    <h5><?php echo $WhyUsInnerHeading?></h5>
                    <p><?php echo $WhyUsInnerPara?></p>
                    <?php echo $WhyUsList?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-4  my-7">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="position-sticky top-100">
                    <div class="section-heading  mb-7">
                        <h2 class="heading-style"><?php echo $LifeHeading?></h2>
                        <h6 class="text-muted"><?php echo $LifeSubHeading?></h6>
                    </div>
                    <p><?php echo $LifePara?></p>
                    <h5 class="mt-4"><?php echo $LifeInnerHeading?></h5>
                    <p><?php echo $LifeInnerPara?></p>
                </div>
            </div>
            <div class="col-lg-6 mt-7 mt-lg-0 ">
                <div class="row">
                    <?php foreach($LifeAvailability as $val){?>
                        <div class="col-lg-6 col-sm-6 mb-4">
                            <img src="<?php echo wp_get_attachment_image_url($val['availabilityicon'])?>" alt="" class="img-fluid w-15 mb-3">
                            <h6 class="font-weight-bold mb-3"><?php echo $val['availabilityheading']?></h6>
                            <p><?php echo $val['availabilitypara']?></p>
                        </div>
                    <?php }?>
                </div>
            </div>
      </div>

    </div>
</section>


<?php get_footer();?>