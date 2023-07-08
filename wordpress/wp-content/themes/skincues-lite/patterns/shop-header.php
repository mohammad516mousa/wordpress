<?php
 /**
  * Title: Shop Header
  * Slug: skincues-lite/shop-header
  * Categories: skincues-lite, header
  */
?>

<!-- wp:group {"align":"full","className":"no-margin-top header-media-inner-post","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull no-margin-top header-media-inner-post">
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"inherit":false}} -->
	<div class="wp-block-group alignfull" style="padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px;">
		<!-- wp:cover {"url":"<?php echo esc_url( get_parent_theme_file_uri( '/assets/images/header-image.jpg' ) ); ?>","dimRatio":20,"overlayColor":"body-text"} -->
		<div class="wp-block-cover">
			<span aria-hidden="true" class="wp-block-cover__background has-body-text-background-color has-background-dim-20 has-background-dim"></span>
			<img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_parent_theme_file_uri( '/assets/images/header-image.jpg' ) ); ?>" data-object-fit="cover" />
			<div class="wp-block-cover__inner-container">
				<!-- wp:group {"layout":{"inherit":true,"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:group {"className":"alignwide"} -->
					<div class="wp-block-group alignwide">
						<!-- wp:heading {"level":1,"className":"has-text-align-center wp-block-post-title"} -->
						<h1 class="has-text-align-center wp-block-post-title"><?php esc_html_e ( 'The Shop', 'skincues-lite' ); ?></h1>
						<!-- /wp:heading -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
		</div>
		<!-- /wp:cover -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->


