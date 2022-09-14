<?php 

/* 
*@title: Register Multiple Menus 
*@link: http://extracatchy.net/wordpress-multiple-menus/
*/
add_action( 'init', 'my_custom_menus' );
function my_custom_menus() {
    register_nav_menus(
        array(
            'primary-menu' => __( 'Primary Menu' ),
            'footer-menu-2' => __( 'Footer Menu 2' ),
            'footer-menu-3' => __( 'Footer Menu 3' ),
            'footer-menu-4' => __( 'Footer Menu 4' ),
            'footer-bottom-menu' => __( 'Footer Bottom Menu' ),
            'desktop-menu-nav' => __( 'Desktop Menu Nav' ),
        )
    );
}


// create menus
// register_nav_menus(
//     array(
//         'header-menu' => 'Header Menu',
//         'primary-menu' => 'Top Menu',
//         'footer-menu-2' => 'Footer Menu 2',
//         'footer-menu-3' => 'Footer Menu 3',
//         'footer-menu-4' => 'Footer Menu 4',
//         'footer-bottom-menu' => 'Footer Bottom Menu',
//         'desktop-menu-nav' => 'Desktop Menu Nav',
//         )
// );



// add a header logo
add_theme_support('custom-header');
add_theme_support( 'post-thumbnails' );

use Carbon_Fields\Block;
use Carbon_Fields\Container;
use Carbon_Fields\Field;
?>


<?php


// thinksys header starts here
add_action( 'carbon_fields_register_fields', 'thinksys_header' );

function thinksys_header() {
    Container::make( 'post_meta', 'Header' )
        // ->where( 'post_meta', '=', 'page' )
        ->add_fields( array(
            Field::make( 'image', 'getin_touch', __( 'Get-in-touch' ) ),
            Field::make( 'text', 'getin_touch_link', __( 'Get-in-touch-Link' ) ),
            Field::make( 'image', 'open_menu', __( 'Open-menu' ) ),
            Field::make( 'image', 'close_menu', __( 'Close-menu' ) ),
            Field::make( 'image', 'texture_bg', __( 'Texture-bg' ) ),
        ) );
}

/*  Development Service */
add_action('carbon_fields_register_fields', 'service_development_section'); 
function service_development_section(){
    Block::make( __( 'Development Service' ) )
    ->add_fields( array(
        Field::make( 'image', 'section_background_img', __('Section Background Image'))->set_width(50),
        Field::make( 'text', 'dev_heading', __('Development Heading') )->set_width(50),
        Field::make( 'complex', 'dev_blocks', __('Development Blocks') )
        ->set_layout('tabbed-horizontal')
        ->set_collapsed(true)
        ->add_fields( array(
            Field::make( 'text', 'heading', __('Inner Headings')),
            Field::make( 'text', 'details_para', __('Details Para')),
            Field::make( 'text', 'readmore_btntext', __('Read More Btn Text'))->set_width(50), 
            Field::make( 'text', 'readmore_btnlink', __('Read More Btn Link'))->set_width(50)
        ) )
    ) )
    ->set_preview_mode(true)
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
    ?>
<section class="background"
    style='background-image: url(<?php echo wp_get_attachment_image_src($fields["section_background_img"])[0]?>)'>
    <div class="content-wrapper">
        <div class="container">
            <h2 class="heading-style-white" style="font-size: 50px; font-weight: 900; margin-top:50px;">
                <?php echo $fields["dev_heading"] ?></h2>
            <div class="row">
                <?php foreach($fields['dev_blocks'] as $val){?>
                <div class="col-lg-4 col-md-6 col-sm-12 mt-5 mt-sm-0">
                    <div class="textWrap development">
                        <div id="something"></div>
                        <div class="sectionHeading model-buttons-container"><?php echo $val['heading']?></div>
                        <div class="sectionPara"><?php echo $val['details_para']?></div>
                        <button class="btn buttonDefault"
                            onclick="location.href='<?php echo $val['readmore_btnlink']?>'"><?php echo $val['readmore_btntext']?></button>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</section>

<?php } );
    }

/*  RightWrap Image Services */
add_action('carbon_fields_register_fields', 'rightwrap_services'); 
function rightwrap_services(){
    Block::make( __( 'RightWrap Image Services' ) )
    ->add_fields( array(
        Field::make( 'image', 'section_background_img', __('Section Background Image'))->set_width(50),
        Field::make( 'text', 'heading', __('Heading') )->set_width(50),
        Field::make( 'text', 'details_para', __('Details Para')),
        Field::make( 'text', 'readmore_btntext', __('Read More Btn Text'))->set_width(50), 
        Field::make( 'text', 'readmore_btnlink', __('Read More Btn Link'))->set_width(50)
    ) )
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
    ?>
<section class="background"
    style='background-image: url(<?php echo wp_get_attachment_image_src($fields["section_background_img"])[0]?>)'>
    <div class="content-wrapper">
        <div class="container d-flex justify-content-end">
            <div class="rightWrap">
                <div class="sectionHeading"><?php echo $fields['heading']?></div>
                <div class="sectionPara"><?php echo $fields['details_para']?></div>
                <button class="btn buttonDefault"
                    onclick="location.href='<?php echo $fields['readmore_btnlink']?>'"><?php echo $fields['readmore_btntext']?></button>
            </div>
        </div>
    </div>
</section>

<?php } );
    }

/*  LeftWrap Image Services */
add_action('carbon_fields_register_fields', 'leftwrap_services'); 
function leftwrap_services(){
    Block::make( __( 'LeftWrap Image Services' ) )
    ->add_fields( array(
        Field::make( 'image', 'section_background_img', __('Section Background Image'))->set_width(50),
        Field::make( 'text', 'heading', __('Heading') )->set_width(50),
        Field::make( 'text', 'details_para', __('Details Para')),
        Field::make( 'text', 'readmore_btntext', __('Read More Btn Text'))->set_width(50), 
        Field::make( 'text', 'readmore_btnlink', __('Read More Btn Link'))->set_width(50)
    ) )
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
    ?>
<section class="background"
    style='background-image: url(<?php echo wp_get_attachment_image_src($fields["section_background_img"])[0]?>)'>
    <div class="content-wrapper">
        <div class="container">
            <div class="textWrap">
                <div class="sectionHeading"><?php echo $fields['heading']?></div>
                <div class="sectionPara"><?php echo $fields['details_para']?></div>
                <button class="btn buttonDefault"
                    onclick="location.href='<?php echo $fields['readmore_btnlink']?>'"><?php echo $fields['readmore_btntext']?></button>
            </div>
        </div>
    </div>
</section>

<?php } );
    }

/*About Us Page*/

add_action('carbon_fields_register_fields', 'aboutus_banner');
function aboutus_banner(){
    Container::make('post_meta', 'About Us Banner')
    ->show_on_template('about-us.php')
    ->add_fields( array(
        Field::make( 'image', 'heroimg', __( 'Hero Image' ) )->set_width(50),
        Field::make('text', 'bannerheading', __('Banner Heading'))->set_width(50), 
        Field::make('text', 'bannerpara', __('Banner Para'))
    ));
}

add_action('carbon_fields_register_fields', 'get_to_know');
function get_to_know(){
    Container::make('post_meta', 'Get to know section')
    ->show_on_template('about-us.php')
    ->add_fields( array(
        Field::make('text', 'heading', __('Get To Know Heading'))->set_width(50), 
        Field::make('text', 'subheading', __('Get To Know SubHeading'))->set_width(50), 
        Field::make( 'image', 'img', __('Get To Know Image')),
        Field::make('complex', 'logoimages', __('Get To Know Logo Images'))
            ->set_layout('tabbed-horizontal')
            ->set_collapsed(true)
            ->add_fields( array( 
                Field::make( 'image', 'logo', __('Get To Know Logos'))
            )), 
        Field::make('complex', 'bulletpoints', __('Get To Know Points'))
            ->set_layout('tabbed-horizontal')
            ->set_collapsed(true)
            ->add_fields( array( 
                Field::make( 'text', 'heading', __('Get To Know Points Headings')),
                Field::make( 'text', 'para', __('Get To Know Points Description'))
            )), 
    ));
}

add_action('carbon_fields_register_fields', 'leadership');
function leadership(){
    Container::make('post_meta', 'Leadership section')
    ->show_on_template('about-us.php')
    ->add_fields( array(
        Field::make( 'image', 'texturebg', __('Leadership Texture')),
        Field::make('text', 'leaderheading', __('Leadership Heading'))->set_width(50), 
        Field::make('text', 'para', __('Leadership Text'))->set_width(50),
        Field::make('complex', 'details', __('Leadership Details'))
            ->set_layout('tabbed-horizontal')
            ->set_collapsed(true)
            ->add_fields( array( 
                Field::make( 'text', 'heading', __('Leadership Details Headings')),
                Field::make( 'rich_text', 'details', __('Leadership Details Description'))
            )), 
        Field::make('complex', 'people', __('Leadership People Details'))
            ->set_layout('tabbed-horizontal')
            ->set_collapsed(true)
            ->add_fields( array( 
                Field::make( 'image', 'leaders', __('Leadership People')),
                Field::make( 'text', 'heading', __('Leadership Names'))->set_width(50),
                Field::make( 'text', 'para', __('Leadership Designation'))->set_width(50)
            )), 

    ));
}

add_action('carbon_fields_register_fields', 'why_us');
function why_us(){
    Container::make('post_meta', 'Why Us section')
    ->show_on_template('about-us.php')
    ->add_fields( array(
        Field::make('text', 'whyusheading', __('Why Us Heading'))->set_width(50), 
        Field::make('text', 'whyussubheading', __('Why Us SubHeading'))->set_width(50), 
        Field::make( 'image', 'whyusimg', __('Why Us Image')),
        Field::make('text', 'whyuspara', __('Why Us Text')),
        Field::make('text', 'whyusinnerheading', __('Why Us Inner Heading')),
        Field::make('rich_text', 'whyusinnerpara', __('Why Us Inner Para')), 
        Field::make('rich_text', 'whyuslist', __('Why Us Inner List')), 
        
    ));
}

add_action('carbon_fields_register_fields', 'life_at_thinksys');
function life_at_thinksys(){
    Container::make('post_meta', 'Life At Thinksys')
    ->show_on_template('about-us.php')
    ->add_fields( array(
        Field::make('text', 'lifeheading', __('Life At Thinksys Heading'))->set_width(50), 
        Field::make('text', 'lifesubheading', __('Life At Thinksys SubHeading'))->set_width(50), 
        Field::make('rich_text', 'lifepara', __('Life At Thinksys Text')),
        Field::make('text', 'lifeinnerheading', __('Life At Thinksys Inner Heading')),
        Field::make('text', 'lifeinnerpara', __('Life At Thinksys Inner Para')), 
        Field::make('complex', 'availability', __('Life At Thinksys Availability'))
            ->set_layout('tabbed-horizontal')
            ->set_collapsed(true)
            ->add_fields( array(
                Field::make( 'image', 'availabilityicon', __('Life At Thinksys Icon')),
                Field::make('text', 'availabilityheading', __('Life At Thinksys Availability Heading')),
                Field::make('text', 'availabilitypara', __('Life At Thinksys Availability Para'))
            ))
        
    ));
}



// banner starts here

add_action( 'carbon_fields_register_fields', 'banner' );

function banner() {
    Container::make( 'post_meta', 'Banner' )
        ->where( 'post_id', '=', get_option( 'page_on_front' ) )
        ->add_fields( array(
        Field::make( 'text', 'announcement_text', __( 'Announcement-text' ) ),
        Field::make( 'text', 'learn_more', __( 'Learn-More' ) ),
        Field::make( 'text', 'banner_txt1_black', __( 'heading-one-black' ) ),
        Field::make( 'text', 'banner_txt1_blue', __( 'heading-one-blue' ) ),
        Field::make( 'text', 'banner_txt2', __( 'heading-two' ) ),
        Field::make( 'image', 'banner_image1', __( 'banner-image' ) ),
        Field::make( 'text', 'banner_btnone', __( 'button-text' ) ),
        Field::make( 'text', 'banner_btnone_link', __( 'button-link' ) ),                    
        Field::make( 'image', 'right_arrow', __( 'Right-arrow' ) ),
         Field::make( 'text', 'banner_btn_two', __( 'button-text' ) ),
        Field::make( 'text', 'banner_btn_two_link', __( 'button-link' ) ),                    
        Field::make( 'image', 'right_arrow_dark', __( 'Arrow-Image' ) ),       
        ));
}  


// swiper starts here

add_action( 'carbon_fields_register_fields', 'home_swiper_heading' );

function home_swiper_heading() {
    Container::make( 'post_meta', 'Swiper Heading' )
        ->where( 'post_id', '=', get_option( 'page_on_front' ) )
        ->add_fields( array(
        Field::make( 'text', 'swiper_heading', __( 'Swiper-Heading' ) ),        
        ));
}  

add_action( 'carbon_fields_register_fields', 'home_sect_two' );

function home_sect_two() {
    Container::make( 'post_meta', 'Homepage-swiper' )
        ->where( 'post_id', '=', get_option( 'page_on_front' ) )
        ->add_fields( array(
        //    
        Field::make( 'complex', 'homepage_img_sec_two', '' )
                // Our first group will be a simple rich text field
                ->set_layout( 'tabbed-horizontal' )
                ->add_fields( 'text', 'Image-details', array(
                    Field::make( 'image', 'section_two_swiper', __( 'image' ) )
                    ) )    
        ));
}  

// swiper ends here

// Start Services  ----------------*****---------------

//Banner Block
add_action( 'carbon_fields_register_fields', 'banner_block' );
function banner_block(){
    Block::make( __( 'Banner Block' ) )
    ->add_fields( array(
        Field::make( 'image', 'bgimage', __( 'BG Image' ) )
        ->set_value_type( 'url' ),
        Field::make( 'text', 'bannertxt', __( 'Banner Text' ) ),
        Field::make( 'text', 'bannerblockpara', __( 'Banner Para' ) )
    ) )
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
        ?>
<section class="subpage-banner" style="background-image: url(<?php echo $fields['bgimage'];?>)">
    <div class="banner-gradient">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-xl-6 offset-xl-3 text-center text-white">
                    <h1 class=""><?php echo esc_html( $fields['bannertxt'] ); ?></h1>
                    <p class=""><?php echo esc_html( $fields['bannerblockpara'] ); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
    } );

    
}

//BreadCrumb Block
add_action( 'carbon_fields_register_fields', 'breadcruib_block' );
function breadcruib_block(){
    Block::make( __( 'Breadcrumb Block' ) )
    ->add_fields( array(
        Field::make( 'text', 'home', __( 'Home' ) )->set_width( 50 ),
        Field::make( 'text', 'homelink', __( 'Home Link' ) )->set_width( 50 ),
        Field::make( 'text', 'submenu', __( 'Submenu' ) )->set_width( 50 ),
        Field::make( 'text', 'submenulink', __( 'Submenu Link' ) )->set_width( 50 ),
        Field::make( 'text', 'inner', __( 'Inner Menu' ) ),
    ) )
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
        ?>
<section>
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="<?php echo esc_html( $fields['homelink'] ); ?>"><?php echo esc_html( $fields['home'] ); ?></a>
            </li>
            <li><a
                    href="<?php echo esc_html( $fields['submenulink'] ); ?>"><?php echo esc_html( $fields['submenu'] ); ?></a>
            </li>
            <li class="active"><?php echo esc_html( $fields['inner'] ); ?></li>
        </ol>
        <hr class="m-0">
    </div>
</section>
<?php
    } );
}

//Heading-Subheading-Para-Image Right Block
add_action( 'carbon_fields_register_fields', 'heading_para_img_btn_right' );
function heading_para_img_btn_right(){
    Block::make( __( 'Heading SubHeading Para Img Right' ) )
	->add_fields( array(
		Field::make( 'text', 'heading', __( 'Heading' ) )->set_width( 50 ),
		Field::make( 'text', 'subheading', __( 'Sub Heading' ) )->set_width( 50 ),
		Field::make( 'rich_text', 'para', __( 'Content' ) ),
		Field::make( 'image', 'image', __( 'Image' ) ),
	) )
	->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
		?>
<section class="my-7">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2 class="heading-style"><?php echo esc_html( $fields['heading'] ); ?></h2>
                <p><em><?php echo esc_html( $fields['subheading'] ); ?></em></p>
                <p><?php echo apply_filters( 'the_content', $fields['para'] ); ?></p>
            </div>
            <div class="col-lg-4 pl-lg-5 mt-5 mt-lg-0 col-sm-6 mx-auto">
                <?php echo wp_get_attachment_image( $fields['image'], array('700', '600'), "", ["class" => "img-fluid"] ); ?>
            </div>
        </div>
    </div>
</section>
<?php
    } );
}

