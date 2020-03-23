<?php 
/*
  Template Name: About page 
 */
$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
$header_heading =   get_field ('header-heading',get_the_ID());
$heading_colored =  get_field ('header-coloredheading',get_the_ID());
$about_heading = get_field ('about_heading',get_the_ID());
$about_desc = get_field ('about_desc',get_the_ID());
$company_heading = get_field('company_heading',get_the_ID());
$company_desc = get_field('company_desc',get_the_ID());
$contact_number = get_field('contact_number',get_the_ID());
$contact_address = get_field('contact_address',get_the_ID());
 
$our_leaders =  new WP_Query(array(
    'post_type'=> 'our_leaders',
     'posts_per_page' => 1000,
     'order'=> 'asc'
  ));

  $count_av = (wp_count_posts('home_services')->publish)/2;
//   print_r($count_av);
  get_header();
  ?>
 
  <section class="hero-wrap hero-wrap-2 about-page" style="background-image: url('<?php echo $backgroundImg[0]; ?>?');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-left">
            <h1 class="mb-3 bread">  <?php echo $header_heading; ?><br/>
                 <span style="color: #4cbb7c;"> <?php echo $heading_colored;?></span>
            </h1>
            <!-- <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p> -->
          </div>
        </div>
      </div>
    </section>
    	
    <section class="ftco-section ftco-no-pt ftco-no-pb history">
    	<div class="container">
    		<div class="row d-flex">
    			<!-- <div class="col-md-6 d-flex">
    		
    			</div> -->
    				<div class="row justify-content-start pt-3 pb-3">
                     
               
		          <div class="col-md-12 heading-section ftco-animate history-text">
		          	<!-- <span class="subheading">History</span> -->
		            <h2 class="mb-4" style="color: #4cbb7c;"><?= $about_heading; ?></h2>
		            <p> <?= $about_desc;?>
                </p>
		     
              </div>
   
		        </div>
	        
        </div>
    	</div>
    </section>
    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-7 text-left heading-section ftco-animate">
          	<h2 class="subheading"><?= $company_heading; ?></h2>
            <p class="mb-4">
                <?= $company_desc; ?>
            </p>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
                <?php while($our_leaders->have_posts()): $our_leaders->the_post();
                   $leader_image = get_field('team_member_image',get_the_ID());
                   $leader_name = get_field('team_member_title',get_the_ID());
                  $leader_job =   get_field('team_member_job',get_the_ID());                
                ?>
              <div class="item">
                <?php if($leader_image):?>
                 <img src="<?php echo $leader_image['url']; ?>" class="img-fluid"/>
                <?php endif;?>
                  <div class="title-text">
                        <h5><?php echo $leader_name; ?></h5>
                        <p><?php echo $leader_job;?> </p>
                  </div>
              </div>
        <?php endwhile;?>
        </div>
 
    
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb bg-light subscribe-section contact-about">
      <div class="container">
        <div class="row d-flex justify-content-center contact-box">
        	<div class="col-md-12 py-4 px-md-4 d-flex">
        	
		          <div class="col-md-3 col-xs-6 ftco-animate d-flex align-items-center">
		            <h2 class="mb-0" style="color:white; font-size: 24px;">Contacts Us</h2>
              </div>
              <div class="col-md-3 col-xs-6 ftco-animate d-flex align-items-center">
		            <h2 class="mb-0" style="color:white; font-size: 24px;"><?= $contact_number;?></h2>
		          </div>
		          <div class="col-md-6 col-xs-12 d-flex align-items-center">
		              <p><?= $contact_address;?></p>
		          </div>
	         
          </div>
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