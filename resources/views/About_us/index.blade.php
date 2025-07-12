@extends('layouts.master')
@section('content')
    <style>
        body {
            background-color: #f8f8f8;
        }
    </style>
    <div class="landing-about-us relative">
        <div class="intro absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center w-[320px] ">
            <h1 class="text-6xl font-bold mb-4 text-white">About us</h1>
            <p class=" text-white">Lorem ipsum dolor sit em asperiores, pariatur distinctio! Corrupti qui voluptate omnis
                quod.</p>
        </div>
    </div>
    <div class="section-2">
      <div class="container mx-auto">

      </div>
    </div>
    <div class="container max-w-[1200px] mx-auto px-4 grid grid-cols-1 md:grid-cols-3 bg-[#f8f8f8] " style="">
        <div class="md:col-span-1 bg-blue-200 p-6 rounded">

        </div>
        <div class="md:col-span-2 bg-white p-6 rounded">
            <h1 class="text-gray-500 text-2xl">

                عن الشركة
            </h1>
            <p class="mt-5 ">تدير شركة الفنار نشاطاتها من منشآتها الموزعة في العديد من بلدان الشرق الأوسط وآسيا وأفريقيا
                وأوروبا المتمثلة في تصنيع وتجارة المنتجات الكهربائية الإنشائية ذات الجهد المنخفض والمتوسط والعالي وتقديم
                الحلول الهندسية والإنشائيّة لمشاريع توليد الطاقة التقليدية والمتجددة لمحطات الطاقة الكهربائية ومشاريع نقل
                وتوزيع الطاقة وخدمات التشغيل والصيانة وأعمال الفحص والإختبار والمعايرة والإستشارات الهندسية.</p>
            <hr class="my-5 border-0 border-t border-t-[#eee]">
            <div class="spetial grid grid-cols-1 md:grid-cols-3">
                <div class="one md:col-span-1 flex justify-center items-center">
                  <img class ="max-w-4/5 h-auto"
                        src="https://www.alfanar.com/assets/images/worldwide.png" alt="">
                      </div>
                <div class="one md:col-span-2">
                  <h1 class="text-2xl">
                    خدمات ومنتجات مبتكرة حول العالم:
                  </h1>
                 <hr class="my-3 border-0 border-t border-dashed border-t-[#eee]">

                  <p class="text-[#838282] leading-[21px] text-1xl">يتجلى إلتزام شركة الفنار بتوفير منتجات مبتكرة عالية الجودة من خلال استخدامها آخر التقنيات والتطبيقات العالمية في منشآتها التصنيعية الحديثة المتوزعة عبر العديد من البلدان حول العالم وأهمها:
مدينة الفنار الصناعية ( المملكة العربية السعودية)، كونتاكتوم ( المملكة المتحدة)، زي آي في ( إسبانيا)، صفا (تركيا)، كوب ( ألمانيا)، إي أيه (إيطاليا)، الفنار للأنظمة الكهربائية ( الإمارات العربية المتحدة)، بالإضافة إلى مركز تطوير في شنهاي (الهند)، حيث تخضع منتجاتها لاختبارات صارمة للجودة والسلامة خلال كافة مراحل الإنتاج للتأكد من مطابقتها مع المواصفات والمعايير الدولية.</p>
                </div>

            </div>
        </div>
    </div>


    {{-- <style>
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

<div class="swiper mySwiper">
    <div class="swiper-wrapper">
                 <div class="swiper-slide relative">
                <img class="w-full h-96 object-cover rounded-xl"
                    src="https://images.unsplash.com/photo-1737821885725-0627937e35c4?q=80&w=2152&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="" srcset="">
                <div class="absolute inset-0 bg-black/40 flex flex-col items-center justify-center rounded-xl">
                    <h1 class="text-white text-3xl font-bold">About US</h1>
  
                    <p>Home » About us</p>
                </div>
            </div>  
      <div class="swiper-slide">Slide 2</div>
      <div class="swiper-slide">Slide 3</div>
      <div class="swiper-slide">Slide 4</div>
      <div class="swiper-slide">Slide 5</div>
      <div class="swiper-slide">Slide 6</div>
      <div class="swiper-slide">Slide 7</div>
      <div class="swiper-slide">Slide 8</div>
      <div class="swiper-slide">Slide 9</div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
   <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      pagination: {
        el: ".swiper-pagination",
      },
    });
  </script>

    <!-- ✅ Use bundle.js for full functionality -->
    <script src="https://unpkg.com/flowbite@2.3.0/dist/flowbite.bundle.js"></script>
    <script src="https://unpkg.com/flowbite@2.3.0/dist/flowbite.min.js"></script> --}}
@endsection
