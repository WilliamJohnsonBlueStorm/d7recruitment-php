<?php include('../components/globals/head.php') ?>

<?php include('../components/globals/header.php') ?>
    <main class="pt-20 md:pt-0">
        <div class="container">
            <div class="hidden lg:block text-brand-white mb-8">
                <a href="/" title="home" aria-label="home" class="underline">Home</a>
                <span> - Latst Jobs</span>
            </div>
            <h2 class="text-h2 lg:text-h2-desktop text-brand-gold font-Novecento-sans font-bold uppercase mb-8">Latest Jobs</h2>

            <?php include('../components/show-filters.php') ?>

            <div class="flex justify-between items-center mb-8">

                <?php include('../components/available-jobs.php') ?>

                <?php include('../components/jobs-sort.php') ?>

            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">

                <?php include('../components/jobs-side-filter.php') ?>

                <div class="col-span-1 md:col-span-3">

                    <?php include('../components/jobs-list.php') ?>

                    <?php include('../components/jobs-pagination.php') ?>

                </div>
            </div>
        </div>
    </main>

<?php include('../components/globals/footer.php') ?>

<?php include('../components/globals/mobile-header.php') ?>

<?php include('../components/globals/included-files.php') ?>