<?php /*Template Name: Clients */?>
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
$HeroText = carbon_get_post_meta(get_the_ID(), 'bannerheading');
$HomeText = carbon_get_post_meta(get_the_ID(), 'home');
$HomeLink = carbon_get_post_meta(get_the_ID(), 'homelink');
$SubmenuText = carbon_get_post_meta(get_the_ID(), 'submenu');
$SubmenuLink = carbon_get_post_meta(get_the_ID(), 'submenulink');
$InnerPageText = carbon_get_post_meta(get_the_ID(), 'inner');
$ClientHeading = carbon_get_post_meta(get_the_ID(), 'heading');
$ClientBlock = carbon_get_post_meta(get_the_ID(), 'logoblocks');
?>
<?php get_header(); ?>

<section class="blogBanner" style="background-image: url(<?php echo wp_get_attachment_image_src($HeroImage, 'full')[0];?>);">
    <div class="bannerOverlay"></div>
    <div class="bannerTxt"><h1><?php echo $HeroText?></h1></div>
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
<section class="py-7">
    <div class="container">
        <h2 class="heading-style"><?php echo $ClientHeading?></h2>
        <div>
            <div class="client-in">
                <ul>
                    <?php foreach($ClientBlock as $key){?>
                        <li>
                            <div class="client-container">
                                <div class="client-Image">
                                    <img src="<?php echo wp_get_attachment_image_url($key['logoicon'])?>" alt="" class="fixed-image" />
                                    <img src="<?php echo wp_get_attachment_image_url($key['logoicon'])?>" alt="" class="client" />
                                    <img src="<?php echo wp_get_attachment_image_url($key['logoicon'])?>" alt="" class="client-hover" />
                                </div>
                                <div class="text-center client-name"><p><?php echo $key['logoname']?></p></div>
                            </div>
                        </li>
                    <?php }?>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>