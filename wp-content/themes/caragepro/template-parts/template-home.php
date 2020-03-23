<?php 
/*
  Template Name: Home page 
 */
$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
$header_desc =   get_field ('header-heading',get_the_ID());
$heading_colored =  get_field ('header-coloredheading',get_the_ID());
$about_heading = get_field ('about_heading',get_the_ID());
$about_desc = get_field ('about_desc',get_the_ID());
$about_bg = get_field('about_image',get_the_ID());
$service_heading = get_field('services_heading',get_the_ID());
$services_image = get_field('services_image',get_the_ID());
$membership_heading = get_field('membership_heading',get_the_ID());
$partners_heading = get_field('partners_heading',get_the_ID());




 $home_features= new WP_Query(array(
    'post_type'=> 'home_features',
     'posts_per_page' => 1000,
     'order'=> 'asc'
  ));
   $home_services = new WP_Query(array(
    'post_type'=> 'home_services',
     'posts_per_page' => 1000,
     'order'=> 'asc'
  ));
  $membership_plans =  new WP_Query(array(
    'post_type'=> 'membership_club',
     'posts_per_page' => 1000,
     'order'=> 'asc'
  ));

  $partners =  new WP_Query(array(
    'post_type'=> 'partners',
     'posts_per_page' => 1000,
     'order'=> 'asc'
  ));

  $count_av = (wp_count_posts('home_services')->publish)/2;
//   print_r($count_av);
  get_header();
  ?>
<div class="hero-wrap js-fullheight" style="background-image: url('<?php echo $backgroundImg[0]; ?>');background-position: 50% 50px; height: 419px;}"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
            <div class="col-md-6 ftco-animate">

                <h1>
                    <?php echo $header_desc; ?>
                    <br/>
                    <span class="" style="color: #4cbb7c;">
                        <?php echo $heading_colored;?>
                    </span>
                </h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section services">
    <div class="container">
        <div class="row">


            <div class="col-lg-12 services-wrap px-4 pt-3 pb-3">
                <div class="row pt-md-3">
                    <?php while($home_features->have_posts()): $home_features->the_post();
                       $features_image = get_field('feature_image',get_the_ID());
                       $features_text = get_field('feature_text',get_the_ID());                       
                    ?>

                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="services text-center">
                            <div class="icon d-flex justify-content-center align-items-center">

                                <?php if($features_image):?>
                                <img class="img-fluid" src="<?php echo $features_image['url']; ?>">
                                <?php endif;?>
                            </div>
                            <div class="text">
                                <h3>
                                    <?php echo $features_text; ?>
                                </h3>

                            </div>
                        </div>
                    </div>
                    <?php endwhile;?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section about-section ftco-no-pt ftco-no-pb">
    <div class="container-fluid">
        <div class="row d-flex">
            <div class="col-md-7 col-xs-12 About-Caragepro">

                <div class="heading-section ftco-animate">
                    <!-- <span class="subheading">About Caragepro</span> -->
                    <h2 class="mb-4">
                        <?php echo $about_heading; ?>
                    </h2>
                    <p>
                        <?php ?>
                        <?php echo $about_desc;  ?>
                    </p>


                </div>

            </div>
            <style>
                .about-section-image {
                    background: url('<?php echo $about_bg['url']; ?>');
                    background-repeat: no-repeat;
                    background-position: right;
                    background-size: cover;
                }
            </style>

            <div class="col-md-5 col-xs-12 d-flex about-section-image">

            </div>
        </div>

    </div>
    </div>
</section>
<section class="ftco-section service-section">
    <div class="container-fluid">
        <div class="row d-flex">
            <div class="col-md-4 services-img-car">
                <?php if($services_image):?>

                <img src="<?php echo $services_image['url']; ?>" alt="" srcset="">
                <?php endif;?>
            </div>
            <div class="col-md-6 About-Caragepro">
                <!-- <div class="row justify-content-start pt-3 pb-3">
							  <div class="col-md-12 heading-section ftco-animate"> -->
                <!-- <span class="subheading">About Caragepro</span> -->
                <h2 class="mb-4">
                    <?= $service_heading; ?>
                </h2>
                 <div class="row">
                               <?php 
                  $i = 0;
                  $s = 5;
                 while ( $home_services->have_posts()): $home_services->the_post(); 
                               $serv_img = get_field('service_image',get_the_ID());
                               $serv_title = get_field('service_title',get_the_ID());?>
                <div class="col-6">
 
                            <div class="serv-box text-left">
                                    <div class="icon d-flex">
                                        <?php if($serv_img):?>
                                        <img src="<?php echo $serv_img['url']; ?>" alt="" srcset="">
                                        <?php endif;?>
                                    </div>

                                    <div class="text">
                                        <h5>
                                            <?php echo $serv_title;?>
                                        </h5>

                                    </div>

                                </div>           
              

                 <?php $i++;?>
                </div> 
                  <?php endwhile;?>
                </div> 
              
            </div>
        </div>
    </div>
