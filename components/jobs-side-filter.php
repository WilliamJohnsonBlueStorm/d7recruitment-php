<?php include ('data/jobs-filter.php'); ?>

<div class="col-span-1 hidden lg:block">

    <div class="mb-8">
        <div class="flex justify-between mb-2 items-center">
            <h2 class="text-brand-white text-[18px] font-bold uppercase">Keyword Search</h2>
            <a href="#" title="clear" aria-label="clear" class="text-brand-gold underline">Clear</a>
        </div>
        <label for="job-search" class="sr-only">Keyword Search</label>
        <input type="search" id="job-search" name="job_search" class="w-full bg-transparent border border-brand-gold rounded p-4 text-brand-white">
    </div>

    <?php foreach ($jobFilters as $jobFilter) {?>
        <div class="mb-8">
            <div class="flex justify-between mb-2 items-center">
                <h2 class="text-brand-white text-[18px] font-bold uppercase"><?php echo $jobFilter['title']; ?></h2>
                <a href="#" title="Select All" aria-label="Select All" class="text-brand-gold underline">Select all</a>
            </div>
            <div class="w-full border border-brand-gold rounded p-4">
                <?php foreach ($jobFilter['options'] as $option) {?>
                    <label for="<?php echo $option['id']?>" class="text-brand-white flex justify-between mb-2 cursor-pointer hover:text-brand-gold transition-all duration-300"><?php echo $option['title']?>
                        <input type="checkbox" id="<?php echo $option['id']?>" name="<?php echo $option['id']?>" value="<?php echo $option['id']?>" class="cursor-pointer">
                    </label>
                <?php } ?>
            </div>
        </div>
    <?php } ?>

    <div class="mb-8">
        <button type="button" class="text-brand-white text-[18px] font-bold border border-brand-gold rounded p-4 uppercase w-full hover:bg-brand-gold hover:text-brand-blue transition-all duration-300">Clear all <i class="fa-solid fa-rotate-right ml-2"></i></button>
    </div>
</div>