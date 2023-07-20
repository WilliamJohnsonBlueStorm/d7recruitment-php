<?php include('data/similar-jobs-slider.php')?>

<div class="container">
    <div class="col-span-3 mb-8">
        <h2 class="text-h2 text-brand-gold uppercase font-bold mb-5">Similar Jobs</h2>
        <!-- Slider main container -->
        <div id="similar-jobs-swiper" class="swiper mb-8">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <?php foreach ($similarJobsSlides as $similarJobsSlide) {?>
                    <a href="<?php echo $similarJobsSlide['url']; ?>" title="<?php echo $similarJobsSlide['title']; ?>" aria-label="<?php echo $similarJobsSlide['title']; ?>" class="swiper-slide block rounded group p-5 border border-brand-white !h-auto transition-all duration-300 hover:border-brand-gold">
                        <div class="h-full transition-all duration-300 flex flex-col">
                            <h3 class="text-h3 text-brand-gold font-Novecento-sans font-bold uppercase mb-8 group-hover:text-brand-white transition-all duration-300"><?php echo $similarJobsSlide['title']; ?></h3>
                            <ul class="mb-8 h-full">
                                <li class="text-brand-white mb-2"><i class="fa-regular fa-clock text-brand-gold mr-2 w-[20px]"></i><?php echo $similarJobsSlide['type']; ?></li>
                                <li class="text-brand-white mb-2"><i class="fa-solid fa-location-pin text-brand-gold mr-2 w-[20px]"></i><?php echo $similarJobsSlide['location']; ?></li>
                                <li class="text-brand-white mb-2"><i class="fa-solid fa-sterling-sign text-brand-gold mr-2 w-[20px]"></i><?php echo $similarJobsSlide['pay']; ?></li>
                            </ul>
                            <span class="uppercase text-brand-gold font-bold inline-block lg:p-4 lg:border lg:border-brand-gold lg:w-fit lg:rounded lg:group-hover:bg-brand-gold lg:group-hover:text-brand-blue duration-300 transition-all">Job details <i class="fa-solid fa-arrow-right"></i></span>
                        </div>
                    </a>
                <?php } ?>
            </div>
        </div>
        <div class="hidden md:flex justify-between items-center">
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
</div>