<?php /*Template Name: Pricing */?>
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
$PricingBlocks = carbon_get_post_meta(get_the_ID(), 'pricingblocks');
?>
<?php get_header(); ?>

<section class="subpage-banner" style="background-image: url(<?php echo wp_get_attachment_image_src($HeroImage, 'full')[0];?>);">
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
        <div class="row">
            <?php foreach($PricingBlocks as $key){?>
                <div class="col-lg-4 mb-4 mb-xl-0 col-sm-6 mb-4">
                    <div class="plan-wrap p-3 h-100">
                        <div class="image-wrap text-center mt-4">
                            <img src="<?php echo wp_get_attachment_image_url($key['pricingimg'])?>" alt="" class="img-fluid w-50">
                        </div>
                        <div class="plan-content px-4">
                            <div class="plan-heading text-center my-4">
                                <h3><?php echo $key['pricingheading']?></h3>
                            </div>
                            <div class="plan-list"><?php echo $key['pricinglist']?></div>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
</section>
<section id="ticket" class="exapath  pb-7">
    <div class=" ">
        <div class="container">
            <div class="sec-main mb-0 sec-bg1">
                <div class="randomline">
                    <div class="bigline"></div>
                    <div class="smallline"></div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12 mb-0">
                        <div class="form-contact cd-filter-content p-0 sec-bx">
                            <h2 class="section-heading mb-1">Fill out the Contact form to contact us </h2>
                            <p>We Will Help You To Choose The Best Plan!</p>
                            <form id="pricingform" action="https://pmzwel2ua0.execute-api.us-east-1.amazonaws.com/pricingform?returnUrl=https://www.thinksys.com/thank-you" method="POST">
                                <div class="row">
                                    <div class="col-md-6 mb-10">
                                        <div class="input-group mb-4">
                                            <input class="form-control" id="name" type="text" name="name" placeholder="Full Name *" >
                                            <div class="input-group-append">
                                                <i class="fa fa-user input-group-text"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-10">
                                        <div class="input-group mb-4">
                                            <input class="form-control" id="email" type="text"  name="email" placeholder="Email Address *">
                                            <div class="input-group-append">
                                                <i class="fa fa-envelope input-group-text"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-10">
                                        <div class="input-group mb-4">
                                            <input class="form-control" id="subject" type="text" name="subject" placeholder="Subject *">
                                            <div class="input-group-append">
                                                <i class="fa fa-file input-group-text"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-10">
                                        <div class="form-group mb-4">
                                            <select id="department" name="department" class="form-control">
                                                <option value="">Choose Department *</option>
                                                <option value="Support/Help Desk">Support/Help Desk</option>
                                                <option value="Commercial Department">Commercial Department</option>
                                                <option value="Sales Department">Sales Department</option>
                                                <option value="Schedule Metings">Schedule Meetings</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-10">
                                        <div class="form-group">
                                            <textarea id="message" name="message" class="form-control" rows="5" placeholder="Message *"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-10 mt-4">
                                        <div>
                                            <label class="pl-0">
                                                <input name="newsletter" type="checkbox" id="contact_term" class="">
                                                <span><small>I have read and accepted the terms of the 
                                                    <a href="/privacy-policy.php/" class="golink text-primary">privacy policy - RGPD</a></small></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" value="Submit" id="prc-btn" class="btn buttonDefault mr-3" style="display:none;">Submit Ticket</button>
                                    </div>
                                    <div id="msgSubmit" class="col-md-12 mt-4">
                                        <h3 class="c-pink"> Message Submitted!</h3>
                                    </div>
                                </div>
                            </form>
                            <div id="contactCaptcha"></div><br />
                            <button type="button" value="Submit" id="prc-sub" class="btn buttonDefault mr-3">Submit Ticket</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Form Success Popup -->
<div class="modal fade" id="formregistration" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title"><i class="fa fa-check-circle mr-2" aria-hidden="true"></i> Your message has been sent</h4>
            </div>
        </div>
    </div>
</div>
<div class="error-msg animate slide-in-down"></div>

<script type="text/javascript">
        
    var emailPattern = /^\w+([-+.'][^\s]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
    var clear;
    var msgDuration = 2000;
    var $alertMessage = "";
    var $msg = $(".error-msg");

    function render(message) {
        hide();
        switch (message) {
        case "warning":
            $msg.addClass("msg-danger active").text($alertMessage);
            break;
        }
    }

    function timer() {
        clearTimeout(clear);
        clear = setTimeout(function () {
        hide();
        }, msgDuration);
    }

    function hide() {
        $msg.removeClass("msg-success msg-danger msg-warning msg-info active");
    }        
    
    var captcha;  
    var onloadCallback = function () {
        captcha = grecaptcha.render('contactCaptcha', {
            'sitekey': '6LeNsaIaAAAAANZuc6EtbaQ7MLki1EigL6eRaKbG',
            'theme': 'light'
        });
    };
    
    $("#prc-sub").click(function () {
        $("#prc-btn").trigger('click');
    })

    $("#pricingform").on("submit", function (e) {
        e.preventDefault();
    
        var captchaResponse = grecaptcha.getResponse(captcha);
        var pricingformdata = {
        name: $.trim($("#name").val()),
        email: $.trim($("#email").val()),
        subject: $.trim($("#subject").val()),
        message: $.trim($("#message").val()),
        department: $.trim($("#department option:selected").val())
        }
        console.log(captchaResponse.length);
        var emailFormatPricing = emailPattern.test(pricingformdata.email);

        if (pricingformdata.name === null || pricingformdata.name === '' || pricingformdata.name === undefined) {
        $alertMessage = "Please Enter Name";
        render("warning");
        return;
        } else if (pricingformdata.email === null || pricingformdata.email === '' || pricingformdata.email === undefined) {
        $alertMessage = "Please Enter Email";
        render("warning");
        return;
        } else if (!emailFormatPricing) {
        $alertMessage = "Please Enter Valid Email";
        render("warning");
        return;
        } else if (pricingformdata.subject === null || pricingformdata.subject === '' || pricingformdata.subject === undefined) {
        $alertMessage = "Please Enter Subject";
        render("warning");
        return;
        } else if (pricingformdata.message === null || pricingformdata.message === '' || pricingformdata.message === undefined) {
        $alertMessage = "Please Enter Message";
        render("warning");
        return;
        } else if (pricingformdata.department === null || pricingformdata.department === '' || pricingformdata.department === undefined) {
        $alertMessage = "Please Enter Department";
        render("warning");
        return;
        } else if (!$('#pricingform #contact_term').is(":checked")) {
        $alertMessage = "Please accept Terms";
        render("warning");
        return;
        }  else if(captchaResponse.length == 0){    
            $alertMessage = "Please check captcha";
            render("warning");
            return;
        }
        else {
        $('#pricingform')[0].submit();
        // $.ajax({
        //   type: "post",
        //   url: $("#pricingform").attr("action"),
        //   dataType: "json",
        //   crossDomain: true,
        //   data: pricingformdata,
        //   success: function () {
        //     $("#pricingform")[0].reset();
        //     $('#formregistration').modal('show');
        //     setTimeout(function () {
        //       $('#formregistration').modal('hide');
        //     }, 2000);
        //   },
        //   error: function (error) {
        //     console.log('error ', error)
        //   }
        // });
        }
        return false;
    });
</script>

<?php get_footer();?>