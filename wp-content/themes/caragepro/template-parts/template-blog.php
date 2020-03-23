<?php 
/*
  Template Name: Blog page 
 */
$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
$header_heading =   get_field ('header-heading',get_the_ID());
$heading_colored =  get_field ('header-coloredheading',get_the_ID());
 $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page' => 2)); 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
 
query_posts(array(
    'post_type' => 'post', // You can add a custom post type if you like
    'paged' => $paged,
    'posts_per_page' => 2 // limit of posts
));
$categories = get_categories();
 
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


  <section class="ftco-section bg-light blog-page">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
            <?php
           if ( have_posts() ) :  while ( have_posts() ) : the_post();   
            ?>


          <div class="card" style="width: auto;display: inline-block;">
            <div class="card-image">
  
              <img class="card-img-top" src="<?= the_post_thumbnail_url(); ?>" alt="Card image cap">
            </div>
            <div class="card-body">
              <a href="<?= the_permalink(); ?>"><h3 class="heading mb-0"><?=  the_title(); ?></h3></a>
              <?= the_excerpt(); ?> 
              <div class="blog-date">
                <span><?=    the_date(); ?> </span>
              </div>
            </div>
          </div>
          
        <?php endwhile;?>
        <div class="row mt-5">
            <div class="col">
                <div class="block-27 blog-progress">
                    <?php post_pagination()?>
                </div>
            </div>
        </div>
            <?php endif;?>
         
        </div>
        <div class="col-md-4">
          <div class="searh-form">
          <form method="get" id="search_form" action="<?php echo home_url('/'); ?>">

            <input type="text" name="s" class="form-control Search-inputt searchpagee"  value="<?php echo get_search_query() ?>" placeholder="Search">         
             <i class="fa fa-search"></i>
</form>
          </div>
          <div class="reacent-posts">
            <h4 style="color: #fff;">Recent Posts</h4>
            <ul>
                <?php   if ($wpb_all_query->have_posts()):
           while  ($wpb_all_query->have_posts()) : $wpb_all_query->the_post();   ?>
              <li>
                <img src="<?= get_template_directory_uri() ?>/images/psd/arrow.png" width="20px"><?= the_title();?></li>
              <li>
                <?php endwhile;?>
                <?php endif;?>
            </ul>
          </div>
          <div class="reacent-posts category">
            <h4 style="color: #fff;">Category</h4>
            <ul>
                <?php
foreach($categories as $category) :?>
              <li>
                 <img src="<?= get_template_directory_uri() ?>/images/psd/arrow.png" width="20px"><?= $category->name; ?></li>
                <?php endforeach; ?>
                 
            </ul>
          </div>
        </div>

      </div>
    </div>
  </section>

<?php
get_footer();
 
?>