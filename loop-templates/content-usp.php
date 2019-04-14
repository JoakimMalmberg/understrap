<div class="col-md">
	<div class="usp">

		<?php $icon = get_post_meta(get_the_id(), 'icon', true);
		if($icon){?>
			<span class="fa <?php echo $icon; ?>"></span>
		<?php }?>

		<h1><?php the_title(); ?></h1>
		<p><?php the_content(); ?></p>
		

		<?php $link = get_post_meta(get_the_id(), 'link', true);
		if($link){?>
			<a href="<?php echo $link ?>" class="btn btn-primary">
				<?php _e('Read More', 'understrap'); ?>
			</a>
		<?php }?>

	</div>
</div>
