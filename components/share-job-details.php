<?php include('data/share-job.php') ?>

<div class="flex">
    <p class="text-brand-white inline mr-8 text-[20px]"><span class="font-bold uppercase">Share</span></p>
    <ul class="flex flex-wrap gap-8 mb-8 md:mb-16">
        <?php foreach ($shareLinks as $shareLink) {?>
            <li class="text-brand-white inline">
                <a href="<?php echo $shareLink['url']; ?>" title="<?php echo $shareLink['title']; ?>" aria-label="<?php echo $shareLink['title']; ?>" class="inline-block">
                    <i class="<?php echo $shareLink['icon']; ?> text-[30px]"></i>
                </a>
            </li>
        <?php } ?>
    </ul>
</div>