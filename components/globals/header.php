<?php include ('data/header-nav.php'); ?>

<header id="site-header" class="fixed z-30 md:static bg-brand-blue w-full">
    <div class="container">
        <div class="py-4 md:py-10 w-full flex justify-between items-center">
            <a href="/" title="Home" aria-label="Home">
                <img src="/images/logo.svg" alt="Logo" class="max-w-[165px] h-auto">
            </a>
            <nav class="hidden lg:block">
                <ul>
                    <?php foreach ($mainNavLinks as $mainNavLink) {?>
                        <li class="inline-block ">
                            <a href="<?php echo $mainNavLink['url']; ?>" title="<?php echo $mainNavLink['title']; ?>" aria-label="<?php echo $mainNavLink['title']; ?>" class="inline-block text-brand-white p-2 xl:p-5 hover:text-brand-gold transition-all duration-300"><?php echo $mainNavLink['title']; ?></a>
                        </li>
                    <?php } ?>
                    <li class="inline-block font-bold uppercase">
                        <a href="#" title="Upload CV" aria-label="Upload CV" class="inline-block text-brand-white px-4 py-3 border border-brand-gold hover:bg-brand-gold transition-all duration-300 rounded">Upload CV <i class="fa fa-arrow-up ml-2" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </nav>
            <div id="burger-menu" class="lg:hidden text-right text-[24px]">
                <a id="open-mobile-menu" href="#" title="Open Mobile Menu" aria-label="Open Mobile Menu">
                    <i class="fa fa-bars text-brand-white"></i>
                </a>
            </div>
        </div>
    </div>
</header>