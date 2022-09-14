<?php /*Template Name: Testimonials */?>
<!DOCTYPE html>
<html>

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
$HeroText = carbon_get_post_meta(get_the_ID(), 'bannertext');
$HomeText = carbon_get_post_meta(get_the_ID(), 'home');
$HomeLink = carbon_get_post_meta(get_the_ID(), 'homelink');
$SubmenuText = carbon_get_post_meta(get_the_ID(), 'submenu');
$SubmenuLink = carbon_get_post_meta(get_the_ID(), 'submenulink');
$InnerPageText = carbon_get_post_meta(get_the_ID(), 'inner');
$Heading = carbon_get_post_meta(get_the_ID(), 'heading');
$TestimonialBlock = carbon_get_post_meta(get_the_ID(), 'testimonialblock');
$TestimonialIcon = carbon_get_post_meta(get_the_ID(), 'testimonialicon');
$TestimonialClientBlock = carbon_get_post_meta(get_the_ID(), 'testimonialclientblock');
?>
<style>
    .user-info p::before {
        content: "";
        background: url(<?php echo wp_get_attachment_image_src($TestimonialIcon, 'full')[0];?>) left top/55px no-repeat !important;
    }
</style>
<?php get_header();?>
<section>
    <div class="subpage-banner testimonials" style="background-image: url(<?php echo wp_get_attachment_image_src($HeroImage, 'full')[0];?>);">
        <div class="banner-gradient">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-xl-6 offset-xl-3 text-center text-white">
                    <h1 class=""><?php echo $HeroHeading?></h1>
                    <h5><?php echo $HeroText?></h5>
                    </div>
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
<section class="testimonial-section py-7">
    <div class="container">
        <h1 class="heading-style-center text-center"><?php echo $Heading?></h1>
        <?php foreach($TestimonialBlock as $key){?>
            <div class="bg-white shadow p-5 mb-5">
                <div class="row align-items-center">
                <div class="col-md-3 col-sm-12 d-lg-block d-md-non">
                    <h2 class="mb-0"><?php echo $key['testimonialname']?></h2>
                    <span><strong><?php echo $key['testimonialdesig']?></strong></span>
                </div>
                <div class="col-md-9 col-sm-12 pl-lg-5">
                    <div class="user-info">
                        <p><?php echo $key['testimonialpara']?></p>
                    </div>
                </div>
                </div>
            </div>
        <?php }?>
    </div>
</section>

<section class="spacer bg-white py-7">
    <div class="container">
        <div class="review-section">
            <div class="user-reviews">
                <div class="row">
                    <?php foreach($TestimonialClientBlock as $key){?>
                        <div class="col-md-6 mt-5 col-lg-4">
                            <div class="review p-4 h-100">
                                <div class="user mb-4">
                                    <div class="user-content">
                                        <strong><?php echo $key['testimonialclientname']?></strong>
                                        <div class="destination"><?php echo $key['testimonialclientdesig']?></div>
                                    </div>
                                </div>
                                <p><?php echo $key['testimonialclientpara']?></p>
                            </div>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer();?>