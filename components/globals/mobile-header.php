<?php include ('data/header-nav.php'); ?>

<header id="mobile-header" role="banner" class="hidden fixed bg-brand-blue inset-0 overflow-auto z-30">
    <div class="container">
        <div class="pt-10 pb-16 w-full flex justify-between items-center">
            <a href="#" title="Home" aria-label="Home">
                <img src="/images/logo.svg" alt="Logo" class="max-w-[165px] h-auto">
            </a>
            <div class="text-[24px]">
                <a id="close-mobile-menu" href="#" title="Open Mobile Menu" aria-label="Open Mobile Menu">
                    <i class="fa fa-times text-brand-white"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="container">
        <nav id="mobile-nav" role="navigation" class="text-p mb-4">
            <ul>
                <?php foreach ($mainNavLinks as $mainNavLink) {?>
                    <li class="py-4 text-[24px]">
                        <a href="<?php echo $mainNavLink['url']; ?>" title="<?php echo $mainNavLink['title']; ?>" aria-label="<?php echo $mainNavLink['title']; ?>" id="<?php echo $mainNavLink['id']; ?>" class="text-brand-white"><?php echo $mainNavLink['title']; ?></a>
                        <?php if (isset($mainNavLink['navDropdowns'])) {?>
                            <i class="fa fa-plus text-brand-gold expand-mobile-nav float-right" aria-hidden="true"></i>
                            <ul class="hidden flex-none mt-5">
                                <?php foreach ($mainNavLink['navDropdowns'] as $navDropdown) {?>
                                    <li class="py-4 pl-4 text-brand-white text-[18px]">
                                        <a href="<?php echo $navDropdown['url']; ?>" title="<?php echo $navDropdown['title']; ?>" aria-label="<?php echo $navDropdown['title']; ?>"><?php echo $navDropdown['title']; ?></a>
                                    </li>
                                <?php } ?>
                            </ul>
                        <?php } ?>
                    </li>
                <?php } ?>
            </ul>
        </nav>
        <div class="text-[18px]">
            <a href="#" title="Upload cv" aria-label="Upload cv" tabindex="0" class="py-4 font-bold text-brand-white border-2 border-brand-gold rounded block text-center uppercase">Upload cv
                <i class="fa fa-arrow-up ml-2" aria-hidden="true"></i>
            </a>
        </div>
    </div>
</header>