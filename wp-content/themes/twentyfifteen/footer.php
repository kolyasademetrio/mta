<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<?php $locale = pll_current_language(); ?>

		</div><!-- site__main -->
	</div><!-- content__main -->


	<footer id="colophon" class="footer" role="contentinfo">
		<div class="footerTop">
			<div class="containerCenter short">
				<div class="footerTop__inner">
					<div class="footerTop__item">
						<a href="/" class="header__logoLink footer__logoLink">
							<span class="header__logoImgWrap">
								<img src="<?php the_field('logo', 'option'); ?>" alt="">
							</span>
							<span class="header__logoText">
								<?php the_field('text_logo_'.$locale, 'option'); ?>
							</span>
						</a>
					</div>
					<div class="footerTop__item">
						<div class="footerTop__itemTitle">
							<?php pll_e('Категории'); ?>
						</div>
						<nav class="footer__nav">
							<?php $menu_name = 'main_menu_'. $locale; ?>
							<?php
							wp_nav_menu( array(
								'theme_location'  => 'primary',
								'menu'            => 'main_menu_ru',
								'container'       => '',
								'container_class' => '',
								'container_id'    => '',
								'menu_class'      => 'footer__menu',
								'menu_id'         => '',
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'before'          => '',
								'after'           => '',
								'link_before' => '',
								'link_after'  => '',
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'depth'           => 0,
								'walker'          => '',
							) );
							?>
						</nav>
					</div>
					<div class="footerTop__item">
						<div class="footerTop__itemTitle">
							<?php pll_e('Продукция'); ?>
						</div>
						<?php
						$type = 'products';
						$args = array(
							'post_type' => $type,
							'post_status' => 'publish',
							'posts_per_page' => -1,
							'ignore_sticky_posts'=> true
						);
						$my_query = null;
						$my_query = new WP_Query($args);
						?>

						<?php if( $my_query->have_posts() ):?>
							<ul class="footerTop__productsList">
								<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
									<li class="footerTop__productsListItem">
										<a class="footerTop__productsLink" href="<?php the_permalink(); ?>">
											<?php the_title(); ?>
										</a>
									</li>
								<?php endwhile; ?>
							</ul>
							<?php
						endif;
						wp_reset_query();
						?>
					</div>
					<div class="footerTop__item">
						<div class="footerTop__itemTitle">
							<?php pll_e('Контакты'); ?>
						</div>
						<?php
						$contacts_addresses = get_field('contacts_addresses_'.$locale, 'option');
						$contacts_phones = get_field('contacts_phones_'.$locale, 'option');
						$contacts_emailes = get_field('contacts_emailes_'.$locale, 'option');
						?>
						<ul class="footerTop__contactsList">
							<?php if ( !empty($contacts_phones) ) : ?>
								<li class="footerTop__contactsListItem phone" style="background-image: url(<?php echo get_field('contacts__phones__icon'); ?>);">
									<?php foreach( $contacts_phones as $phone ) : ?>
										<a href="tel:<?php echo str_replace( array(' ', '(', ')', '-'), '', $phone['phone'] ); ?>"><?php echo $phone['phone']; ?></a>
									<?php endforeach; ?>
								</li>
							<?php endif; ?>
							<li class="footerTop__contactsListItem email" style="background-image: url(<?php echo get_field('contacts__emailes__icon'); ?>);">
								<?php foreach ( $contacts_emailes as $email ) : ?>
									<a href="mailto:<?php echo str_replace( array(' ', '(', ')', '-'), '', $email['email'] ); ?>"><?php echo $email['email']; ?></a>
								<?php endforeach; ?>
							</li>
							<?php if ( !empty($contacts_addresses) ) : ?>
								<li class="footerTop__contactsListItem address" style="background-image: url(<?php echo get_field('contacts__address__icon'); ?>);">
									<?php echo $contacts_addresses; ?>
								</li>
							<?php endif; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="footerBottom">
			<div class="containerCenter short">
				<div class="footerBottom__copyrightWrap">
					Все права защищены 2018. Разработка сайта <a href="https://www.seotm.com" title="Digital Agency SEOTM " class="footer__copyrightLink">Digital Agency SEOTM</a>
				</div>
			</div>
		</div>
	</footer><!-- .site-footer -->

</div><!-- wrapper__main -->

<?php wp_footer(); ?>

</body>
</html>