</section>
<section class="ftco-section Membership-Club">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-10 text-center heading-section ftco-animate">
                <!-- <span class="subheading">Explore Case Studies</span> -->
                <h2 class="mb-4" class="text-left"><?php echo $membership_heading; ?></h2>
            </div>
        </div>
        <div class="row">

            <div class=" text-center mt-4 d-flex justify-content-center  carousel-membership owl-carousel ftco-owl">

                 <?php while ($membership_plans->have_posts()): $membership_plans->the_post(); 
                 
                     $plan_title = get_field ('plan_title',get_the_ID());
                     $plan_price = get_field ('plan_price',get_the_ID());
                     $plan_duration = get_field ('plan_duration',get_the_ID());
                     $plan_url = get_field ('plan_url',get_the_ID());
                     $plan_link =  get_field('plan_url');
                 ?>
                <div class="box">

                    <div class="plan-text">
                        <h5><?= $plan_title; ?> </h5>
                        <span>Premium Carwash</span>
                        <div class="price-data">
                            <p style="color: #4cbb7c;">
                                <strong><?= $plan_price; ?> SR</strong> /<?= $plan_duration?> months</p>
                        </div>

                        <a href="<?= $plan_link['url'];?>" class="btn btn-primary">Buy</a>


                    </div>
                </div>
            <?php endwhile;?>


            </div>
        </div>
    </div>
</section>

    <section class="ftco-section bg-light recent-blogs">
      <div class="container">
        <div class="row justify-content-left mb-5 pb-3">
          <div class="col-md-7 heading-section text-left ftco-animate">
         
            <h2>Recent Posts</h2>
          </div>
        </div>
        <div class="row">
		<div class='sk-instagram-feed' data-embed-id='36013'></div><script src='https://www.sociablekit.com/app/embed/instagram-feed/widget.js'></script>
      </div>
    </section>
    	<section class="ftco-section bg-light recent-Partners">
			<div class="container">
			  <div class="row justify-content-left mb-5 pb-3">
				<div class="col-md-7 heading-section text-left ftco-animate">
			   
				  <h2><?= $partners_heading;?></h2>
				</div>
			  </div>
			  <div class="row">
                  <?php while ($partners->have_posts()): $partners->the_post();
                     $partner_image = get_field('partners_image',get_the_ID());
                  ?>
			      <div class="col-md-3 col-xs-12">
                        <?php if($partner_image):?>
                         <img class="img-fluid"  src="<?php echo $partner_image['url'] ?>">
            <?php endif;?>
				  </div>
            <?php endwhile;?>
			
			  </div>
			</div>
		  </section>
    <section class="ftco-section  bg-light subscribe-section">
      <div class="container">
        <div class="row d-flex justify-content-center">
        	<div class="col-md-12 py-4 px-md-4">
        		<div class="row">
		          <div class="col-md-6 ftco-animate d-flex align-items-center">
		            <h2 class="mb-0" >Subscribe to our news & offer</h2>
		          </div>
		          <div class="col-md-6 d-flex align-items-center">
		            
                    <?php echo do_shortcode('[contact-form-7 class="subscribe-form" id="95" title="subscribe_form"]');?>
		          </div>
	          </div>
          </div>
        </div>
      </div>
	</section>
<section class="ftco-section map-section">
   <?php echo do_shortcode('[osmapper id="94"]');
   ?> 		 
</section>	
	<section class="ftco-section contact-section">
			<div class="container">
		 
			  <div class="row block-9 no-gutters">
				    <h2 class="h3">Contact Form</h2>
				<div class="col-lg-12 order-md-last d-flex">
				      <?php echo do_shortcode('[contact-form-7 id="83" class=" p-5 contact-form" title="Contact Us"]');?>
				
				</div>
	   
			  </div>
			</div>
		  </section>
 
  
  
<?php
get_footer();
 
?>