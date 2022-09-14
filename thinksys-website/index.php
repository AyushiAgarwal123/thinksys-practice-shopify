<!--structure of blog page-->
<?php get_header(); ?>

<section class="article-section">
    <div class="container mt-7">
        <div class="row">
            <div class="col-lg-12">
                <div class="article-div">
                    <div class="article-txt">
                        <h2 class="heading-style">Read articles</h2>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-lg-12">
                        <div class="filter-section mt-3">
                            <ul class="d-flex flex-wrap font-weight-bold">
                            <?php 
                                $categories = get_categories();
                                foreach($categories as $category) {
                                echo'
                                    <li class="blog-categories__item"> 
                                        <a class="font-semi-bold" href="' . get_category_link($category->term_id) . '">' . $category->name . '<span class="font-medium">(' . $category->count . ')</span> </a>
                                    </li> ';
                                }  
                            ?>                         
                            </ul>
                        </div>
                    </div>
                </div>
                <main class="main-content-area">
                    <article class="post post-single">
                        <div class="related-post-wrap">
                            <div class="row">
                                <?php 
                                    while(have_posts()){
                                        the_post();
                                        $imagepath = wp_get_attachment_image(get_post_thumbnail_id(),'large');
                                ?>
                                <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                                    <article class="post post-style-one">
                                        <a href="<?php the_permalink()?>">
                                            <div class="post-img-wrap" >
                                                <div class="post-img">
                                                    <img src="<?php echo $imagepath[0]; ?>" 
                                                    class="img-fluid attachment-large size-large wp-post-image" alt="Docker vs Kubernetes" />
                                                </div>
                                            </div>
                                        </a>
                                        <div class="post-content">
                                            <div class="authorNameWrap d-flex justify-content-between py-2">
                                                <div class="author">
                                                    <a href="https://www.thinksys.com/author/thinksysuser/"
                                                        title="Posts by ThinkSys" rel="author">ThinkSys</a>
                                                </div>
                                                <time class="pub-date"
                                                    datetime="Docker vs Kubernetes: Which is the Better Choice as a Container Management?"><?php the_time('F j, Y'); ?> </time>
                                            </div>
                                            <div class="intro-div">
                                                <div class="name_div">
                                                    <h2 class="blog-single-title"><a
                                                            href="<?php the_permalink()?>"><?php the_title(); ?></a>
                                                    </h2>
                                                    <p><?php the_excerpt(); ?></p>
                                                </div>
                                            </div>
                                            <h6 class="post-title mt-3">
                                                <a href="<?php the_permalink()?>" title="<?php the_title(); ?>">
                                                </a>
                                                <a href="#" rel="category tag">DevOps</a>
                                            </h6>
                                        </div>
                                    </article>
                                </div>
                                <?php }?>
                            </div>

                                <?php if ( have_posts() ) : ?>
                                <?php
                                    function your_themes_pagination(){
                                        global $wp_query; 
                                        echo paginate_links();
                                    }
                                ?>
                                <!-- Start of the main loop. -->
                                <?php while ( have_posts() ) : the_post(); ?>
                                <!-- the rest of your theme's main loop -->
                                <?php endwhile; ?>
                                <!-- End of the main loop -->
                                <!-- Add the pagination functions here. -->
                                <div class="nav-previous d-flex justify-content-center my-4"><?php the_posts_pagination(); ?></div>
                                <?php else : ?>
                                <?php _e('Sorry, no posts matched your criteria.'); ?>
                                <?php endif; ?>
                        </div>
                    </article>
                </main>
            </div>
        </div>
    </div>
</section>
<?php get_footer();?>
