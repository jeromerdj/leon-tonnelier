<?php /* Template Name: Home Template */ get_header(); ?>

		<!-- section -->
		<section class="accueil">



		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

            <div class="container slider-artiste">
				<?php if( get_field('image-1') ): ?>
                <div class="mise-en-avant d-flex align-items-center" style="background-image: url(' <?php the_field('image-1'); ?> ')">
					<?php if( get_field('nom-oeuvre-1') ): ?>
					<div class="infos-slider">
						<?php if( get_field('nom-oeuvre-1') ): ?>
						<h3><?php the_field('nom-oeuvre-1'); ?></h3>
						<?php endif; ?>
						<?php if( get_field('artiste-1') ): ?>
						<p>Artiste : <strong> <?php the_field('artiste-1'); ?></strong></p>
						<?php endif; ?>
						<?php if( get_field('date-realisation-1') ): ?>
						<p>Date : <strong> <?php the_field('date-realisation-1'); ?></strong></p>
						<?php endif; ?>
						<?php if( get_field('lien-oeuvre-1') ): ?>
						<a href="<?php the_field('lien-oeuvre-1'); ?>" class="btn-universel">Découvrir</a>
						<?php endif; ?>
					</div>
					<?php endif; ?>
                </div>
				<?php endif; ?>
				<?php if( get_field('image-2') ): ?>
                <div class="mise-en-avant d-flex align-items-center" style="background-image: url(' <?php the_field('image-2'); ?> ')">
					<?php if( get_field('nom-oeuvre-2') ): ?>
					<div class="infos-slider">
						<?php if( get_field('nom-oeuvre-2') ): ?>
						<h3><?php the_field('nom-oeuvre-2'); ?></h3>
						<?php endif; ?>
						<?php if( get_field('nom-artiste-2') ): ?>
						<p>Artiste : <strong> <?php the_field('nom-artiste-2'); ?></strong> </p>
						<?php endif; ?>
						<?php if( get_field('date-realisation-2') ): ?>
						<p>Date : <strong> <?php the_field('date-realisation-2'); ?></strong></p>
						<?php endif; ?>
						<?php if( get_field('lien-oeuvre-2') ): ?>
						<a href="<?php the_field('lien-oeuvre-2'); ?>" class="btn-universel">Découvrir</a>
						<?php endif; ?>
					</div>
					<?php endif; ?>
                </div>
				<?php endif; ?>
				<?php if( get_field('image-3') ): ?>
                <div class="mise-en-avant d-flex align-items-center" style="background-image: url(' <?php the_field('image-3'); ?> ')">
					<?php if( get_field('nom-oeuvre-3') ): ?>
					<div class="infos-slider">
						<?php if( get_field('nom-oeuvre-3') ): ?>
						<h3><?php the_field('nom-oeuvre-3'); ?></h3>
						<?php endif; ?>
						<?php if( get_field('nom-artiste-3') ): ?>
						<p>Artiste : <strong> <?php the_field('nom-artiste-3'); ?></strong> </p>
						<?php endif; ?>
						<?php if( get_field('date-realisation-3') ): ?>
						<p>Date : <strong> <?php the_field('date-realisation-3'); ?></strong></p>
						<?php endif; ?>
						<?php if( get_field('lien-oeuvre-3') ): ?>
						<a href="<?php the_field('lien-oeuvre-3'); ?>" class="btn-universel">Découvrir</a>
						<?php endif; ?>
					</div>
					<?php endif; ?>
                </div>
				<?php endif; ?>
            </div>
			<section class="description container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h1>Association Académie Léon Tonnelier</h1>
						<p><?php the_field('description'); ?></p>
						<a href="#" class="btn-universel">En savoir plus</a>
					</div>
				</div>
			</section>
			<div class="container-fluid actualites-fond wow fadeInUp" data-wow-delay="0.1s">
				<section class="container actualites">
					<div class="row">
						<div class="col-lg-12 col-sm-12 mx-auto">
							<h2 class="text-center wow fadeInUp" data-wow-delay="0.2s">Actualités</h2>
							<div class="row wow fadeInUp" data-wow-delay="0.4s">

								<?php
									$category_link = get_category_link($post->ID);
									$posts = get_posts( array(
									'posts_per_page' => 3,
									'post_type' => 'post', // Type articles
									'post_status' => 'publish', // statut public uniquement
									'orderby' => 'post_date', // trier par date
									'order' => 'DESC' // trier par date décroissante
									));

									foreach( $posts as $post) {
									echo '<div class="col-lg-4 col-12 single-actu">';
										echo get_the_post_thumbnail($post->ID);
										echo '<div  class="ss-img">';
											echo  '<h3>'.get_the_title($post->ID).'</h3>';
											echo  '<p>'.get_the_excerpt($post->ID, 140).'</p>';
											echo  '<div class="d-flex justify-content-between infos-bas">';
												echo  '<div class="">';
													if (get_field('date_evenement')):
														$dateformatstring = "d F Y";
														$unixtimestamp = strtotime(get_field('date_evenement'));
														echo '<div class="date-event"><img src="'.get_template_directory_uri().'/img/calendar-alt.svg" alt="tag" style="width:13px; margin-right:5px;  margin-top: -5px;">'.date_i18n($dateformatstring, $unixtimestamp).'</div>';
													endif;
													echo '<img src="'.get_template_directory_uri().'/img/tag.svg" alt="tag" style="width:13px; margin-right:5px"><em class="cat-name-actu">'.get_the_category($post->ID)[1]->cat_name.'</em> <br>';
												echo '</div>';
												echo  '<div class="lire-plus d-flex align-items-end">';
													echo '<a href="'.get_permalink($post->ID).'" class="suite"> Lire la suite ›</a>';
												echo '</div>';
											echo '</div>';
										echo '</div>';
									echo '</div>';
									wp_reset_postdata();
								}
								?>
							</div>
							<div class="text-center">
								 <a href="#" class="btn-universel text-center;">Plus d'actualités</a>
							</div>
						</div>
					</div>
				</section>
			</div>

			<section class="prix-mirabelle-accueil container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="icon-mirabelle">  <img src="<?php echo get_template_directory_uri()?>/img/prix-mirabelle.png" alt="Prix-Mirabelle"> </div>
						<h1>Prix Mirabelle</h1>
						<p><?php the_field('description_mirabelle'); ?></p>
						<a href="#" class="btn-universel">En savoir plus</a>
					</div>
				</div>
			</section>

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->

<?php get_template_part('prefooter');?>
<?php get_footer(); ?>
