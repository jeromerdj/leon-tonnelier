<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" class="container artiste-seul" <?php post_class(); ?>>
			<div class="row">
                <div class="col-lg-12">
                    <h1><?php the_title(); ?></h1>
                    <p><strong>Art(s) :</strong> <?php the_field('arts'); ?></p>
                    <?php if ( get_field('retrouver') ): ?>
                        <p><strong>Où le retrouver : </strong><?php the_field('retrouver') ?> </p>
                    <?php endif; ?>
                    <p><?php the_content(); ?></p>

                    <div class="row galerie-artiste">
                        <?php
                            //Get the images ids from the post_metadata
                            $images = acf_photo_gallery('galerie_artiste', $post->ID);
                            //Check if return array has anything in it
                            if( count($images) ):
                                //Cool, we got some data so now let's loop over it
                                foreach($images as $image):
                                    $id = $image['id']; // The attachment id of the media
                                    $title = $image['title']; //The title
                                    $caption= $image['caption']; //The caption
                                    $full_image_url_1= $image['full_image_url']; //Full size image url
                                    $full_image_url_2 = acf_photo_gallery_resize_image($full_image_url_1, 262, 160); //Resized size to 262px width by 160px height image url
                                    $thumbnail_image_url= $image['thumbnail_image_url']; //Get the thumbnail size image url 150px by 150px
                                    $url= $image['url']; //Goto any link when clicked
                                    $target= $image['target']; //Open normal or new tab
                                    $alt = get_field('photo_gallery_alt', $id); //Get the alt which is a extra field (See below how to add extra fields)
                                    $class = get_field('photo_gallery_class', $id); //Get the class which is a extra field (See below how to add extra fields)
                        ?>

                            <div class="col-lg-3">

                                    <?php if( !empty($url) ){ ?><a href="<?php echo $url; ?>" <?php echo ($target == 'true' )? 'target="_blank"': ''; ?>><?php } ?>
                                        <a href="<?php echo $full_image_url_1; ?>"><img src="<?php echo $full_image_url_2; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>"></a>
                                    <?php if( !empty($url) ){ ?></a><?php } ?>

                            </div>
                        <?php endforeach; endif; ?>
                    </div>
                </div>
			</div>
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
