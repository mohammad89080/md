<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Flowbite Navbar Test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />


    <!-- Demo styles -->
    <style>
        html,
        body {
            position: relative;
            height: 100%;
        }

        body {
            background: #000;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #fff;
            margin: 0;
            padding: 0;
        }

        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #444;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
    <style>
        /* أضف أنيميشن تموجات بسيطة */
        .ripple-effect {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            pointer-events: none;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.4) 10%, transparent 40%);
            animation: ripple 0.8s ease-out;
        }

        @keyframes ripple {
            from {
                transform: scale(0);
                opacity: 1;
            }

            to {
                transform: scale(4);
                opacity: 0;
            }
        }
    </style>
</head>

<body>



    <nav
        class=" fixed top-0 left-0 right-0  bg-opacity-90 backdrop-blur  border-gray-200 dark:bg-gray-900  bg-transparent  z-50">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
            </a>
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg  md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0  dark:bg-gray-800 md:dark: dark:border-gray-700">
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-white bg-blue-700 rounded-sm md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pricing</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
       
            <div class="swiper-slide relative">
                <img class="w-full h-96 object-cover rounded-xl" src="{{ asset('assets/images/img_1.png') }}"
                    alt="" srcset="">
                <div class="absolute inset-0 bg-black/40"></div>

                <!-- النص -->
                <div
                    class="absolute inset-0 flex flex-col items-center justify-center px-12 text-white z-10 animate-fade-in">
                    <h2 class="text-4xl md:text-6xl font-bold mb-4 animate__animated ">We Provide Best Health Care</h2>
                    <p class="text-lg md:text-xl mb-6 max-w-xl">Experience professional medical service with compassion
                        and care for all patients.</p>
                    <a href="#"
                        class="bg-indigo-600 hover:bg-indigo-700 px-6 py-3 rounded-md text-white font-semibold transition">Read
                        More</a>
                </div>
            </div>
             <div class="swiper-slide relative">
                <img class="w-full h-96 object-cover rounded-xl" src="{{ asset('assets/images/img_1.png') }}"
                    alt="" srcset="">
                <div class="absolute inset-0 bg-black/40"></div>

                <!-- النص -->
                <div
                    class="absolute inset-0 flex flex-col items-center justify-center px-12 text-white z-10 animate-fade-in">
                    <h2 class="text-4xl md:text-6xl font-bold mb-4 animate__animated   ">We create the colors that shape the future</h2>
                    <p class="text-lg md:text-xl mb-6 max-w-xl">With expertise in pigments and plastic products, we deliver quality that lasts.</p>
                    <a href="#"
                        class="bg-indigo-600 hover:bg-indigo-700 px-6 py-3 rounded-md text-white font-semibold transition">Read
                        More</a>
                </div>
            </div>
                     <div class="swiper-slide relative">
                <img class="w-full h-96 object-cover rounded-xl" src="{{ asset('assets/images/img_1.png') }}"
                    alt="" srcset="">
                <div class="absolute inset-0 bg-black/40"></div>

                <!-- النص -->
                <div
                    class="absolute inset-0 flex flex-col items-center justify-center px-12 text-white z-10 animate-fade-in">
                    <h2 class="text-4xl md:text-6xl font-bold mb-4  animate__animated ">Uncompromising Quality</h2>
                    <p class="text-lg md:text-xl mb-6 max-w-xl">We adhere to the highest manufacturing standards to exceed expectations.</p>
                    <a href="#"
                        class="bg-indigo-600 hover:bg-indigo-700 px-6 py-3 rounded-md text-white font-semibold transition">Read
                        More</a>
                </div>
            </div>
                     <div class="swiper-slide relative">
                <img class="w-full h-96 object-cover rounded-xl" src="{{ asset('assets/images/img_1.png') }}"
                    alt="" srcset="">
                <div class="absolute inset-0 bg-black/40"></div>

                <!-- النص -->
                <div
                    class="absolute inset-0 flex flex-col items-center justify-center px-12 text-white z-10 animate-fade-in">
                    <h2 class="text-4xl md:text-6xl font-bold mb-4 animate__animated  ">Integrated Solutions. Reliable Delivery</h2>
                    <p class="text-lg md:text-xl mb-6 max-w-xl">Providing pigments and plastic materials with accuracy and on-time supply.</p>
                    <a href="#"
                        class="bg-indigo-600 hover:bg-indigo-700 px-6 py-3 rounded-md text-white font-semibold transition">Read
                        More</a>
                </div>
            </div>
            <div class="swiper-slide relative">
                <img class="w-full h-96 object-cover rounded-xl" src="{{ asset('assets/images/img_1.png') }}"
                    alt="" srcset="">
                <div class="absolute inset-0 bg-black/40"></div>

                <!-- النص -->
                <div
                    class="absolute inset-0 flex flex-col items-center justify-center px-12 text-white z-10 animate-fade-in">
                    <h2  class="text-4xl md:text-6xl font-bold mb-4  animate__animated">Your Industrial Partner, Every Step of the Way</h2>
                    <p class="text-lg md:text-xl mb-6 max-w-xl">Building long-term relationships based on trust, quality, and support.</p>
                    <a href="#"
                        class="bg-indigo-600 hover:bg-indigo-700 px-6 py-3 rounded-md text-white font-semibold transition">Read
                        More</a>
                </div>
            </div>
            
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            effect: 'fade',
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },

            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            fadeEffect: {
                crossFade: true,
            },
              on: {
    slideChange: function () {
      // إزالة الكلاسات من كل العناوين
      document.querySelectorAll('.swiper-slide .animate__animated').forEach(el => {
        el.classList.remove('animate__backInLeft', 'animate__backInRight');
      });
      // إضافة الأنيميشن للعنوان في السلايد الحالي
      const activeSlide = this.slides[this.activeIndex];
      const heading = activeSlide.querySelector('h2.animate__animated');
      if (heading) {
        // افحص إذا كان العنوان يمين أو يسار وطبّق الأنيميشن المناسب
        if (this.activeIndex % 2 === 0) {
          heading.classList.add('animate__backInLeft');
        } else {
          heading.classList.add('animate__backInRight');
        }
      }
    },
  },
        });
        // إضافة تموج عند تغيير السلايد
        swiper.on('slideChangeTransitionStart', () => {
            const activeSlide = swiper.slides[swiper.activeIndex];
            const ripple = document.createElement('div');
            ripple.classList.add('ripple-effect');
            activeSlide.appendChild(ripple);

            ripple.addEventListener('animationend', () => {
                ripple.remove();
            });
        });
    </script>

    <!-- ✅ Use bundle.js for full functionality -->
    <script src="https://unpkg.com/flowbite@2.3.0/dist/flowbite.bundle.js"></script>
    <script src="https://unpkg.com/flowbite@2.3.0/dist/flowbite.min.js"></script>

    {{-- <script>
var swiper = new Swiper(".fraction-slide-carousel", {
loop: true,
fraction: true,
navigation: {
  nextEl: ".fraction-slide-carousel .swiper-button-next",
  prevEl: ".fraction-slide-carousel .swiper-button-prev",
},
pagination: {
  el: '.fraction-slide-carousel .swiper-pagination',
  type: 'fraction',
  formatFractionCurrent: function(number) {
    return number;
  }
},
});
</script> --}}
    @vite('resources/js/app.js')
</body>

</html>
