<?php include ('data/job-details.php'); ?>

<div class="col-span-3 py-8 lg:order-1 lg:col-span-2 lg:py-0 lg:mb-0">
    <div class="mb-16">
        <p class="mb-8 text-brand-white block"><span class="font-bold">Manager Contract / Freelance</span></p>
        <p class="mb-8 text-brand-white block"><span class="font-bold">Job Title:</span> Freelance HSE Manager.</p>
        <p class="mb-8 text-brand-white block"><span class="font-bold">Location:</span> Leicester.</p>
        <p class="mb-8 text-brand-white block"><span class="font-bold">Salary:</span> £350 - £400 Per Day.</p>
        <p class="mb-8 text-brand-white block"><span class="font-bold">Start Date:</span> 31st July 2023.</p>
        <p class="mb-8 text-brand-white block"><span class="font-bold">Duration:</span> 3 Months.</p>
        <p class="mb-8 text-brand-white block">D7 Recruitment is partnering with a leading Health and Safety Consultancy based in Yorkshire who are currently seeking an experienced Health, Safety, and Environment (HSE) Manager to join their team. The HSE Manager will be responsible for overseeing all HSE activities on a construction project within a manufacturing environment</p>
    </div>

    <?php foreach ($jobDetails as $jobDetail) {?>
        <p class="mb-8 text-brand-white block">
            <span class="font-bold"><?php echo $jobDetail['title']; ?></span>
        </p>
        <ul class="mb-16">
            <?php foreach ($jobDetail['descriptions'] as $description) {?>
                <li class="text-brand-white mb-5 flex"><i class="fa-solid fa-arrow-right text-brand-gold mr-4 mt-1"></i><?php echo $description; ?></li>
            <?php } ?>
        </ul>
    <?php } ?>

    <p class="mb-8 text-brand-white block"><span class="font-bold">The offer:</span></p>
    <ul class="mb-16">
        <li class="text-brand-white mb-5 flex"><i class="fa-solid fa-arrow-right text-brand-gold mr-4 mt-1"></i>Day Rate - £350 - £400</li>
    </ul>

    <?php include ('components/share-job-details.php'); ?>

</div>