//Heading-Subheading-Para-Image Left Block
add_action( 'carbon_fields_register_fields', 'heading_para_img_btn_left' );
function heading_para_img_btn_left(){
    Block::make( __( 'Heading SubHeading Para Img Left' ) )
	->add_fields( array(
		Field::make( 'text', 'heading', __( 'Heading' ) )->set_width( 50 ),
		Field::make( 'text', 'subheading', __( 'Sub Heading' ) )->set_width( 50 ),
		Field::make( 'rich_text', 'para', __( 'Content' ) ),
		Field::make( 'image', 'image', __( 'Image' ) ),
	) )
	->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
		?>
<section class="my-7">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 pr-lg-5 mt-5 mt-lg-0 col-sm-6 mx-auto">
                <?php echo wp_get_attachment_image( $fields['image'], array('700', '600'), "", ["class" => "img-fluid"] ); ?>
            </div>
            <div class="col-lg-8">
                <h2 class="heading-style"><?php echo esc_html( $fields['heading'] ); ?></h2>
                <p><em><?php echo esc_html( $fields['subheading'] ); ?></em></p>
                <p><?php echo apply_filters( 'the_content', $fields['para'] ); ?></p>
            </div>
        </div>
    </div>
</section>
<?php
    } );
}

//Best Software Development Company Section
add_action( 'carbon_fields_register_fields', 'best_software_development_company' );
function best_software_development_company(){
    Block::make( __( 'Heading para btn with blue-bg' ) )
	->add_fields( array(
        Field::make( 'text', 'sdcheaading', 'Heading' )->set_width( 50 ),
        Field::make( 'text', 'sdcsubheaading', 'Sub Heading' )->set_width( 50 ),
        Field::make( 'rich_text', 'sdcpara', 'Paragraph' ),
        Field::make( 'text', 'sdcbtntxt', 'Button Text' )->set_width( 50 ),
        Field::make( 'text', 'sdcbtnlink', 'Button Link' )->set_width( 50 ),
	) )
	->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
		?>
<section class="my-7 py-7 bg-blue text-white">
    <div class="container">
        <h2 class="heading-style-white"><?php echo esc_html( $fields['sdcheaading'] ); ?></h2>
        <p><em><?php echo esc_html( $fields['sdcsubheaading'] ); ?></em></p>
        <p><?php echo $fields['sdcpara'] ; ?></p>
        <div class="mt-4">
            <botton class="btn buttonDefault buttonWhite"
                onclick="location.href='<?php echo esc_html( $fields['sdcbtnlink'] ); ?>'">
                <?php echo esc_html( $fields['sdcbtntxt'] ); ?></botton>
        </div>
    </div>
</section>
<?php
    } );
}

//Our Top Notch Offshore Software Development Services
add_action( 'carbon_fields_register_fields', 'top_notch_sds' );
function top_notch_sds(){
    Block::make( __( 'Card with img heading para links' ) )
	->add_fields( array(
        Field::make( 'text', 'topnotchheading', 'Heading' )->set_width( 50 ),
        Field::make( 'text', 'topnotchsubheading', 'Sub Heading' )->set_width( 50 ),
        Field::make( 'text', 'topnotchpara', 'Paragraph' ),

        Field::make( 'complex', 'topnotchcardcomplex', 'Top Notch Card' )
        ->set_layout( 'tabbed-horizontal' )
        ->add_fields( array(
            Field::make( 'image', 'topnotchcardimg', 'Image' )
            ->set_value_type( 'url' ),
            Field::make( 'text', 'topnotchcardheading', 'Heading' )->set_width( 50 ),
            Field::make( 'text', 'topnotchcardheadingurl', 'Heading Url' )->set_width( 50 ),
            Field::make( 'text', 'topnotchcardpara', 'Paragraph' ),

            Field::make( 'complex', 'topnotchcardcomplexlinks', 'Top Notch Card links' )
            ->set_layout( 'tabbed-horizontal' )
            ->add_fields( array(
                Field::make( 'text', 'topnotchcardlinktxt', 'Link Text' )->set_width( 50 ),
                Field::make( 'text', 'topnotchcardlinkurl', 'Link Url' )->set_width( 50 )
            ) )
        ) )
    ) )
	->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
		?>
<section class="my-7">
    <div class="container">
        <h2 class="heading-style"><?php echo esc_html( $fields['topnotchheading'] ); ?></h2>
        <p><em><?php echo esc_html( $fields['topnotchsubheading'] ); ?></em></p>
        <p><?php echo esc_html( $fields['topnotchpara'] ); ?></p>
        <div class="row">
            <?php foreach($fields['topnotchcardcomplex'] as $items){
                            ?>
            <div class="col-lg-6">
                <div class="development-service-wrap mt-7">
                    <div class="img-wrap" style="background-image: url('<?php echo $items['topnotchcardimg'];?>');">
                    </div>
                    <div class="content-wrap">
                        <a class="main-service" href="<?php echo esc_html( $items['topnotchcardheadingurl'] ); ?>">
                            <h3 class="mb-4"><?php echo esc_html( $items['topnotchcardheading'] ); ?><i
                                    class="las la-arrow-right"></i></h3>
                        </a>
                        <p><?php echo esc_html( $items['topnotchcardpara'] ); ?></p>
                        <div class="sub-services mt-4">
                            <div class="row">
                                <?php 
                                            foreach($items['topnotchcardcomplexlinks'] as $links){
                                            ?>
                                <div class="col-sm-6 mb-4">
                                    <a
                                        href="<?php echo $links['topnotchcardlinkurl'] ?>"><?php echo $links['topnotchcardlinktxt']?></a>
                                </div>
                                <?php
                                        }
                                    ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                            }
                        ?>
        </div>
    </div>
</section>
<?php
        } );
}


// Advantages of Our Custom Software Development Services
add_action( 'carbon_fields_register_fields', 'advantages_of_our_custom_sds' );
function advantages_of_our_custom_sds() {
    Block::make( __( 'Block with heading subheading and list' ) )
	->add_fields( array(
		Field::make( 'text', 'heading', __( 'Heading' ) )->set_width( 50 ),
		Field::make( 'text', 'subheading', __( 'Sub Heading' ) )->set_width( 50 ),
		Field::make( 'rich_text', 'content', __( 'Content' ) ),
		// Field::make( 'rich_text', 'contentright', __( 'Content Right' ) ),
	) )
	->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
		?>
<section class="bg-white py-7 mt-7">
    <div class="container">
        <h2 class="heading-style"><?php echo esc_html( $fields['heading'] ); ?></h2>
        <p><em><?php echo esc_html( $fields['subheading'] ); ?></em></p>
        <div class="row">
            <?php echo apply_filters( 'the_content', $fields['content'] ); ?>
        </div>
    </div>
</section>

<?php
	} );
}

//Why Choose ThinkSys as Your Software Testing Company?
add_action( 'carbon_fields_register_fields', 'why_choose_thinksys' );
function why_choose_thinksys(){
    Block::make( __( 'Heading subheading para Thumbnail with blue-bg' ) )
	->add_fields( array(
        Field::make( 'text', 'whychooseheading', 'Heading' )->set_width( 50 ),
        Field::make( 'text', 'whychoosesubheading', 'Sub Heading' )->set_width( 50 ),
        Field::make( 'text', 'whychoosepara', 'Paragraph' ),

        Field::make( 'complex', 'whychoosecomplex', 'Why Choose Thinksys Thumbnail' )
        ->set_layout( 'tabbed-horizontal' )
        ->add_fields( array(
            Field::make( 'image', 'whychooseicon', 'Thumbnail Icon' ),
            Field::make( 'text', 'whychoosetext', 'Thumbnail Text' )
        ) )
        
	) )
	->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
		?>
<section class="my-7 py-7 bg-white">
    <div class="container">
        <h2 class="heading-style"><?php echo esc_html( $fields['whychooseheading'] ); ?></h2>
        <div class="row">
            <div class="col-lg-5">
                <div class="">
                    <p><em><?php echo esc_html( $fields['whychoosesubheading'] ); ?></em></p>
                    <p class=""><?php echo esc_html( $fields['whychoosepara'] ); ?></p>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="row">
                    <?php foreach($fields['whychoosecomplex'] as $items){
                                ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                        <div class="effect h-100">
                            <div>
                                <?php echo wp_get_attachment_image( $items['whychooseicon'], array('700', '600'), "", ["class" => "img-fluid"] ); ?>
                            </div>
                            <p class="mb-0"><?php echo esc_html( $items['whychoosetext'] ); ?></p>
                        </div>
                    </div>
                    <?php
                            }?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
    } );
}

// services section starts here

add_action( 'carbon_fields_register_fields', 'home_services_heading' );

function home_services_heading() {
    Container::make( 'post_meta', 'Services Section' )
        ->where( 'post_id', '=', get_option( 'page_on_front' ) )
        ->add_fields( array(
        Field::make( 'image', 'home_services_bg', __( 'Background-image' ) ),
        Field::make( 'text', 'sec_three_heading', __( 'Heading' ) ),     
        Field::make( 'text', 'sec_three_sub_heading', __( 'Sub-heading' ) ),
        Field::make( 'text', 'sec_three_sub_heading_two', __( 'Sub-heading' ) ),     
        Field::make( 'text', 'sec_three_description', __( 'Description' ) ),   
        Field::make( 'image', 'services_arrow_img', __( 'Services-arrow-img' ) ),    
        
        //  service-image-grid starts

        Field::make( 'text', 'services_grid_text_one', __( 'Text' ) ),    
        Field::make( 'image', 'services_grid_image_one', __( 'Image' ) ), 

        Field::make( 'text', 'services_grid_text_two', __( 'Text' ) ),    
        Field::make( 'image', 'services_grid_image_two', __( 'Image' ) ), 

        Field::make( 'text', 'services_grid_text_three', __( 'Text' ) ),    
        Field::make( 'image', 'services_grid_image_three', __( 'Image' ) ),  

        Field::make( 'text', 'services_grid_text_four', __( 'Text' ) ),    
        Field::make( 'image', 'services_grid_image_four', __( 'Image' ) ),    

        Field::make( 'text', 'services_grid_text_five', __( 'Text' ) ),    
        Field::make( 'image', 'services_grid_image_five', __( 'Image' ) ),   
        
        Field::make( 'text', 'services_grid_text_six', __( 'Text' ) ),    
        Field::make( 'image', 'services_grid_image_six', __( 'Image' ) ),   

        Field::make( 'text', 'services_grid_text_seven', __( 'Text' ) ),    
        Field::make( 'image', 'services_grid_image_seven', __( 'Image' ) ),   

        Field::make( 'text', 'services_grid_text_eight', __( 'Text' ) ),    
        Field::make( 'image', 'services_grid_image_eight', __( 'Image' ) ), 
        
        Field::make( 'text', 'services_grid_button', __( 'Text' ) ),  
        Field::make( 'text', 'services_grid_button_link', __( 'Link' ) ),  
        Field::make( 'image', 'services_grid_button_arrow', __( 'Image' ) ),    
         
        ));
} 

// services section ends here

// case study section starts here

add_action( 'carbon_fields_register_fields', 'home_caseStudy_section' );

function home_caseStudy_section() {
    Container::make( 'post_meta', 'Case-study' )
        ->where( 'post_id', '=', get_option( 'page_on_front' ) )
        ->add_fields( array(        
        Field::make( 'text', 'home_case_study_heading', __( 'Heading' ) ),     
        Field::make( 'text', 'home_case_study_sub_heading', __( 'Sub-heading' ) ),
        Field::make( 'text', 'home_case_study_sub_heading_two', __( 'Sub-heading' ) ),
        Field::make( 'text', 'home_case_study_description', __( 'Description' ) ),  
        Field::make( 'text', 'home_case_study_description_two', __( 'Description' ) ),         
        ));
} 

add_action( 'carbon_fields_register_fields', 'home_case_study_grid' );

function home_case_study_grid() {
    Container::make( 'post_meta', 'Homepage-caseStudy-grid' )
        ->where( 'post_id', '=', get_option( 'page_on_front' ) )
        ->add_fields( array(
        //    
        Field::make( 'complex', 'homepage_casestudy_sec', '' )
                // Our first group will be a simple rich text field
                ->set_layout( 'tabbed-horizontal' )
                ->add_fields( 'text', 'Image-details', array(
                    Field::make( 'image', 'home_case_study_grid_image', __( 'Image' ) ),
                    Field::make( 'text', 'home_case_study_grid_head', __( 'Heading' ) ),
                    Field::make( 'text', 'home_case_study_grid_desc', __( 'Description' ) ),
                    ) )    
        ));
} 

// case study section ends here

// about us section starts here

add_action( 'carbon_fields_register_fields', 'home_aboutUs_section' );

function home_aboutUs_section() {
    Container::make( 'post_meta', 'About-Us' )
        ->where( 'post_id', '=', get_option( 'page_on_front' ) )
        ->add_fields( array(        
        Field::make( 'text', 'home_aboutus_heading', __( 'Heading' ) ),     
        Field::make( 'text', 'home_aboutus_sub_heading', __( 'Sub-heading' ) ),
        Field::make( 'text', 'home_aboutus_sub_heading_two', __( 'Sub-heading' ) ),
        // about us grid 
        Field::make( 'image', 'home_aboutus_about_box', __( 'About-box' ) ),  
        Field::make( 'text', 'home_aboutus_our_story_heading', __( 'Our-story-heading' ) ),         
        Field::make( 'text', 'home_aboutus_our_story_subheading', __( 'Our-story-subheading' ) ),  
        Field::make( 'text', 'home_aboutus_our_story_btn', __( 'Our-story-btn' ) ),         
        Field::make( 'text', 'home_aboutus_our_story_btn_link', __( 'Our-story-btn-link' ) ),  
        Field::make( 'text', 'home_aboutus_why_us_heading', __( 'Why-us-heading' ) ),         
        Field::make( 'text', 'home_aboutus_why_us_subheading', __( 'Why-us-subheading' ) ),  
        Field::make( 'text', 'home_aboutus_why_us_description', __( 'Why-us-description' ) ),         
        Field::make( 'text', 'home_aboutus_why_us_btn', __( 'Why-us-btn' ) ),  
        Field::make( 'text', 'home_aboutus_why_us_btn_link', __( 'Why-us-btn-link' ) ),         
        Field::make( 'image', 'home_aboutus_about_box_2', __( 'About-box-2' ) ),  
        Field::make( 'text', 'home_aboutus_who_we_are_heading', __( 'Who-we-are-heading' ) ),         
        Field::make( 'text', 'home_aboutus_who_we_are_subheading', __( 'Who-we-are-subheading' ) ),         
        Field::make( 'text', 'home_aboutus_who_we_are_description', __( 'Who-we-are-description' ) ),         
        Field::make( 'text', 'home_aboutus_who_we_are_btn', __( 'Who-we-are-btn' ) ),         
        Field::make( 'text', 'home_aboutus_who_we_are_btn_link', __( 'Who-we-are-btn-link' ) ),         
        ));
} 

// about us section ends here


// testimonials section starts here

add_action( 'carbon_fields_register_fields', 'home_testimonial_section' );

