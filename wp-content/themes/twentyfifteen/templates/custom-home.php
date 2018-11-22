<?php /* Template Name: CustomPage */ ?>

<?php get_header(); ?>

    <?php
    $about_bg = get_field('about_bg');
    $about_content = get_field('about_content');
    ?>
    <section class="section aboutUs" style="background-image: url(<?php echo !empty($about_bg) ? $about_bg : ''; ?>)">
        <div class="section__titleWrap left_line light">
            <div class="section__title"><?php pll_e('О компании'); ?></div>
        </div>
        <div class="section__content containerCenter short">
            <?php if ( !empty($about_content) ) : ?>
                <?php echo $about_content; ?>
            <?php endif; ?>
        </div>
    </section>

    <section class="section products">
        <div class="section__titleWrap right_line">
            <div class="section__title"><?php pll_e('Продукция'); ?></div>
        </div>
        <div class="section__content containerCenter">
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
                <ul class="products__list">
                <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                    <li class="products__item">
                        <a class="products__itemLink" href="<?php the_permalink(); ?>">
                            <?php if ( has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('product-featured-image'); ?>
                            <?php endif ?>
                            <span class="products__itemTitle">
                                <?php the_title(); ?>
                            </span>
                        </a>
                    </li>
                <?php endwhile; ?>
                </ul>
                <?php
            endif;
            wp_reset_query();
            ?>
        </div>
    </section>

    <?php
    $delivery_bg = get_field('delivery_bg');
    $delivery_content = get_field('delivery_content');
    $delivery_benefits = get_field('delivery_benefits');
    ?>
    <section class="section delivery" style="background-image: url(<?php echo !empty($delivery_bg) ? $delivery_bg : ''; ?>)">
        <div class="section__titleWrap left_line light">
            <div class="section__title"><?php pll_e('Доставка'); ?></div>
        </div>
        <div class="section__content containerCenter">
            <?php if ( !empty( $delivery_content ) ) : ?>
                <div class="delivery_content">
                    <?php echo $delivery_content; ?>
                </div>
            <?php endif; ?>

            <?php if ( !empty( $delivery_benefits ) ) : ?>
                <div class="delivery__benefits">
                    <div class="delivery__benefitsTitle">
                        <?php pll_e('Преимущества доставки'); ?>
                    </div>
                    <ul class="delivery__benefitsList">
                        <?php foreach( $delivery_benefits as $delivery_benefit ) : ?>
                            <li class="delivery__benefitItem">
                                <div class="delivery__benefitItem_imgWrap">
                                    <img src="<?php echo $delivery_benefit['img']; ?>" alt="">
                                </div>
                                <div class="delivery__benefitItem_title">
                                    <?php echo $delivery_benefit['title']; ?>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <?php
    $partners = get_field('partners');
    ?>
    <section class="section partners">
        <div class="section__titleWrap right_line">
            <div class="section__title"><?php pll_e('Наши партнеры'); ?></div>
        </div>
        <div class="section__content containerCenter">
            <?php if ( !empty( $partners ) ) : ?>
                <ul class="partners__list">
                    <?php foreach( $partners as $partner ) : ?>
                        <li class="partner__item">
                            <a href="<?php echo $partner['link']; ?>" class="partner__link">
                                <img src="<?php echo $partner['img']; ?>" alt="">
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
    </section>


<?php get_footer(); ?>