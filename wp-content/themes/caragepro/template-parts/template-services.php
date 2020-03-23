<?php 
/*
  Template Name: Services page 
 */
$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
$header_heading =   get_field ('header-heading',get_the_ID());
$heading_colored =  get_field ('header-coloredheading',get_the_ID());
$second_section_heading = get_field('second-section-heading',get_the_ID());
$second_section_headColored = get_field('second-section-colored',get_the_ID());
$second_section_background = get_field('second-section-background',get_the_ID());
$terms_heading = get_field('terms-heading',get_the_ID());
$terms_content = get_field('terms-content',get_the_ID());

 
   $home_services = new WP_Query(array(
    'post_type'=> 'home_services',
     'posts_per_page' => 1000,
     'order'=> 'asc'
  ));

  get_header();
  ?>

<section class="hero-wrap hero-wrap-2 about-page" style="background-image: url('<?php echo $backgroundImg[0]; ?>?');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-left">
                <h1 class="mb-3 bread">
                    <?php echo $header_heading; ?>
                    <br/>
                    <span style="color: #4cbb7c;">
                        <?php echo $heading_colored;?>
                    </span>
                </h1>
                <!-- <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p> -->
            </div>
        </div>
    </div>
</section>
 	
   	<section class="ftco-section our-services-icon">
    	<div class="container">
        <div class="row d-flex justify-content-center">
         <?php    while ( $home_services->have_posts()): $home_services->the_post(); 
                               $serv_img = get_field('service_image',get_the_ID());
                               $serv_title = get_field('service_title',get_the_ID());?>
        	<div class="col-md-3 text-left serv-box">
        		<div class="practice-area ftco-animate">
        			<div class="icon">
        			   <?php if($serv_img):?>
                            <img src="<?= $serv_img['url'];?>" width="70px"> <?php endif;?>
        			</div>
        		    <div class="service-icon-text">
						<h3><a href="#"><?=   $serv_title;?></a></h3>
 
					</div>
        			<!-- <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></a> -->
        		</div>
        	</div>
            <?php endwhile;?>
        </div>
    	</div>
    </section>

<section class="hero-wrap hero-wrap-2 about-page" style="background-image: url('<?php echo $second_section_background['url']; ?>');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-left">
                <h1 class="mb-3 bread">
                    <?= $second_section_heading; ?>
                        <br/>
                        <span style="color: #4cbb7c;">
                            <?= $second_section_headColored; ?>
                        </span>
                </h1>
                <!-- <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p> -->
            </div>
        </div>
    </div>
</section>


<section class="ftco-section ftco-no-pt ftco-no-pb  Terms-and-Conditions">
    <div class="container">
        <div class="row d-flex">
            <!-- <div class="col-md-6 d-flex">
    				<div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-end" style="background-image:url(images/about.jpg);">
    					<a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
    						<span class="icon-play"></span>
    					</a>
    				</div>
    			</div> -->
            <div class="row justify-content-start pt-3 pb-3">
                <div class="col-md-12 heading-section terms-box ftco-animate">
                    <!-- <span class="subheading">History</span> -->
                    <h2 class="mb-4" style="color: #4cbb7c;">
                        <?= $terms_heading;?>
                    </h2>
                    <?= $terms_content;?>



                </div>

            </div>
        </div>

    </div>
    </div>
</section>


<section class="ftco-section  bg-light subscribe-section subscribe-section-bg">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12 py-4 px-md-4">
                <div class="row">
                    <div class="col-md-6 ftco-animate d-flex align-items-center">
                        <h2 class="mb-0">Subscribe to our news & offer</h2>
                    </div>
                    <div class="col-md-6 d-flex align-items-center">

                        <?php echo do_shortcode('[contact-form-7 class="subscribe-form" id="95" title="subscribe_form"]');?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
 
?>