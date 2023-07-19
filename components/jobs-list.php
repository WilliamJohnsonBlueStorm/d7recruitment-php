<?php include ('data/jobs-list.php'); ?>

<div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
    <?php foreach ($availableJobs as $availableJob) {?>
        <a href="<?php echo $availableJob['url']; ?>" title="<?php echo $availableJob['title']; ?>" aria-label="<?php echo $availableJob['title']; ?>" class="p-5 border border-brand-white rounded group flex flex-col">
            <h3 class="text-brand-gold text-h3 font-bold uppercase group-hover:text-brand-white transition-all duration-300 mb-8"><?php echo $availableJob['title']; ?></h3>
            <ul class="mb-5">
                <li class="text-brand-white">
                    <i class="fa-regular fa-clock text-brand-gold mr-2 w-[20px]"></i><?php echo $availableJob['type']; ?>
                </li>
                <li class="text-brand-white">
                    <i class="fa-solid fa-location-pin text-brand-gold mr-2 w-[20px]"></i><?php echo $availableJob['location']; ?>
                </li>
                <li class="text-brand-white">
                    <i class="fa-solid fa-sterling-sign text-brand-gold mr-2 w-[20px]"></i><?php echo $availableJob['pay']; ?>
                </li>
            </ul>
            <p class="hidden lg:block text-brand-white mb-5 h-full">
                <?php echo $availableJob['description']; ?>
            </p>
            <span class="text-brand-gold font-bold lg:p-4 lg:text-brand-white lg:border lg:border-brand-gold rounded inline-block group-hover:bg-brand-gold group-hover:text-brand-blue transition-all duration-300 w-fit w-fit">Job Details <i class="fa-solid fa-arrow-right ml-2"></i></span>
        </a>
    <?php } ?>
</div>