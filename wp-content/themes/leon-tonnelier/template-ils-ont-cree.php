<?php /* Template Name: Ils ont créé Template */ get_header(); ?>

		<!-- section -->
		<section class="ils-ont-cree">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>


            <section class="artistes container">
                <div class="row">
                    <div class="col-lg-12">
	                     <h1><?php the_title(); ?></h1>
						 <p>Découvrez les artistes de l'association :</p>
						 <div class="row tous-les-artistes">
							 <?php
							  $the_query = new WP_Query( array('posts_per_page'=>12,
							                                  'post_type'=>'artistes',
							                                  'paged' => get_query_var('paged') ? get_query_var('paged') : 1)
							                             );
							                             ?>
							 <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
								 	<div class="col-lg-3 text-center artiste-case">
								 		<?php
											$imageData = wp_get_attachment_image_src(get_post_thumbnail_id ( $post_ID ), ''); ?>
											<div class="image-artiste" style="background-image: url('<?php echo $imageData[0]; ?> ')"></div>
											<h2 class="nom-artiste"><?php the_title(); ?> </h2>
											<p><strong>Art(s) :</strong> <?php the_field('arts'); ?></p>
											<a href="<?php echo get_permalink($artiste->ID)?>" class="link-artiste">Voir la page ›</a>
								 	</div>
							 <?php
							 endwhile;
							 ?>
		 				</div>
						<div class="pagination-artistes text-center">
							<?php
								 $big = 999999999; // need an unlikely integer
								  echo paginate_links( array(
									'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
									'format' => '?paged=%#%',
									'current' => max( 1, get_query_var('paged') ),
									'total' => $the_query->max_num_pages
								 ) );
								 wp_reset_postdata();
							 ?>
						</div>

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
