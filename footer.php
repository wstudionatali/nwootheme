<?php
/**
 * Footer template
 *
 * @package Advanced WooCommerce Theme
 */

$menu_class = new n_woo_theme_Menus();

$footer_menu_id = $menu_class->get_menu_id( 'nwt-footer-menu' );
if ($footer_menu_id) {
	$footer_menus = wp_get_nav_menu_items( $footer_menu_id );
  } else {
	$footer_menus = array();
  }

?>


<footer>
	<div class="footer bg-gray-800 p-6 text-white">
		<div class="container mx-auto">
			<div class="footer-text flex-none md:flex items-center justify-between">
				<p>© wstudionatali 2023</p>
				<ul>
					<?php


					if ( ! empty( $footer_menus ) && is_array( $footer_menus ) ) {
						foreach ( $footer_menus as $footer_menu ) {
							printf(
								'<li><a class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-blue-400 mr-10" href="%1$s">%2$s</a></li>',
								esc_url( $footer_menu->url ),
								esc_html( $footer_menu->title )
							);
						}

					}

					?>
				</ul>
			</div>
			<ul class="social-links mt-8 flex align-center">
				<li class="mt-1 p-1 bg-purple"><a href="https://www.facebook.com/codeytek" class="fa fa-facebook" target="_blank">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 18 18">
							<path d="M2.637 18h5.87v-6.398H6.399v-2.11h2.11V6.855a2.64 2.64 0 012.637-2.636h2.636v2.11h-2.11c-.581 0-1.054.472-1.054 1.054v2.11h3.07l-.351 2.109h-2.719V18h4.746A2.64 2.64 0 0018 15.363V2.637A2.64 2.64 0 0015.363 0H2.637A2.64 2.64 0 000 2.637v12.726A2.64 2.64 0 002.637 18zM1.055 2.637c0-.871.71-1.582 1.582-1.582h12.726c.871 0 1.582.71 1.582 1.582v12.726c0 .871-.71 1.582-1.582 1.582h-3.691v-4.289h2.555l.703-4.219h-3.258V7.383h3.164V3.164h-3.691a3.696 3.696 0 00-3.692 3.691v1.582h-2.11v4.22h2.11v4.288H2.637c-.871 0-1.582-.71-1.582-1.582zm0 0"
							      fill="#fff"></path>
						</svg>
					</a></li>
				<li class="ml-2 mt-1 p-1 bg-purple"><a href="https://twitter.com/codeytek" target="_blank">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 18 18">
							<path d="M18 1.969c-1.133.05-1.11.047-1.234.058L17.434.11s-2.09.774-2.622.91C13.418-.233 11.348-.288 9.864.622 8.653 1.367 8 2.648 8.22 4.145 5.859 3.816 3.87 2.695 2.3.813L1.805.215l-.371.68a4.142 4.142 0 00-.442 2.773c.078.379.207.742.387 1.082l-.426-.164-.05.71c-.051.724.19 1.567.644 2.259.129.195.293.406.5.617l-.219-.031.27.816a3.957 3.957 0 002.039 2.36c-.953.402-1.719.66-2.98 1.074L0 12.773l1.066.582c.407.223 1.844.965 3.262 1.188 3.156.496 6.711.09 9.102-2.063 2.015-1.816 2.675-4.394 2.539-7.082-.02-.406.09-.793.312-1.093.45-.594 1.715-2.332 1.719-2.336zm-2.559 1.707a2.712 2.712 0 00-.523 1.777c.137 2.707-.602 4.809-2.191 6.246-1.864 1.672-4.864 2.332-8.235 1.801-.61-.094-1.242-.309-1.762-.523 1.06-.364 1.875-.688 3.196-1.313l1.84-.871-2.036-.129c-.972-.062-1.785-.535-2.28-1.305.265-.011.519-.054.773-.129l1.941-.539-1.957-.48a2.915 2.915 0 01-2.164-2.086c.195.05.422.09.793.125l1.809.18L3.21 5.313c-1.035-.81-1.45-2.02-1.145-3.184 3.227 3.348 7.012 3.094 7.395 3.183-.086-.816-.086-.816-.11-.894-.488-1.727.583-2.602 1.067-2.898 1.008-.622 2.605-.715 3.715.308a.95.95 0 00.867.23c.27-.066.496-.14.71-.218l-.452 1.3h.582c-.11.15-.242.325-.399.536zm0 0"
							      fill="#fff"></path>
						</svg>
					</a></li>
				<li class="ml-2 mt-1 p-1 bg-purple"><a href="https://youtube.com/ImranSayedDev" class="fa fa-youtube" target="_blank">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 18 18">
							<g fill="#fff">
								<path d="M2.637 13.71h12.726A2.64 2.64 0 0018 11.075V2.637A2.64 2.64 0 0015.363 0H2.637A2.64 2.64 0 000 2.637v8.437a2.64 2.64 0 002.637 2.637zM1.055 2.638c0-.871.71-1.582 1.582-1.582h12.726c.871 0 1.582.71 1.582 1.582v8.437c0 .871-.71 1.582-1.582 1.582H2.637c-.871 0-1.582-.71-1.582-1.582zm0 0"></path>
								<path d="M6.363 3.324v7.168l6.348-3.644zm1.055 1.79l3.144 1.75-3.144 1.804zm0 0"></path>
							</g>
						</svg>
					</a></li>
				<li class="ml-2 mt-1 p-1 bg-purple"><a href="https://www.instagram.com/codeytek_academy/" class="fa fa-instagram"
				                    target="_blank">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 18 18">
							<g fill="#fff">
								<path d="M2.637 18h12.726A2.64 2.64 0 0018 15.363V2.637A2.64 2.64 0 0015.363 0H2.637A2.64 2.64 0 000 2.637v12.726A2.64 2.64 0 002.637 18zM1.055 2.637c0-.871.71-1.582 1.582-1.582h12.726c.871 0 1.582.71 1.582 1.582v12.726c0 .871-.71 1.582-1.582 1.582H2.637c-.871 0-1.582-.71-1.582-1.582zm0 0"></path>
								<path d="M9 13.746A4.751 4.751 0 0013.746 9 4.751 4.751 0 009 4.254 4.751 4.751 0 004.254 9 4.751 4.751 0 009 13.746zM9 5.31A3.696 3.696 0 0112.691 9 3.696 3.696 0 019 12.691 3.696 3.696 0 015.309 9 3.696 3.696 0 019 5.309zm0 0M14.273 5.309c.872 0 1.582-.711 1.582-1.582 0-.872-.71-1.582-1.582-1.582-.87 0-1.582.71-1.582 1.582 0 .87.711 1.582 1.582 1.582zm0-2.11a.53.53 0 01.528.528.53.53 0 01-.528.527.53.53 0 01-.527-.527.53.53 0 01.527-.528zm0 0"></path>
							</g>
						</svg>
					</a></li>
			</ul>
		</div>
	</div>

</footer>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>
