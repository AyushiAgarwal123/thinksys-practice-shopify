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
    <!-- <meta name="robots" content=<%HomePageTobotscontent1%>, <%HomePageTobotscontent2%>> -->

    <!--structure data-->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "<%Service%>"
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
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-M3GBTJ');
    </script>
</head>

    <?php get_header(); ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); the_content(); endwhile; else: ?>
    <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>

    <?php include('form.php');?>
    

   <?php get_footer(); ?>