<?php $component = \ColibriWP\Theme\View::getData( 'component' ); ?>
<div class="wp-block wp-block-kubio-navigation  position-relative wp-block-kubio-navigation__outer <?php echo $component->printNavigationClasses(); ?> virtuai-front-header__k__Gp3qTlxXlu-outer virtuai-local-1-outer" data-kubio="kubio/navigation" id="navigation">
	<?php virtuai_theme()->get('front-top-bar')->render(); ?>
	<div class="wp-block wp-block-kubio-navigation-section  position-relative wp-block-kubio-navigation-section__nav virtuai-front-header__k__xLwdIMLPC_l-nav virtuai-local-17-nav h-section h-navigation <?php echo $component->printNavigationTypeClasses(); ?>" data-kubio="kubio/navigation-section" data-kubio-component="navigation" data-kubio-settings="{&quot;sticky&quot;:false,&quot;overlap&quot;:false}">
		<div class="position-relative wp-block-kubio-navigation-section__nav-section virtuai-front-header__k__xLwdIMLPC_l-nav-section virtuai-local-17-nav-section    <?php echo $component->printContainerClasses(); ?>">
			<div class="wp-block wp-block-kubio-navigation-items  position-relative wp-block-kubio-navigation-items__outer virtuai-front-header__k__DqcL_YF9LKJ-outer virtuai-local-18-outer" data-kubio="kubio/navigation-items" data-nav-normal="true">
				<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container virtuai-front-header__k__MqErEXZ17Jm-container virtuai-local-19-container gutters-row-lg-0 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-2 gutters-row-v-0" data-kubio="kubio/row">
					<div class="position-relative wp-block-kubio-row__inner virtuai-front-header__k__MqErEXZ17Jm-inner virtuai-local-19-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-0 gutters-col-md-0 gutters-col-v-md-0 gutters-col-2 gutters-col-v-0">
						<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container virtuai-front-header__k__SFXC9Ze09eu-container virtuai-local-20-container d-flex h-col-lg-auto h-col-md-auto h-col" data-kubio="kubio/column">
							<div class="position-relative wp-block-kubio-column__inner virtuai-front-header__k__SFXC9Ze09eu-inner virtuai-local-20-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-0 h-px-md-2 v-inner-md-0 h-px-2 v-inner-2">
								<div class="position-relative wp-block-kubio-column__align virtuai-front-header__k__SFXC9Ze09eu-align virtuai-local-20-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
									<?php virtuai_theme()->get('logo')->render(array (
  'wrapper_class' => 'wp-block wp-block-kubio-logo position-relative wp-block-kubio-logo__container  kubio-logo-direction-row virtuai-front-header__k__0xSC3AT64-container virtuai-local--container',
  'logo_image_class' => 'position-relative wp-block-kubio-logo__image  kubio-logo-image  virtuai-front-header__k__0xSC3AT64-image virtuai-local--image',
  'alt_logo_image_class' => 'position-relative wp-block-kubio-logo__alternateImage kubio-logo-image kubio-alternate-logo-image   virtuai-front-header__k__0xSC3AT64-alternateImage virtuai-local--alternateImage',
  'logo_text_class' => 'position-relative wp-block-kubio-logo__text  virtuai-front-header__k__0xSC3AT64-text virtuai-local--text',
)); ?>
								</div>
							</div>
						</div>
						<div class="wp-block wp-block-kubio-column  kubio-hide-on-mobile position-relative wp-block-kubio-column__container virtuai-front-header__k__DJ3dK9XoVZ-container virtuai-local-22-container d-flex h-col-lg h-col-md h-col-auto" data-kubio="kubio/column">
							<div class="position-relative wp-block-kubio-column__inner virtuai-front-header__k__DJ3dK9XoVZ-inner virtuai-local-22-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-0 v-inner-0">
								<div class="position-relative wp-block-kubio-column__align virtuai-front-header__k__DJ3dK9XoVZ-align virtuai-local-22-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
									<div class="wp-block wp-block-kubio-spacer  position-relative wp-block-kubio-spacer__container virtuai-front-header__k__mRmagmI3LJv-container virtuai-local-23-container" data-kubio="kubio/spacer"></div>
								</div>
							</div>
						</div>
						<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container virtuai-front-header__k__ZEkYpBrx7RA-container virtuai-local-24-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
							<div class="position-relative wp-block-kubio-column__inner virtuai-front-header__k__ZEkYpBrx7RA-inner virtuai-local-24-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-2 v-inner-2">
								<div class="position-relative wp-block-kubio-column__align virtuai-front-header__k__ZEkYpBrx7RA-align virtuai-local-24-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
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
