<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="overflow-x-hidden">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>

<body>
    <header class="flex items-center justify-between md:px-8 px-16 py-5">
        <figure>
            <img src="/images/logo.png" style="background-image: url('/images/logo-bg.png')" class="bg-contain bg-no-repeat bg-right-bottom lg:w-16 md:w-1/2" />
        </figure>
        <ul class="flex font-serif lg:text-lg md:text-sm text-2xl">
            <li class="font-bold mr-5 cursor-pointer md:mr-3" onclick="smoothScroll(document.getElementById('work'))">
                Work
            </li>
            <li class="font-bold mr-5 cursor-pointer md:mr-3" onclick="smoothScroll(document.getElementById('about'))">
                About
            </li>
            <li class="font-bold mr-5 cursor-pointer md:mr-3" onclick="smoothScroll(document.getElementById('skills'))">
                Skills
            </li>
            <li class="font-bold cursor-pointer" onclick="smoothScroll(document.getElementById('contact'))">
                Contact
            </li>
        </ul>
    </header>
    <div id="intro" class="Home bg-bottom bg-no-repeat bg-contain" style="background-image: url('/images/home-bg.png')">
        <section class="flex lg:pb-24 lg:pt-12 md:pt-5 pb-48 pt-20 px-16 xl:flex-col md:px-8 md:pb-12">
            <div class="flex-1 lg:pb-16 xl:pb-20 md:pb-8">
                <h1 class="font-bold font-serif lg:text-4xl text-6xl md:text-2xl">
                    Hi, I'm Hardik
                </h1>
                <div class="lg:mr-10 md:mr-0">
                    <p class="text-2xl pt-3 lg:text-sm">
                        A <span class="font-medium">full-stack developer</span> based in Melbourne.
                    </p>
                    <p class="text-2xl py-10 lg:text-sm lg:py-5">
                        I specialize in building (and occasionally designing) high-quality websites and applications.
                    </p>
                    <p class="text-2xl lg:text-sm">
                        I develop exceptional websites and web apps that provide intuitive, user friendly interfaces with efficient and modern backends.
                    </p>
                </div>
            </div>
            <figure class="flex flex-1 lg:mr-10 justify-center md:mr-0">
                <img class="lg:w-1/2 md:w-2/3" src="/images/hardic.png" />
            </figure>
        </section>
    </div>
    <div id="work" class="Work px-16 md:px-5 py-20 md:py-12">
    <h1 class="  md:text-2xl bg-no-repeat font-bold font-serif lg:bg-contain lg:pl-5 lg:text-4xl pl-8 py-3 text-6xl" style="background-image: url('/images/work-bg.png')">
        Work
    </h1>
    <div class="pt-16 md:pt-10 md:px-4">
        <div class="flex pb-5 xl:flex-col xl:pb-0">
            <div class="md:mr-0 border border-black cursor-pointer group h-84 lg:h-40 lg:w-3/6 mr-5 relative rounded thumb w-72 xl:mb-5 md:w-auto">
                <div class="absolute bg-cover bg-no-repeat md:bg-cover h-84 left-1/2 lg:bg-contain lg:h-40 lg:w-full p-6 top-1/2 w-72 z-10" data-hoverimage="/images/rectangle.png">
                    <h2 class="font-bold font-serif lg:text-lg text-2xl">
                        Kraff Software
                    </h2>
                    <p class="text-sm">Sr. Software Engineer • 2009</p>
                    <div class="child hidden flex items-center justify-between lg:pt-10 pt-16">
                        <span class="font-bold font-thin">Read more</span>
                        <img class="md:w-5" src="/images/right-arrow.png" />
                    </div>
                </div>
            </div>
            <div class="md:mr-0 border border-black cursor-pointer group md:w-auto h-84 lg:h-40 lg:w-3/6 mr-5 relative rounded thumb w-72 xl:mb-5">
                <div class="absolute bg-cover md:bg-cover bg-no-repeat h-84 left-1/2 lg:bg-contain lg:h-40 lg:w-full p-6 top-1/2 w-72 z-10" data-hoverimage="/images/rectangle.png">
                    <h2 class="font-bold font-serif lg:text-lg text-2xl">
                        Aecor Digital
                    </h2>
                    <p class="text-sm">CTO & Full-stack Developer</p>
                    <div class="child hidden flex items-center justify-between lg:pt-10 pt-16">
                        <span class="font-bold font-thin">Read more</span>
                        <img class="md:w-5" src="/images/right-arrow.png" />
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class=" md:mr-0 border border-black cursor-pointer md:w-auto group h-84 lg:h-40 lg:w-3/6 mr-5 relative rounded thumb w-72 xl:mb-5">
                <div class="absolute bg-cover md:bg-cover bg-no-repeat h-84 left-1/2 lg:bg-contain lg:h-40 lg:w-full p-6 top-1/2 w-72 z-10" data-hoverimage="/images/rectangle.png">
                    <h2 class="font-bold font-serif lg:text-lg text-2xl">
                        Clubwebsite
                    </h2>
                    <p class="text-sm">Web Developer • 2011</p>
                    <div class="child hidden flex items-center justify-between lg:pt-10 pt-16">
                        <span class="font-bold font-thin">Read more</span>
                        <img class="md:w-5" src="/images/right-arrow.png" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <div id="about" class="About flex md:px-5 px-16 py-20 xl:flex-col md:py-12">
    <div class="flex-1 xl:mr-10 md:mr-0">
        <h1 class="  md:text-2xl bg-no-repeat font-bold font-serif lg:bg-contain lg:pl-5 lg:text-4xl pl-8 py-3 text-6xl" style="background-image: url('/images/about-bg.png')">
            About Me
        </h1>
        <div class="md:px-4">
            <div class="pt-16 md:pt-10 ">
                <h2 class="font-medium lg:text-lg text-2xl">Who am I?</h2>
                <p class="lg:pt-3 lg:text-sm pt-5">
                    I'm Hardik, a full-stack developer based in Melbourne, Victoria who enjoys building things that live on the internet.
                </p>
            </div>
            <div class="lg:pt-10 pt-20 ">
                <h2 class="font-medium lg:text-lg text-2xl">What do I do?</h2>
                <p class="lg:pt-3 lg:text-sm pt-5">
                    I develop exceptional websites and web apps that provide intuitive, user friendly interfaces with efficient and modern backends.
                </p>
            </div>
            <div class="lg:pt-10 pt-20 ">
                <h2 class="font-medium lg:text-lg text-2xl">Okay, what else?</h2>
                <p class="lg:pt-3 lg:text-sm pt-5">I ❤️ cats. That’s it.</p>
            </div>
        </div>
    </div>
    <div class="flex-1"></div>
