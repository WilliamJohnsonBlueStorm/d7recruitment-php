<?php include ('data/footer-links.php'); ?>

<footer class="pt-8 lg:pt-24">
    <section class="bg-brand-gold px-2 py-8 lg:p-14 xl:py-20 xl:px-2">
        <div class="container">
            <div class="flex items-center flex-col md:flex-row justify-between gap-4">
                <p class="block md:inline-block text-h4 lg:text-h4-desktop text-brand-blue font-bold uppercase font-Novecento-sans">Upload your CV to keep up to date with relevant vacancies</p>
                <a href="#" title="Upload CV" aria-label="Upload CV" class="text-brand-darkblue flex shrink-0 items-center justify-center w-full md:w-auto uppercase px-6 py-5 font-bold bg-brand-white rounded hover:bg-brand-grey transition-all duration-300">Upload CV <i class="fa fa-arrow-up ml-2" aria-hidden="true"></i></a>
            </div>
        </div>
    </section>
    <section class="bg-brand-darkblue pt-16 pb-8">
        <div class="container">
            <div class="grid grid-cols-12">
                <div class="col-span-12 lg:col-span-7">
                    <a href="#" title="Home" aria-label="Home"  class="w-[330px] block pb-8">
                        <img src="/images/logo.svg" alt="Logo" class="w-full h-auto">
                    </a>
                    <div class="py-8">
                        <a href="mailto:info@d7recruitment.com" title="email" aria-label="email" class="inline-block mb-8 xl:mb-0 text-brand-white text-[20px] mr-16 hover:text-brand-gold transition-all duration-300">
                            <i class="fa fa-envelope mr-2 !text-[32px]" aria-hidden="true"></i>
                            info@d7recruitment.com
                        </a>
                        <a href="#" title="LinkedIn" aria-label="LinkedIn" target="_blank" class="inline-block text-brand-white text-[20px] hover:text-brand-gold transition-all duration-300">
                            <i class="fa-brands fa-linkedin mr-2 !text-[32px]"></i>
                            Follow us on LinkedIn
                        </a>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-5">
                    <p class="text-brand-white mb-8">If you are interested in hearing more about any of our current vacancies, enter your email below and a member of our team will be in touch.</p>
                    <form action="#" class="border border-brand-gold rounded flex items-center">
                        <label for="newsletter" class="sr-only">Newsletter</label>
                        <input type="text" id="newsletter" name="newsletter" placeholder="Your email" class="bg-transparent w-full text-brand-white placeholder-brand-white px-5 py-4 focus:outline-none">
                        <button type="submit" class="cursor-pointer"><i class="fa fa-arrow-right text-brand-white !text-[26px] px-5 py-4" aria-hidden="true"></i></button>
                    </form>
                </div>
            </div>
            <div class="grid grid-cols-12">
                <div class="col-span-12 lg:col-span-7">
                    <ul class="py-8">
                        <?php foreach ($footerLinks as $footerLink) {?>
                            <li class="mr-8 inline-block"><a href="<?php echo $footerLink['url']; ?>" title="<?php echo $footerLink['title']; ?>" aria-label="<?php echo $footerLink['title']; ?>" class="text-brand-white hover:text-brand-gold transition-all duration-300"><?php echo $footerLink['title']; ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="col-span-12 lg:col-span-5">
                    <p class="text-brand-white py-8 lg:text-right">&copy; D7 Recruitment 2023
                        <a href="https://bluestormdesign.co.uk/" title="bluestorm" aria-label="bluestorm" target="_blank" class="inline-block hover:text-brand-gold transition-all duration-300"> web design by
                            <img src="images/bluestorm.png" alt="bluestorm" class="inline-block">
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </section>
</footer>