function home_testimonial_section() {
    Container::make( 'post_meta', 'Testimonials' )
        ->where( 'post_id', '=', get_option( 'page_on_front' ) )
        ->add_fields( array(        
        Field::make( 'text', 'home_testimonials_heading', __( 'Heading' ) ),     
        Field::make( 'text', 'home_testimonials_sub_heading', __( 'Sub-heading' ) ),    
        Field::make( 'text', 'home_testimonials_sub_heading_two', __( 'Sub-heading' ) ),    
        Field::make( 'text', 'home_testimonials_sub_heading_three', __( 'Sub-heading' ) ),
        Field::make( 'image', 'home_testimonials_quotes_img', __( 'Quotes-img' ) ),

        Field::make( 'text', 'home_testimonials_carousel_description', __( 'description' ) ),   
        Field::make( 'text', 'home_testimonials_carousel_heading', __( 'Heading' ) ),   
        Field::make( 'text', 'home_testimonials_carousel_subheading', __( 'Sub-heading' ) ), 
        
        Field::make( 'text', 'home_testimonials_carousel_description_two', __( 'Description-two' ) ),   
        Field::make( 'text', 'home_testimonials_carousel_heading_two', __( 'Heading-two' ) ),   
        Field::make( 'text', 'home_testimonials_carousel_subheading_two', __( 'Sub-heading-two' ) ),   

        Field::make( 'text', 'home_testimonials_carousel_description_three', __( 'Description-three' ) ),   
        Field::make( 'text', 'home_testimonials_carousel_heading_three', __( 'Heading-three' ) ),   
        Field::make( 'text', 'home_testimonials_carousel_subheading_three', __( 'Sub-heading-three' ) ),   
     
        ));
} 
// testimonials section ends here


// partners section starts here

add_action( 'carbon_fields_register_fields', 'home_partners_section' );

function home_partners_section() {
    Container::make( 'post_meta', 'Partners' )
        ->where( 'post_id', '=', get_option( 'page_on_front' ) )
        ->add_fields( array(        
        Field::make( 'text', 'home_partners_heading', __( 'Heading' ) ), 
        Field::make( 'image', 'home_partners_image_one', __( 'Partner-1' ) ), 
        Field::make( 'image', 'home_partners_image_two', __( 'Partner-2' ) ), 
        Field::make( 'image', 'home_partners_image_three', __( 'Partner-3' ) ), 
        Field::make( 'image', 'home_partners_image_four', __( 'Partner-4' ) ),     
        ));
} 

// partners section ends here


//Our Software Testing Services
add_action( 'carbon_fields_register_fields', 'our_software_testing_services' );
function our_software_testing_services(){
    Block::make( __( 'Verticle Animated Column' ) )
	->add_fields( array(
        Field::make( 'text', 'vacheading', __('Heading') )->set_width( 50 ),
        Field::make( 'text', 'vacsubheading', __('Sub Heading') )->set_width( 50 ),
        Field::make( 'text', 'vacpara', __('Paragraph') ),
 
        Field::make( 'complex', 'vaccomplex', __('Animated Column Content') )
        ->set_layout( 'tabbed-horizontal' )
        ->add_fields( array(
            Field::make( 'text', 'vacinnerheading', __('Inner Heading') )->set_width( 50 ),
            Field::make( 'text', 'vacinnerheadinglink', __('Inner Heading Link') )->set_width( 50 ),
            Field::make( 'text', 'vacinnerbtn', __('Inner Button') ),
            Field::make( 'image', 'vacicon', __('Thumbnail Icon') ),
            Field::make( 'text', 'vactext', __('Thumbnail Text') ),
            Field::make( 'rich_text', 'vacparagraph', __('Inner List') )
        ) )
	) )
	->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
		?>
<section class="my-7">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div>
                    <h2 class="heading-style"><?php echo esc_html( $fields['vacheading'] ); ?></h2>
                    <p><em><?php echo esc_html( $fields['vacsubheading'] ); ?></em></p>
                    <?php echo esc_html( $fields['vacpara'] ); ?>
                </div>
                <div class="row device-subservices">
                    <div class="col-xl-4 col-lg-6 mb-4">
                        <div class="TabBg panel1 p-4 shadow h-100">
                            <a href="/automation-testing-services.php/">
                                <div class="d-flex align-items-center">
                                    <img class="w-60 mr-3" src="../assets/images/technology/ats.png">
                                    <h5 class="text-white">Automation Testing Services</h5>
                                </div>
                                <ul class="list-style-white text-white">
                                    <li>Get testing automated to maximize ROI.</li>
                                    <li>Swift, precise and productive results.</li>
                                    <li>Reduced delivery time.</li>
                                    <li>Comprehensive &amp; end-to-end application testing.</li>
                                    <li>Experienced automation team.</li>
                                    <li>Effective defect reporting.</li>
                                </ul>
                                <button class="btn buttonDefault buttonWhite">Know More</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="accordion-horizontal qa-testing-accordion desktop-subservices my-4">
                    <ul class="accordionTabList">
                        <?php 
                    $count = 0;
                    foreach($fields['vaccomplex'] as $items){
                        $count++;
                        ?>
                        <li tabindex="<?php echo $count ?>"
                            class="TabBg panel<?php echo ($count<=4)? $count : $count = 1  ?>">
                            <div>
                                <a href="<?php echo esc_html( $items['vacinnerheadinglink'] ); ?>">
                                    <h2><?php echo esc_html( $items['vacinnerheading'] ); ?></h2>
                                    <?php echo  $items['vacparagraph']; ?>
                                    <button
                                        class="btn buttonDefault"><?php echo esc_html( $items['vacinnerbtn'] ); ?></button>
                                </a>
                            </div>
                            <div class="collapsed">
                                <div class="vertical-orientation"><?php echo esc_html( $items['vactext'] ); ?></div>
                                <?php echo wp_get_attachment_image( $items['vacicon'], array('700', '600'), "", ["class" => "img-fluid"] ); ?>
                            </div>
                        </li>
                        <?php
                    }?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
    } );
}


// Our Various Cloud Computing Services
add_action( 'carbon_fields_register_fields', 'our_various_cloud_computing_services' );
function our_various_cloud_computing_services(){
    Block::make( __( 'Collapse Section' ) )
	->add_fields( array(
        Field::make( 'text', 'collapseheading', __('Heading') )->set_width( 50 ),
        Field::make( 'text', 'collapsesubheading', __('Sub Heading') )->set_width( 50 ),
        Field::make( 'rich_text', 'collapsepara', __('Paragraph') ),

        Field::make( 'complex', 'collapsecomplexleft', __('Collapse Left Content') )
        ->set_layout( 'tabbed-horizontal' )
        ->add_fields( array(
            Field::make( 'text', 'collapsetitleleft', __('Title') )->set_width( 50 ),
            Field::make( 'rich_text', 'collapsecontentleft', __('Content') )->set_width( 50 ),
        ) ),

        Field::make( 'complex', 'collapsecomplexright', __('Collapse Right Content') )
        ->set_layout( 'tabbed-horizontal' )
        ->add_fields( array(
            Field::make( 'text', 'collapsetitleright', __('Title') )->set_width( 50 ),
            Field::make( 'rich_text', 'collapsecontentright', __('Content') )->set_width( 50 ),
        ) )
        
	) )
	->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
		?>
<section class="mt-7">
    <div class="container">
        <h2 class="heading-style"><?php echo esc_html( $fields['collapseheading'] ); ?></h2>
        <p><em><?php echo esc_html( $fields['collapsesubheading'] ); ?></em></p>
        <p><?php echo esc_html( $fields['collapsepara'] ); ?></p>
        <div class="row">
            <div class="col-md-12" id="main">
                <div id="accordion" class="accordion">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <?php 
                            $count = 0;
                            foreach($fields['collapsecomplexleft'] as $items){
                                $count++;
                                ?>
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link collapsed" data-toggle="collapse"
                                        href="#ecom<?php echo $count ?>" aria-expanded="false">
                                        <?php echo esc_html( $items['collapsetitleleft'] ); ?>
                                    </a>
                                </div>
                                <div id="ecom<?php echo $count ?>" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        <?php echo ( $items['collapsecontentleft'] ); ?>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }?>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <?php 
                            $counts = 10;
                            foreach($fields['collapsecomplexright'] as $item){
                                $counts++;
                                ?>
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link collapsed" data-toggle="collapse"
                                        href="#ecom<?php echo $counts ?>">
                                        <?php echo esc_html( $item['collapsetitleright'] ); ?>
                                    </a>
                                </div>
                                <div id="ecom<?php echo $counts ?>" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        <?php echo ( $item['collapsecontentright'] ); ?>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
    } );
}

add_action( 'carbon_fields_register_fields', 'our_various_cloud_computing_services2' );
function our_various_cloud_computing_services2(){
    Block::make( __( 'Collapse Section 2' ) )
	->add_fields( array(
        Field::make( 'text', 'collapseheading', __('Heading') )->set_width( 50 ),
        Field::make( 'text', 'collapsesubheading', __('Sub Heading') )->set_width( 50 ),
        Field::make( 'rich_text', 'collapsepara', __('Paragraph') ),

        Field::make( 'complex', 'collapsecomplexleft', __('Collapse Left Content') )
        ->set_layout( 'tabbed-horizontal' )
        ->add_fields( array(
            Field::make( 'text', 'collapsetitleleft', __('Title') )->set_width( 50 ),
            Field::make( 'rich_text', 'collapsecontentleft', __('Content') )->set_width( 50 ),
        ) ),

        Field::make( 'complex', 'collapsecomplexright', __('Collapse Right Content') )
        ->set_layout( 'tabbed-horizontal' )
        ->add_fields( array(
            Field::make( 'text', 'collapsetitleright', __('Title') )->set_width( 50 ),
            Field::make( 'rich_text', 'collapsecontentright', __('Content') )->set_width( 50 ),
        ) )
        
	) )
	->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
		?>
<section class="py-7">
    <div class="container">
        <h2 class="heading-style"><?php echo esc_html( $fields['collapseheading'] ); ?></h2>
        <p><em><?php echo esc_html( $fields['collapsesubheading'] ); ?></em></p>
        <p><?php echo esc_html( $fields['collapsepara'] ); ?></p>
        <div class="row">
            <div class="col-md-12" id="main">
                <div id="accordion2" class="accordion">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <?php 
                            $count2 = 50;
                            foreach($fields['collapsecomplexleft'] as $items){
                                $count2++;
                                ?>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#ecom<?php echo $count2 ?>" aria-expanded="false">
                                            <?php echo esc_html( $items['collapsetitleleft'] ); ?>
                                        </a>
                                    </div>
                                    <div id="ecom<?php echo $count2 ?>" class="collapse" data-parent="#accordion2">
                                        <div class="card-body">
                                            <?php echo ( $items['collapsecontentleft'] ); ?>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }?>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <?php 
                            $counts2 = 100;
                            foreach($fields['collapsecomplexright'] as $item){
                                $counts2++;
                                ?>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#ecom<?php echo $counts2 ?>">
                                            <?php echo esc_html( $item['collapsetitleright'] ); ?>
                                        </a>
                                    </div>
                                    <div id="ecom<?php echo $counts2 ?>" class="collapse" data-parent="#accordion2">
                                        <div class="card-body">
                                            <?php echo ( $item['collapsecontentright'] ); ?>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
    } );
}

//Advantages of Working With Us
add_action( 'carbon_fields_register_fields', 'advantages_of_working_with_us' );
function advantages_of_working_with_us(){
    Block::make( __( 'Card with icon and content' ) )
	->add_fields( array(
        Field::make( 'text', 'cardheading', __('Heading') ), 
        Field::make( 'text', 'cardpara', __('ParaGraph') ),

        Field::make( 'complex', 'cardcomplex', __('Card Content') )
        ->set_layout( 'tabbed-horizontal' )
        ->add_fields( array(
            Field::make( 'image', 'cardicon', __('Icon') ),
            Field::make( 'text', 'cardtext', __('Content') ),
        ) )
	) )
	->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
		?>
<section class="advantage-of-working bg-white py-7">
    <div class="container">
        <h2 class="heading-style"><?php echo esc_html( $fields['cardheading'] ); ?></h2>
        <p class="mb-4"><?php echo esc_html( $fields['cardpara'] ); ?></p>
        <div class="row">
            <?php 
            foreach($fields['cardcomplex'] as $items){
                ?>
            <div class="col-xl-2 col-md-3 mt-4">
                <div class="h-100 shadow p-4 mb-4 bg-white text-center">
                    <?php echo wp_get_attachment_image( $items['cardicon'], array('700', '600'), "", ["class" => "img-fluid"] ); ?>
                    <h6 class="mb-0 mt-3"><?php echo esc_html( $items['cardtext'] ); ?></h6>
                </div>
            </div>
            <?php
            }?>
        </div>
    </div>
</section>
<?php
    } );
}

//Card with heading content
add_action( 'carbon_fields_register_fields', 'card_head_with_text' );
function card_head_with_text(){
    Block::make( __( 'Card with heading content col-6' ) )
	->add_fields( array(
        Field::make( 'text', 'cardwithheading', __('Heading') ), 
        Field::make( 'text', 'cardwithpara', __('ParaGraph') ),

        Field::make( 'complex', 'cardwithcomplex', __('Card Content') )
        ->set_layout( 'tabbed-horizontal' )
        ->add_fields( array(
            Field::make( 'text', 'cardwithheading', __('Heading') ),
            Field::make( 'rich_text', 'cardwithcontent', __('Content') ),
        ) )
	) )
	->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
		?>
<section class="my-7">
    <div class="container">
        <h2 class="heading-style"><?php echo esc_html( $fields['cardwithheading'] ); ?></h2>
        <p><?php echo esc_html( $fields['cardwithpara'] ); ?></p>
        <div class="row">
            <?php 
            foreach($fields['cardwithcomplex'] as $items){
                ?>
            <div class="col-lg-6 col-sm-6 mb-4">
                <div class="h-100 bg-white p-4 shadow">
                    <h5><?php echo esc_html( $items['cardwithheading'] ); ?></h5>
                    <?php echo $items['cardwithcontent']; ?>
                </div>
            </div>
            <?php
            }?>
        </div>

    </div>

</section>
<?php
    } );
}


//DevOps as a Service
add_action( 'carbon_fields_register_fields', 'devOps_as_a_service' );
function devOps_as_a_service(){
    Block::make( __( 'Card with icon-class heading and content col-4' ) )
	->add_fields( array(
        Field::make( 'text', 'devopsheading', __('Heading') )->set_width( 50 ),
        Field::make( 'text', 'devopstext', __('Sub Heading') )->set_width( 50 ),
        Field::make( 'text', 'devopspara', __('Paragraph') ), 

        Field::make( 'complex', 'devopscomplex', __('Card Content') )
        ->set_layout( 'tabbed-horizontal' )
        ->add_fields( array(
            Field::make( 'text', 'devopsicon', __('Add Icon Class') ),
            Field::make( 'text', 'devopsheadingtxt', __('Heading') )->set_width( 50 ),
            Field::make( 'text', 'devopscontent', __('Content') )->set_width( 50 ),
        ) )
	) )
	->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
		?>
<section class="devops-service py-7">
    <div class="container">
        <div>
            <h2 class="heading-style"><?php echo esc_html( $fields['devopsheading'] ); ?></h2>
            <p class="mb-3"><em><?php echo esc_html( $fields['devopstext'] ); ?></em></p>
            <p><?php echo esc_html( $fields['devopspara'] ); ?></p>
            <div class="row text-center">
                <?php 
        foreach($fields['devopscomplex'] as $items){
            ?>
                <div class="col-lg-4 col-sm-6 mt-4">
                    <div class="h-100 bg-white shadow p-4">
                        <i class="las <?php echo esc_html( $items['devopsicon'] ); ?> display-4 theme-text-color"></i>
                        <h4 class="py-3"><?php echo esc_html( $items['devopsheadingtxt'] ); ?></h4>
                        <p><?php echo esc_html( $items['devopscontent'] ); ?></p>
                    </div>
                </div>
                <?php
        }?>
            </div>
        </div>
    </div>
</section>
<?php
    } );
}

