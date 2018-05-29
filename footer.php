<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */
global $redux_builder_uw_ar_restate;
$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	

				<footer class="site-footer" id="colophon">
				<div class="main-foot">
					<div class="container">

<div class="row">

	<div class="col-md-3">
	
					
		<img class="img-fluid" src="<?php echo $redux_builder_uw_ar_restate['ar-ftlogo']['url']; ?>" alt="">
		
		<p class="" style="margin:20px 0px;">
		<?php echo $redux_builder_uw_ar_restate['ft-deseditor']; ?>
		</p>

		<p class="" style="margin:20px 0px;">
		<?php echo $redux_builder_uw_ar_restate['ft-address']; ?>
		</p>

		<ul style="list-style:none;">
			<li><i class="fa fa-phone"></i> &nbsp;<?php echo $redux_builder_uw_ar_restate['ft-phone']; ?></li>
			<li><i class="fa fa-envelope"></i> &nbsp;<?php echo $redux_builder_uw_ar_restate['ft-mail']; ?></li>
		</ul>
	<br/>
		<ul class="list-inline foot_social ">

			<?php  if($redux_builder_uw_ar_restate['1agent_fb']){
        echo'<li class="list-inline-item"><a href="'. $redux_builder_uw_ar_restate['1agent_fb'].' "><i class="fa fa-facebook"></i></a></li>';
	}
	
	?>

	<?php
	 if($redux_builder_uw_ar_restate['1agent_tw']){
        echo '<li class="list-inline-item"><a href="'. $redux_builder_uw_ar_restate['1agent_tw'].' "><i class="fa fa-twitter"></i></a></li>';
    }
	?>

	<?php
	if($redux_builder_uw_ar_restate['1agent_li']){
        echo'<li class="list-inline-item"><a href="'. $redux_builder_uw_ar_restate['1agent_li'].' "><i class="fa fa-linkedin"></i></a></li>';
    }
	?>

	<?php
	 if($redux_builder_uw_ar_restate['1agent_ig']){
        echo'<li class="list-inline-item"><a href="'. $redux_builder_uw_ar_restate['1agent_ig'].' "><i class="fa fa-instagram"></i></a></li>';
    }
	?>

	<?php
	if($redux_builder_uw_ar_restate['1agent_ytube']){
		echo'<li class="list-inline-item"><a href="'. $redux_builder_uw_ar_restate['1agent_ytube'].' "><i class="fa fa-youtube"></i></a></li>';
    }
	?>


			</ul>

					</div><!--col end -->

	<div class="col-md-3">

					<div class="footmenu">

						<?php dynamic_sidebar( 'footmenu' ); ?>
					</div>
					

					</div><!--col end -->

	<div class="col-md-3">

					
						<?php dynamic_sidebar( 'recent-articles' ); ?>
					

					</div><!--col end -->

	<div class="col-md-3">

					
						Hello World
					

					</div><!--col end -->

</div><!-- row end -->

</div><!-- container end -->
</div>
<div class="copy-foot">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<p class="text-center" style="margin-bottom:0px;">
					<?php echo $redux_builder_uw_ar_restate['txsubfoot']; ?>
				</p>
			</div>
		</div>
	</div>
	
</div>
				</footer><!-- #colophon -->

			

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

