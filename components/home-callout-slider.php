<?php include('data/home-slider.php') ?>

<div class="homepage-callouts-slider">
    <!-- Slider main container -->
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <?php foreach ($homeSwiperSlides as $homeSwiperSlide) {?>
                <a href="<?php echo $homeSwiperSlide['url']; ?>" title="<?php echo $homeSwiperSlide['title']; ?>" aria-label="<?php echo $homeSwiperSlide['title']; ?>" class="swiper-slide block rounded overflow-hidden group h-auto">
                    <img src="<?php echo $homeSwiperSlide['img']; ?>" alt="health and safety" class="h-[250px] lg:h-[301px]">

                    <div class="lg:p-5 group-hover:bg-brand-white h-full transition-all duration-300">
                        <h3 class="text-h3 text-brand-gold font-Novecento-sans font-bold uppercase mb-3 group-hover:text-brand-darkgold transition-all duration-300"><?php echo $homeSwiperSlide['title']; ?></h3>
                        <p class="text-brand-white group-hover:text-brand-darkblue"><?php echo $homeSwiperSlide['description']; ?></p>
                    </div>
                </a>
            <?php } ?>
        </div>
    </div>
    <div class="hidden md:flex justify-between items-center xl:hidden">
        <div class="swiper-pagination !static text-left !w-auto [&>.swiper-pagination-bullet]:w-[12px] [&>.swiper-pagination-bullet]:h-[12px] [&>.swiper-pagination-bullet-active]:bg-brand-white"></div>
        <div class="flex">
            <button class="home-swiper-button-prev !static text-[50px] text-brand-white mr-16 disabled:opacity-50 transition">
                <i class="fa-solid fa-arrow-left"></i>
            </button>
            <button class="home-swiper-button-next !static text-[50px] text-brand-white disabled:opacity-50 transition">
                <i class="fa-solid fa-arrow-right"></i>
            </button>
        </div>
    </div>
</div>