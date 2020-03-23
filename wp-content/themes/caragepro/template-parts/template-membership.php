<?php 
/*
  Template Name: Membership page 
 */
$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
$header_heading =   get_field ('header-heading',get_the_ID());
$heading_colored =  get_field ('header-coloredheading',get_the_ID());
 
  
$membership_plans =  new WP_Query(array(
    'post_type'=> 'membership_club',
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

<section class="ftco-section Membership-Club Membership-Club-page">
    <div class="container">

        <div class="row">

            <div class="col-md-12 text-center Membership-Club-plans mt-4 d-flex">
              <?php while ($membership_plans->have_posts()): $membership_plans->the_post(); 
                 
                     $plan_title = get_field ('plan_title',get_the_ID());
                     $plan_price = get_field ('plan_price',get_the_ID());
                     $plan_duration = get_field ('plan_duration',get_the_ID());
                     $plan_url = get_field ('plan_url',get_the_ID());
                     $plan_link =  get_field('plan_url');
                 ?>
                <div class="col-md-3 col-xs-12 box">

                    <div class="plan-text">
                        <h5><?=  $plan_title;?></h5>
                        <span>Premium Carwash</span>
                        <div class="price-data">
                            <p style="color: #4cbb7c;">
                                <strong><?= $plan_price; ?> SR </strong> / <?= $plan_duration;?> months</p>
                        </div>

                        <a href="<?= $plan_link; ?>"
                            class="btn btn-primary">Buy</a>

                    </div>
                </div>
<?php endwhile;?>
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