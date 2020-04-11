<?php 

// Template Name: Home Page

get_header();
?>


<main id="side-main">
        <div class="row m-0">
            <div class="col-md-9 offset-md-3 px-0">
                <!-- site banner area -->
                <section class="site-banner" id="home" style="background-image:url(
                    <?php if( the_field('home_bg') ): ?>
                    <?php the_field('home_bg'); ?>
                    <?php endif;?>);">
                    <div class="banner-area">
                        <div class="author text-center">
                            <div class="author-img" style="background-image:url(
                                <?php if( the_field('freelancer_image') ): ?>
                                <?php the_field('freelancer_image'); ?>
                                <?php endif;?>);">
                                </div>
                            <h1 class="text-white font-stat font-size40 text-uppercase py-3">
                            <?php if( the_field('freelancer_name') ): ?>
                               <?php the_field('freelancer_name');?>
                            <?php endif;?>
                            </h1>
                            <h5 class="text-white font-ram font-ram font-size27">
                            <?php if( the_field('freelancer_im') ): ?>
                                <?php the_field('freelancer_im');?>
                            <?php endif;?>
                            <div id="typed-strings">
                                <p><?php echo get_theme_mod('set_web_developer', 'Wordpress Developer');?></p>
                                <p><?php echo get_theme_mod('set_web_designer', 'Web Designer');?></p>
                            </div>
                             <span id="typed"></span></h5>
                        </div>
                    </div>
                </section>
                <!-- about me area -->
                <section class="about px-4 my-5" id="about">
                    <div class="me py-5">
                        <h5 class="text-uppercase font-os font-size17">
                        <?php if( the_field('text_information') ): ?>
                           <?php the_field('text_information');?>
                        <?php endif; ?>
                        </h5>
                        <h1 class="text-uppercase font-stat font-size34">
                            <?php if(the_field('about_me')) :?>
                            <?php the_field('about_me')?>
                            <?php endif ?>
                        </h1>
                    </div>
                    <div class="row m-0">
                        <div class="col-sm-5 pl-0">
                            <img src="<?php the_field('about_me_img');?>" alt="" class="img-fluid rounded">
                        </div>
                        <div class="col-sm-6">
                            <h6 class="text-uppercase font-os font-size17 text-muted"> 
                            <?php the_field('about_me')?>
                            </h6>
                            <h5 class="font-ram font-size20 py-2"><?php the_field('about_me_name');?> & 
                            <div id="typed-strings-2">
                                <p><?php echo get_theme_mod('set_web_developer', 'Wordpress Developer');?></p>
                                <p><?php echo get_theme_mod('set_web_designer', 'Web Designer');?></p>
                            </div>
                            <span id="typed_2"></span></h5>
                            <p class="font-ram text-black">
                               <?php the_field('about_me_description')?>
                            </p>
                            <div class="d-flex flex-row flex-wrap justify-content-between py-4">
                                <div class="d-flex flex-column">
                                    <p class="font-ram"><b>Email: </b><span class="text-black-50">
                                            <?php the_field('email')?></span></p>
                                    <p class="font-ram"><b>Degree: </b><span class="text-black-50"> <?php the_field('degree')?></span></p>
                                    <p class="font-ram"><b>Twitter: </b><span class="text-black-50"> <?php the_field('twitter_handle')?></span></p>
                                </div>
                                <div class="d-flex flex-column">
                                    <p class="font-ram"><b>Birthday: </b><span class="text-black-50"> 29 August
                                            1990</span></p>
                                    <p class="font-ram"><b>Website: </b><span class="text-black-50">
                                            <?php the_field('website_url')?></span></p>
                                    <p class="font-ram"><b>Phone Number: </b><span class="text-black-50">
                                            <?php the_field('phone_number')?></span></p>
                                </div>
                            </div>
                            <button class="btn btn-dark text-uppercase mr-3"><a href="<?php the_field('hire_me_link');?>"><?php the_field('hire_me_text')?></a></button>
                            <button class="btn btn-dark text-uppercase mr-3"><a href="<?php the_field('download_cv_link')?>"><?php the_field('download_cv')?></a></button>
                        </div>
                    </div>
                </section>
                <!-- end about me area -->

                <!-- Skill Section -->
                <section class="skill px-4 py-5 bg-light" id="services">
                    <div class="ability py-3">
                        <h5 class="text-uppercase font-os font-size17"><?php the_field('ability_title');?></h5>
                        <h1 class="text-uppercase font-stat font-size34"><?php the_field('skill_title')?></h1>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 pl-4">
                               <?php the_field('skill_desc');?>
                        </div>
                        <div class="col-sm-6 bars">

                        <?php $my_skills = new WP_Query(array('post_type' => 'skills','order' => 'ASC', 'posts_per_page'=> -1)); ?>
    			<?php while ($my_skills->have_posts()) : $my_skills->the_post();?>

                            <div class="bar-1 mb-4">
                                <div class="d-flex flex-row justify-content-between">
                                    <p class="font-ram font-size17"><?php the_title();?></p>
                                    <span><?php the_field('skill_percentage')?>%</span>
                                </div>
                                <div class="progress" style="height: 3px;">
                                    <div class="progress-bar bgcolor-black" role="progressbar" style="width:<?php the_field('skill_percentage');?>%">
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; wp_reset_postdata();?>
                        </div>
                    </div>
                </section>
                <!-- End Skill Section -->

                <!-- services -->
                <section class="services-area px-4 py-5">
                    <div class="do py-5">
                        <h5 class="text-uppercase font-os font-size17">What I do</h5>
                        <h1 class="text-uppercase font-stat font-size34">Services</h1>
                    </div>
                    <div class="row m-0">

                    <?php $my_services = new WP_Query(array('post_type' => 'services','order' => 'ASC', 'posts_per_page'=> -1)); ?>
    			<?php while ($my_services->have_posts()) : $my_services->the_post();?>

                        <div class="col-md-4 col-sm-6 mb-4 text-center">
                            <div class="panel border p-4">
                                <span class=" text-secondary">
                                    <i class="<?php the_field('service_icon')?> fa-3x"></i>
                                </span>
                                <h4 class="font-ram py-4"><?php the_title();?></h4>
                                <p class="font-ram font-size-17 text-black-50">
                                   <?php the_content();?>
                                </p>
                            </div>
                        </div>
                        <?php endwhile; wp_reset_postdata();?>


                    </div>
                </section>
                <!-- end services -->

                <!-- Reference -->
                <section class="reference bg-light py-5 px-4">
                    <div class="refer py-3">
                        <h5 class="text-uppercase font-os font-size17"><?php the_field('my_reference');?></h5>
                        <h1 class="text-uppercase font-stat font-size34"><?php the_field('reference');?></h1>
                    </div>
                    <div class="row mb-5">
                    <?php $reference = new WP_Query(array('post_type' => 'reference','order' => 'ASC', 'posts_per_page'=> -1)); ?>
    			<?php while ($reference->have_posts()) : $reference->the_post();?>
                        <div class="col-sm-4 my-3">
                            <?php the_post_thumbnail('akka-reference', array('class' => 'img-fluid rounded') );?>
                            
                        </div>
                        <?php endwhile; wp_reset_postdata();?>
                    </div>
                </section>
                <!-- End Reference -->

                <!-- Work -->
                <section class="work py-5 px-4" id="portfolio">
                    <div class="py-3">
                        <h5 class="text-uppercase font-os font-size17"><?php the_field('portfolio_text')?></h5>
                        <h1 class="text-uppercase font-stat font-size34"><?php the_field('portfolio')?></h1>
                    </div>

                    <div class="row">
                    <?php $portfolio = new WP_Query(array('post_type' => 'portfolio','order' => 'ASC', 'posts_per_page'=> -1)); ?>
    			<?php while ($portfolio->have_posts()) : $portfolio->the_post();?>
                        <div class="col-sm-4 pb-4">
                        <?php the_post_thumbnail('akka-portfolio', array('class' => 'img-fluid rounded') );?>
                        </div>
                        <?php endwhile; wp_reset_postdata();?>
                    </div>
                </section>
                <!-- End Work -->



                <!-- News -->
                <section class="news py-5 px-4 bg-light" id="news">
                    <div class="py-3">
                        <h5 class="text-uppercase font-os font-size17">Read</h5>
                        <h1 class="text-uppercase font-stat font-size34">Latest News</h1>
                    </div>

                    <div class="row">
                    
                    
                    <?php 
