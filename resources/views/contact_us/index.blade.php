@extends('layouts.master')
@section('content')
    <style>
        body {
            background-color: #f8f8f8;
        }
    </style>
    <div class="landing-about-us relative">
        <!-- Black overlay -->
        <div class="absolute inset-0 bg-black/20 "></div>

        <!-- Text content -->
        <div class="intro absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center w-full z-10">
            <h1 class="md:text-6xl font-bold mb-4 text-white">Contact us</h1>
            <p class="text-white">home / contact</p>
        </div>
    </div>
    <div class="container mx-auto py-6">
        <div class="flex flex-wrap justify-between gap-4 px-4">
            <!-- البريد الإلكتروني -->
            <div class="flex items-center gap-4 px-6 py-4 bg-white rounded-lg shadow hover:shadow-md transition-shadow"  data-aos="zoom-in-up" data-aos-delay="300">
                <div class="p-3 rounded-full bg-[#E6F0FA] text-[#438BCF] hover:scale-105 transition-transform">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7" />
                        <rect x="2" y="4" width="20" height="16" rx="2" />
                    </svg>
                </div>
                <span class="text-gray-800 font-medium hover:text-[#438BCF] transition-colors">
                    info@algammal-eg.com
                </span>
            </div>

            <!-- رقم الهاتف -->
            <div class="flex items-center gap-4 px-6 py-4 bg-white rounded-lg shadow hover:shadow-md transition-shadow"  data-aos="zoom-in-up" data-aos-delay="300">
                <div class="p-3 rounded-full bg-[#FEFBEC] text-[#438BCF] hover:scale-105 transition-transform">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path
                            d="M22 16.92v3a2 2 0 0 1-2.18 2 19.91 19.91 0 0 1-8.63-3.07 19.7 19.7 0 0 1-6.28-6.29A19.91 19.91 0 0 1 2.08 4.18 2 2 0 0 1 4.06 2h3a2 2 0 0 1 2 1.72c.13.94.4 1.85.78 2.71a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.37-1.37a2 2 0 0 1 2.11-.45c.86.38 1.77.65 2.71.78a2 2 0 0 1 1.72 2.05z" />
                    </svg>
                </div>
                <span class="text-gray-800 font-medium hover:text-[#438BCF] transition-colors">
                    02 33770931
                </span>
            </div>


            <!-- العنوان -->
            <div class="flex items-center gap-4 px-6 py-4 bg-white rounded-lg shadow hover:shadow-md transition-shadow"  data-aos="zoom-in-up" data-aos-delay="300">
                <!-- الأيقونة -->
                <div class="p-3 rounded-full bg-[#E6F0FA] text-[#438BCF] hover:scale-105 transition-transform">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 0 1 18 0z" />
                        <circle cx="12" cy="10" r="3" />
                    </svg>
                </div>

                <!-- النص -->
                <span class="text-gray-800 font-medium hover:text-[#438BCF] transition-colors">
                    10 A Rama Building, Kattameya, Ring Road, Cairo, Egypt
                </span>
            </div>
            <!-- ساعات العمل -->
            <div class="flex items-center gap-4 px-6 py-4 bg-white rounded-lg shadow hover:shadow-md transition-shadow"  data-aos="zoom-in-up" data-aos-delay="300">
                <!-- الأيقونة -->
                <div class="p-3 rounded-full bg-[#FCEDEE] text-[#438BCF] hover:scale-105 transition-transform">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10" />
                        <polyline points="12 6 12 12 16 14" />
                    </svg>
                </div>

                <!-- النص -->
                <span class="text-gray-800 font-medium hover:text-[#438BCF] transition-colors">
                    Sunday – Friday | 9:00 AM – 5:00 PM
                </span>
            </div>
        </div>

    </div>
<div class="max-w-7xl mx-auto px-6">
  <div class="bg-white shadow-xl rounded-2xl p-8 md:p-12 border border-gray-200">
    <h2 class="text-3xl font-bold text-gray-800 mb-4">📬 Contact Us</h2>
    <p class="text-gray-600 mb-8 leading-relaxed">
      Whether you're looking for answers, need help with a problem, or just want to let us know how we did — we're here for you.
    </p>

    <div class="grid md:grid-cols-3 gap-10">
      <!-- Contact Form -->
      <form method="POST" action="" class="md:col-span-2 space-y-6">
        @csrf

        <div class="grid md:grid-cols-2 gap-6" data-aos="flip-up" data-aos-delay="300">
          <div data-aos="zoom-in-up" data-aos-delay="300">
            <label class="block text-sm font-medium text-gray-700 mb-1">Your Name</label>
            <input type="text" name="name" value="{{ old('name') }}" class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none shadow-sm" required />
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
            <input type="email" name="email" value="{{ old('email') }}" class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none shadow-sm" />
          </div>
        </div>

        <div class="grid md:grid-cols-2 gap-6" data-aos="zoom-in-up" data-aos-delay="300">
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
            <input type="text" name="phone" value="{{ old('phone') }}" class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none shadow-sm" />
          </div>
          <div data-aos="zoom-in-up" data-aos-delay="300">
            <label class="block text-sm font-medium text-gray-700 mb-1">Company</label>
            <input type="text" name="company" value="{{ old('company') }}" class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none shadow-sm" />
          </div>
        </div>

        <div data-aos="zoom-in-up" data-aos-delay="300">
          <label class="block text-sm font-medium text-gray-700 mb-1">Your Message</label>
          <textarea name="message" rows="5" class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:ring-2 focus:ring-blue-500 focus:outline-none shadow-sm" required>{{ old('message') }}</textarea>
        </div>

        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-xl shadow-md transition duration-200">
          Send Message
        </button>

        <!-- Success Message -->
        @if(session('success'))
        <div class="bg-green-500 text-white px-4 py-3 rounded-xl mt-4 flex items-center gap-3">
          <i class="fas fa-check-circle"></i>
          {{ session('success') }}
        </div>
        @endif
      </form>

      <!-- Sidebar -->
      <div class="bg-gray-50 rounded-xl p-6 shadow-sm space-y-6"  data-aos="zoom-in-up" data-aos-delay="300">
        <h3 class="text-lg font-semibold text-gray-800">📄 Download Catalog</h3>
        <button class="w-full bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-xl flex items-center justify-center gap-2">
          <i class="fas fa-download"></i> Download
        </button>

        <p class="text-sm text-gray-600">
          Have questions about how we can help your business? Drop us a message and we’ll get back to you shortly.
        </p>

        <div class="flex gap-4 text-blue-600 text-lg mt-4">
          <a href="#" class="hover:text-blue-800"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="hover:text-blue-400"><i class="fab fa-twitter"></i></a>
          <a href="#" class="hover:text-pink-600"><i class="fab fa-pinterest-p"></i></a>
          <a href="#" class="hover:text-blue-700"><i class="fab fa-linkedin-in"></i></a>
          <a href="#" class="hover:text-blue-500"><i class="fab fa-telegram-plane"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
