<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" class="container actualite-seule" <?php post_class(); ?>>
			<div class="row">

				<div class="col-lg-4 partie-image" >
					<?php $imageData = wp_get_attachment_image_src(get_post_thumbnail_id ( $post_ID ), ''); ?>
					<?php if ( has_post_thumbnail()) : ?>
						<div class="image-actualite" style="background-image: url('<?php echo $imageData[0]; ?> ')"></div>
					<?php endif; ?>
					<?php
						if (get_field('date_evenement')):
							$dateformatstring = "d F Y";
							$unixtimestamp = strtotime(get_field('date_evenement'));
							echo '<div class="date-event"><img src="'.get_template_directory_uri().'/img/calendar-alt.svg" alt="tag" style="width:13px; margin-right:5px;  margin-top: -5px;">'.date_i18n($dateformatstring, $unixtimestamp).'</div>';
						endif;
					 ?>
					<p class="category-name"> <img src="<?php echo get_template_directory_uri()?>/img/tag.svg" alt="tag" style="width:13px; margin-right:5px"><?php  the_category(', '); // Separated by commas ?></p>
					<a href=" <?php echo get_category_link(2) ?> " class="tous-actu">Voir toutes les actualités ›</a>
				</div>
				<div class="col-lg-8 partie-texte">
					<h1> <?php the_title(); ?> </h1>
					<?php the_content(); ?>
					<div class="next-previous">
						<div class="next"> <?php previous_post_link('%link', 'Actualité suivante &#8594;'); ?></div>
						<div class="previous"><?php next_post_link('%link', '&#8592; Actualité précédente'); ?></div>
					</div>
				</div>
			</div>

			<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>









		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

<?php get_template_part('prefooter');?>
<?php get_footer(); ?>