// the query
		$akka_blog_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=> 3, 'order' => 'desc')); ?>
 
			<?php if ( $akka_blog_query->have_posts() ) : ?>
  
  				<?php while ( $akka_blog_query->have_posts() ) : $akka_blog_query->the_post(); ?>

                        <div class="col-sm-4 my-3">
                            <div class="card border-0">
                                <a href="<?php the_permalink();?>">
                                    <?php the_post_thumbnail('akka-blog-post',array('class' => 'img-fluid'))?>
                                </a>
                                <div class="card-body">
                                    <p class="font-ram font-size-17">in <b
                                            class="text-uppercase text-dark font-size16"><?php the_category();?></b></p>
                                    <h5 class="card-title font-ram"><?php the_title();?></h5>
                                    <p class="cart-text text-black-50">
                                        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                                        mus. Maecenas faucibus mollis interdum. Fusce dapibus, tellus ac cursus commodo,
                                        tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.

                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>

<?php else : ?>
        <p><?php _e( 'Sorry, there is no post yet Add New Post.', 'clark-wp' ); ?></p>
<?php endif; ?>

                    </div>
                </section>
                <!-- End News -->

                <footer id="footer" class="pt-5 px-3" id="">
                    <div id="contact_us">
                        <div class="py-3 px-2">
                            <h5 class="text-uppercase font-os font-size17"><?php the_field('location');?></h5>
                            <h1 class="text-uppercase font-stat font-size34"><?php the_field('contact_us_text');?></h1>
                        </div>
                        <div class="row py-5">
                            <div class="col-sm-6">
                                <h6 class="text-uppercase font-ram font-size-17 text-dark"><?php echo get_theme_mod('set_contact_name', 'Akka Solutions');?></h6>
                                <p class="font-ram w-50 font-size-17 text-black-50">
                                <?php echo get_theme_mod('set_contact_desc', 'Akka Solutions');?>
                                </p>
                                <p class="font-ram font-size17 text-black-50">PHONE: <?php echo get_theme_mod('set_contact_number', '+234-111-0001-222');?></p>
                                <p class="font-ram font-size17 text-black-50">FAX: <?php echo get_theme_mod('set_contact_fax', '+234-111-0001-222');?></p>
                                <p class="font-ram font-size17 text-black-50">EMAIL: <?php echo get_theme_mod('set_contact_email', 'support@95media.co.uk');?></p>
                                <p class="font-ram font-size17 text-black-50">ADDRESS: <?php echo get_theme_mod('set_contact_address', '2 Awesome Way New York 55201');?></p>
                            </div>

                            <div class="col-sm-6 py-4 px-4">
                                
                             
                                <?php the_field('contact_form_short_code');?>
                            </div>
                        </div>
                        <div class="row bg-light py-5">
                            <div class="col-sm-4 my-5 text-center">
                                <h6 class="font-ram font-size17 text-black-50"><?php echo get_theme_mod('set_copyright', '&copy; 2020 All Rights Reserved');?></h6>
                            </div>

                            <div class="col-sm-4 my-4 text-center">
                                <div class="footer-title">
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand font-staat font-size-40 text-dark logo-text-center"><?php bloginfo( 'title' ); ?></a>
                                    <p class="description font-os font-size-16 text-black-50 text-uppercase"><?php echo get_theme_mod('set_freelancer_name', 'E.g John Doe');?></p>
                                </div>
                            </div>

                            <div class="col-sm-4 my-5 text-center socials">
                                    <span class="mr-3"><a href="<?php echo get_theme_mod('set_facebook_url', 'https://www.facebook.com');?>"><i class="fab fa-facebook-f"></i></a></span>
                                    <span class="mr-3"><a href="<?php echo get_theme_mod('set_twitter_url', 'https://www.twitter.com');?>"><i class="fab fa-twitter"></i></a></span>
                                    <span class="mr-3"><a href="<?php echo get_theme_mod('set_instagram_url', 'https://www.instagram.com');?>"><i class="fab fa-instagram"></i></a></span>
                                    <span class="mr-3"><a href="<?php echo get_theme_mod('set_youtube_url', 'https://www.youtube.com');?>"><i class="fab fa-youtube"></i></a></span>
                            </div>

                        </div>
                    </div>
                </footer>
                </div>
        </div>
    </main>
                

        <?php get_footer()?>