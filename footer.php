<?php
if (get_field('rental_page') || get_post_type(get_the_ID()) == 'rentals') {
    $footer_data = get_field('footer_rental', 'options');
} else {
    $footer_data = get_field('footer', 'options');
}
?>

	<footer class="footer container <?= (get_field('rental_page') || get_post_type(get_the_ID()) == 'rentals') ? 'footer_rental' : '' ?>">
		<div class="footer__about">
			<div class="footer__about__text">
				<?= wp_get_attachment_image( $footer_data['logo'], 'full' ) ?>
				<p><?= $footer_data['about']; ?></p>
			</div>
			<div class="footer__about__social-media">
				<p class="footer__about__social-media__follow-us">Follow Us</p>
				<div class="footer__about__social-media__links">
					<?php if ( !empty($footer_data['social_media_links']['linkedin']) ) : ?>		
						<a href="<?= $footer_data['social_media_links']['linkedin']; ?>">
							<img src="<?= get_template_directory_uri() ?>/assets/icons/in.svg" alt="linkedin">
						</a>
					<?php endif; ?>
					<?php if ( !empty($footer_data['social_media_links']['facebook']) ) : ?>		
						<a href="<?= $footer_data['social_media_links']['facebook']; ?>">
							<img src="<?= get_template_directory_uri() ?>/assets/icons/fb.svg" alt="facebook">
						</a>
					<?php endif; ?>
					<?php if ( !empty($footer_data['social_media_links']['instagram']) ) : ?>		
						<a href="<?= $footer_data['social_media_links']['instagram']; ?>">
							<img src="<?= get_template_directory_uri() ?>/assets/icons/insta.svg" alt="instagram">
						</a>
					<?php endif; ?>
					<?php if ( !empty($footer_data['social_media_links']['youtube']) ) : ?>		
						<a href="<?= $footer_data['social_media_links']['youtube']; ?>">
							<img src="<?= get_template_directory_uri() ?>/assets/icons/yt-white.svg" alt="youtube">
						</a>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="footer__quick-links">
			<p class="footer__quick-links__text">Quick Links</p>
			<?php
            if (get_field('rental_page') || get_post_type(get_the_ID()) == 'rentals') {
                wp_nav_menu([
                    'theme_location' => 'secondary-rental',
                    'depth' => '1'
                ]);
            } else {
                wp_nav_menu([
                    'theme_location' => 'secondary',
                    'depth' => '1'
                ]);
            }?>
		</div>
		<div class="footer__legal-links">
			<a href="<?= $footer_data['privacy_links']['privacy_policy'] ?>" target="_blank">Privacy Policy</a>
			<p>Developed by <a href="<?= $footer_data['privacy_links']['developers_url']['url'] ?>" target="<?= $footer_data['privacy_links']['developers_url']['target'] ?>">
				<?= (is_array($footer_data['privacy_links']['developers_url']) ? $footer_data['privacy_links']['developers_url']['title'] : '') ?>
			</a></p>
		</div>
    </footer>
	
	<?php wp_footer(); ?>
	
	</body>
</html>