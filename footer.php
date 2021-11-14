<?php
						/**
						 * Hook to add content block
						 * phase_after_content
						 */
						do_action( 'phase_before_footer_block' );
					?>
				</div><!-- .site-content -->
			</div><!-- #main -->
			<div class="footer" >
			<div class="grid-container footer-grid-container">
        <div class="card">
            <h4>Press Release</h4>
          <?php wp_nav_menu( array( 'theme_location' => 'press_menu', 'container_class' => 'menu-press' ) ); ?>
            
        </div>
        <div class="card">
			<h4>About</h4>
           <p> <?php wp_nav_menu( array( 'theme_location' => 'footer_menu', 'container_class' => 'menu-footer' ) ); ?></p>
        </div>
        
        
      </div>
      <div class="social"><a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-linkedin"></a>
<a href="#" class="fa fa-youtube"></a>
<a href="#" class="fa fa-instagram"></a></div>
   
</div>
 </div> 
		</div><!-- #page-content -->
		<div class="clear"></div>
		<?php
			/**
			 * Before footer hook
			 */
			do_action( 'phase_footer_before' );

		if ( 'hidden' !== phase_get_inherit_mod( 'footer_type' ) && is_active_sidebar( 'sidebar-footer' ) ) :
			?>
			<footer id="colophon" class="<?php echo apply_filters( 'phase_site_footer_class', '' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped,Generic.Files.EndFileNewline.NotFound ?> site-footer" itemscope="itemscope" itemtype="http://schema.org/WPFooter">
				
			<div class="footer-inner clearfix" ">
					<?php get_sidebar( 'footer' ); ?>
				</div><!-- .footer-inner -->
			</footer><!-- footer#colophon .site-footer -->
		<?php endif; ?>
		<?php

			/**
			 * Fires the Phase bottom bar
			 */
			do_action( 'phase_bottom_bar' );
		?>
	</div><!-- #page .hfeed .site -->
</div><!-- .site-container -->
<?php
	/**
	 * Fires the Phase bottom bar
	 */
	do_action( 'phase_body_end' );
?>
<div id="footer">

<?php wp_footer(); ?>
</body>
</html>
