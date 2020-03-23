<?php 
/*
  Template Name: Portfolio page 
  
 */
$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
$header_heading =   get_field ('header-heading',get_the_ID());
$heading_colored =  get_field ('header-coloredheading',get_the_ID());
 
  
$portfolio =  new WP_Query(array(
    'post_type'=> 'portfolio',
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

   	<section class="ftco-section simple-portfolio">
    	<div class="container">
        <div class="row">
        <?php while($portfolio->have_posts()): $portfolio->the_post();
             $portfolio_image = get_field('portfolio_image',get_the_ID());
        
        ?>
        	<div class="col-md-4 ftco-animate">
        		<div class="case img d-flex align-items-center justify-content-center" style="background-image: url('<?php echo $portfolio_image['url']; ?>?');"> 
            
        		</div>
        	</div>
        <?php endwhile;?>
         
       
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