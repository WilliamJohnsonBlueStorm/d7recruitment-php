<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/dist/tailwind.css">
    <link rel="stylesheet" href="https://use.typekit.net/mym2uet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>

    <title>Home | D7 Recruitment</title>
    <meta name="description" content="A people focused recruitment solution placing experienced and competent professionals across the UK and Europe.">

</head>
<body class="font-Tahoma bg-brand-blue text-p">
    <a class="skip-to-the-main-content hidden" href="#" title="Skip to the main content" aria-label="Skip to the main content" tabindex="0">Skip to main content</a>
    <header id="site-header">
        <div class="container">
            <div class="pt-10 pb-16 w-full flex justify-between items-center">
                <a href="#" title="Home" aria-label="Home">
                    <img src="/images/logo.svg" alt="Logo" class="max-w-[165px] h-auto">
                </a>
                <nav class="hidden lg:block">
                    <ul>
                        <li class="inline-block ">
                            <a href="#" title="About Us" aria-label="About Us" class="inline-block text-brand-white p-2 xl:p-5 hover:text-brand-gold transition-all duration-300">About Us</a>
                        </li>
                        <li class="inline-block">
                            <a href="#" title="Latest Jobs" aria-label="Latest Jobs" class="inline-block text-brand-white p-2 xl:p-5 hover:text-brand-gold transition-all duration-300">Latest Jobs</a>
                        </li>
                        <li class="inline-block">
                            <a href="#" title="Candidates" aria-label="Candidates" class="inline-block text-brand-white p-2 xl:p-5 hover:text-brand-gold transition-all duration-300">Candidates</a>
                        </li>
                        <li class="inline-block">
                            <a href="#" title="Client Services" aria-label="Client Services" class="inline-block text-brand-white p-2 xl:p-5 hover:text-brand-gold transition-all duration-300">Client Services</a>
                        </li>
                        <li class="inline-block">
                            <a href="#" title="Sectors" aria-label="Sectors" class="inline-block text-brand-white p-2 xl:p-5 hover:text-brand-gold transition-all duration-300">Sectors</a>
                        </li>
                        <li class="inline-block">
                            <a href="#" title="Contact Us" aria-label="Contact Us" class="inline-block text-brand-white p-2 xl:p-5 hover:text-brand-gold transition-all duration-300">Contact Us</a>
                        </li>
                        <li class="inline-block font-bold uppercase">
                            <a href="#" title="Upload CV" aria-label="Upload CV" class="inline-block text-brand-white px-4 py-3 border border-brand-gold hover:bg-brand-gold transition-all duration-300 rounded">Upload CV <i class="fa fa-arrow-up ml-2" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </nav>
                <div id="burger-menu" class="lg:hidden text-right text-[24px]">
                    <a id="open-mobile-menu" href="#" title="Open Mobile Menu" aria-label="Open Mobile Menu"><i class="fa fa-bars text-brand-white"></i></a>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section>
            <div class="container">
                <div class="hidden lg:block text-brand-white mb-8">
                    <a href="/" title="home" aria-label="home" class="underline">Home</a>
                    <span> - Latst Jobs</span>
                </div>
                <h2 class="text-h2 lg:text-h2-desktop text-brand-gold font-Novecento-sans font-bold uppercase mb-8">Latest Jobs</h2>
                <div class="block border border-brand-gold rounded mb-5 md:inline-block lg:hidden">
                    <p class="font-bold text-center p-4 text-brand-white uppercase">Show filters <i class="fa-solid fa-sliders ml-2"></i></p>
                </div>
                <div class="flex justify-between items-center mb-8">
                    <p class="text-brand-white">Showing 10 of 12 available jobs</p>
                    <div class="hidden lg:flex text-brand-white items-center">
                        <label for="sort" class="mr-4">Sort By</label>
                        <div class="select-wrapper">
                            <select name="sort" id="sort" class="bg-transparent p-4 pr-10 border border-brand-gold rounded relative">
                                <option value="recent" class="relative">Recent</option>
                                <option value="a-z">A - Z</option>
                                <option value="z-a">Z - A</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div class="col-span-1 hidden lg:block">
                        <div class="mb-8">
                            <div class="flex justify-between mb-2 items-center">
                                <h2 class="text-brand-white text-[18px] font-bold uppercase">Keyword Search</h2>
                                <a href="#" title="clear" aria-label="clear" class="text-brand-gold underline">Clear</a>
                            </div>
                            <label for="job-search" class="sr-only">Keyword Search</label>
                            <input type="search" id="job-search" name="job_search" class="w-full bg-transparent border border-brand-gold rounded p-4 text-brand-white">
                        </div>
                        <div class="mb-8">
                            <div class="flex justify-between mb-2 items-center">
                                <h2 class="text-brand-white text-[18px] font-bold uppercase">Employment Type</h2>
                                <a href="#" title="clear" aria-label="clear" class="text-brand-gold underline">Select all</a>
                            </div>
                            <div class="w-full border border-brand-gold rounded p-4">
                                <label for="permanent" class="text-brand-white flex justify-between mb-2 cursor-pointer hover:text-brand-gold transition-all duration-300">Permanent
                                    <input type="checkbox" id="permanent" name="permanent" value="permanent" class="cursor-pointer">
                                </label>
                                <label for="full-time" class="text-brand-white flex justify-between mb-2 cursor-pointer hover:text-brand-gold transition-all duration-300">Full-time
                                    <input type="checkbox" id="full-time" name="full_time" value="full-time" class="cursor-pointer">
                                </label>
                                <label for="contract" class="text-brand-white flex justify-between mb-2 cursor-pointer hover:text-brand-gold transition-all duration-300">Contract
                                    <input type="checkbox" id="contract" name="contract" value="permanent" class="cursor-pointer">
                                </label>
                            </div>
                        </div>
                        <div class="mb-8">
                            <div class="flex justify-between mb-2 items-center">
                                <h2 class="text-brand-white text-[18px] font-bold uppercase">Seniority Level</h2>
                                <a href="#" title="select all" aria-label="select" class="text-brand-gold underline">Select all</a>
                            </div>
                            <div class="w-full border border-brand-gold rounded p-4">
                                <label for="mid-senior-level" class="text-brand-white flex justify-between mb-2 cursor-pointer hover:text-brand-gold transition-all duration-300">Mid-Senior Level
                                    <input type="checkbox" id="mid-senior-level" name="mid_senior_level" value="mid-senior-level" class="cursor-pointer">
                                </label>
                                <label for="entry" class="text-brand-white flex justify-between mb-2 cursor-pointer hover:text-brand-gold transition-all duration-300">Entry
                                    <input type="checkbox" id="entry" name="entry" value="entry" class="cursor-pointer">
                                </label>
                            </div>
                        </div>
                        <div class="mb-8">
                            <div class="flex justify-between mb-2 items-center">
                                <h2 class="text-brand-white text-[18px] font-bold uppercase">Industry</h2>
                                <a href="#" title="select all" aria-label="select" class="text-brand-gold underline">Select all</a>
                            </div>
                            <div class="w-full border border-brand-gold rounded p-4">
                                <label for="construction" class="text-brand-white flex justify-between mb-2 cursor-pointer hover:text-brand-gold transition-all duration-300">Construction
                                    <input type="checkbox" id="construction" name="construction" value="construction" class="cursor-pointer">
                                </label>
                                <label for="health-safety" class="text-brand-white flex justify-between mb-2 cursor-pointer hover:text-brand-gold transition-all duration-300">Health &amp; Safety
                                    <input type="checkbox" id="health-safety" name="health_safety" value="health-safety" class="cursor-pointer">
                                </label>
                            </div>
                        </div>
                        <div class="mb-8">
                            <div class="flex justify-between mb-2 items-center">
                                <h2 class="text-brand-white text-[18px] font-bold uppercase">Location</h2>
                                <a href="#" title="select all" aria-label="select" class="text-brand-gold underline">Select all</a>
                            </div>
                            <div class="w-full border border-brand-gold rounded p-4">
                                <label for="leeds" class="text-brand-white flex justify-between mb-2 cursor-pointer hover:text-brand-gold transition-all duration-300">Leeds
                                    <input type="checkbox" id="leeds" name="leeds" value="leeds" class="cursor-pointer">
                                </label>
                                <label for="london" class="text-brand-white flex justify-between mb-2 cursor-pointer hover:text-brand-gold transition-all duration-300">London
                                    <input type="checkbox" id="london" name="london" value="london" class="cursor-pointer">
                                </label>
                                <label for="national" class="text-brand-white flex justify-between mb-2 cursor-pointer hover:text-brand-gold transition-all duration-300">National
                                    <input type="checkbox" id="national" name="national" value="national" class="cursor-pointer">
                                </label>
                                <label for="aberdeen" class="text-brand-white flex justify-between mb-2 cursor-pointer hover:text-brand-gold transition-all duration-300">Aberdeen
                                    <input type="checkbox" id="aberdeen" name="aberdeen" value="aberdeen" class="cursor-pointer">
                                </label>
                                <label for="south-birmingham" class="text-brand-white flex justify-between mb-2 cursor-pointer hover:text-brand-gold transition-all duration-300">South of Birmingham
                                    <input type="checkbox" id="south-birmingham" name="south_birmingham" value="south-birmingham" class="cursor-pointer">
                                </label>
                                <label for="leicester" class="text-brand-white flex justify-between mb-2 cursor-pointer hover:text-brand-gold transition-all duration-300">Leicester
                                    <input type="checkbox" id="leicester" name="leicester" value="leicester" class="cursor-pointer">
                                </label>
                                <label for="coventry" class="text-brand-white flex justify-between mb-2 cursor-pointer hover:text-brand-gold transition-all duration-300">Coventry
                                    <input type="checkbox" id="coventry" name="coventry" value="coventry" class="cursor-pointer">
                                </label>
                                <label for="nottingham" class="text-brand-white flex justify-between mb-2 cursor-pointer hover:text-brand-gold transition-all duration-300">Nottingham
                                    <input type="checkbox" id="nottingham" name="nottingham" value="nottingham" class="cursor-pointer">
                                </label>
                            </div>
                        </div>
                        <div class="mb-8">
                            <button type="button" class="text-brand-white text-[18px] font-bold border border-brand-gold rounded p-4 uppercase w-full hover:bg-brand-gold hover:text-brand-blue transition-all duration-300">Clear all <i class="fa-solid fa-rotate-right ml-2"></i></button>
                        </div>
                    </div>
                    <div class="col-span-1 md:col-span-3">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                            <a href="/job-details.php" title="Health, and Safety Manger Contract / Freelance Leicester" aria-label="Health, and Safety Manger Contract / Freelance Leicester" class="p-5 border border-brand-white rounded group flex flex-col">
                                <h3 class="text-brand-gold text-h3 font-bold uppercase group-hover:text-brand-white transition-all duration-300 mb-8">Health, and Safety Manger Contract / Freelance Leicester</h3>
                                <ul class="mb-5">
                                    <li class="text-brand-white"><i class="fa-regular fa-clock text-brand-gold mr-2 w-[20px]"></i>Contract</li>
                                    <li class="text-brand-white"><i class="fa-solid fa-location-pin text-brand-gold mr-2 w-[20px]"></i>Leicester</li>
                                    <li class="text-brand-white"><i class="fa-solid fa-sterling-sign text-brand-gold mr-2 w-[20px]"></i>Day Rate £350 - £400</li>
                                </ul>
                                <p class="hidden lg:block text-brand-white mb-5 h-full">
                                    HSE Manager Contract / Freelance Job Title: Freelance HSE Manager. Location: Leicester. Salary: £350 - £400 Per Day. Start Date: 31st July 2023. Duration: 3 Months. D7 Recruitment is partnering with a leading Health and Safety Consultancy based in Yorkshire who are currently seeking an experienced Health, Safety, and Environment...
                                </p>
                                <span class="text-brand-gold font-bold lg:p-4 lg:text-brand-white lg:border lg:border-brand-gold rounded inline-block group-hover:bg-brand-gold group-hover:text-brand-blue transition-all duration-300 w-fit w-fit">Job Details <i class="fa-solid fa-arrow-right ml-2"></i></span>
                            </a>

                            <a href="#" title="Health, and Safety Manger Contract / Freelance Coventry" aria-label="Health, and Safety Manger Contract / Freelance Leicester" class="p-5 border border-brand-white rounded group flex flex-col">
                                <h3 class="text-brand-gold text-h3 font-bold uppercase group-hover:text-brand-white transition-all duration-300 mb-8">Health, and Safety Manger Contract / Freelance Coventry</h3>
                                <ul class="mb-5">
                                    <li class="text-brand-white"><i class="fa-regular fa-clock text-brand-gold mr-2 w-[20px]"></i>Contract</li>
                                    <li class="text-brand-white"><i class="fa-solid fa-location-pin text-brand-gold mr-2 w-[20px]"></i>Coventry</li>
                                    <li class="text-brand-white"><i class="fa-solid fa-sterling-sign text-brand-gold mr-2 w-[20px]"></i>Day Rate £350 - £400</li>
                                </ul>
                                <p class="hidden lg:block text-brand-white mb-5 h-full">
                                    HSE Manager Contract / Freelance Job Title: Freelance HSE Manager. Location: Coventry. Salary: £350 - £400 Per Day. Start Date: Immediate. D7 Recruitment is partnering with a leading Health and Safety Consultancy based in Yorkshire who are currently seeking an experienced Health, Safety, and Environment (HSE) Manager to join their...
                                </p>
                                <span class="text-brand-gold font-bold lg:p-4 lg:text-brand-white lg:border lg:border-brand-gold rounded inline-block group-hover:bg-brand-gold group-hover:text-brand-blue transition-all duration-300 w-fit w-fit">Job Details <i class="fa-solid fa-arrow-right ml-2"></i></span>
                            </a>

                            <a href="#" title="Health, and Safety Manger Contract / Freelance Nottingham Nights" aria-label="Health, and Safety Manger Contract / Freelance Nottingham Nights" class="p-5 border border-brand-white rounded group flex flex-col">
                                <h3 class="text-brand-gold text-h3 font-bold uppercase group-hover:text-brand-white transition-all duration-300 mb-4">Health, and Safety Manger Contract / Freelance Nottingham Nights</h3>
                                <ul class="mb-4">
                                    <li class="text-brand-white"><i class="fa-regular fa-clock text-brand-gold mr-2 w-[20px]"></i>Contract</li>
                                    <li class="text-brand-white"><i class="fa-solid fa-location-pin text-brand-gold mr-2 w-[20px]"></i>Nottingham</li>
                                    <li class="text-brand-white"><i class="fa-solid fa-sterling-sign text-brand-gold mr-2 w-[20px]"></i>Day Rate £350 - £400</li>
                                </ul>
                                <p class="hidden lg:block text-brand-white mb-5 h-full">
                                    HSE Manager Contract / Freelance - Nights Job Title: Freelance HSE Manager. Location: Nottingham. Salary: £350 - £400 Per Day. Duration: 4th - 28th August. D7 Recruitment is partnering with a leading Health and Safety Consultancy based in Yorkshire who are currently seeking an experienced Health, Safety, and Environment (HSE)...                                </p>
                                <span class="text-brand-gold font-bold lg:p-4 lg:text-brand-white lg:border lg:border-brand-gold rounded inline-block group-hover:bg-brand-gold group-hover:text-brand-blue transition-all duration-300 w-fit">Job Details <i class="fa-solid fa-arrow-right ml-2"></i></span>
                            </a>

                            <a href="#" title="Health, and Safety Manger Contract / Freelance Coventry - Nights" aria-label="Health, and Safety Manger Contract / Freelance Coventry - Nights" class="p-5 border border-brand-white rounded group flex flex-col">
                                <h3 class="text-brand-gold text-h3 font-bold uppercase group-hover:text-brand-white transition-all duration-300 mb-4">Health, and Safety Manger Contract / Freelance Coventry - Nights</h3>
                                <ul class="mb-4">
                                    <li class="text-brand-white"><i class="fa-regular fa-clock text-brand-gold mr-2 w-[20px]"></i>Contract</li>
                                    <li class="text-brand-white"><i class="fa-solid fa-location-pin text-brand-gold mr-2 w-[20px]"></i>Coventry</li>
                                    <li class="text-brand-white"><i class="fa-solid fa-sterling-sign text-brand-gold mr-2 w-[20px]"></i>Day Rate £350 - £400</li>
                                </ul>
                                <p class="hidden lg:block text-brand-white mb-5 h-full">
                                    HSE Manager Contract / Freelance Job Title: Freelance HSE Manager. Location: Coventry. Salary: £350 - £400 Per Day. Nights: Monday to Thursday Start Date: Immediate. D7 Recruitment is partnering with a leading Health and Safety Consultancy based in Yorkshire who are currently seeking an experienced Health, Safety, and Environment (HSE)...
                                </p>
                                <span class="text-brand-gold font-bold lg:p-4 lg:text-brand-white lg:border lg:border-brand-gold rounded inline-block group-hover:bg-brand-gold group-hover:text-brand-blue transition-all duration-300 w-fit">Job Details <i class="fa-solid fa-arrow-right ml-2"></i></span>
                            </a>

                            <a href="#" title="Entry Level Health & Safety Advisor" aria-label="Entry Level Health & Safety Advisor" class="p-5 border border-brand-white rounded group flex flex-col">
                                <h3 class="text-brand-gold text-h3 font-bold uppercase group-hover:text-brand-white transition-all duration-300 mb-4">Entry Level Health & Safety Advisor</h3>
                                <ul class="mb-4">
                                    <li class="text-brand-white"><i class="fa-regular fa-clock text-brand-gold mr-2 w-[20px]"></i>Full-time</li>
                                    <li class="text-brand-white"><i class="fa-solid fa-location-pin text-brand-gold mr-2 w-[20px]"></i>London</li>
                                    <li class="text-brand-white"><i class="fa-solid fa-sterling-sign text-brand-gold mr-2 w-[20px]"></i>£30,000 - £38,000</li>
                                </ul>
                                <p class="hidden lg:block text-brand-white mb-5 h-full">
                                    Entry Level Health & Safety Advisor Role – Health and Safety Advisor Location – London Salary - £30,000 - £38,000 Depending on Experience Qualification – NEBOSH General or Working towards. D7 Recruitment is exclusively recruiting for a Health and Safety Advisor in the London area. This is an outstanding opportunity...                                </p>
                                <span class="text-brand-gold font-bold lg:p-4 lg:text-brand-white lg:border lg:border-brand-gold rounded inline-block group-hover:bg-brand-gold group-hover:text-brand-blue transition-all duration-300 w-fit">Job Details <i class="fa-solid fa-arrow-right ml-2"></i></span>
                            </a>

                            <a href="#" title="Health, and Safety Manger Contract / Freelance Leicester" aria-label="Health, and Safety Manger Contract / Freelance Leicester" class="p-5 border border-brand-white rounded group flex flex-col">
                                <h3 class="text-brand-gold text-h3 font-bold uppercase group-hover:text-brand-white transition-all duration-300 mb-4">Health, and Safety Manger Contract / Freelance Coventry</h3>
                                <ul class="mb-4">
                                    <li class="text-brand-white"><i class="fa-regular fa-clock text-brand-gold mr-2 w-[20px]"></i>Permanent, full-time</li>
                                    <li class="text-brand-white"><i class="fa-solid fa-location-pin text-brand-gold mr-2 w-[20px]"></i>National</li>
                                    <li class="text-brand-white"><i class="fa-solid fa-sterling-sign text-brand-gold mr-2 w-[20px]"></i> £38,000 - £48,000 Per Annum Plus £50 per day onsite bonus, Plus £3600 Car Allowance.</li>
                                </ul>
                                <p class="hidden lg:block text-brand-white mb-5 h-full">
                                    CDM Manager / HSE Manager on client sites ensuring the health, safety and welfare of all contractors during the construction and commissioning phase of a client project.
                                </p>
                                <span class="text-brand-gold font-bold lg:p-4 lg:text-brand-white lg:border lg:border-brand-gold rounded inline-block group-hover:bg-brand-gold group-hover:text-brand-blue transition-all duration-300 w-fit">Job Details <i class="fa-solid fa-arrow-right ml-2"></i></span>
                            </a>

                            <a href="#" title="National Health & Safety Manager" aria-label="Health, and Safety Manger Contract / Freelance Leicester" class="p-5 border border-brand-white rounded group flex flex-col">
                                <h3 class="text-brand-gold text-h3 font-bold uppercase group-hover:text-brand-white transition-all duration-300 mb-4">National Health & Safety Manager</h3>
                                <ul class="mb-4">
                                    <li class="text-brand-white"><i class="fa-regular fa-clock text-brand-gold mr-2 w-[20px]"></i>Permanent, Full-time</li>
                                    <li class="text-brand-white"><i class="fa-solid fa-location-pin text-brand-gold mr-2 w-[20px]"></i>National</li>
                                    <li class="text-brand-white"><i class="fa-solid fa-sterling-sign text-brand-gold mr-2 w-[20px]"></i>£40,000 - £50,000 Plus £6000 Car allowance.</li>
                                </ul>
                                <p class="hidden lg:block text-brand-white mb-5 h-full">
                                    Job Title: National Health and Safety Manager Location: Nottingham / Tamworth / Leicester Annual Salary: £40,000 - £50,000 Car Allowance: £6000 As a recruiting agency partnering with a prominent automotive repair company, we have an exciting opportunity for a National Health and Safety Manager to join their team. This reputable...
                                </p>
                                <span class="text-brand-gold font-bold lg:p-4 lg:text-brand-white lg:border lg:border-brand-gold rounded inline-block group-hover:bg-brand-gold group-hover:text-brand-blue transition-all duration-300 w-fit">Job Details <i class="fa-solid fa-arrow-right ml-2"></i></span>
                            </a>

                            <a href="#" title="Health and Safety Operations Manager" aria-label="Health, and Safety Manger Contract / Freelance Leicester" class="p-5 border border-brand-white rounded group flex flex-col">
                                <h3 class="text-brand-gold text-h3 font-bold uppercase group-hover:text-brand-white transition-all duration-300 mb-4">Health and Safety Operations Manager</h3>
                                <ul class="mb-4">
                                    <li class="text-brand-white"><i class="fa-regular fa-clock text-brand-gold mr-2 w-[20px]"></i>Permanent, Full-time</li>
                                    <li class="text-brand-white"><i class="fa-solid fa-location-pin text-brand-gold mr-2 w-[20px]"></i>National</li>
                                    <li class="text-brand-white"><i class="fa-solid fa-sterling-sign text-brand-gold mr-2 w-[20px]"></i>£50,000 - £60,000 Plus Car Allowance</li>
                                </ul>
                                <p class="hidden lg:block text-brand-white mb-5 h-full">
                                    Job Title: Operations Manager Reports To: Managing Director Salary: £50,000 - £60,000 Car Allowance: £3600 Key purpose of the role: End to end project responsibility for a specified portfolio of clients/projects. All activities will align with and support the core business processes Responsibilities: Client Relationship • Be the primary liaison...
                                </p>
                                <span class="text-brand-gold font-bold lg:p-4 lg:text-brand-white lg:border lg:border-brand-gold rounded inline-block group-hover:bg-brand-gold group-hover:text-brand-blue transition-all duration-300 w-fit">Job Details <i class="fa-solid fa-arrow-right ml-2"></i></span>
                            </a>
                        </div>
                        <div class="flex justify-center gap-2">
                            <a href="#" title="page1" aria-label="page1" class="text-brand-blue bg-brand-gold border border-brand-gold rounded font-bold w-[35px] h-[35px] flex justify-center items-center">1</a>
                            <a href="#" title="page2" aria-label="page2" class="text-brand-white bg-transparent border border-brand-gold rounded font-bold w-[35px] h-[35px] flex justify-center items-center hover:bg-brand-gold transition-all duration-300">2</a>
                            <a href="#" title="next-page" aria-label="next-page" class="text-brand-white bg-transparent border border-brand-gold rounded font-bold w-[35px] h-[35px] flex justify-center items-center hover:bg-brand-gold transition-all duration-300"><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="mt-24">
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
                            <li class="mr-8 inline-block"><a href="#" title="Accessibility" aria-label="Accessibility" class="text-brand-white hover:text-brand-gold transition-all duration-300">Accessibility</a></li>
                            <li class="mr-8 inline-block"><a href="#" title="Terms &amp; Conditions" aria-label="Terms &amp; Conditions" class="text-brand-white hover:text-brand-gold transition-all duration-300">Terms &amp; Conditions</a></li>
                            <li class="mr-8 inline-block"><a href="#" title="Privacy Policy" aria-label="Privacy Policy" class="text-brand-white hover:text-brand-gold transition-all duration-300">Privacy Policy</a></li>
                            <li class="inline-block"><a href="#" title="Site Map" aria-label="Site Map" class="text-brand-white hover:text-brand-gold transition-all duration-300">Site Map</a></li>
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
                    <li class="py-4 flex justify-between text-[24px]">
                        <a href="#" title="About Us" aria-label="About Us" accesskey="1" tabindex="0" class="text-brand-white">About Us</a>
                        <i class="fa fa-plus text-brand-gold" aria-hidden="true"></i>
                    </li>
                    <li class="py-4 flex justify-between text-[24px]">
                        <a href="#" title="Latest Jobs" aria-label="Latest Jobs" accesskey="1" tabindex="0" class="text-brand-white">Latest Jobs</a>
                    </li>
                    <li class="py-4 flex justify-between text-[24px]">
                        <a href="#" title="Candidates" aria-label="Candidates" accesskey="1" tabindex="0" class="text-brand-white">Candidates</a>
                    </li>
                    <li class="py-4 flex justify-between text-[24px]">
                        <a href="#" title="Client Services" aria-label="Client Services" accesskey="1" tabindex="0" class="text-brand-white">Client Services</a>
                    </li>
                    <li class="py-4 flex justify-between text-[24px]">
                        <a href="#" title="Sectors" aria-label="Sectors" accesskey="1" tabindex="0" class="text-brand-white">Sectors</a>
                    </li>
                    <li class="py-4 flex justify-between text-[24px]">
                        <a href="#" title="Contact Us" aria-label="Contact Us" accesskey="1" tabindex="0" class="text-brand-white">Contact Us</a>
                    </li>
                </ul>
            </nav>
            <div class="text-[18px]">
                <a href="#" title="Upload cv" aria-label="Upload cv" tabindex="0" class="py-4 font-bold text-brand-white border-2 border-brand-gold rounded block text-center uppercase">Upload cv
                    <i class="fa fa-arrow-up ml-2" aria-hidden="true"></i>
                </a>

            </div>
        </div>
    </header>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="./scripts/scripts.js"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

</body>
</html>