//Card with icon icon-text content col-4
add_action( 'carbon_fields_register_fields', 'card_icon_with_icontext' );
function card_icon_with_icontext(){
    Block::make( __( 'Card with icon icon-text content col-4' ) )
	->add_fields( array(
        Field::make( 'text', 'cardwithiconheading', __('Heading') )->set_width( 50 ),
        Field::make( 'text', 'cardwithiconsubheading', __('Sub Heading') )->set_width( 50 ),
        Field::make( 'text', 'cardwithiconpara', __('Paragraph') ), 

        Field::make( 'complex', 'cardwithiconcomplex', __('Card Content') )
        ->set_layout( 'tabbed-horizontal' )
        ->add_fields( array(
            Field::make( 'image', 'cardwithiconicon', __('Image') ),
            Field::make( 'text', 'cardwithicontxt', __('Heading') )->set_width( 50 ),
            Field::make( 'rich_text', 'cardwithiconcontent', __('Content') )->set_width( 50 ),
        ) )
	) )
	->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
		?>
<section class="chat-dev-feature my-7">
    <div class="container">
        <div class="">
            <h2 class="heading-style"><?php echo esc_html( $fields['cardwithiconheading'] ); ?></h2>
            <p><em><?php echo esc_html( $fields['cardwithiconsubheading'] ); ?></em></p>
            <p><?php echo esc_html( $fields['cardwithiconpara'] ); ?></p>
        </div>
        <div class="row">
            <?php 
                foreach($fields['cardwithiconcomplex'] as $items){
                    ?>
            <div class="col-lg-4 mb-4">
                <div class="h-100 shadow p-4 mt-5 bg-white">
                    <div class="d-flex align-items-center">
                        <?php echo wp_get_attachment_image( $items['cardwithiconicon'], array('700', '600'), "", ["class" => "img-fluid w-25"] ); ?>
                        <h5 class="pl-3"><?php echo esc_html( $items['cardwithicontxt'] ); ?></h5>
                    </div>
                    <p><?php echo $items['cardwithiconcontent']; ?></p>
                </div>
            </div>
            <?php
                }?>
        </div>
    </div>
</section>
<?php
    } );
}

//Web Design Services Company
add_action( 'carbon_fields_register_fields', 'head_subhead_para_head_btn' );
function head_subhead_para_head_btn(){
    Block::make( __( 'Heading subheading para bottom heading and button' ) )
	->add_fields( array(
        Field::make( 'text', 'webdesignheading', __('Heading') )->set_width( 50 ),
        Field::make( 'text', 'webdesignsubheading', __('Sub Heading') )->set_width( 50 ),
        Field::make( 'rich_text', 'webdesignpara', __('Paragraph') ),
        Field::make( 'text', 'webdesignbottomheading', __('Heading Bottom') ),
        Field::make( 'text', 'webdesignbutton', __('Button') )->set_width( 50 ),
        Field::make( 'text', 'webdesignurl', __('Button Url') )->set_width( 50 )
	) )
	->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
		?>
<section class="bg-white py-7 mt-7">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div>
                    <div class="">
                        <h2 class="heading-style"><?php echo esc_html( $fields['webdesignheading'] ); ?></h2>
                        <p><em><?php echo esc_html( $fields['webdesignsubheading'] ); ?></em></p>
                        <p class="pt-3"><?php echo $fields['webdesignpara']?></p>

                    </div>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <h4><?php echo esc_html( $fields['webdesignbottomheading'] ); ?><h4>
                    <button class="btn buttonDefault"
                        onclick="location.href='<?php echo esc_html( $fields['webdesignurl'] ); ?>'"><?php echo esc_html( $fields['webdesignbutton'] ); ?></button>
        </div>
    </div>
</section>
<?php
    } );
}

//Web Design Services Company
add_action( 'carbon_fields_register_fields', 'head_subhead_para_head_btn_img' );
function head_subhead_para_head_btn_img(){
    Block::make( __( 'Heading subheading para bottom heading and button with left Img' ) )
	->add_fields( array(
        Field::make( 'image', 'webdesignnimg', 'Image' )->set_width( 50 ),
        Field::make( 'text', 'webdesignnheading', 'Heading' )->set_width( 50 ),
        Field::make( 'text', 'webdesignnsubheading', 'Sub Heading' )->set_width( 50 ),
        Field::make( 'rich_text', 'webdesignnpara', 'Paragraph' ),
        Field::make( 'text', 'webdesignnbottomheading', 'Heading Bottom' ),
        Field::make( 'text', 'webdesignnbutton', 'Button' )->set_width( 50 ),
        Field::make( 'text', 'webdesignnurl', 'Button Url' )->set_width( 50 )
	) )
	->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
		?>
<section class="bg-white py-7">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mt-4 mt-lg-0 pl-lg-5 col-sm-6 mx-auto">
                <?php echo wp_get_attachment_image( $fields['webdesignnimg'], array('700', '600'), "", ["class" => "img-fluid"] ); ?>
            </div>
            <div class="col-lg-8">
                <div>
                    <h2 class="heading-style"><?php echo esc_html( $fields['webdesignnheading'] ); ?></h2>
                    <div class="mb-4">
                        <em><?php echo esc_html( $fields['webdesignnsubheading'] ); ?></em>
                    </div>
                    <p><?php echo esc_html( $fields['webdesignnpara'] ); ?></p>
                    <p><strong><?php echo esc_html( $fields['webdesignnbottomheading'] ); ?></strong></p>
                    <div class="">
                        <button class="btn buttonDefault"
                            onclick="location.href='<?php echo esc_html( $fields['webdesignnurl'] ); ?>'"><?php echo esc_html( $fields['webdesignnbutton'] ); ?></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
    } );
}

//Our Web Design Process
add_action( 'carbon_fields_register_fields', 'our_web_design_rocess' );
function our_web_design_rocess(){
    Block::make( __( 'Card icon text content with blue-bg' ) )
	->add_fields( array(
        Field::make( 'text', 'cardbgheading', __('Heading') )->set_width( 50 ),
        Field::make( 'text', 'cardbgsubheading', __('Sub Heading') )->set_width( 50 ), 
        Field::make( 'text', 'cardbgpara', __('Paragraph') ), 

        Field::make( 'complex', 'cardbgcomplex', __('Card Content') )
        ->set_layout( 'tabbed-horizontal' )
        ->add_fields( array(
            Field::make( 'image', 'cardbgicon', __('Icon') ),
            Field::make( 'text', 'cardbgtext', __('Icon Text') )->set_width( 50 ),
            Field::make( 'text', 'cardbgcontent', __('Content') )->set_width( 50 ),
        ) )
	) )
	->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
		?>
<section class="my-7">
    <div class="container">
        <div class="row">
            <div class="">
                <div class="col-lg-12">
                    <h2 class="heading-style"><?php echo esc_html( $fields['cardbgheading'] ); ?></h2>
                    <p><em><?php echo esc_html( $fields['cardbgsubheading'] ); ?></em></p>
                    <div class="mt-3">
                        <p class="pt-3"><?php echo esc_html( $fields['cardbgpara'] ); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <?php 
                foreach($fields['cardbgcomplex'] as $items){
                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 mt-4">
                        <div class="effect other-effect h-100">
                            <div class="align-content-center flex">
                                <?php echo wp_get_attachment_image( $items['cardbgicon'], array('700', '600'), "", ["class" => "img-fluid"] ); ?>
                                <p style="font-weight:700;" class="ml-2"><?php echo esc_html( $items['cardbgtext'] ); ?>
                                </p>
                            </div>
                            <p><?php echo esc_html( $items['cardbgcontent'] ); ?></p>
                        </div>
                    </div>
                    <?php
                }?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
    } );
}

//Card with icon-class and content col-3
add_action( 'carbon_fields_register_fields', 'card_with_iconclass_content_col3' );
function card_with_iconclass_content_col3(){
    Block::make( __( 'Card with icon-class content col-3' ) )
	->add_fields( array(
        Field::make( 'complex', 'iconclscomplex', __('Card Content') )
        ->set_layout( 'tabbed-horizontal' )
        ->add_fields( array(
            Field::make( 'text', 'iconclsiconclass', __('Icon Class') )->set_width( 50 ),
            Field::make( 'text', 'iconclscontent', __('Content') )->set_width( 50 ),
        ) )
	) )
	->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
		?>
<section class="my-7">
    <div class="container">
        <div class="row">
            <?php 
        foreach($fields['iconclscomplex'] as $items){
            ?>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="h-100 bg-white shadow p-4 text-center">
                    <i class="las <?php echo esc_html( $items['iconclsiconclass'] ); ?> display-4 theme-text-color mb-3"></i>
                    <h6 class="mb-0"><?php echo esc_html( $items['iconclscontent'] ); ?></h6>
                </div>
            </div>
            <?php
        }?>
        </div>
    </div>
</section>
<?php
    } );
}

//Card with icon-class, icon-text, and content
add_action( 'carbon_fields_register_fields', 'card_with_iconclass_text_and_content' );
function card_with_iconclass_text_and_content(){
    Block::make( __( 'Card with icon-class text and content' ) )
	->add_fields( array(
        Field::make( 'text', 'cardheading', __('Heading') )->set_width( 50 ),
        Field::make( 'text', 'cardsubheading', __('Sub Heading') )->set_width( 50 ), 
        Field::make( 'text', 'cardpara', __('Paragraph') ), 

        Field::make( 'complex', 'cardcomplex', __('Card Content') )
        ->set_layout( 'tabbed-horizontal' )
        ->add_fields( array(
            Field::make( 'text', 'cardiconclass', __('Icon Class') ),
            Field::make( 'text', 'cardtext', __('Icon Text') )->set_width( 50 ),
            Field::make( 'rich_text', 'cardcontent', __('Content') )->set_width( 50 ),
        ) )
	) )
	->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
		?>
<section class="rpa-process bg-white py-7 mt-7">
    <div class="container">
      <div class="">
        <h2 class="heading-style"><?php echo esc_html( $fields['cardheading'] ); ?></h2>
        <p class="mb-3"><em><?php echo esc_html( $fields['cardsubheading'] ); ?></em></p>
        <p><?php echo esc_html( $fields['cardpara'] ); ?></p>
      </div>
      <div class="row pt-4">
        <?php 
    foreach($fields['cardcomplex'] as $items){
        ?>
        <div class="col-lg-6 col-md-6 col-sm-6 mb-4">
          <div class="shadow p-4 bg-white mb-4 h-100">
            <div class="d-flex align-items-center">
              <i class="las <?php echo esc_html( $items['cardiconclass'] ); ?> display-4 theme-text-color mb-3 mr-3"></i>
              <h6><?php echo esc_html( $items['cardtext'] ); ?></h6>
            </div>
            <p><?php echo $items['cardcontent']; ?></p>
          </div>
        </div>
        <?php
    }?>
      </div>
    </div>
</section>
<?php
    } );
}


//Our Work
add_action( 'carbon_fields_register_fields', 'our_work' );
function our_work(){
    Block::make( __( 'Our Work' ) )
	->add_fields( array(
        Field::make( 'complex', 'cardbgcomplex', __('Our Work') )
        ->set_layout( 'tabbed-horizontal' )
        ->add_fields( array( 
            Field::make( 'image', 'ourworkimg', __( 'BG Image' ) )
            ->set_value_type( 'url' ),
            Field::make( 'text', 'ourworklinktxt', __('Link Text') )->set_width( 50 ),
            Field::make( 'text', 'ourworklinkurl', __('Link Url') )->set_width( 50 )
        ) )
	) )
	->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
		?>
<section class="my-7">
    <div class="container">
        <div class="row">
            <?php 
                foreach($fields['cardbgcomplex'] as $items){
                    ?>
            <div class="col-lg-6 col-sm-6 mt-5">
                <div class="intrective-email" style="background-image: url(<?php echo $items['ourworkimg'];?>)"
                    onclick="location.href='<?php echo esc_html( $items['ourworklinkurl'] ); ?>'">
                    <p class="email-btn"><?php echo esc_html( $items['ourworklinktxt'] ); ?> <i
                            class="las la-angle-double-right"></i></p>
                    <div class="email-overlay"></div>
                </div>
            </div>
            <?php
                }?>
        </div>
    </div>
</section>
<?php
    } );
}

/*Gutenberg block of img, content, heading*/
add_action('carbon_fields_register_fields', 'technologies');
function technologies(){
    Block::make( __('Technologies Details'))
    ->add_fields( array(
        Field::make('text', 'heading', __('Heading')),
        Field::make('complex', 'techblocks', __('Tech Blocks'))
        ->set_layout('tabbed-horizontal')
        ->set_collapsed('true')
        ->add_fields( array(
            Field::make( 'image', 'techimg', __('Tech Image')), 
            Field::make( 'text', 'innerhead', __('Tech Inner Heading')),
            Field::make( 'rich_text', 'innerpara', __('Tech Inner Para'))
        ))
    ))
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
		?>
<section class="mt-7 front-end-technology">
    <div class="container">
        <h2 class="heading-style"><?php echo $fields['heading']?></h2>
        <div class="row">
            <?php foreach($fields['techblocks'] as $value){?>
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="h-100 shadow bg-white p-4 text-center">
                    <img class="w-25" src="<?php echo wp_get_attachment_image_url($value['techimg'])?>" alt="">
                    <h5 class="my-4 fw-900"><?php echo $value['innerhead']?></h5>
                    <p><?php echo $value['innerpara']?></p>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</section>
<?php 
    });
}

/*Gutenberg block of img, content vertical 3 blocks for frontend page*/
add_action('carbon_fields_register_fields', 'offering');

function offering(){
    Block::make( __('Offerings'))
    ->add_fields( array(
        Field::make('text', 'heading', __('Offerings Heading')),
        Field::make('text', 'para', __('Offerings Content')),
        Field::make('complex', 'offeringblocks', __('Offerings Blocks'))
        ->set_layout('tabbed-horizontal')
        ->set_collapsed('true')
        ->add_fields( array(
            Field::make( 'image', 'offeringimg', __('Offerings Image')), 
            Field::make( 'text', 'innerhead', __('Offerings Inner Heading'))->set_width(50),
            Field::make( 'text', 'firsttext', __('Offerings Inner FirstText'))->set_width(50),
            Field::make( 'text', 'secondtext', __('Offerings Inner SecondText'))->set_width(50),
            Field::make( 'text', 'thirdtext', __('Offerings Inner ThirdText'))->set_width(50),
        ))
    ))
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
        ?>
<section class="mt-7">
    <div class="container">
        <h2 class="heading-style"><?php echo $fields['heading']?></h2>
        <p><?php echo $fields['para']?></p>
        <div class="row mt-5">
            <?php foreach($fields['offeringblocks'] as $key){?>
            <div class="col-md-4 text-center mb-4 mb-lg-0">
                <div class="offering-wrap">
                    <div class="offering-img">
                        <img src="<?php echo wp_get_attachment_image_url($key['offeringimg'])?>" alt=""
                            class="img-fluid w-50">
                    </div>
                    <div class="offering-content">
                        <h5 class="mb-3 font-weight-bold"><?php echo $key['innerhead']?></h5>
                        <p class="border-bottom mb-2 pb-2"><?php echo $key['firsttext']?></p>
                        <p class="border-bottom mb-2 pb-2"><?php echo $key['secondtext']?></p>
                        <p class=""><?php echo $key['thirdtext']?></p>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</section>
<?php 
    });
}

/*Gutenberg block of img, content for the process*/
add_action('carbon_fields_register_fields', 'process');

function process(){
    Block::make( __('Process'))
    ->add_fields( array(
        Field::make('text', 'heading', __('Process Heading')),
        Field::make('complex', 'processblocks', __('Process Blocks'))
        ->set_layout('tabbed-horizontal')
        ->set_collapsed('true')
        ->add_fields( array(
            Field::make( 'image', 'processimg', __('Process Image'))->set_width(50), 
            Field::make( 'text', 'innerhead', __('Process Inner Heading'))->set_width(50),
            Field::make( 'rich_text', 'listeditems', __('Process List'))
        ))
    ))
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
        ?>
<section class="bg-white py-7 mt-7">
    <div class="container">
        <h2 class="heading-style"><?php echo $fields['heading']?></h2>
        <div class="row">
            <?php foreach($fields['processblocks'] as $keys){?>
            <div class="col-xl-4 col-lg-4 col-sm-6 mb-4">
                <div class="h-100 shadow p-4 mt-4">
                    <div class="d-flex align-items-center mb-4">
                        <img src="<?php echo wp_get_attachment_image_url($keys['processimg'])?>"
                            class="img-fluid w-40 mr-3" alt="">
                        <h5><?php echo $keys['innerhead']?></h5>
                    </div>
                    <?php echo $keys['listeditems']?>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</section>
<?php 
    });
}

/*Gutenberg block of heading, subheading, para, left list, rightlist*/
add_action('carbon_fields_register_fields', 'column_listed');

