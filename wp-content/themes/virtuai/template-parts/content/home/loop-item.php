<div class="<?php virtuai_print_archive_entry_class('wp-block wp-block-kubio-query-loop-item  position-relative wp-block-kubio-query-loop-item__container virtuai-home__k__fx1L_l5Ny--container virtuai-local-273-container d-flex   '); ?>"" data-kubio="kubio/query-loop-item">
	<div class="position-relative wp-block-kubio-query-loop-item__inner virtuai-home__k__fx1L_l5Ny--inner virtuai-local-273-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-2 h-px-md-2 v-inner-md-3 h-px-2 v-inner-2">
		<div class="position-relative wp-block-kubio-query-loop-item__align virtuai-home__k__fx1L_l5Ny--align virtuai-local-273-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
			<figure class="wp-block wp-block-kubio-post-featured-image  position-relative wp-block-kubio-post-featured-image__container virtuai-home__k__6duco09NdG-container virtuai-local-274-container h-aspect-ratio--1-1 <?php virtuai_post_missing_featured_image_class(); ?>" data-kubio="kubio/post-featured-image" data-kubio-settings="{{kubio_settings_value}}">
				<?php if(has_post_thumbnail()): ?>
				<img class='position-relative wp-block-kubio-post-featured-image__image virtuai-home__k__6duco09NdG-image virtuai-local--image' src='<?php echo esc_url(get_the_post_thumbnail_url());?>' />
				<?php endif; ?>
				<div class="position-relative wp-block-kubio-post-featured-image__inner virtuai-home__k__6duco09NdG-inner virtuai-local-274-inner">
					<div class="position-relative wp-block-kubio-post-featured-image__align virtuai-home__k__6duco09NdG-align virtuai-local-274-align h-y-container align-self-lg-end align-self-md-end align-self-end">
						<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container virtuai-home__k__t3mOXK30Ur-container virtuai-local-275-container gutters-row-lg-0 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-0 gutters-row-v-0" data-kubio="kubio/row">
							<div class="position-relative wp-block-kubio-row__inner virtuai-home__k__t3mOXK30Ur-inner virtuai-local-275-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-0 gutters-col-md-0 gutters-col-v-md-0 gutters-col-0 gutters-col-v-0">
								<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container virtuai-home__k__B64sGT8O5M-container virtuai-local-276-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
									<div class="position-relative wp-block-kubio-column__inner virtuai-home__k__B64sGT8O5M-inner virtuai-local-276-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-0 v-inner-0">
										<div class="position-relative wp-block-kubio-column__align virtuai-home__k__B64sGT8O5M-align virtuai-local-276-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-start align-self-md-start align-self-start">
											<div class="wp-block wp-block-kubio-post-meta  position-relative wp-block-kubio-post-meta__metaDataContainer virtuai-home__k__Xy3_sNqX1-metaDataContainer virtuai-local-277-metaDataContainer h-blog-meta" data-kubio="kubio/post-meta">
												<span class="metadata-item">
													<a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta("ID"))); ?>">
														<?php echo esc_html(get_the_author_meta("display_name",get_post_field("post_author"))); ?>
													</a>
												</span>
											</div>
										</div>
									</div>
								</div>
								<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container virtuai-home__k__jaF-YwdJC-container virtuai-local-278-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
									<div class="position-relative wp-block-kubio-column__inner virtuai-home__k__jaF-YwdJC-inner virtuai-local-278-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-0 v-inner-0">
										<div class="position-relative wp-block-kubio-column__align virtuai-home__k__jaF-YwdJC-align virtuai-local-278-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-start align-self-md-start align-self-start">
											<div class="wp-block wp-block-kubio-post-meta  position-relative wp-block-kubio-post-meta__metaDataContainer virtuai-home__k__igqIz8_zUB-metaDataContainer virtuai-local-279-metaDataContainer h-blog-meta" data-kubio="kubio/post-meta">
												<span class="metadata-item">
													<a href="<?php echo esc_url(get_day_link(get_post_time( 'Y' ),get_post_time( 'm' ),get_post_time( 'j' ))); ?>">
														<?php echo esc_html(get_the_date('F j, Y')); ?>
													</a>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</figure>
			<a class="position-relative wp-block-kubio-post-title__link virtuai-home__k__yndIzn0LAb-link virtuai-local-280-link d-block" href="<?php echo esc_url(get_the_permalink()); ?>">
				<h4 class="wp-block wp-block-kubio-post-title  position-relative wp-block-kubio-post-title__container virtuai-home__k__yndIzn0LAb-container virtuai-local-280-container" data-kubio="kubio/post-title">
					<?php the_title(); ?>
				</h4>
			</a>
			<p class="wp-block wp-block-kubio-post-excerpt  position-relative wp-block-kubio-post-excerpt__text virtuai-home__k__fVTtKcA3Zp-text virtuai-local-281-text" data-kubio="kubio/post-excerpt">
				<?php virtuai_post_excerpt(array (
  'max_length' => 16,
)); ?>
			</p>
		</div>
	</div>
</div>
