<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>Felix E Correa Hidalgo</title>
<meta name="title" content="Felix E Correa Hidalgo" />
<meta name="description"
    content="Laravel Developer • Learner A Software Engineer looking forward to Share and Gain knowledgeable stuff" />
<meta name="keywords"
    content="Felix E Correa Hidalgo , Felix E Correa Hidalgo ,Felix, Correa ,Software Engineer, Laravel, Database, MySQL, PostgreSQL, Livewire, RESTful API,Tailwind," />
<meta name="author" content="Pt. Prashant Tripathi" />
<meta name="language" content="English" />
<meta name="copyright" content="Pt. Prashant Tripathi © 2023 " />
<meta name="robots" content="index, follow" />
<link rel="shortcut icon" href="favicon.ico" />

<meta name="application-name" content="Felix E Correa Hidalgo - Portfolio&nbsp;" />

<meta property="og:description"
    content="Laravel Developer • Learner Although A Software Engineer looking forward to Share and Gain knowledgeable stuff" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css"
    integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.3.67/css/materialdesignicons.min.css">

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

<!-- Styles -->
@livewireStyles

@vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/repo.js'])

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @livewireStyles
</head>

<body>

    <div class="main-wrapper">
        <div class="bg-struct bg-img"></div>
        <div class="mdl-js-layout mdl-layout--fixed-header">
            <header class="mdl-layout__header">
                <div class="mdl-layout__header-row mdl-scroll-spy-1">
                    <a href="index.html"><span class="mdl-layout-title">Felix E Correa Hidalgo</span></a>
                    <div class="mdl-layout-spacer"></div>
                    <ul class="nav mdl-navigation mdl-layout--large-screen-only">
                        <li>
                            <a class="mdl-navigation__link" data-scroll href="#body">about</a>
                        </li>
                        <li>
                            <a class="mdl-navigation__link" data-scroll href="#portfolio_sec">portfolio</a>
                        </li>
                        <li>
                            <a class="mdl-navigation__link" data-scroll href="#interest_sec">interests</a>
                        </li>
                        <li>
                            <a class="mdl-navigation__link" data-scroll href="#project_sec">projects</a>
                        </li>
                        <li>
                            <a class="mdl-navigation__link" data-scroll href="#contact_sec">contact</a>
                        </li>
                    </ul>
                    <button id="demo-menu-lower-right" class="mdl-button mdl-js-button mdl-button--icon ver-more-btn">
                        <i class="material-icons">more_vert</i>
                    </button>
                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                        data-mdl-for="demo-menu-lower-right">
                        <li class="mdl-menu__item">
                            <a href="mailto:correafelix7@gmail.com"><i
                                    class="mdi mdi-email-open font-green pr-10"></i>Drop me
                                an Mail</a>
                        </li>
                    </ul>
                </div>
            </header>
            <div class="mdl-layout__drawer">
                <div class="nicescroll-bar">
                    <div class="drawer-profile-wrap">
                        <div class="candidate-img-drawer mt-25 mb-20"></div>
                        <span class="candidate-name block mb-10 text-center">Felix E Correa Hidalgo</span>
                        <ul class="social-icons mb-30">
                            <li>
                                <a class="facebook-link" href="https://www.facebook.com/profile.php?id=100008966418246">
                                    <i id="tt11" class="mdi mdi-facebook"></i>
                                    <div class="mdl-tooltip" data-mdl-for="tt11">facebook</div>
                                </a>
                            </li>
                            <li>
                                <a class="linkedin-link" href="https://www.linkedin.com/in/felix-correa-hidalgo-210313254/">
                                    <i id="tt13" class="mdi mdi-linkedin"></i>
                                    <div class="mdl-tooltip" data-mdl-for="tt13">linkedin</div>
                                </a>
                            </li>
                            <li>
                                <a class="github-link" href="https://github.com/FelixCE0">
                                    <i id="tt14" class="mdi mdi-github"></i>
                                    <div class="mdl-tooltip" data-mdl-for="tt14">github</div>
                                </a>
                            </li>
                            <li>
                                <a class="instagram-link" href="https://www.instagram.com">
                                    <i id="tt15" class="mdi mdi-instagram"></i>
                                    <div class="mdl-tooltip" data-mdl-for="tt15">instagram</div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="mdl-scroll-spy-2">
                        <ul class="mdl-navigation">
                            <li>
                                <a class="mdl-navigation__link border-top-sep" data-scroll href="#body">
                                    <i class="mdi mdi-border-color pr-15"></i>
                                    <span class="font-capitalize">about</span>
                                </a>
                            </li>
                            <li>
                                <a class="mdl-navigation__link border-top-sep" data-scroll href="#portfolio_sec">
                                    <i class="mdi mdi-case pr-15"></i>
                                    <span class="font-capitalize">portfolio</span>
                                </a>
                            </li>
                            <li>
                                <a class="mdl-navigation__link border-top-sep" data-scroll href="#interest_sec">
                                    <i class="mdi mdi-coffee pr-15"></i>
                                    <span class="font-capitalize">interests</span>
                                </a>
                            </li>
                            <li>
                                <a class="mdl-navigation__link border-top-sep" data-scroll href="#project_sec">
                                    <i class="mdi mdi-code pr-15"></i>
                                    <span class="font-capitalize">projects</span>
                                </a>
                            </li>
                            <li>
                                <a class="mdl-navigation__link border-top-sep border-bottom-sep" data-scroll
                                    href="#contact_sec">
                                    <i class="mdi mdi-email pr-15"></i>
                                    <span class="font-capitalize">contact</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="drawer-footer mt-50 mb-30 text-center">
                        <p class="font-12 mt-10">Felix E Correa Hidalgo &copy; 2023.</p>
                    </div>
                </div>
            </div>
            <div class="main-content relative" id="body">
                <div class="container">
                    <section class="about-sec mt-180 mt-sm-120 mb-30">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mdl-card mdl-shadow--2dp">
                                    <div class="row">
                                        <div class="col-md-5 col-xs-12 mb-30">
                                            <img class="candidate-img mb-35"
                                                src="https://avatars.githubusercontent.com/u/126504032?s=400&u=93eeab4f7fe4a6358ded0ea2cdaf7b9157985393&v=4" />
                                            <ul class="social-icons">
                                                <li>
                                                    <a class="facebook-link"
                                                        href="https://www.facebook.com/profile.php?id=100008966418246">
                                                        <i id="tt1" class="mdi mdi-facebook"></i>
                                                        <div class="mdl-tooltip" data-mdl-for="tt1">
                                                            facebook
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="linkedin-link"
                                                        href="https://www.linkedin.com/in/felix-correa-hidalgo-210313254/">
                                                        <i id="tt3" class="mdi mdi-linkedin"></i>
                                                        <div class="mdl-tooltip" data-mdl-for="tt3">
                                                            linkedin
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="instagram-link"
                                                        href="https://www.instagram.com">
                                                        <i id="tt5" class="mdi mdi-instagram"></i>
                                                        <div class="mdl-tooltip" data-mdl-for="tt5">
                                                            instagram
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="github-link" href="https://github.com/FelixCE0">
                                                        <i id="tt4" class="mdi mdi-github"></i>
                                                        <div class="mdl-tooltip" data-mdl-for="tt4">
                                                            github
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-7 col-xs-12">
                                            <div class="info-wrap">
                                                <h1>Felix E Correa Hidalgo</h1>
                                                <h5 class="mt-20 font-grey">
                                                    Laravel Developer • Learner
                                                </h5>
                                                <div class="mt-30">
                                                    <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect bg-blue font-white"
                                                        href="mailto:correafelix7@gmail.com"
                                                        data-scroll>contact</a>
                                                </div>
                                            </div>
                                            <ul class="profile-wrap mt-50">
                                                <li>
                                                    <div class="profile-title">
                                                        &#127891; Experience :
                                                    </div>
                                                    5+ years
                                                </li>
                                                <li>
                                                    <div class="profile-title">
                                                        💻 I’m currently watching:
                                                    </div>
                                                    Naruto Shippuden
                                                </li>
                                                <li>
                                                    <div class="profile-title">
                                                        &#129513; Interests :
                                                    </div>
                                                    Technology, Astronomy, Space
                                                </li>
                                                <li>
                                                    <div class="profile-title">💡 Skills :</div>
                                                    Sarcasm, Knowledge, Laravel, PHP, TypeScript
                                                </li>
                                                <li>
                                                    <div class="profile-title">&#x26a1; Fun fact :</div>
                                                    Prefers dogs over cats. Currently has 1.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--/About Sec-->
                    <section id="portfolio_sec" class="profile-sec sec-pad-top-sm">
                        <h2 class="mb-30">what i do</h2>
                        <div class="row">
                            <div class="col-md-4 col-xs-12 mb-30 mr-auto">
                                <div class="mdl-card mdl-shadow--2dp text-center">
                                    <i class="mdi mdi-code-tags font-blue profile-icon"></i>
                                    <h4 class="mb-15">Developer</h4>
                                    <p>
                                        I am a Software Engineer with over 4 years of web and
                                        application development work experience, specializing
                                        in the design, development, and support of Laravel
                                        applications. I have a strong background in backend
                                        development and have successfully completed multiple projects
                                        involving finance, tax preparation, and ecommerce.
                                        I am also proficient in SQL and data management principles. able
                                        to work effectively in both individual and team
                                        environments and am committed to delivering high-quality
                                        results.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12 mb-30">
                                <div class="mdl-card mdl-shadow--2dp text-center">
                                    <i class="mdi mdi-gamepad font-green profile-icon"></i>
                                    <h4 class="mb-15">Gamer</h4>
                                    <p>
                                        I am a gamer with interests in MMORPGs (World of Warcraft,
                                        EverQuest, Dark age of Camelot) as well as console and PC
                                        gaming. Other games I have been playing includes Diablo IV,
                                        Lords of the Fallen, Dead Space Remake, Elden Ring, Dark Souls
                                        1 and 3, Baldurs Gate 3 and many many more. I have been gaming
                                        since my father bought me an Super Nes and introduced me to
                                        gaming. It was also what ignited my interest in learning
                                        programming and development. I have since been interested in
                                        many different aspects of development.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12 mb-30">
                                <div class="mdl-card mdl-shadow--2dp text-center">
                                    <i class="mdi mdi-book font-yellow profile-icon"></i>
                                    <h4 class="mb-15">Learner</h4>
                                    <p>
                                        I am constantly learning and growing in my field. I am
                                        passionate about creating innovative solutions and using
                                        technology to solve real-world problems. I have a strong
                                        foundation in programming languages such as PHP, Java,
                                        and Python, and am always eager to expand my skillset and take
                                        on new challenges. Whether I am working on a solo project
                                        or collaborating with a team, I thrive in a fast-paced and
                                        dynamic environment. I am excited to continue my career as
                                        a laravel developer and make a positive impact in the tech
                                        industry.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="interest_sec" class="interest-sec sec-pad-top-sm">
                        <h2 class="mb-30">interests</h2>
                        <div class="row">
                            <div class="col-md-2 col-sm-4 col-xs-6 mb-30">
                                <div class="mdl-card mdl-shadow--2dp text-center pa-20 pt-30 pb-30">
                                    <i class="mdi mdi-dumbbell"></i>
                                    <span>Gym</span>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6 mb-30">
                                <div class="mdl-card mdl-shadow--2dp text-center pa-20 pt-30 pb-30">
                                    <i class="mdi mdi-radio"></i>
                                    <span>music</span>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6 mb-30">
                                <div class="mdl-card mdl-shadow--2dp text-center pa-20 pt-30 pb-30">
                                    <i class="mdi mdi-controller"></i>
                                    <span>gaming</span>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6 mb-30">
                                <div class="mdl-card mdl-shadow--2dp text-center pa-20 pt-30 pb-30">
                                    <i class="mdi mdi-library"></i>
                                    <span>reading</span>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6 mb-30">
                                <div class="mdl-card mdl-shadow--2dp text-center pa-20 pt-30 pb-30">
                                    <i class="mdi mdi-airplane"></i>
                                    <span>traveling</span>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6 mb-30">
                                <div class="mdl-card mdl-shadow--2dp text-center pa-20 pt-30 pb-30">
                                    <i class="mdi mdi-dog"></i>
                                    <span>dogs</span>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div id="project_sec" class="mx-auto sec-pad-top-sm text-center" style="width: 80%;">
    <h2 class="mb-6 text-3xl font-bold">Projects and Work</h2>
    <div class="flex gap-8 justify-center" id="repo-card">
        <!-- First Set of Cards -->
        <div class="card-set first-set flex gap-8">
            <div class="border rounded-lg overflow-hidden shadow-lg bg-white transition-transform transform hover:scale-105 w-80">
                <img src="https://miro.medium.com/v2/resize:fit:720/format:webp/1*CWFkh5z8oa6dZfn5_gkKKQ.jpeg" alt="Project Image" class="w-full h-40 object-cover">
                <div class="p-4 text-center">
                    <h3 class="text-lg font-semibold text-gray-800">React Portfolio</h3>
                    <p class="text-sm text-gray-600 mt-2">My React portfolio is a personal website I built using React.js to showcase my skills, projects, and experience.</p>
                    <div class="mt-4">
                        <a href="https://github.com/FelixCE0/react-portfolio" 
                           target="_blank" 
                           class="inline-flex items-center justify-center text-white bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded-md text-sm font-medium">
                            View on GitHub
                        </a>
                    </div>
                </div>
            </div>
            <div class="border rounded-lg overflow-hidden shadow-lg bg-white transition-transform transform hover:scale-105 w-80">
                <img src="https://cdn.hashnode.com/res/hashnode/image/upload/v1693944178975/0eed2717-f845-4435-8771-772c164510fa.png?w=1600&h=840&fit=crop&crop=entropy&auto=compress,format&format=webp" alt="Project Image" class="w-full h-40 object-cover">
                <div class="p-4 text-center">
                    <h3 class="text-lg font-semibold text-gray-800">Laravel with ChatGPT</h3>
                    <p class="text-sm text-gray-600 mt-2">This project is a web application developed using Laravel, incorporating OpenAI's ChatGPT for intelligent conversational features.</p>
                    <div class="mt-4">
                        <a href="https://github.com/FelixCE0/Laravel-Chatgpt" 
                           target="_blank" 
                           class="inline-flex items-center justify-center text-white bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded-md text-sm font-medium">
                            View on GitHub
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Second Set of Cards (Initially Hidden) -->
        <div class="card-set second-set hidden flex gap-8">
            <div class="border rounded-lg overflow-hidden shadow-lg bg-white transition-transform transform hover:scale-105 w-80">
                <img src="https://calebporzio.com/post_images/213149115.png" alt="Project Image" class="w-full h-40 object-cover">
                <div class="p-4 text-center">
                    <h3 class="text-lg font-semibold text-gray-800">Vercel Laravel</h3>
                    <p class="text-sm text-gray-600 mt-2">A Vercel Laravel and OpenWeather API that allows users to check current weather conditions in any city.</p>
                    <div class="mt-4">
                        <a href="https://github.com/FelixCE0/vercel-laravel" 
                           target="_blank" 
                           class="inline-flex items-center justify-center text-white bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded-md text-sm font-medium">
                            View on GitHub
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation Buttons -->
    <div class="mt-8">
        <button onclick="showNextSet()" class="inline-flex items-center justify-center text-white bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded-md text-sm font-medium">
            Next
        </button>
    </div>
