<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <link href="https://fonts.googleapis.com/css2?family=Droid+Sans+Arabic&display=swap" rel="stylesheet" />
         <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <!-- CSS -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
<style>
  .lato-thin {
  font-family: "Lato", sans-serif;
  font-weight: 100;
  font-style: normal;
}

.lato-light {
  font-family: "Lato", sans-serif;
  font-weight: 300;
  font-style: normal;
}

.lato-regular {
  font-family: "Lato", sans-serif;
  font-weight: 400;
  font-style: normal;
}

.lato-bold {
  font-family: "Lato", sans-serif;
  font-weight: 700;
  font-style: normal;
}

.lato-black {
  font-family: "Lato", sans-serif;
  font-weight: 900;
  font-style: normal;
}

.lato-thin-italic {
  font-family: "Lato", sans-serif;
  font-weight: 100;
  font-style: italic;
}

.lato-light-italic {
  font-family: "Lato", sans-serif;
  font-weight: 300;
  font-style: italic;
}

.lato-regular-italic {
  font-family: "Lato", sans-serif;
  font-weight: 400;
  font-style: italic;
}

.lato-bold-italic {
  font-family: "Lato", sans-serif;
  font-weight: 700;
  font-style: italic;
}

.lato-black-italic {
  font-family: "Lato", sans-serif;
  font-weight: 900;
  font-style: italic;
}

</style>
<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
     @vite('resources/css/app.css')
     <style>
        body {
  font-family: 'Droid Sans Arabic', sans-serif;
}
     </style>
       @yield('styles')
</head>
<body class="min-h-screen">
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
     <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
         <script src="https://unpkg.com/flowbite@2.3.0/dist/flowbite.bundle.js"></script>
    <script src="https://unpkg.com/flowbite@2.3.0/dist/flowbite.min.js"></script>
    <script src="https://unpkg.com/flowbite@1.6.5/dist/flowbite.min.js"></script>
    @vite('resources/js/app.js')
      @yield('js')
      <script>
    AOS.init();
</script>
</body>   
</html>