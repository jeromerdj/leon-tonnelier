<?php get_header(); ?>

	<main role="main" class="container loop-articles">
		<!-- section -->
		<section>

			<h1>Actualités <span class="cat-titre"><?php if (is_category(4)) { echo '| '; single_cat_title(); } elseif (is_category(5)) { echo '| '; single_cat_title();} else { echo '| Toutes les actualités';} ?></span></h1>
			<div class="trier">
				<span>Trier : &nbsp;</span> <a href="<?php echo get_category_link(2)?>">Toutes les actualités</a>&nbsp; | &nbsp; <a href="<?php echo get_category_link(4); ?>">L'Académie organise</a>&nbsp; | &nbsp; <a href="<?php echo get_category_link(5); ?>">Au catalogue de nos adhérents</a>
			</div>


			<?php get_template_part('loop'); ?>


			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
