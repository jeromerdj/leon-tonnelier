<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="container">
		<div class="row">
			<div class="col-lg-2 partie-image" >
				<?php $imageData = wp_get_attachment_image_src(get_post_thumbnail_id ( $post_ID ), ''); ?>
				<?php if ( has_post_thumbnail()) : ?>
					<div class="image-actualite" style="background-image: url('<?php echo $imageData[0]; ?> ')"></div>
				<?php endif; ?>
			</div>
			<div class="col-lg-10 partie-texte">
				<h2>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h2>
				<?php
					if (get_field('date_evenement')):
						$dateformatstring = "d F Y";
						$unixtimestamp = strtotime(get_field('date_evenement'));
						echo '<div class="date-event"><img src="'.get_template_directory_uri().'/img/calendar-alt.svg" alt="tag" style="width:13px; margin-right:5px;  margin-top: -5px;">'.date_i18n($dateformatstring, $unixtimestamp).'</div>';
					endif;
				 ?>
				<p class="category-name"> <img src="<?php echo get_template_directory_uri()?>/img/tag.svg" alt="tag" style="width:13px; margin-right:5px"><?php  the_category(', '); // Separated by commas ?></p>
				<?php the_excerpt(); ?>
				&nbsp;&nbsp;<?php echo '<a href="'.get_permalink($post->ID).'" class="suite">Lire la suite ›</a>' ?>
			</div>
		</div>





	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