function column_listed(){
    Block::make( __('Heading SubHeading Para LeftList RightList'))
    ->add_fields( array(
        Field::make('text', 'heading', __('Heading')),
        Field::make('text', 'subheading', __('Sub Heading')),
        Field::make('text', 'paragraph', __('Paragraph')),
        Field::make('rich_text', 'leftlist', __('Left Column List')),
        Field::make('rich_text', 'rightlist', __('Right Column List'))
    ))
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
        ?>

<section class="py-7">
    <div class="container">
        <div>
            <h2 class="heading-style"><?php echo $fields['heading']?></h2>
            <p><em><?php echo $fields['subheading']?></em></p>
            <p class="mb-3"><?php echo $fields['paragraph']?></p>
        </div>
        <div class="row mt-4">
            <div class="col-lg-6 col-sm-6 pr-lg-5">
                <?php echo $fields['leftlist']?>
            </div>
            <div class="col-lg-6 col-sm-6 pl-lg-5">
                <?php echo $fields['rightlist']?>
            </div>
        </div>
    </div>
</section>
<?php 
    });
}

/*Gutenberg block of heading, subheading at the bottom, para, left list, rightlist*/
add_action('carbon_fields_register_fields', 'column_listed2');

function column_listed2(){
    Block::make( __('Heading SubHeading (AT Bottom) Para LeftList RightList'))
    ->add_fields( array(
        Field::make('text', 'heading', __('Heading')),
        Field::make('text', 'paragraph', __('Paragraph')),
        Field::make('rich_text', 'leftlist', __('Left Column List')),
        Field::make('rich_text', 'rightlist', __('Right Column List')),
        Field::make('text', 'subheading', __('Sub Heading'))
    ))
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
        ?>

<section class="my-7">
    <div class="container">
        <div>
            <h2 class="heading-style"><?php echo $fields['heading']?></h2>
            <p class="mb-3"><?php echo $fields['paragraph']?></p>
        </div>
        <div class="row mt-4">
            <div class="col-lg-6 pr-lg-4 col-sm-6"><?php echo $fields['leftlist']?></div>
            <div class="col-lg-6 pl-lg-4 col-sm-6"><?php echo $fields['rightlist']?></div>
        </div>

        <div class="mt-5">
            <p><em><?php echo $fields['subheading']?></em></p>
        </div>
    </div>
</section>
<?php 
    });
}

/*Gutenberg block of heading, blocks having line awesome icons with heading*/
add_action('carbon_fields_register_fields', 'lineawsmicon');

function lineawsmicon(){
    Block::make( __('Heading Para multiple lineawesome icons col-3 with heading'))
    ->add_fields( array(
        Field::make('text', 'heading', __('Heading')),
        Field::make('text', 'italic-subheading', __('SubHeading')),
        Field::make('text', 'paragraph', __('Paragraph')),
        Field::make('complex', 'iconsblock', __('Icons Block'))
        ->set_layout('tabbed-horizontal')
        ->set_collapsed(true)
        ->add_fields( array(
            Field::make('text', 'awsmclassicon', __('Icon Line Awesome Class')),
            Field::make('text', 'innerheading', __('Inner Heading'))
        ))
    ))
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
        ?>
        <section class="py-7">
            <div class="container">
                <h2 class="heading-style"><?php echo $fields['heading']?></h2>
                <p><em><?php echo $fields['italic-subheading']?></em></p>
                <p><?php echo $fields['paragraph']?></p>
                <div class="row pt-4">
                    <?php foreach($fields['iconsblock'] as $key){?>
                        <div class="col-lg-3 col-md-4 col-sm-6  mb-4">
                            <div class="aj-top-feature shadow p-4 text-center bg-white h-100">
                                <i class="las <?php echo $key['awsmclassicon']?> display-4 theme-text-color mb-3"></i>
                                <h6 class="mb-0"><?php echo $key['innerheading']?></h6>
                            </div>
                        </div>
                    <?php }?>
                </div>
            </div>
        </section>
<?php 
    });
}


/*Gutenberg block of heading, key differences (heading and list)*/
add_action('carbon_fields_register_fields', 'keydiff');

function keydiff(){
    Block::make( __('Heading with key difference'))
    ->add_fields( array(
        Field::make('text', 'heading', __('Heading')),
        Field::make('text', 'leftcolheading', __('Left Column Heading'))->set_width(50),
        Field::make('rich_text', 'leftcollist', __('Left Column List'))->set_width(50),
        Field::make('text', 'rightcolheading', __('Right Column Heading'))->set_width(50),
        Field::make('rich_text', 'rightcollist', __('Right Column List'))->set_width(50)
    ))
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
        ?>

<section class="my-7">
    <div class="container">
        <h2 class="heading-style"><?php echo $fields['heading']?></h2>
        <div class="row">
            <div class="col-lg-6">
                <h4><?php echo $fields['leftcolheading']?></h4>
                <?php echo $fields['leftcollist']?>
            </div>
            <div class="col-lg-6 mt-lg-0 mt-4">
                <h4><?php echo $fields['rightcolheading']?></h4>
                <?php echo $fields['rightcollist']?>
            </div>
        </div>
    </div>
</section>
<?php });
}

/*Gutenberg block of heading, para*/
add_action('carbon_fields_register_fields', 'Headpara');

function Headpara(){
    Block::make( __('Heading with para'))
    ->add_fields( array(
        Field::make('text', 'heading', __('Heading')),
        Field::make('rich_text', 'para', __('Para'))
    ))
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
        ?>
<section class="bg-white py-7">
    <div class="container">
        <div class="">
            <h2 class="heading-style"><?php echo $fields['heading']?></h2>
            <p><?php echo $fields['para']?></p>
        </div>
    </div>
</section>
<?php 
    });
}
/*Gutenberg block of heading, blocks with icon, head, text*/
add_action('carbon_fields_register_fields', 'headwhiteblockwithicon');

function headwhiteblockwithicon(){
    Block::make( __('Heading White Blocks with Icon, Head, Text col-lg-3'))
    ->add_fields( array(
        Field::make('text', 'heading', __('Heading')),
        Field::make('text', 'subheading', __('SubHeading')),
        Field::make('complex', 'whiteblocks', __('White Blocks'))
        ->set_layout('tabbed-horizontal')
        ->set_collapsed(true)
        ->add_fields( array(
            Field::make('image', 'icon', __('Block Icon')),
            Field::make('text', 'heading', __('Block Heading'))->set_width(50),
            Field::make('text', 'txt', __('Block Text'))->set_width(50)
        ))
    ))
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
        ?>
<section class="py-7">
    <div class="container">
        <h2 class="heading-style"><?php echo $fields['heading']?></h2>
        <p><em><?php echo $fields['subheading']?></em></p>
        <div class="row">
            <?php foreach($fields['whiteblocks'] as $keys){?>
            <div class="col-lg-3 col-sm-6 text-center mt-4">
                <div class="shadow bg-white p-3 h-100">
                    <img class="img-fluid w-15" src="<?php echo wp_get_attachment_image_url($keys['icon'])?>" alt="">
                    <h6 class="my-3 fw-900"><?php echo $keys['heading']?></h6>
                    <p><?php echo $keys['txt']?></p>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</section>
<?php 
    });
}

/*Gutenberg block of heading, subheading at top and at bottom*/
add_action('carbon_fields_register_fields', 'multisubhead');

function multisubhead(){
    Block::make( __('Heading and subheading top and bottom with content'))
    ->add_fields( array(
        Field::make( 'image', 'rightimg', __('Image')),
        Field::make('text', 'heading', __('Heading')),
        Field::make('text', 'topsubheading', __('Top SubHeading')),
        Field::make('text', 'para', __('Para')),
        Field::make('text', 'bottomsubheading', __('Bottom SubHeading'))
    ))
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
        ?>
<section class="bg-white py-7 mt-7">
    <div class="container">
        <div class="row flex-column-reverse flex-lg-row">
            <div class="col-lg-6 pr-lg-5 col-sm-6 mx-sm-auto mt-lg-0 mt-4">
                <img src="<?php echo wp_get_attachment_image_url($fields['rightimg'])?>" alt="">
            </div>
            <div class="col-lg-6">
                <h2 class="heading-style"><?php echo $fields['heading']?></h2>
                <p class="mb-3"><em><?php echo $fields['topsubheading']?></em></p>
                <p class="mb-3"><?php echo $fields['para']?></p>
                <p><em><?php echo $fields['bottomsubheading']?></em></p>
            </div>
        </div>
    </div>
</section>
<?php 
    });
}

/*Gutenberg block of heading, para, subheading, blue blocks with heading and list*/
add_action('carbon_fields_register_fields', 'approachblock');

function approachblock(){
    Block::make( __('Heading Para Subheading Blue Blocks with heading and list'))
    ->add_fields( array(
        Field::make('text', 'heading', __('Heading')),
        Field::make('text', 'para', __('Para')),
        Field::make('text', 'subheading', __('Bottom SubHeading')), 
        Field::make('complex', 'blueblocks', __('Blue Blocks'))
        ->set_layout('tabbed-horizontal')
        ->set_collapsed(true)
        ->add_fields( array(
            Field::make('text', 'innerheading', __('Block Heading')),
            Field::make('complex', 'pointedlist', __('Pointed Lists'))
            ->set_layout('tabbed-horizontal')
            ->set_collapsed(true)
            ->add_fields( array(
                Field::make('text', 'list', __('List'))
            ))
        ))
    ))
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
        ?>
<section class="bg-white py-7 mt-7">
    <div class="container">
        <div class="">
            <h2 class="heading-style"><?php echo $fields['heading']?></h2>
            <p class="mb-3"><?php echo $fields['para']?></p>
            <p><em><?php echo $fields['subheading']?></em></p>
        </div>
        <div class="row mt-4">
            <?php foreach($fields['blueblocks'] as $key){?>
            <div class="col-lg-6 col-sm-6 mb-4">
                <div class="bg-blue shadow p-4 h-100 text-white">
                    <h5><?php echo $key['innerheading']?></h5>
                    <ul class="list-style-white">
                        <?php foreach($key['pointedlist'] as $val){?>
                        <li><?php echo $val['list']?></li>
                        <?php }?>
                    </ul>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</section>
<?php
    });
}

//small_icons_content
add_action( 'carbon_fields_register_fields', 'small_icons_content' );
function small_icons_content(){
    Block::make( __( 'Small Blocks With Icons and Content' ) )
	->add_fields( array(
        Field::make( 'text', 'cardheading', __('Heading') ), 
        Field::make( 'complex', 'cardcomplex', __('Card Content') )
        ->set_layout( 'tabbed-horizontal' )
        ->add_fields( array(
            Field::make( 'image', 'cardicon', __('Icon') ),
            Field::make( 'text', 'cardtext', __('Content') ),
        ) )
	) )
	->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
		?>
<section class="bg-white">
    <div class="container">
        <h5 class="mt-5 mb-5"><?php echo $fields['cardheading'] ?></h5>
        <div class="row">
            <?php foreach($fields['cardcomplex'] as $items){?>
            <div class="col-lg-3 col-xl-2 col-sm-4 mb-4">
                <div class="shadow bg-white p-4 text-center h-100">
                    <img class="w-25" src="<?php echo wp_get_attachment_image_url($items['cardicon'])?>" alt="">
                    <h6 class="mb-0 mt-3"><?php echo $items['cardtext'] ?></h6>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</section>
<?php
    } );
}
/*Gutenberg block of heading, subheading, para, left list, rightlist, right image*/
add_action('carbon_fields_register_fields', 'columnlistwithimage');

function columnlistwithimage(){
    Block::make( __('Heading SubHeading Para LeftList RightList RightImage'))
    ->add_fields( array(
        Field::make('text', 'heading', __('Heading')),
        Field::make('text', 'subheading', __('Sub Heading')),
        Field::make('text', 'paragraph', __('Paragraph')),
        Field::make('rich_text', 'leftlist', __('Left Column List')),
        Field::make('rich_text', 'rightlist', __('Right Column List')),
        Field::make('image', 'rightimage', __('Right Image'))
    ))
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
        ?>
<section class="my-7">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <h2 class="heading-style"><?php echo $fields['heading']?></h2>
                <p><em><?php echo $fields['subheading']?></em></p>
                <p><?php echo $fields['paragraph']?></p>
                <div class="row mt-4">
                    <div class="col-lg-6">
                        <?php echo $fields['leftlist']?>                        
                    </div>
                    <div class="col-lg-6"><?php echo $fields['rightlist']?></div>                    
                </div>                                                 
            </div>
            <div class="col-lg-5 pl-lg-5 mt-4 mt-lg-0 col-sm-6 mx-sm-auto mt-lg-0 mt-4">
                <img src="<?php echo wp_get_attachment_image_url($fields['rightimage'])?>" alt="" class="img-fluid">
            </div>
        </div>        
    </div>
</section>
<?php 
    });
}

/*Gutenberg block of coldfusion heading, para, right image*/
add_action('carbon_fields_register_fields', 'multipara');

function multipara(){
    Block::make( __('Heading SubHeading Para RightImage Para'))
    ->add_fields( array(
        Field::make('text', 'heading', __('Heading')),
        Field::make('rich_text', 'paragraph', __('Paragraph')),
        Field::make('rich_text', 'list', __('List')),
        Field::make('image', 'rightimage', __('Right Image')),
        Field::make('rich_text', 'bottomparagraph', __('Bottom Paragraph'))
    ))
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
        ?>
<section class="my-7">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="heading-style"><?php echo $fields['heading']?></h2>
                <p><?php echo $fields['paragraph']?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7"><?php echo $fields['list']?></div>
            <div class="col-lg-5 mb-lg-5 pl-lg-5 mt-4 mt-lg-0 col-sm-6 mx-auto">
                <img class="img-fluid" src="<?php echo wp_get_attachment_image_url($fields['rightimage'])?>" alt="">
            </div>
        </div>
        <div class="mt-4">
            <p><?php echo $fields['bottomparagraph']?></p>
        </div>
    </div>
</section>
<?php 
    });
}

/*Gutenberg block of heading, subheading, para, left image, button*/
add_action('carbon_fields_register_fields', 'leftimage_button');

function leftimage_button(){
    Block::make( __('Heading SubHeading Para LeftImage Button'))
    ->add_fields( array(
        Field::make('image', 'leftimage', __('Left Image'))->set_width(50),
        Field::make('text', 'heading', __('Heading'))->set_width(50),
        Field::make('text', 'subheading', __('Sub Heading')),
        Field::make('text', 'paragraph', __('Paragraph')),
        Field::make('text', 'btntxt', __('Button Text'))->set_width(50),
        Field::make('text', 'btnlink', __('Button Link'))->set_width(50),
    ))
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
        ?>
<section class="bg-white py-7">
    <div class="container">
        <div class="row flex-column-reverse flex-lg-row">
            <div class="col-lg-5 pr-lg-5 mt-4 mt-lg-0 col-sm-6 mx-sm-auto">
                <img src="<?php echo wp_get_attachment_image_url($fields['leftimage'])?>" class="img-fluid" alt="">
            </div>
            <div class="col-lg-7">
                <h2 class="heading-style"><?php echo $fields['heading']?></h2>
                <p class="pb-3"><em><?php echo $fields['subheading']?></em></p>
                <p><?php echo $fields['paragraph']?></p>
                <div class="mt-4">
                    <button class=" btn buttonDefault"
                        onclick="location.href='<?php echo $fields['btnlink']?>'"><?php echo $fields['btntxt']?></button>
                </div>
            </div>
        </div>
    </div>
</section>
<?php 
    });
}

/*Gutenberg block of heading, subheading, white blocks with image and heading*/
add_action('carbon_fields_register_fields', 'whiteblockwithimage');

function whiteblockwithimage(){
    Block::make( __('Heading SubHeading White Blocks With Image and Heading col-4'))
    ->add_fields( array(
        Field::make('text', 'heading', __('Heading'))->set_width(50),
        Field::make('text', 'subheading', __('Sub Heading'))->set_width(50),
        Field::make('complex','blocks',__('Block'))
        ->set_layout( 'tabbed-horizontal' )
        ->add_fields( array(
            Field::make( 'image', 'cardicon', __('Icon') )->set_width(50),
            Field::make( 'text', 'cardtext', __('Content') )->set_width(50),
        ) )
    ))
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
        ?>
<section class="py-7">
    <div class="container">
        <h2 class="heading-style"><?php echo $fields['heading']?></h2>
        <p class="mb-7"><em><?php echo $fields['subheading']?></em></p>
        <div class="row">
            <?php foreach($fields['blocks'] as $key){?>
            <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                <div class="shadow p-4 mb-4 text-center h-100 bg-white">
                    <img class="img-fluid w-25 mb-3" src="<?php echo wp_get_attachment_image_url($key['cardicon'])?>"
                        alt="">
                    <h5 class="mb-0"><?php echo $key['cardtext']?></h5>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</section>
<?php 
    });
}
/*carbon field for clients and testimonials banner*/
add_action( 'carbon_fields_register_fields', 'clientbanner_block' );
function clientbanner_block(){
    Container::make( 'post_meta', 'Banner Block' )
    ->show_on_template(array("clients.php", "testimonials.php", "pricing.php", "toolkit.php"))
    ->add_fields( array(
        Field::make( 'image', 'bgimage', __( 'Hero Image' ) )->set_width( 50 ),
        Field::make( 'text', 'bannerheading', __( 'Banner Heading' ) )->set_width( 50 ),
        Field::make( 'text', 'bannertext', __( 'Banner Text' ) )->set_width( 50 )
    ) );
}

