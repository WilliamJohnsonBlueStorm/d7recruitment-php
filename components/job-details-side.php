<?php include('data/job-details-side.php')?>

<div class="col-span-3 lg:order-2 lg:col-span-1">
    <div class="border border-brand-white p-5 rounded">
        <?php foreach ($jobSideDetails as $jobSideDetail) {?>
            <h4 class="text-brand-gold font-bold uppercase mb-2 text-[20px]"><i class="<?php echo $jobSideDetail['icon']; ?>"></i><?php echo $jobSideDetail['title']; ?></h4>
            <p class="text-brand-white text-[20px] mb-5"><?php echo $jobSideDetail['description']; ?></p>
        <?php } ?>
        <a href="#" title="apply-now" aria-label="apply-now" class="inline-block p-5 w-full text-center text-brand-blue font-bold text-[20px] bg-brand-gold uppercase border border-brand-gold rounded mb-5">Apply Now<i class="fa-solid fa-arrow-right ml-2"></i></a>
        <a href="#" title="register-for-job-alerts" aria-label="register-for-job-alerts" class="inline-block p-5 w-full text-center text-brand-white font-bold text-[20px] bg-transparent uppercase border border-brand-gold rounded">Register For Job Alerts<i class="fa-solid fa-arrow-right ml-2"></i></a>
    </div>
</div>