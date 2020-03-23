<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Caragepro
 */
$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );



?>
<section class="hero-wrap hero-wrap-2 about-page" style="background-image: url('<?php echo $backgroundImg[0]; ?>?');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-left">
               	<?php
		if ( is_singular() ) :
			the_title( '<h2 class="entry-title" style="color: #4cbb7c;">', '</h2>' );
		else :
			the_title( '<h2 class="entry-title" style="color: #4cbb7c;">><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		?>
                <!-- <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p> -->
            </div>
        </div>
    </div>
</section>



    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
          	<p>
               <?php the_post_thumbnail();?>
            </p>
              <?php  the_title( '<h2 class="entry-title" style="color: #4cbb7c;">', '</h2>' );?>
               <?= the_excerpt(); ?>
            <div class="tag-widget post-tag-container mb-5 mt-5">
              <div class="tagcloud">
				  <?php $post_tags = get_the_tags();
				  if ($post_tags):
				     foreach ($post_tags as $tag):
				  ?>
                <a href="#" class="tag-cloud-link"><?= $tag->name;?></a>
					 <?php endforeach;?>
					 <?php endif;?>
					</div>
            </div>
            
          
 
                 
              <!-- END comment-list -->
              
              
            </div>

          </div> <!-- .col-md-8 -->
          

          
 
 
          </div>

        </div>
      </div>
	</section> 
	