/*Carbon field BreadCrumb Block*/
add_action( 'carbon_fields_register_fields', 'breadcrumb_block' );
function breadcrumb_block(){
    Container::make(  'post_meta', 'Breadcrumb Block' )
    ->show_on_template(array("clients.php", "testimonials.php", "pricing.php", "toolkit.php"))
    ->add_fields( array(
        Field::make( 'text', 'home', __( 'Home' ) )->set_width( 50 ),
        Field::make( 'text', 'homelink', __( 'Home Link' ) )->set_width( 50 ),
        Field::make( 'text', 'submenu', __( 'Submenu' ) )->set_width( 50 ),
        Field::make( 'text', 'submenulink', __( 'Submenu Link' ) )->set_width( 50 ),
        Field::make( 'text', 'inner', __( 'Inner Menu' ) ),
    ) );
}
/*Carbon Field of Clients Section*/
add_action( 'carbon_fields_register_fields', 'clients' );
function clients(){
    Container::make( 'post_meta', 'Client Logo Section' )
    ->show_on_template('clients.php')
    ->add_fields( array(
        Field::make( 'text', 'heading', __( 'Heading' )),
        Field::make( 'complex', 'logoblocks', __('Logo Blocks'))
        ->set_layout('tabbed-horizontal')
        ->set_collapsed(true)
        ->add_fields( array(
            Field::make( 'image', 'logoicon', __( 'Logo Icon'))->set_width( 50 ), 
            Field::make( 'text', 'logoname', __('Logo Name'))->set_width( 50 )
        ))
        
    ));
}

/*Carbon Field of Testimonials Section 1*/
add_action( 'carbon_fields_register_fields', 'TestimonialRowBlocks' );
function TestimonialRowBlocks(){
    Container::make( 'post_meta', 'Testimonial Row Blocks' )
    ->show_on_template('testimonials.php')
    ->add_fields( array(
        Field::make( 'text', 'heading', __( 'Heading' )),
        Field::make( 'complex', 'testimonialblock', __('Testimonial Row Blocks'))
        ->set_layout('tabbed-horizontal')
        ->set_collapsed(true)
        ->add_fields( array(
            Field::make( 'text', 'testimonialname', __( 'Testimonial Name'))->set_width( 50 ), 
            Field::make( 'text', 'testimonialdesig', __('Testimonial Designation'))->set_width( 50 ),
            Field::make( 'text', 'testimonialpara', __( 'Testimonial Para'))
        )),
        Field::make( 'image', 'testimonialicon', __('Testimonial Icon'))
        
    ));
}

/*Carbon Field of Testimonials Section 2*/
add_action( 'carbon_fields_register_fields', 'TestimonialColumnBlocks' );
function TestimonialColumnBlocks(){
    Container::make( 'post_meta', 'Testimonial Column Blocks' )
    ->show_on_template('testimonials.php')
    ->add_fields( array(
        Field::make( 'complex', 'testimonialclientblock', __('Testimonial Row Blocks'))
        ->set_layout('tabbed-horizontal')
        ->set_collapsed(true)
        ->add_fields( array(
            Field::make( 'text', 'testimonialclientname', __( 'Testimonial Name'))->set_width( 50 ), 
            Field::make( 'text', 'testimonialclientdesig', __('Testimonial Designation'))->set_width( 50 ),
            Field::make( 'text', 'testimonialclientpara', __( 'Testimonial Para'))
        ))
    ));
}

/*Carbon field of pricing columns*/
add_action('carbon_fields_register_fields', 'pricing');
function pricing(){
    Container::make( 'post_meta', 'Pricing' )
    ->show_on_template('pricing.php')
    ->add_fields( array(
        Field::make('complex', 'pricingblocks', __('Pricing Blocks'))
        ->set_layout('tabbed-horizontal')
        ->set_collapsed(true)
        ->add_fields( array(
            Field::make( 'image', 'pricingimg', __('Pricing Image'))->set_width(50), 
            Field::make( 'text', 'pricingheading', __('Pricing Heading'))->set_width(50),
            Field::make( 'rich_text', 'pricinglist', __('Pricing List'))
        ))
    ));
}

/*Carbon field of left column toolkit*/
add_action('carbon_fields_register_fields', 'toolkitleftcolumn');
function toolkitleftcolumn(){
    Container::make( 'post_meta', 'Toolkit Left Column' )
    ->show_on_template('toolkit.php')
    ->add_fields( array(
        Field::make( 'image', 'firstnavimg', __('First Navigation Image') )->set_width(50),
        Field::make( 'text', 'firstnavtext', __('First Navigation Text') )->set_width(50),
        Field::make( 'complex', 'otheroptions', __('Other Options') )
        ->set_layout('tabbed-horizontal')
        ->set_collapsed(true)
        ->add_fields( array(
            Field::make( 'image', 'othernavimg', __('Other Navigation Image') )->set_width(50),
            Field::make( 'text', 'othernavtext', __('Other Navigation Text') )->set_width(50),
            Field::make( 'text', 'othernavlink', __('Other Navigation Links') )->set_width(50)
        ))
    ));
}

/*Carbon field of development toolkit*/
add_action('carbon_fields_register_fields', 'devtoolkit');
function devtoolkit(){
    Container::make( 'post_meta', 'Development Toolkit' )
    ->show_on_template('toolkit.php')
    ->add_fields( array(
        Field::make( 'text', 'devheading', __('Heading')),
        Field::make( 'text', 'firstbtntext', __('First Button Text') )->set_width(50),
        Field::make( 'text', 'firstbtncls', __('First Button Class') )->set_width(50),
        Field::make( 'complex', 'devotherbuttons', __('Dev Other Buttons') )
        ->set_layout('tabbed-horizontal')
        ->set_collapsed(true)
        ->add_fields( array(
            Field::make( 'text', 'devotherbtntext', __('Dev Other Button Text') )->set_width(50),
            Field::make( 'text', 'devotherbtnclass', __('Dev Other Button Class') )->set_width(50),
            Field::make( 'text', 'devotherbtnfilter', __('Dev Other Button Data Filter') )
        )),
        Field::make( 'complex', 'devlogoblocks', __('Dev Logo Blocks') )
        ->set_layout('tabbed-horizontal')
        ->set_collapsed(true)
        ->add_fields( array(
            Field::make( 'text', 'devlistclass', __('Dev Logo List Class') )->set_width(50),
            Field::make( 'image', 'devlogoimage', __('Dev Logo Image') )->set_width(50),
            Field::make( 'text', 'devlogotext', __('Dev Logo Text') )
        ))
    ));
}

/*Carbon field of mobile development toolkit*/
add_action('carbon_fields_register_fields', 'mobtoolkit');
function mobtoolkit(){
    Container::make( 'post_meta', 'Mobile Development Toolkit' )
    ->show_on_template('toolkit.php')
    ->add_fields( array(
        Field::make( 'text', 'mobheading', __('Mob Heading')),
        Field::make( 'text', 'mobfirstbtntext', __('Mob First Button Text') )->set_width(50),
        Field::make( 'text', 'mobfirstbtncls', __('Mob First Button Class') )->set_width(50),
        Field::make( 'complex', 'mobotherbuttons', __('Mob Other Buttons') )
        ->set_layout('tabbed-horizontal')
        ->set_collapsed(true)
        ->add_fields( array(
            Field::make( 'text', 'mobotherbtntext', __('Mob Other Button Text') )->set_width(50),
            Field::make( 'text', 'mobotherbtnclass', __('Mob Other Button Class') )->set_width(50),
            Field::make( 'text', 'mobotherbtnfilter', __('Mob Other Button Data Filter') )
        )),
        Field::make( 'complex', 'moblogoblocks', __('Mob Logo Blocks') )
        ->set_layout('tabbed-horizontal')
        ->set_collapsed(true)
        ->add_fields( array(
            Field::make( 'text', 'moblistclass', __('Mob Logo List Class') )->set_width(50),
            Field::make( 'image', 'moblogoimage', __('Mob Logo Image') )->set_width(50),
            Field::make( 'text', 'moblogotext', __('Mob Logo Text') )
        ))
    ));
}

/*Carbon field of testing toolkit*/
add_action('carbon_fields_register_fields', 'testtoolkit');
function testtoolkit(){
    Container::make( 'post_meta', 'Testing Toolkit' )
    ->show_on_template('toolkit.php')
    ->add_fields( array(
        Field::make( 'text', 'testheading', __('Testing Heading')),
        Field::make( 'text', 'testfirstbtntext', __('Testing First Button Text') )->set_width(50),
        Field::make( 'text', 'testfirstbtncls', __('Testing First Button Class') )->set_width(50),
        Field::make( 'complex', 'testotherbuttons', __('Testing Other Buttons') )
        ->set_layout('tabbed-horizontal')
        ->set_collapsed(true)
        ->add_fields( array(
            Field::make( 'text', 'testotherbtntext', __('Testing Other Button Text') )->set_width(50),
            Field::make( 'text', 'testotherbtnclass', __('Testing Other Button Class') )->set_width(50),
            Field::make( 'text', 'testotherbtnfilter', __('Testing Other Button Data Filter') )
        )),
        Field::make( 'complex', 'testlogoblocks', __('Testing Logo Blocks') )
        ->set_layout('tabbed-horizontal')
        ->set_collapsed(true)
        ->add_fields( array(
            Field::make( 'text', 'testlistclass', __('Testing Logo List Class') )->set_width(50),
            Field::make( 'image', 'testlogoimage', __('Testing Logo Image') )->set_width(50),
            Field::make( 'text', 'testlogotext', __('Testing Logo Text') )
        ))
    ));
}

// banner contactus above footer

add_action( 'carbon_fields_register_fields', 'footerContactusSection' );
function footerContactusSection(){
    Block::make( __( 'Footer Contactus Section' ) )
	->add_fields( array(
		Field::make( 'image', 'image', __( 'Block Image' ) ),
        Field::make( 'text', 'heading', __( 'Block Heading' ) ),
        Field::make( 'text', 'subheading', __( 'Block SubHeading' ) ),
        Field::make('text', 'btntxt', __('Button Text')),
        Field::make('text', 'btnlink', __('Button Link')),
	) )
	->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
		?>
      <section>
        <div class="hire__banner">
          <img src="<?php echo wp_get_attachment_image_url($fields['image'])?>" class="img-fluid" alt="">
        </div>
        <div class="hire__banner__footer">
          <div class="bg-blue py-3 p-lg-5">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-12 col-md-8 text-white">
                  <p class="mb-0"><?php echo esc_html( $fields['heading'] ); ?></p>
                  <p class="m-0" style="font-size: 2.5rem;font-weight: 500;line-height: 1.2;"><?php echo esc_html( $fields['subheading'] ); ?></p>
                </div>
                <div class="col-12 col-md-4">
                  <div class="text-lg-right">
                    <button class="btn buttonDefault buttonWhite" onclick="location.href='<?php echo $fields['btnlink'] ?>'"><?php echo $fields['btntxt'] ?></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
<?php
    } );
}
?>

<?php
// Allow SVG
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

    global $wp_version;
    if ( $wp_version !== '4.7.1' ) {
       return $data;
    }
  
    $filetype = wp_check_filetype( $filename, $mimes );
  
    return [
        'ext'             => $filetype['ext'],
        'type'            => $filetype['type'],
        'proper_filename' => $data['proper_filename']
    ];
  
  }, 10, 4 );
  
  function cc_mime_types( $mimes ){
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
  add_filter( 'upload_mimes', 'cc_mime_types' );
  
  function fix_svg() {
    echo '<style type="text/css">
          .attachment-266x266, .thumbnail img {
               width: 100% !important;
               height: auto !important;
          }
          </style>';
  }
  add_action( 'admin_head', 'fix_svg' );

/*Gutenberg block of heading, subheading, para, left list,  rightlist, leftbutton right image*/
add_action('carbon_fields_register_fields', 'columnlistwithimagewithbutton');

function columnlistwithimagewithbutton(){
    Block::make( __('Heading SubHeading Para LeftList RightList RightImage WithButton'))
    ->add_fields( array(
        Field::make('text', 'heading', __('Heading')),
        Field::make('text', 'subheading', __('Sub Heading')),
        Field::make('text', 'paragraph', __('Paragraph')),
        Field::make('rich_text', 'leftlist', __('Left Column List')),
        Field::make('rich_text', 'rightlist', __('Right Column List')),
        Field::make('image', 'rightimage', __('Right Image')),
        Field::make('text', 'btntxt', __('Left Button Text')),
        Field::make('text', 'btnlink', __('Left Button Link')),
    ))
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
        ?>
<section class="my-7">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <h2 class="heading-style"><?php echo $fields['heading']?></h2>
                <p><em><?php echo $fields['subheading']?></em></p>
                <p><?php echo $fields['paragraph']?></p>
                <div class="row mt-4">
                    <div class="col-lg-6">
                        <?php echo $fields['leftlist']?>                        
                    </div>
                    <div class="col-lg-6"><?php echo $fields['rightlist']?></div>                    
                </div>  
                <div class="">
                    <button class=" btn buttonDefault" onclick="location.href='<?php echo $fields['btnlink']?>'"><?php echo $fields['btntxt']?></button>
                </div>                                               
            </div>
            <div class="col-lg-5 pl-lg-5 mt-4 mt-lg-0 col-sm-6 mx-sm-auto mt-lg-0 mt-4">
                <img src="<?php echo wp_get_attachment_image_url($fields['rightimage'])?>" alt="" class="img-fluid">
            </div>
        </div>        
    </div>
</section>
<?php 
    });
}

// card with heading, para, card with image heading content col-4 with button
add_action( 'carbon_fields_register_fields', 'ecommerce_development_services_image_grid' );
function ecommerce_development_services_image_grid(){
    Block::make( __( 'Card with image heading content col-4 with button' ) )
	->add_fields( array(
        Field::make( 'text', 'ecommerceheading', __('Heading') )->set_width( 50 ),
        Field::make( 'text', 'ecommercesubheading', __('Sub Heading') )->set_width( 50 ),
        Field::make( 'text', 'ecommercepara', __('Paragraph') ), 

        Field::make( 'complex', 'ecommercecomplex', __('Card Content') )
        ->set_layout( 'tabbed-horizontal' )
        ->add_fields( array(
            Field::make( 'image', 'ecommerceicon', __('Add Icon Class') ),
            Field::make( 'text', 'ecommerceiconlink', __('Add Icon Link') ),
            Field::make( 'text', 'ecommerceheadingtxt', __('Heading') )->set_width( 50 ),
        ) )
	) )
	->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
		?>

<section class="py-7 bg-white my-7">
    <div class="container">
        <h2 class="heading-style"><?php echo esc_html( $fields['ecommerceheading'] ); ?></h2>
        <p class="mb-4"><?php echo esc_html( $fields['ecommercesubheading'] ); ?></p>
        <p class="mb-4"><?php echo esc_html( $fields['ecommercepara'] ); ?></p>
      <div class="row pt-4">
       <?php 
        foreach($fields['ecommercecomplex'] as $items){
            ?>  
      <div class="col-lg-4 col-sm-6 mb-4">
          <a href="<?php echo esc_html( $items['ecommerceiconlink'] ); ?>" class="h-100 d-block shadow p-4 text-center bg-white">
            <div class="w-25 mx-auto">
                <img src="<?php echo wp_get_attachment_url( $items['ecommerceicon'] ); ?>">
            </div>
            <h6 class="mb-0"><?php echo esc_html( $items['ecommerceheadingtxt'] ); ?></h6>
          </a>
        </div>
        <?php
        }?>
        </div>
      <div class="text-center my-4">
        <button class="btn buttonDefault" onclick="location.href='/get-in-touch/'">Get a Free Consultation</button>
      </div>
    </div>
  </section>
<?php
    } );
}

