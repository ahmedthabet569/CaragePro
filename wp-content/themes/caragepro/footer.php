<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Caragepro
 */

?>

	</div><!-- #content -->

	<footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
		  <div id="footer-sidebar1">
        <?php
        if(is_active_sidebar('footer-sidebar-1')){
        dynamic_sidebar('footer-sidebar-1');
        }
        ?>
            
		  </div>
	</div>
          <div class="col-md">
		  <div id="footer-sidebar2">
        <?php
        if(is_active_sidebar('footer-sidebar-2')){
        dynamic_sidebar('footer-sidebar-2');
        }
        ?>
            </div>
          </div>
          <div class="col-md">
		  <div id="footer-sidebar3">
        <?php
        if(is_active_sidebar('footer-sidebar-3')){
        dynamic_sidebar('footer-sidebar-3');
        }
        ?>
            </div>
          
          </div>
    
        </div>
     
	  </div>
	  
    </footer>
    <section class="ftco-section copyright">
		<div class="container">
				<div class="row">
						<div class="col-md-6 copy1">
							  <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								  Carage Pro &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
								  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
							  
						</div>
						<div class="col-md-6">
								<ul class="list-unstyled">
									<li><a href="#">User agreement</a></li>
									<li><a href="#">Request</a></li>
									<li><a href="#">Ask a question</a></li>
									<li><a href="#">Offer an idea</a></li>
			  
								</ul>
							  
						</div>
					  </div>
		</div>
	</section>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
