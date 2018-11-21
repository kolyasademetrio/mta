<?php /* Template Name: CustomPage */ ?>

<?php get_header(); ?>

    <section class="section aboutUs" style="background-image: url(<?php echo !empty(get_field('about_bg')) ? get_field('about_bg') : ''; ?>)">
        <div class="section__titleWrap left_line light">
            <div class="section__title">О компании</div>
        </div>
        <div class="section__content containerCenter short">
            <?php if ( !empty(get_field('about_content')) ) : ?>
                <?php echo get_field('about_content'); ?>
            <?php endif; ?>
        </div>
    </section>

<?php get_footer(); ?>