//Heading, Subheading,Para, button and rightside cards with icon-class, heading and content col-3

add_action( 'carbon_fields_register_fields', 'rightside_card_withicn_class_col' );
function rightside_card_withicn_class_col(){
    Block::make( __( 'Heading sunheading para button Card with heading content col-3' ) )
	->add_fields( array(
        Field::make( 'text', 'hiremobheading', __('Heading') )->set_width( 50 ),
        Field::make( 'text', 'hiremobsubheading', __('Sub Heading') )->set_width( 50 ),
        Field::make( 'text', 'hiremobpara', __('Paragraph') ), 

        Field::make( 'complex', 'hiremobcomplex', __('Card Content') )
        ->set_layout( 'tabbed-horizontal' )
        ->add_fields( array(
            Field::make( 'text', 'hiremobicon', __('Add Icon Class') ),
            Field::make( 'text', 'hiremobheadingtxt', __('Heading') )->set_width( 50 ),
        ) )
	) )
	->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
		?>


  <section class="my-7">
      <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <h2 class="heading-style"><?php echo esc_html( $fields['hiremobheading'] ); ?></h2>
            <p class="mb-4"><?php echo esc_html( $fields['hiremobsubheading'] ); ?></p>
            <p class="mb-4"><?php echo esc_html( $fields['hiremobpara'] ); ?></p>
          </div>
          <div class="col-lg-7">
                <div class="row">
                    <?php 
                    foreach($fields['hiremobcomplex'] as $items){
                    ?> 
                    <div class="col-lg-3 col-sm-6 mb-4">
                        <div class="shadow-sm bg-white p-3 text-center app-dev-ben h-100">
                            <i class="las <?php echo esc_html( $items['hiremobicon'] ); ?>"></i>
                            <h6 class="mt-3"><?php echo esc_html( $items['hiremobheadingtxt'] ); ?></h6>
                        </div>
                    </div>
                    <?php
                    }?>
                </div>
          </div>
        </div>
      </div>
    </section>


<?php
    } );
}

/*Gutenberg block of opening position available*/
add_action('carbon_fields_register_fields', 'openingpositioncards');

function openingpositioncards(){
    Block::make( __('Heading SubHeading Opening position cards'))    
        ->add_fields( array(        
        Field::make( 'text', 'careersheading', __('Heading') )->set_width( 50 ),
        Field::make( 'text', 'showbutton', __('Show More') )->set_width( 50 ),
        Field::make('complex','careersblocks',__('Show Block'))
        ->set_layout( 'tabbed-horizontal' )
        ->add_fields( array(  
            Field::make('text', 'title', __('Card Title'))->set_width(50),
            Field::make('text', 'heading', __('Card Heading'))->set_width(50),
            Field::make('text', 'subheading', __('Card Sub Heading')),          
            Field::make( 'text', 'cardbtntext', __('Text') )->set_width(50),
            Field::make( 'text', 'cardbtnlink', __('Link') )->set_width(50),
        ) ),
        Field::make('complex','careersblockscollapse',__('hidden Block'))
        ->set_layout( 'tabbed-horizontal' )
        ->add_fields( array(  
            Field::make('text', 'title', __('Card Title'))->set_width(50),
            Field::make('text', 'heading', __('Card Heading'))->set_width(50),
            Field::make('text', 'subheading', __('Card Sub Heading')),          
            Field::make( 'text', 'cardbtntext', __('Text') )->set_width(50),
            Field::make( 'text', 'cardbtnlink', __('Link') )->set_width(50),
        ) )
    ))
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
        ?>

        <section class="py-7">
            <div class="container">
                <div class="">
                    <h2 class="heading-style"><?php echo esc_html( $fields['careersheading'] ) ?></h2>                
                </div>
                <div class="row">
                    <?php foreach($fields['careersblocks'] as $key){?>
                        <div class="col-xl-4 col-lg-4 col-sm-6 mb-4">
                            <ul class="currentOpenings shadow h-100">
                                <div class="boxConatiner" id="scrollbar">
                                    <div class="box">
                                        <li class="row">
                                            <div class="col-md-12 p-0">
                                                <div class="titles-heading">
                                                    <div class="opening-line"></div>
                                                        <p><?php echo esc_html( $key['title'] ) ?></p>
                                                </div>
                                            </div>
                                            <div class="col-md-12 px-5">
                                                <p><span class="text-color"><?php echo esc_html( $key['heading'] ) ?></span> </p>
                                                <div class="info">
                                                    <h4><?php echo esc_html( $key['subheading'] ) ?></h4>
                                                </div>
                                            </div>
                                            <div class="col-md-12 px-5">
                                                <button type="button" class="btn  buttonDefault" onclick="location.href='<?php echo esc_html( $key['cardbtnlink'] ) ?>'"><?php echo esc_html( $key['cardbtntext'] ) ?></button>
                                            </div>
                                        </li>
                                    </div>
                                    <div class="force-overflow"></div>
                                </div>
                            </ul>
                        </div>
                    <?php }?>
                </div>
                <div class="row collapse">  
                    <?php foreach($fields['careersblockscollapse'] as $key){?>              
                    <div class="col-xl-4 col-lg-4 col-sm-6 mb-4">
                        <ul class="currentOpenings shadow h-100">
                            <div class="boxConatiner" id="scrollbar">
                                <div class="box">
                                    <li class="row">
                                        <div class="col-md-12 p-0">
                                            <div class="titles-heading">
                                                <div class="opening-line"></div>
                                                <p> <p><?php echo esc_html( $key['title'] ) ?></p></p>
                                            </div>
                                        </div>
                                        <div class="col-md-12 px-5">
                                            <p><span class="text-color"><?php echo esc_html( $key['heading'] ) ?></span> </p>
                                            <div class="info">
                                                <h4><?php echo esc_html( $key['subheading'] ) ?></h4>
                                            </div>
                                        </div>
                                        <div class="col-md-12 px-5">
                                            <button type="button" class="btn  buttonDefault" onclick="location.href='<?php echo esc_html( $key['cardbtnlink'] ) ?>'"><?php echo esc_html( $key['cardbtntext'] ) ?></button>
                                        </div>
                                    </li>
                                </div>
                                <div class="force-overflow"></div>
                            </div>
                        </ul>
                    </div> 
                    <?php }?>               
                </div>
                <div class="col-12 text-center all-jobs">
                    <button type="button" class="btn buttonDefault"><?php echo esc_html( $fields['showbutton'] ) ?></button>
                </div>
            </div>
        </section>

    <?php 
        });
}


/*Gutenberg block of coldfusion heading, para, right iframe*/
add_action('carbon_fields_register_fields', 'careersrightiframe');

function careersrightiframe(){
    Block::make( __('Heading Para RightIframe Para'))
    ->add_fields( array(
        Field::make('text', 'heading', __('Heading')),
        Field::make('rich_text', 'paragraph', __('Paragraph')),
        Field::make('text', 'rightiframe', __('Right Iframe'))
    ))
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
        ?>

        <section class="bg-white py-7">
        <div class="container recruitment">
            <div class="row">
                <div class="col-lg-7 vertical-center">
                    <h2 class="heading-style"><?php echo $fields['heading']?></h2>
                    <p><?php echo $fields['paragraph']?></p>
                </div>
                <div class="col-lg-5 pl-lg-5 mt-5 mt-lg-0 col-sm-l mx-auto vertical-center">
                    <div class="center-image">
                        <!-- <img src="/assets/images/posterImage.png"> -->
                        <iframe src="<?php echo  esc_html($fields['rightiframe']) ?>" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php 
        });
}

// Heading subheading in blue bg blocks col-4
add_action('carbon_fields_register_fields', 'careersbluebgblocks'); 
function careersbluebgblocks(){
    Block::make( __( 'Bluebg with col-4' ) )
    ->add_fields( array(        
        Field::make( 'complex', 'career_blocks', __('Career Blocks') )
        ->set_layout('tabbed-horizontal')
        ->set_collapsed(true)
        ->add_fields( array(
            Field::make( 'text', 'heading', __('Inner Headings')),
            Field::make( 'text', 'details_para', __('Details Para'))
        ) )
    ) )
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
    ?>

            <section class="blue-bg py-7">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="row">
                                <?php foreach($fields['career_blocks'] as $val){?>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="vertical-center text-center">
                                            <h2 class="mt-0" id="number1"><?php echo $val['heading']?></h2>
                                            <p class="mb-0"><?php echo $val['details_para']?></p>
                                        </div>
                                    </div>                        
                                <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        <?php } );
    }


// careers upload cv
    add_action('carbon_fields_register_fields', 'careerscvupload'); 
function careerscvupload(){
    Block::make( __( 'Heading LeftSubheading LeftContent RightUploadCV' ) )
    ->add_fields( array(
        Field::make( 'text', 'heading', __('Heading') )->set_width(50),
        Field::make( 'text', 'subheading', __('Sub Heading')),
        Field::make( 'text', 'content', __('Details Para')),
        Field::make( 'text', 'iconclass', __('Icon Class')),
        Field::make( 'text', 'actionlink', __('Form Action Link')),
        Field::make( 'text', 'uploadcvtxt', __('Upload Text')),
        Field::make( 'text', 'submittxt', __('Submit Text'))
    ) )
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
    ?>
<section class="bg-white py-7">
        <div class="container">
            <div class="shadow bg-blue text-white p-sm-5 p-3">
                <h2 class="text-center heading-style-center-white"><strong><?php echo $fields['heading']?></strong></h2>
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="title">
                            <p class="lead mb-0"><strong><?php echo $fields['subheading']?></strong></p>
                            <p><?php echo $fields['content']?></p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="carrer-post-wrap">
                            <form enctype="multipart/form-data" method="POST" action="<?php echo $fields['actionlink']?>" id="formResume">                                
                                <label class="filelabel">
                                    <i class="<?php echo $fields['iconclass']?>"></i>
                                    <span class="title">
                                        <?php echo $fields['uploadcvtxt']?>
                                    </span>
                                    <input class="FileUpload1" id="resume" name="file_attach" type="file">
                                </label>
                                <button type="button" class="btn buttonDefault buttonWhite" id="resumeSubmit" style="display: none;"><?php echo $fields['submittxt']?></button>                                
                            </form>
                            <div class="errorResume"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php } );
    }


    //heading subheading para
add_action( 'carbon_fields_register_fields', 'interactiveemailsbluebg' );
function interactiveemailsbluebg(){
    Block::make( __( 'Heading subheading para with blue-bg' ) )
	->add_fields( array(
        Field::make( 'text', 'interactiveemailheaading', 'Heading' )->set_width( 50 ),
        Field::make( 'text', 'interactiveemailsubheaading', 'Sub Heading' )->set_width( 50 ),
        Field::make( 'rich_text', 'interactiveemailpara', 'Paragraph' )       
	) )
	->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
		?>
<section class="my-7 py-7 bg-blue text-white">
    <div class="container">
        <h2 class="heading-style-white"><?php echo esc_html( $fields['interactiveemailheaading'] ); ?></h2>
        <p><em><?php echo esc_html( $fields['interactiveemailsubheaading'] ); ?></em></p>
        <p><?php echo $fields['interactiveemailpara'] ; ?></p>        
    </div>
</section>
<?php
    } );
}

// Heading subheading para leftlist border rightlist borderbottom
add_action('carbon_fields_register_fields', 'creativeinteractiveemailsolutions'); 
function creativeinteractiveemailsolutions(){
    Block::make( __( 'Heading subheading para leftlist border rightlist borderbottom' ) )
    ->add_fields( array( 
        Field::make( 'text', 'heading', __('Heading')),
        Field::make( 'text', 'subheading', __('Sub Heading')),       
        Field::make( 'complex', 'interactiveemailsolutionsblock', __('interactive Email Block') )
        ->set_layout('tabbed-horizontal')
        ->set_collapsed(true)
        ->add_fields( array(
            Field::make( 'image', 'leftimg', __('Image')),
            Field::make( 'text', 'head', __('Heading')),
            Field::make( 'rich_text', 'para', __('Content')),
            Field::make( 'text', 'borderright', __('Right border')),
            Field::make( 'text', 'borderbottom', __('Bottom border')),
        ) )
    ) )
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
    ?>
            <section class="bg-white py-7">
			<div class="container">
                <div class="">
                    <h2 class="heading-style"><?php echo esc_html($fields['heading']) ?></h2>
                    <p class=""><?php echo esc_html($fields['subheading']) ?></p>
                </div>
				<div class="row mt-4">
                     <?php foreach($fields['interactiveemailsolutionsblock'] as $val){?>
                        <div class="col-lg-6 pt-7 pb-7 <?php echo esc_html($val['borderright']) ?> <?php echo esc_html($val['borderbottom']) ?> pr-lg-5">                   
                            <div class="">
                                <div class="row align-items-center">
                                    <div class="col-sm-3 col-6 mb-3 mb-sm-0 text-center">
                                        <img class="img-fluid" src="<?php echo wp_get_attachment_image_url($val['leftimg']) ?>" alt="">
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="mb-3 font-weight-bold"><?php echo esc_html($val['head']) ?>
                                        </h4>                                    
                                        <?php echo $val['para'] ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                     <?php }?>
				</div>
			</div>
		</section>
        <?php } );
         }

//Heading Subheading Para Cards with heading & content only col-4
add_action( 'carbon_fields_register_fields', 'cardwithheadparacardonly' );
function cardwithheadparacardonly(){
    Block::make( __( 'Card with heading and content col-4' ) )
	->add_fields( array(
        Field::make( 'text', 'flutterheading', __('Heading') )->set_width( 50 ),
        Field::make( 'text', 'fluttertext', __('Sub Heading') )->set_width( 50 ),
        Field::make( 'text', 'flutterpara', __('Paragraph') ), 

        Field::make( 'complex', 'fluttercomplex', __('Card Content') )
        ->set_layout( 'tabbed-horizontal' )
        ->add_fields( array(
            Field::make( 'text', 'flutterheadingtxt', __('Heading') )->set_width( 50 ),
            Field::make( 'text', 'fluttercontent', __('Content') )->set_width( 50 ),
        ) ),
        Field::make( 'text', 'flutterbtntext', __('Flutter button txt') ), 
        Field::make( 'text', 'flutterbtnlink', __('Flutter button link') )
	) )
	->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
		?>
<section class="flutter-app py-7">
    <div class="container">
      <h2 class="heading-style text-left"><?php echo esc_html( $fields['flutterheading'] ); ?></h2>
      <p class="mb-3 text-left"><em><?php echo esc_html( $fields['fluttertext'] ); ?></em></p>
      <p class="text-left"><?php echo esc_html( $fields['flutterpara'] ); ?>
      </p>
      <div class="row">
            <?php foreach($fields['fluttercomplex'] as $items){ ?>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="bg-white shadow p-4 h-100 text-center">
                            <div class="content-sec">
                                <h6 class="mb-3"><?php echo esc_html( $items['flutterheadingtxt'] ); ?></h6>
                                <p><?php echo esc_html( $items['fluttercontent'] ); ?></p>
                            </div>
                    </div>
                </div>
            <?php }?>
        </div>
        <div class="text-center">
            <button class="btn buttonDefault"   onclick="location.href=''"><?php echo $fields['flutterbtntext']?></button>
        </div>
    </div>     
  </section>
<?php
    } );
}


