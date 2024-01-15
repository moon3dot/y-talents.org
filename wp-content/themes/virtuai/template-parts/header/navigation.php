<?php $component = \ColibriWP\Theme\View::getData( 'component' ); ?>
<div class="wp-block wp-block-kubio-navigation  position-relative wp-block-kubio-navigation__outer <?php echo $component->printNavigationClasses(); ?> virtuai-header__k__2fQGLGz-HNX-outer virtuai-local-651-outer" data-kubio="kubio/navigation" id="navigation">
	<?php virtuai_theme()->get('inner-top-bar')->render(); ?>
	<div class="wp-block wp-block-kubio-navigation-section  position-relative wp-block-kubio-navigation-section__nav virtuai-header__k__JS8g8pQ3cpl-nav virtuai-local-667-nav h-section h-navigation <?php echo $component->printNavigationTypeClasses(); ?>" data-kubio="kubio/navigation-section" data-kubio-component="navigation" data-kubio-settings="{&quot;sticky&quot;:false,&quot;overlap&quot;:false}">
		<div class="position-relative wp-block-kubio-navigation-section__nav-section virtuai-header__k__JS8g8pQ3cpl-nav-section virtuai-local-667-nav-section    <?php echo $component->printContainerClasses(); ?>">
			<div class="wp-block wp-block-kubio-navigation-items  position-relative wp-block-kubio-navigation-items__outer virtuai-header__k__FdIVxyuM_Ng-outer virtuai-local-668-outer" data-kubio="kubio/navigation-items" data-nav-normal="true">
				<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container virtuai-header__k__VFt6boPbl_8-container virtuai-local-669-container gutters-row-lg-0 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-2 gutters-row-v-0" data-kubio="kubio/row">
					<div class="position-relative wp-block-kubio-row__inner virtuai-header__k__VFt6boPbl_8-inner virtuai-local-669-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-0 gutters-col-md-0 gutters-col-v-md-0 gutters-col-2 gutters-col-v-0">
						<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container virtuai-header__k__UP_59R8iE46-container virtuai-local-670-container d-flex h-col-lg-auto h-col-md-auto h-col" data-kubio="kubio/column">
							<div class="position-relative wp-block-kubio-column__inner virtuai-header__k__UP_59R8iE46-inner virtuai-local-670-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-0 h-px-md-2 v-inner-md-0 h-px-2 v-inner-2">
								<div class="position-relative wp-block-kubio-column__align virtuai-header__k__UP_59R8iE46-align virtuai-local-670-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
									<?php virtuai_theme()->get('logo')->render(array (
  'wrapper_class' => 'wp-block wp-block-kubio-logo position-relative wp-block-kubio-logo__container  kubio-logo-direction-row virtuai-header__k__fk3pCVZFc-_-container virtuai-local--container',
  'logo_image_class' => 'position-relative wp-block-kubio-logo__image  kubio-logo-image  virtuai-header__k__fk3pCVZFc-_-image virtuai-local--image',
  'alt_logo_image_class' => 'position-relative wp-block-kubio-logo__alternateImage kubio-logo-image kubio-alternate-logo-image   virtuai-header__k__fk3pCVZFc-_-alternateImage virtuai-local--alternateImage',
  'logo_text_class' => 'position-relative wp-block-kubio-logo__text  virtuai-header__k__fk3pCVZFc-_-text virtuai-local--text',
)); ?>
								</div>
							</div>
						</div>
						<div class="wp-block wp-block-kubio-column  kubio-hide-on-mobile position-relative wp-block-kubio-column__container virtuai-header__k__wgaYHzmhuTJ-container virtuai-local-672-container d-flex h-col-lg h-col-md h-col-auto" data-kubio="kubio/column">
							<div class="position-relative wp-block-kubio-column__inner virtuai-header__k__wgaYHzmhuTJ-inner virtuai-local-672-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-0 v-inner-0">
								<div class="position-relative wp-block-kubio-column__align virtuai-header__k__wgaYHzmhuTJ-align virtuai-local-672-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
									<div class="wp-block wp-block-kubio-spacer  position-relative wp-block-kubio-spacer__container virtuai-header__k__ULlVqBgSryJ-container virtuai-local-673-container" data-kubio="kubio/spacer"></div>
								</div>
							</div>
						</div>
						<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container virtuai-header__k__u-7xX2F5slD-container virtuai-local-674-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
							<div class="position-relative wp-block-kubio-column__inner virtuai-header__k__u-7xX2F5slD-inner virtuai-local-674-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-2 v-inner-2">
								<div class="position-relative wp-block-kubio-column__align virtuai-header__k__u-7xX2F5slD-align virtuai-local-674-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
									<?php virtuai_theme()->get('header-menu')->render(); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
