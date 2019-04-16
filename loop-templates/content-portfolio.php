<?php

$bransch_query = new WP_query([
    'post_type' => 'bransch',
]);
// $logo = get_field('logo');
// print_r($logo['url']);
?>

<div class="flex col d-flex justify-content-center">
	<div class="portfolio-box usp">
		<div class="thumbnail text-center">

			<?php $link = get_post_meta(get_the_id(), 'link', true);?>
			
				<?php if($link){?>				
					<?php the_post_thumbnail('portfolio-thumbnail', ['class'=> 'img-fluid']); ?>				
				<?php }?>

				<h1><?php the_title(); ?></h1>

				<?php the_terms(get_the_ID(),
					'bransch',
					__('Branch: ', 'understrap')
				); ?>

				<p><?php the_excerpt(); ?></p>
		</div>
	</div>
</div>