/*  career inner pages card block */
add_action('carbon_fields_register_fields', 'resourcerequireddetails'); 
function resourcerequireddetails(){
    Block::make( __( 'Career Resource detail Card' ) )
    ->add_fields( array(        
        Field::make( 'text', 'carddesignation', __('Designation') ),
        Field::make( 'text', 'carddesignationquote', __('Designation Quote') ),
        Field::make( 'text', 'cardfulltimelogo', __('Full Time/Part Time Logo'))->set_width(50),
        Field::make( 'text', 'cardfulltime', __('Full Time/Part Time'))->set_width(50),
        Field::make( 'text', 'cardlocationlogo', __('Location Logo'))->set_width(50), 
        Field::make( 'text', 'cardlocation', __('Location '))->set_width(50), 
        Field::make( 'text', 'cardexperience', __('Experience'))->set_width(50),
        Field::make( 'text', 'cardpositionavailable', __('Position Available'))->set_width(50),
        Field::make( 'text', 'cardreferlogo', __('Refer Logo'))->set_width(50),
        Field::make( 'text', 'cardrefer', __('Refer '))->set_width(50),
        Field::make( 'text', 'cardsharetxt', __('Share '))->set_width(50),
        Field::make( 'text', 'cardsharesmdimg1', __('Share Img 1'))->set_width(50),
        Field::make( 'text', 'cardsharesmdimg2', __('Share Img 2'))->set_width(50),
        Field::make( 'text', 'cardsharesmdimg3', __('Share Img 3'))->set_width(50),
        Field::make( 'text', 'cardapplybtn', __('Apply Button Text'))->set_width(50),
        Field::make( 'text', 'cardapplybtnlink', __('Apply Button Link'))->set_width(50),

        Field::make( 'complex', 'career_ineer_pages_block', __('Career inner pages block') )
        ->set_layout('tabbed-horizontal')
        ->set_collapsed(true)
        ->add_fields( array(
            Field::make( 'text', 'heading', __('Main Heading One'))->set_width(50),
            Field::make( 'rich_text', 'content', __('Main Content One'))->set_width(50),
        ) )
    ) )
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
    ?>
    <section>
    <div class="container">   
      <hr class="m-0">
      <div class="row py-7">
        <div class="col-lg-6 col-xl-4 border-right pr-xl-5">
          <div class="job-details position-sticky top-100">
            <h2 class="font-weight-bold theme__color mb-7" id="jobtitle_carrier"><?php echo $fields['carddesignation'] ?>
            </h2>
            <p class=" mb-7"><?php echo $fields['carddesignationquote'] ?></p>
            <div class="d-flex justify-content-between">
              <div class="time">
                <i class="<?php echo $fields['cardfulltimelogo'] ?>" aria-hidden="true"></i>
               <?php echo $fields['cardfulltime'] ?>
              </div>
              <div class="location">
                <i class="<?php echo $fields['cardlocationlogo'] ?>" aria-hidden="true"></i>
                <?php echo $fields['cardlocation'] ?>
              </div>
            </div>
            <div class="exp mt-4">
              <?php echo $fields['cardexperience'] ?>
            </div>
            <div class="positions mt-4">
              <?php echo $fields['cardpositionavailable'] ?>
            </div>
            <div class="d-flex justify-content-between">
              <div class="refer mt-4">
                <a href="javascript:" data-toggle="modal" data-target="#referfriendjob">
                  <i class="<?php echo $fields['cardreferlogo'] ?>" aria-hidden="true"></i> <?php echo $fields['cardrefer'] ?>
                </a>                
              </div>
            </div>
            <div class="share-opening mt-4 d-flex justify-content-between">
              <?php echo $fields['cardsharetxt'] ?>
              <div class="jobs-sharing-socialicons">
                <ul class="rrssb-buttons rrssb-1">
                  <li class="rrssb-facebook" data-initwidth="33.333333333333336" style="width: 33.3333%;">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.thinksys.com%2Ffull-stack-developer%2F" +window.location.href="" class="popup">
                      <i class="<?php echo $fields['cardsharesmdimg1'] ?>" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="rrssb-twitter" data-initwidth="33.333333333333336" style="width: 33.3333%;">
                    <a href="https://twitter.com/intent/tweet?text=%20https%3A%2F%2Fwww.thinksys.com%2Ffull-stack-developer%2F" +window.location.href="" class="popup">
                      <i class="<?php echo $fields['cardsharesmdimg2'] ?>" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="rrssb-linkedin" data-initwidth="33.333333333333336" style="width: 33.3333%;">
                    <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fwww.thinksys.com%2Ffull-stack-developer%2F&amp;title=Full%20Stack%20Developer%20%2F%20Sr.%20Full%20Stack%20Developer%0A%20%20%20%20%20%20%20%20%20%20%20%20&amp;summary=" +window.location.href="" class="popup">
                      <i class="<?php echo $fields['cardsharesmdimg3'] ?>" aria-hidden="true"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="text-center">
              <button class="btn buttonDefault" data-toggle="modal" data-target="#jobApply"><?php echo $fields['cardapplybtn'] ?></button>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-xl-8 pl-xl-5 mt-5 mt-lg-0">
          <div class="border-md-left mt-4 mt-md-0 software__development__service">
            <?php foreach($fields['career_ineer_pages_block'] as $val){?>
                <h4 class="mb-3"><?php echo $val['heading'] ?></h4>
                <p><?php echo $val['content'] ?></p>
            <?php } ?>
            <!-- <h4 class="mb-3"><?php echo $fields['heading2'] ?></h4>
            <p><?php echo $fields['content2'] ?></p>
            <h4 class="mb-3"><?php echo $fields['heading3'] ?></h4>
            <p><?php echo $fields['content3'] ?></p>
            <h4 class="mb-3"><?php echo $fields['heading4'] ?></h4>
            <p><?php echo $fields['content4'] ?></p>
            <h4 class="mb-3"><?php echo $fields['heading5'] ?></h4>
            <p><?php echo $fields['content5'] ?></p> -->
          </div>
        </div>
      </div>
    </div>
  </section>

<?php } );
    }


// Case Studies
add_action( 'carbon_fields_register_fields', 'case_studies' );
function case_studies(){
    Block::make( __( 'Case Studies Card' ) )
    ->add_fields( array(
        Field::make( 'complex', 'studiescomplex', __('Card Content') )
        ->set_layout( 'tabbed-horizontal' )
        ->add_fields( array(
            Field::make( 'image', 'studiesimage', __( 'Image' ) ),
            Field::make( 'text', 'studiesheading', __( 'Heading' ) ),
            Field::make( 'text', 'clickpara', __( 'Paragraph' ) ),
            Field::make( 'image', 'clickimage', __( 'PDF Image' ) ),
            Field::make( 'text', 'clickpdftxt', __( 'PDF Text' ) ),
            Field::make( 'image', 'plusimage', __( 'Plus Image' ) )
        ) )
    ) )
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
        ?>
        <section class="py-7">
            <div class="container">
                <div class="row">
                    <?php foreach($fields['studiescomplex'] as $items){ ?> 
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-7">
                        <div class="case-item">
                            <div class="inner">
                                <div class="img-holder"><img src="<?php echo wp_get_attachment_url( $items['studiesimage'] ); ?>" alt="" class="img-fluid">
                                </div>
                                <div class="content-box">
                                    <h5 class="this-title"><?php echo esc_html( $items['studiesheading'] ); ?></h5>
                                    <p class="this-summary"><?php echo esc_html( $items['clickpara'] ); ?></p>
                                        <a class="btn download-pdf" href="#case-study-form">
                                            <div class="d-flex align-items-center justify-content-center">
                                            <img src="<?php echo wp_get_attachment_url( $items['clickimage'] ); ?>" class="w-40" alt=""> <?php echo esc_html( $items['clickpdftxt'] ); ?>
                                            </div>
                                        </a>
                                </div>
                                <div class="hover-trigger"><img src="<?php echo wp_get_attachment_url( $items['plusimage'] ); ?>" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </section>
    <?php
        } );
    }

    // Contact Us Address Card
add_action( 'carbon_fields_register_fields', 'contact_us_address_card' );
function contact_us_address_card(){
    Block::make( __( 'Contact Us Address Card' ) )
    ->add_fields( array(
        Field::make( 'complex', 'contactuscomplex', __('Contact Us Card Address Card') )
        ->set_layout( 'tabbed-horizontal' )
        ->add_fields( array(
            Field::make( 'image', 'contactusimage', __( 'Image' ) )
            ->set_value_type( 'url' ),
            Field::make( 'text', 'contactusheading', __( 'Heading' ) ),
            Field::make( 'text', 'contactustext', __( 'Contact Us Text' ) ),
            Field::make( 'text', 'contactushref', __( 'Contact href' ) ),
            Field::make( 'text', 'contactusnumber', __( 'Contact Number' ) ),
            Field::make( 'text', 'contactusemailtxt', __( 'Email Text' ) ),
            Field::make( 'text', 'contactusemail', __( 'Email href' ) ),
            Field::make( 'text', 'contactusemailadd', __( 'Email Address' ) ),
            Field::make( 'text', 'contactusaddress', __( 'Address' ) )
        ) )
    ) )
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
        ?>
        <section class="services py-7 bg-white">
            <div class="container">
                <div class="service-wrap">
                    <div class="row">
                    <?php 
                    foreach($fields['contactuscomplex'] as $items){
                    ?> 
                        <div class="col-lg-6 col-sm-6 mb-4">
                            <div class="service-section h-100">
                                <div id="Layer_1" class="svg animal" style='background-image: url(<?php echo $items["contactusimage"]; ?>)'></div>
                                <div class="title"><?php echo esc_html( $items['contactusheading'] ); ?></div>
                                <div class="subtitle"><?php echo esc_html( $items['contactustext'] ); ?> 
                                <div class="subtitle"><?php echo esc_html( $items['contactusemailtxt'] ); ?> <span><a href="<?php echo esc_html( $items['contactusemail'] ); ?>"><?php echo esc_html( $items['contactusemailadd'] ); ?> </a><span></span></span></div>
                                <span><a href="tel:<?php echo esc_html( $items['contactushref'] ); ?>"><?php echo esc_html( $items['contactusnumber'] ); ?></a>
                                </span> <br><?php echo esc_html( $items['contactusaddress'] ); ?></div>
                            </div>
                        </div>
                    <?php
                    }?>
                    </div>
                </div>
            </div>
        </section>
    <?php
        } );
    }


    // Contact Us Address Card1
add_action( 'carbon_fields_register_fields', 'contact_us_address_card_one' );
function contact_us_address_card_one(){
    Block::make( __( 'Contact Us Address Card Landscape Content' ) )
    ->add_fields( array(
        Field::make( 'complex', 'contactuscomplex', __('Contact Us Card Address Card') )
        ->set_layout( 'tabbed-horizontal' )
        ->add_fields( array(
            Field::make( 'image', 'contactusimage', __( 'Image' ) )
            ->set_value_type( 'url' ),
            Field::make( 'text', 'contactusheading', __( 'Heading' ) ),
            Field::make( 'text', 'contactusheadingone', __( 'Address Heading One' ) ),
            Field::make( 'text', 'contactustext', __( 'Contact Us Text' ) ),
            Field::make( 'text', 'contactushref', __( 'Contact href' ) ),
            Field::make( 'text', 'contactusnumber', __( 'Contact Number' ) ),
            Field::make( 'text', 'contactusaddress', __( 'Address' ) ),
            Field::make( 'text', 'contactusaddressone', __( 'Address Heading Two' ) )
        ) )
    ) )
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
        ?>
        <?php 
        foreach($fields['contactuscomplex'] as $items){
        ?> 
        <section class="services bg-white">
            <div class="container">
                <div class="service-wrap">
                    <div class="row">
                    <?php 
                    foreach($fields['contactuscomplex'] as $items){
                    ?> 
                        <div class="col-lg-12 col-sm-6 mb-4">
                            <div class="service-section">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div id="Layer_2" class="svg animal" style='background-image: url(<?php echo $items["contactusimage"]; ?>)'></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="title mt-0"><?php echo esc_html( $items['contactusheading'] ); ?></div>
                                        <div class="subtitle"><?php echo esc_html( $items['contactustext'] ); ?>  <span><a href="tel:<?php echo esc_html( $items['contactushref'] ); ?>"><?php echo esc_html( $items['contactusnumber'] ); ?></a></span> <br><?php echo esc_html( $items['contactusaddress'] ); ?></div>
                                        <div class="title"><?php echo esc_html( $items['contactusheadingone'] ); ?></div>
                                        <div class="subtitle"><?php echo esc_html( $items['contactusaddressone'] ); ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }?>
                    </div>
                </div>
            </div>
        </section>
        <?php
        }?>
    <?php
        } );
    }

     // Contact Us Page Map
add_action( 'carbon_fields_register_fields', 'contact_us_address_card_map' );
function contact_us_address_card_map(){
    Block::make( __( 'Contact Us Map Section' ) )
    ->add_fields( array(
        Field::make( 'image', 'contactusimage', __( 'Image' ) )
        ->set_value_type( 'url' ),
        Field::make( 'text', 'contactusheading', __( 'Heading' ) ),
        Field::make( 'rich_text', 'contactustext', __( 'Paragraph' ) ),
        Field::make( 'text', 'contactusheadingone', __( 'Heading One' ) ),
        Field::make( 'rich_text', 'contactustextone', __( 'Paragraph One' ) )
    ) )
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
        ?> 
        <section class="services maping sec-normal sec-grad-grey-to-grey">
                <div class="container">
                    <div class="service-wrap" style='background-image: url(<?php echo $fields["contactusimage"]; ?>)'>
                        <div class="row content-section">
                            <div class="col-md-12 py-lg-5 pos-rel">
                                <div class="left-section">
                                    <div class="leftSecWrap">
                                        <div class="contactus-content p-4 ">
                                            <div class="section-heading mb-2 text-white">
                                                <h2 class="heading-style-center-white text-center"><?php echo esc_html( $fields['contactusheading'] ); ?></h2>
                                            </div>
                                            <p class="text-white text-center "> <?php echo esc_html( $fields['contactustext'] ); ?></p>
                                            <br>
                                            <div class="section-heading mb-2 text-white">
                                                <h2 class="heading-style-center-white text-center"><?php echo esc_html( $fields['contactusheadingone'] ); ?></h2>
                                            </div>
                                            <p class="text-white text-center "><?php echo esc_html( $fields['contactustextone'] ); ?></p>

                                        </div>
                                    </div>
                                </div>
                                <span data-toggle="popover" data-container="body" data-trigger="hover" data-placement="top" title="" class="datacenters montreal" data-original-title="Montreal" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."></span>
                                <span data-toggle="popover" data-container="body" data-trigger="hover" data-placement="top" title="" class="datacenters newyork" data-original-title="New York" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."></span>
                                <span data-toggle="popover" data-container="body" data-trigger="hover" data-placement="top" title="" class="datacenters portugal" data-original-title="Portugal" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."></span>
                                <span data-toggle="popover" data-container="body" data-trigger="hover" data-placement="top" title="" class="datacenters london" data-original-title="London" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."></span>
                                <span data-toggle="popover" data-container="body" data-trigger="hover" data-placement="top" title="" class="datacenters moskow" data-original-title="Moskow" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."></span>
                                <span data-toggle="popover" data-container="body" data-trigger="hover" data-placement="top" title="" class="datacenters hongkong" data-original-title="Hong Kong" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."></span>
                                <span data-toggle="popover" data-container="body" data-trigger="hover" data-placement="top" title="" class="datacenters singapure" data-original-title="Singapure" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."></span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    <?php
        } );
    }

// widgets code starts here

add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'footer-top',
            'name'          => __( 'Footer-top' ),
            'description'   => __( 'This is a Footer Top.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    ); 
    register_sidebar(
        array(
            'id'            => 'footer-col-1',
            'name'          => __( 'Footer-col-1' ),
            'description'   => __( 'This is a Footer column 1.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    ); 
    register_sidebar(
        array(
            'id'            => 'footer-col-2',
            'name'          => __( 'Footer-col-2' ),
            'description'   => __( 'This is a Footer column 2.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    ); 
    register_sidebar(
        array(
            'id'            => 'footer-col-3',
            'name'          => __( 'Footer-col-3' ),
            'description'   => __( 'This is a Footer column 3.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    ); 
    register_sidebar(
        array(
            'id'            => 'footer-col-4',
            'name'          => __( 'Footer-col-4' ),
            'description'   => __( 'This is a Footer column 4.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    ); 
    register_sidebar(
        array(
            'id'            => 'left-footer-logo',
            'name'          => __( 'Left-footer-logo' ),
            'description'   => __( 'This is a left Footer logo.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    ); 
    register_sidebar(
        array(
            'id'            => 'right-footer-logo',
            'name'          => __( 'Right-footer-logo' ),
            'description'   => __( 'This is a right Footer logo.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    ); 
    register_sidebar(
        array(
            'id'            => 'left-bottom-footer',
            'name'          => __( 'Left-bottom-footer' ),
            'description'   => __( 'This is a left bottom Footer.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    ); 
    register_sidebar(
        array(
            'id'            => 'right-bottom-footer',
            'name'          => __( 'Right-bottom-footer' ),
            'description'   => __( 'This is a right bottom Footer.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    ); 

}

// widgets code ends here

?>