</div>
    <div id="skills" class="Skills md:px-5 px-16 py-20 md:py-12">
    <div>
        <h1 class="  md:text-2xl bg-no-repeat font-bold font-serif lg:bg-contain lg:pl-5 lg:text-4xl pl-8 py-3 text-6xl" style="background-image: url('/images/skills-bg.png')">
            Skills
        </h1>

        <div class="md:px-4">
            <div class="lg:pt-10 pt-16">
                <h2 class="font-bold font-serif lg:text-lg text-2xl">Front-End</h2>
                <div class="pt-5 flex flex-wrap lg:text-sm">
                    <div class="flex items-center mr-6">
                        <span class="mr-2">HTML5/CSS3</span>
                        <img class="h-4 lg:h-3 lg:w-3 w-4" src="/images/star.png" />
                    </div>
                    <div class="flex items-center mr-6">
                        <span class="mr-2">VueJs</span>
                        <img class="h-4 lg:h-3 lg:w-3 w-4" src="/images/star.png" />
                    </div>
                    <div class="flex items-center mr-6">
                        <span class="mr-2">Boostrap</span>
                        <img class="h-4 lg:h-3 lg:w-3 w-4" src="/images/star.png" />
                    </div>
                    <div class="flex items-center mr-6">
                        <span class="mr-2">TailwindCSS</span>
                        <img class="h-4 lg:h-3 lg:w-3 w-4" src="/images/star.png" />
                    </div>
                    <div class="flex items-center mr-6">
                        <span class="mr-2">Serverless</span>
                        <img class="h-4 lg:h-3 lg:w-3 w-4" src="/images/star.png" />
                    </div>
                </div>
            </div>
            <div class="lg:pt-10 pt-16">
                <h2 class="text-2xl font-serif font-bold lg:text-lg">Back-End</h2>
                <div class="pt-5 flex flex-wrap lg:text-sm">
                    <div class="flex items-center mr-6">
                        <span class="mr-2">PHP</span>
                        <img class="h-4 lg:h-3 lg:w-3 w-4" src="/images/star.png" />
                    </div>
                    <div class="flex items-center mr-6">
                        <span class="mr-2">Laravel</span>
                        <img class="h-4 lg:h-3 lg:w-3 w-4" src="/images/star.png" />
                    </div>
                    <div class="flex items-center mr-6">
                        <span class="mr-2">Serverless</span>
                        <img class="h-4 lg:h-3 lg:w-3 w-4" src="/images/star.png" />
                    </div>
                    <div>
                        <span>NodeJs</span>
                    </div>
                </div>
            </div>
            <div class="lg:pt-10 pt-16">
                <h2 class="text-2xl font-serif font-bold lg:text-lg">Database</h2>
                <div class="pt-5 flex flex-wrap lg:text-sm">
                    <div class="flex items-center mr-6">
                        <span class="mr-2">MySQL</span>
                        <img class="h-4 lg:h-3 lg:w-3 w-4" src="/images/star.png" />
                    </div>
                    <div class="flex items-center mr-6">
                        <span class="mr-2">MongoDB</span>
                        <img class="h-4 lg:h-3 lg:w-3 w-4" src="/images/star.png" />
                    </div>
                    <div class="mr-6">
                        <span>CouchDB</span>
                    </div>
                    <div class="mr-6">
                        <span>Elastic Search</span>
                    </div>
                </div>
            </div>
            <div class="lg:pt-10 pt-16">
                <h2 class="text-2xl font-serif font-bold lg:text-lg">
                    ServerManagement
                </h2>
                <div class="pt-5 flex flex-wrap lg:text-sm">
                    <div class="flex items-center mr-6">
                        <span class="mr-2">AWS Management</span>
                        <img class="h-4 lg:h-3 lg:w-3 w-4" src="/images/star.png" />
                    </div>
                    <div class="mr-6">
                        <span>Azure Management</span>
                    </div>
                </div>
            </div>
            <div class="lg:pt-10 pt-16">
                <h2 class="text-2xl font-serif font-bold lg:text-lg">Design</h2>
                <div class="pt-5 flex flex-wrap lg:text-sm">
                    <div class="mr-6">
                        <span>Wireframing</span>
                    </div>
                    <div class="mr-6">
                        <span>Photoshop</span>
                    </div>
                    <div class="mr-6">
                        <span>Illustrator</span>
                    </div>
                </div>
            </div>
            <p class="lg:pt-10 pt-16 text-gray-500">
                The ones with
                <img class="w-3 inline" src="/images/star.png" /> I am strong with
            </p>
        </div>
    </div>
