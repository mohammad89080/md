@extends('layouts.master')
@section('styles')
<!-- Google Fonts: Poppins -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />

<style>
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
        font-family: 'Poppins', Helvetica, Arial, sans-serif;
        /* background: #111; خلفية داكنة مثلاً */
        color: #fff;
    }

    .swiper {
        width: 100%;
        height: 100vh;
        position: relative;
    }

    .swiper-slide {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #222;
        overflow: hidden;
    }

    .swiper-slide img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        filter: brightness(0.6);
        transition: transform 0.5s ease;
    }

    .swiper-slide:hover img {
        transform: scale(1.05);
    }

    /* تراكب خلفي */
    .swiper-slide > .overlay {
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.20);
        pointer-events: none;
    }

    /* النص */
    .slide-content {
        position: absolute;
        inset: 0;
        z-index: 10;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 0 20px;
        text-align: center;
    }

    .slide-content h2 {
        font-weight: 600;
        font-size: clamp(2rem, 5vw, 4rem);
        line-height: 1.1;
        text-shadow: 0 2px 8px rgba(0,0,0,0.7);
        margin: 0;
        opacity: 0;
        transform: translateY(20px);
        animation-fill-mode: forwards;
    }

    .slide-content p {
        max-width: 600px;
        margin-top: 1rem;
        font-weight: 400;
        font-size: clamp(1rem, 2.5vw, 1.5rem);
        line-height: 1.4;
        text-shadow: 0 1px 6px rgba(0,0,0,0.6);
        opacity: 0;
        transform: translateY(20px);
        animation-fill-mode: forwards;
    }

    /* أزرار */
    .slide-content .btn-group {
        margin-top: 2rem;
        display: flex;
        gap: 1rem;
        flex-wrap: wrap;
        justify-content: center;
    }

    .slide-content a {
        text-decoration: none;
        border: 2px solid #2F76B9;
        color: #2F76B9;
        padding: 0.75rem 2rem;
        border-radius: 12px;
        font-weight: 600;
        font-size: 1rem;
        background: transparent;
        transition: all 0.3s ease;
    }

    .slide-content a:hover {
        background-color: #2F76B9;
        color: #fff;
        box-shadow: 0 4px 12px rgba(47, 118, 185, 0.6);
    }

    /* الأنيميشن عند ظهور السلايد */
    .animate-fade-in {
        animation: fadeInUp 0.7s ease forwards;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* تموج ripple */
    .ripple-effect {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 120px;
        height: 120px;
        background: radial-gradient(circle, rgba(47, 118, 185, 0.4) 10%, transparent 70%);
        border-radius: 50%;
        pointer-events: none;
        transform: translate(-50%, -50%) scale(0);
        animation: ripple 0.8s ease-out forwards;
        z-index: 20;
    }

    @keyframes ripple {
        to {
            transform: translate(-50%, -50%) scale(4);
            opacity: 0;
        }
    }

    /* Swiper pagination & nav */
    .swiper-pagination-bullet {
        background: #2F76B9 !important;
        opacity: 0.8;
    }

    .swiper-button-next,
    .swiper-button-prev {
        color: #2F76B9;
        transition: color 0.3s ease;
    }

    .swiper-button-next:hover,
    .swiper-button-prev:hover {
        color: #1c4e8a;
    }
</style>
@endsection
@section('content')
   <div class="swiper mySwiper">
    <div class="swiper-wrapper">
        @php $locale = LaravelLocalization::getCurrentLocale(); @endphp
        @foreach ($items as $item)
        <div class="swiper-slide relative">
            <img src="{{ asset('storage/' . $item->image_path) }}" alt="" />
            <div class="overlay"></div>

            <div class="slide-content">
                <h2 class="animate-fade-in">{{ $locale == 'ar' ? $item->title_ar : $item->title_en }}</h2>
                <p class="animate-fade-in" style="animation-delay: 0.3s;">
                    {{ $locale == 'ar' ? $item->description_ar : $item->description_en }}
                </p>
                <div class="btn-group animate-fade-in" style="animation-delay: 0.5s;">
                    <a href="#">About US</a>
                    <a href="#">Contact US</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>
   <div class="serction-2 w-full bg-[#404041] py-12">
    <div class="container mx-auto grid grid-cols-1 lg:grid-cols-2 gap-10 items-center px-4">
        
        <!-- النص -->
        <div class="order-2 md:order-1 lg:px-10" data-aos="flip-up" data-aos-delay="300">
            <h2 class="text-white text-[28px] md:text-[32px] lg:text-[36px] font-bold leading-tight mb-4">
                <span class="text-5xl md:text-6xl lg:text-7xl text-white font-black">MD </span>
                International MasterBatch & Compound
            </h2>
            <p class="text-gray-300 text-base md:text-lg leading-relaxed mb-6">
                MD international company was established from the manufacture of plastics materials in 1987 to be one of the first companies in the Middle East as a manufacturer of plastic materials in the two types of Masterbatch & Compound.
            </p>

            <div class="flex flex-wrap gap-4">
                <a href="#"
                   class="px-6 py-2 border border-white text-white hover:bg-blue-500 transition duration-300">
                    About us
                </a>
                <a href="#"
                   class="px-6 py-2 border border-white text-white hover:bg-blue-500 transition duration-300">
                    Contact us
                </a>
            </div>
        </div>

        <!-- الفيديو -->
        <div class="order-1 md:order-2" data-aos="zoom-in" data-aos-delay="300">
            <div class="w-full aspect-video rounded-xl overflow-hidden shadow-lg">
                <iframe class="w-full h-full" src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="YouTube video"
                    frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<!-- قسم المشاريع -->
<div class="our-project py-12 bg-white">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-center">
            <!-- خط يسار -->
            <div class="hidden md:block flex-grow border-t border-gray-300 mr-4"></div>

            <!-- العنوان -->
            <div class="text-center">
                <span class="text-[#438BCF] font-bold text-sm md:text-base uppercase tracking-widest block mb-2">
                    AL-GAMMAL CONTRACTING
                </span>
                <h3 class="text-black text-2xl md:text-4xl font-bold">
                    DIVERSITY
                </h3>
            </div>

            <!-- خط يمين -->
            <div class="hidden md:block flex-grow border-t border-gray-300 ml-4"></div>
        </div>
    </div>
</div>


    {{-- <div class="cards py-10">
        <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6">


            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700"
                data-aos="fade-up-right" data-aos-delay="300">
                <a href="#">
                    <img class="rounded-t-lg w-full h-72 object-cover"
                        src="{{ asset('storage/products/Black_Masterbatch.png') }}" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h6 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Black Masterbatch
                        </h6>
                    </a>
                    <p class="mb-3 font-normal line-clamp-7  text-gray-700 dark:text-gray-400">We offer a top-performing
                        vast range of
                        Black Masterbatch for various end-use applications. With Debs international factory (MD
                        International) vast experience in Masterbatch compounding, we have utilized our best knowledge and
                        expertise in our Masterbatch products to offer brilliant scattering while at the same time keeping
                        up the most noteworthy loading levels for preparing ease at the least expense.</p>
                    <a href="#"
                        class="flex w-full justify-center items-center gap-2 px-5 py-2.5 text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm mb-2">
                        Read more
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700"
                data-aos="fade-up-right" data-aos-delay="300">
                <a href="#">
                    <img class="rounded-t-lg w-full h-72 object-cover"
                        src="{{ asset('storage/products/Black_Masterbatch.png') }}" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h6 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Black Masterbatch
                        </h6>
                    </a>
                    <p class="mb-3 font-normal line-clamp-7  text-gray-700 dark:text-gray-400">We offer a top-performing
                        vast range of
                        Black Masterbatch for various end-use applications. With Debs international factory (MD
                        International) vast experience in Masterbatch compounding, we have utilized our best knowledge and
                        expertise in our Masterbatch products to offer brilliant scattering while at the same time keeping
                        up the most noteworthy loading levels for preparing ease at the least expense.</p>
                    <a href="#"
                        class="flex w-full justify-center items-center gap-2 px-5 py-2.5 text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm mb-2">
                        Read more
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700"
                data-aos="fade-up-right" data-aos-delay="300">
                <a href="#">
                    <img class="rounded-t-lg w-full h-72 object-cover" src="{{ asset('storage/products/image_3.png') }}"
                        alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h6 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Black Masterbatch
                        </h6>
                    </a>
                    <p class="mb-3 font-normal line-clamp-7  text-gray-700 dark:text-gray-400">>We offer a variety of
                        additives that
                        enhance and reinforce both polymers and Masterbatch itself to suit customer requirements during the
                        application process and in the final plastic product.

                        UV Masterbatch
                        Our UV Masterbatch properly disperses in carrier polymers and increases the shelf life of molded and
                        extruded products when exposed to sunlight. It also offers weatherability to molded items for
                        outdoor applications. Our experts know your materials, how to mix with other raw materials, and how
                        they react under different manufacturing processes. Using our extensive know-how and years of
                        experience, we take into account each product’s unique characteristics and service conditions,
                        including climate exposure, chemical environment, Color, life expectancy and more to identify which
                        UV light stabilizer in our innovative range best suits your needs.

                        Anti-static Masterbatch
                        Anti-static Masterbatch minimize the build-up of static charges on the surface of plastic articles
                        that can attract dust or be a hazard in environments containing flammable materials. Our Antistatic
                        Masterbatch works by migrating to the surface of the polymer and are often used to simplify
                        manufacturing processes by replacing more expensive and messy secondary coating operations.
                        Depending on application performance requirements, anti-static Masterbatch can be a viable option.

                        Optical Brightener Masterbatch
                        Optical brightener is likewise called Fluorescent Whitening agents. These Masterbatches work through
                        a fluorescent system that retains light in the UV range and emanates light in the blue region of
                        visible range to yield a more brilliant and brighter appearance. These agents are used to hide the
                        natural yellowing of the plastics and give a better initial Color. We have developed our Optical
                        Brightener Masterbatch specifically for a multitude of polymer and resin systems to ensure you the
                        best possible performance.</p>
                    <a href="#"
                        class="flex w-full justify-center items-center gap-2 px-5 py-2.5 text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm mb-2">
                        Read more
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>


        </div>
    </div> --}}
    <div class="container mx-auto md:max-w-[1350px] px-4 py-10">
    <!-- شبكة المنتجات -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-12 lg:grid-rows-6 gap-4">
        @foreach ($products as $index => $product)
            <div class="{{ $gridClasses[$index]['wrapper'] ?? 'lg:col-span-3 lg:row-span-3' }} " data-aos="flip-up" data-aos-delay="400">
                <a href="{{ route('product.show', $product->slug) }}">
                    <div class="relative bg-black text-white rounded-3xl overflow-hidden border-2 shadow-xl transition-transform duration-500 hover:scale-105">
                        <img src="{{ asset('storage/products/' . $product->image) }}"
                             class="w-full h-64 object-cover opacity-80 {{ $gridClasses[$index]['image_height'] ?? '' }}" />

                        <div class="absolute inset-0 p-4 flex flex-col justify-center items-start">
                            <h2 class="font-semibold text-lg md:text-base lg:text-sm text-white">
                                {{ $product->name }}
                            </h2>
                            <p class="text-sm md:text-xs text-white mt-2">
                                {{ Str::limit($product->description, 150) }}
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>

    {{-- <div class="container mx-auto md:w-[1350px] px-15">
    <div class="grid grid-cols-12 grid-rows-6 gap-2">
        @foreach ($products as $index => $product)
            <div class="{{ $gridClasses[$index]['wrapper'] ?? 'col-span-3 row-span-3' }}">
                <a href="{{ route('product.show', $product->slug) }}">
                    <div class="bg-black text-white rounded-3xl overflow-hidden border-2 shadow-xl/30 relative transform transition-transform duration-500 hover:scale-105">
                        <img src="{{ asset('storage/products/' . $product->image) }}"
                             class="w-full {{ $gridClasses[$index]['image_height'] ?? 'h-64' }} object-cover opacity-60" />
                        <div class="p-4 absolute top-0 left-0 right-0 bottom-0 flex flex-col justify-center px-4">
                            <h2 class="font-semibold text-sm text-white">{{ $product->name }}</h2>
                            <p class="text-xs text-white mt-2">
                                {{ Str::limit($product->description, 150) }}
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div> --}}

    {{-- <div class="container mx-auto md:w-[1350px]  px-15 ">
    <div class="   grid grid-cols-12 grid-rows-6 gap-2  ">
        <div class="col-span-3 row-span-3">
            <div class="bg-black text-white  rounded-3xl  overflow-hidden row-span-2 border-2 shadow-xl/30 relative  transform transition-transform duration-500 hover:scale-105">
                <img src="{{ asset('storage/products/Black_Masterbatch.png') }}"
                    class="w-full h-64 object-cover opacity-60  " />
                <div class="p-4 absolute top-0 left-0 right-0 bottom-0 flex flex-col justify-center px-4">
                    <h2 class="font-semibold text-sm text-white">White Masterbatch</h2>
                    <p class="text-xs text-white mt-2">
                        Debs International factory offers a wide range of white Masterbatch specifically formulated with
                        polyolefin...
                    </p>
                </div>
            </div>
        </div>
        <div class="col-span-3 row-span-3 col-start-1 row-start-4">
            <div class="bg-black text-white  rounded-3xl  overflow-hidden row-span-2 border-2shadow-xl/30 relative transform transition-transform duration-500 hover:scale-105">
                <img src="{{ asset('storage/products/Black_Masterbatch.png') }}"
                    class="w-full h-64 object-cover opacity-60" />
                <div class="p-4 absolute top-0 left-0 right-0 bottom-0 flex flex-col justify-center px-4">
                    <h2 class="font-semibold text-sm text-white">White Masterbatch</h2>
                    <p class="text-xs text-white mt-2">
                        Debs International factory offers a wide range of white Masterbatch specifically formulated with
                        polyolefin...
                    </p>
                </div>
            </div>
        </div>
        <div class="col-span-3 row-span-6 col-start-4 row-start-1 ">
            <div class="bg-black text-white  rounded-3xl   overflow-hidden row-span-2 border-2 shadow-xl/30 relative transform transition-transform duration-500 hover:scale-105">
                <img src="{{ asset('storage/products/Black_Masterbatch.png') }}"
                    class="w-full h-135 object-cover opacity-60" />
                <div class="p-4 absolute top-0 left-0 right-0 bottom-0 flex flex-col justify-center px-4">
                    <h2 class="font-semibold text-sm text-white">White Masterbatch</h2>
                    <p class="text-xs text-white mt-2">
                        Debs International factory offers a wide range of white Masterbatch specifically formulated with
                        polyolefin...
                    </p>
                </div>
            </div>
        </div>
        <div class="col-span-6 row-span-3 col-start-7 row-start-1">
            <div class="bg-black text-white  rounded-3xl shadow-xl/30 overflow-hidden row-span-2 border-2  relative transform transition-transform duration-500 hover:scale-105">
                <img src="{{ asset('storage/products/Black_Masterbatch.png') }}"
                    class="w-full h-64 object-cover opacity-60" />
                <div class="p-4 absolute top-0 left-0 right-0 bottom-0 flex flex-col justify-center px-4">
                    <h2 class="font-semibold text-sm text-white">White Masterbatch</h2>
                    <p class="text-xs text-white mt-2">
                        Debs International factory offers a wide range of white Masterbatch specifically formulated with
                        polyolefin...
                    </p>
                </div>
            </div>
        </div>
        <div class="col-span-3 row-span-3 col-start-7 row-start-4">
            <div class="bg-black text-white rounded-3xl shadow-xl/30 overflow-hidden row-span-2 border-2 relative transform transition-transform duration-500 hover:scale-105 ">
                <img src="{{ asset('storage/products/Black_Masterbatch.png') }}"
                    class="w-full h-64 object-cover opacity-60" />
                <div class="p-4 absolute top-0 left-0 right-0 bottom-0 flex flex-col justify-center px-4">
                    <h2 class="font-semibold text-sm text-white">White Masterbatch</h2>
                    <p class="text-xs text-white mt-2">
                        Debs International factory offers a wide range of white Masterbatch specifically formulated with
                        polyolefin...
                    </p>
                </div>
            </div>
        </div>
        <div class="col-span-3 row-span-3 col-start-10 row-start-4 ">
            <div class="bg-black text-white rounded-3xl shadow-xl/30 overflow-hidden row-span-2 border-2 relative transform transition-transform duration-500 hover:scale-105 ">
                <img src="{{ asset('storage/products/Black_Masterbatch.png') }}"
                    class="w-full h-64 object-cover opacity-60" />
                <div class="p-4 absolute top-0 left-0 right-0 bottom-0 flex flex-col justify-center px-4">
                    <h2 class="font-semibold text-sm text-white">White Masterbatch</h2>
                    <p class="text-xs text-white mt-2">
                        Debs International factory offers a wide range of white Masterbatch specifically formulated with
                        polyolefin...
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div> --}}
@endsection

@section('js')
<script>
    var swiper = new Swiper(".mySwiper", {
        effect: 'fade',
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        fadeEffect: {
            crossFade: true,
        },
        on: {
            slideChangeTransitionStart: function () {
                // إزالة الأنيميشن من العناوين القديمة
                document.querySelectorAll('.slide-content h2, .slide-content p, .btn-group').forEach(el => {
                    el.style.opacity = 0;
                    el.style.transform = 'translateY(20px)';
                    el.style.animation = 'none';
                });

                // إضافة الأنيميشن للعناصر في السلايد الحالي
                let activeSlide = this.slides[this.activeIndex];
                if (!activeSlide) return;

                const heading = activeSlide.querySelector('h2');
                const paragraph = activeSlide.querySelector('p');
                const btnGroup = activeSlide.querySelector('.btn-group');

                if (heading) {
                    heading.style.animation = 'fadeInUp 0.7s ease forwards';
                    heading.style.animationDelay = '0s';
                }
                if (paragraph) {
                    paragraph.style.animation = 'fadeInUp 0.7s ease forwards';
                    paragraph.style.animationDelay = '0.3s';
                }
                if (btnGroup) {
                    btnGroup.style.animation = 'fadeInUp 0.7s ease forwards';
                    btnGroup.style.animationDelay = '0.5s';
                }
            },

            slideChangeTransitionEnd: function () {
                // تأثير ripple عند تغيير السلايد
                let activeSlide = this.slides[this.activeIndex];
                const ripple = document.createElement('div');
                ripple.classList.add('ripple-effect');
                activeSlide.appendChild(ripple);

                ripple.addEventListener('animationend', () => ripple.remove());
            }
        }
    });
</script>
@endsection