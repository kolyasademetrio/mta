<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div class="notfoundPage containerCenter">
		<div class="notfound__top">404</div>
		<div class="notfound__bottom">Ошибка 404. Страница не найдена</div>
		<div class="notfound__btnWrap"><a href="<?php echo get_home_url(); ?>" class="btn_main">На главную</a></div>
	</div>

<?php get_footer(); ?>