</div>

<!-- JavaScript -->
<script>
    let currentSet = 0; // Track which set of cards is currently visible

    function showNextSet() {
        const firstSet = document.querySelector('.first-set');
        const secondSet = document.querySelector('.second-set');
        
        if (currentSet === 0) {
            firstSet.classList.add('hidden');
            secondSet.classList.remove('hidden');
            currentSet = 1;
        } else {
            firstSet.classList.remove('hidden');
            secondSet.classList.add('hidden');
            currentSet = 0;
        }
    }
</script>
                <div class="container">
                    <section id="contact_sec" class="contact-sec sec-pad-top-sm">
                        <h2 class="mb-35">contact</h2>
                        <div class="row">
                            <div id="form_card_height" class="col-sm-12 mb-30">
                                <div class="mdl-card mdl-shadow--2dp text-center">
                                    <h4 class="mb-10 font-unsetcase">Find me on.</h4>
                                    <ul class="social-icons mt-10">
                                        <li>
                                            <a class="facebook-link"
                                                href="https://www.facebook.com/profile.php?id=100008966418246">
                                                <i id="tt6" class="mdi mdi-facebook" tabindex="0"></i>
                                                <div class="mdl-tooltip" data-mdl-for="tt6"
                                                    data-upgraded="MaterialTooltip"
                                                    style="left: 332px; margin-left: -34px; top: 545px">
                                                    facebook
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="linkedin-link"
                                                href="https://www.linkedin.com/in/felix-correa-hidalgo-210313254/">
                                                <i id="tt8" class="mdi mdi-linkedin" tabindex="0"></i>
                                                <div class="mdl-tooltip" data-mdl-for="tt8"
                                                    data-upgraded="MaterialTooltip"
                                                    style="
                                  left: 332px;
                                  margin-left: -30.5px;
                                  top: 568px;
                                ">
                                                    linkedin
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="instagram-link"
                                                href="https://www.instagram.com">
                                                <i id="tt10" class="mdi mdi-instagram" tabindex="0"></i>
                                                <div class="mdl-tooltip" data-mdl-for="tt10"
                                                    data-upgraded="MaterialTooltip"
                                                    style="
                                  left: 454.933px;
                                  margin-left: -35px;
                                  top: 568px;
                                ">
                                                    instagram
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="github-link" href="https://github.com/FelixCE0">
                                                <i id="tt9" class="mdi mdi-github" tabindex="0"></i>
                                                <div class="mdl-tooltip" data-mdl-for="tt9"
                                                    data-upgraded="MaterialTooltip"
                                                    style="
                                  left: 393.467px;
                                  margin-left: -30px;
                                  top: 568px;
                                ">
                                                    github
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                    <footer class="footer-sec sec-pad-top-sm sec-pad-bottom text-center">
                        <h4>thank you for visiting.</h4>
                        <p class="mt-10">
                        Felix E Correa Hidalgo © 2025 All rights reserved.
                        </p>
                    </footer>
                </div>
            </div>
        </div>
    </div>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    @livewireScripts
</body>

</html>
