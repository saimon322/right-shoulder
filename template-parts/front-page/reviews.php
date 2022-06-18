<section class="reviews section section--big" id="reviews">
    <div class="container">
        <h2 class="reviews__title wow fadeInUp">
            Закрываем дела.
            <span>За это нас ценят.</span>
        </h2>
        <div class="reviews__slider swiper">
            <div class="swiper-wrapper">
                <?php if( have_rows('reviews', 'option') ): ?>
                    <?php while( have_rows('review', 'option') ): the_row(); ?>

                        <div class="reviews__item review swiper-slide">
                            <div class="review__video">
                                <div class="review__video-bg">
                                    <picture class="review__video-poster">
                                        <source srcset="<?= DIST_URI ?>/img/base/review.webp"
                                            type="image/webp">
                                        <img src="<?= DIST_URI ?>/img/base/review.jpg"
                                            data-src="<?= get_sub_field('preview', 'option'); ?>"
                                            alt="">
                                    </picture>
                                    <svg width="20" height="27">
                                        <use xlink:href="<?= DIST_URI ?>/img/icons/svg-sprite.svg#play"></use>
                                    </svg>
                                </div>
                                <video src="<?= get_sub_field('title', 'option'); ?>"></video>
                            </div>
                            <div class="review__content">
                                <div class="review__name">
                                    <?= get_sub_field('name', 'option'); ?>
                                </div>
                                <div class="review__type">
                                    <?= get_sub_field('type', 'option'); ?>
                                </div>
                                <div class="review__text">
                                    <?= get_sub_field('text', 'option'); ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>


            </div>
            <?php get_template_part('template-parts/components/swiper-navigation'); ?>
        </div>
    </div>
</section>