</div>
    <div id="contact" class="Contact  py-40 lg:py-20 bg-bottom bg-no-repeat bg-contain md:py-12" style="background-image: url('/images/home-bg.png')">
    <div class="flex px-16 xl:flex-col md:px-5 ">
        <div class="flex-1">
            <h1 class="  md:text-2xl bg-no-repeat font-bold font-serif lg:bg-contain lg:pl-5 lg:text-4xl pl-8 py-3 text-6xl" style="background-image: url('/images/contact-bg.png')">
                Contact
            </h1>
            <div class=" md:px-4 md:pt-10 pl-8 pt-16">
                <h2 class="font-medium lg:text-2xl text-4xl md:text-lg">
                    Got interested?
                </h2>
                <h2 class="font-medium text-4xl lg:text-2xl md:text-lg">
                    Want to discuss something?
                </h2>
                <p class="font-bold pt-10 cursor-pointer lg:text-sm md:pt-6">
                    Download Resume
                </p>
                <div class="flex flex-col justify-end mr-16 pr-2 w-1/3 xl:mr-10 xl:pr-0 xl:pt-10 xl:w-auto md:pt-6 md:mr-0">
                    <p class="text-2xl lg:text-lg md:text-sm">
                        Don’t hesitate to drop me an email on
                        <span class="font-medium">mail.hardikshah@gmail.com</span>, or contact me via my social profiles:
                    </p>
                    <div class="flex pt-12 md:pt-5">
                        <img class="mr-10 lg:h-4 lg:w-4" src="/images/github.png" />
                        <img class="mr-10 lg:h-4 lg:w-4" src="/images/twitter.png" />
                        <img class="lg:h-4 lg:w-4" src="/images/linkedin.png" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <img data-hoverimage="/images/blue-arrow.png" class="md:hidden arrow lg:hidden bg-contain bg-no-repeat bg-right-bottom block bottom-0 cursor-pointer down fixed lg:w-12 mb-4 md:mb-2 md:mr-1 mr-4 right-0" src="/images/black-arrow-down.png" />

    <img data-hoverimage="/images/blue-arrow.png" class="md:hidden arrow bg-contain lg:hidden bg-no-repeat bg-right-bottom hidden bottom-0 cursor-pointer up fixed lg:w-12 mb-4 md:mb-2 md:mr-1 mr-4 right-0" src="/images/black-arrow-up.png" />

    <ul class="hidden md:hidden lg:hidden fixed flex flex-col font-serif items-end mr-10 right-0 sidebar top-0 transform translate-y-56">
    <li onclick="smoothScroll(document.getElementById('work'))" class="side-li work hover:font-bold mb-4 bg-no-repeat bg-center py-1 cursor-pointer md:text-sm md:mb-1" data-hoverimage="/images/oval.png">
        Work
    </li>
    <li onclick="smoothScroll(document.getElementById('about'))" class="side-li about hover:font-bold mb-4 bg-no-repeat bg-center py-1 cursor-pointer md:text-sm md:mb-1" data-hoverimage="/images/blue-oval.png">
        About
    </li>
    <li onclick="smoothScroll(document.getElementById('skills'))" class="side-li skills hover:font-bold mb-4 bg-no-repeat bg-center py-1 cursor-pointer md:text-sm md:mb-1" data-hoverimage="/images/peach-oval.png">
        Skills
    </li>
    <li onclick="smoothScroll(document.getElementById('contact'))" class="side-li contact hover:font-bold bg-no-repeat bg-center py-1 cursor-pointer md:text-sm md:mb-1" data-hoverimage="/images/green-oval.png">
        Contact
    </li>
</ul>

    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
</body>

</html>
