<nav
  class="fixed top-0 left-0 right-0 z-50 bg-transparent backdrop-blur-md bg-white/30 dark:bg-gray-900/30 border-b border-gray-200 dark:border-gray-700 transition-colors duration-500 ease-in-out shadow-lg"
  id="navbar">
  <div class="max-w-screen-xl mx-auto flex flex-wrap items-center justify-between p-4 font-sans">
    
    <!-- الشعار -->
 <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
  <img src="{{ asset('assets/images/Logo-EN.svg') }}" alt="Flowbite Logo" class="h-15 w-auto" />

</a>

    <!-- زر القائمة للهاتف -->
    <button data-collapse-toggle="navbar-default" type="button"
      class="inline-flex items-center p-2 w-12 h-12 justify-center text-gray-600 rounded-lg md:hidden hover:bg-blue-100 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:text-gray-300 dark:hover:bg-blue-700 dark:focus:ring-blue-400 transition duration-300"
      aria-controls="navbar-default" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-6 h-6" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="2"
        stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
        <path d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>

    <!-- قائمة الروابط -->
    <div class="hidden w-full md:flex md:w-auto" id="navbar-default">
      <ul
        class="flex flex-col md:flex-row md:space-x-10 rtl:space-x-reverse mt-6 md:mt-0 bg-white/70 dark:bg-gray-800/70 backdrop-blur-sm rounded-lg md:bg-transparent md:backdrop-blur-0 p-6 md:p-0 shadow-lg md:shadow-none">
        
        <li>
          <a href="{{ route('home') }}"
            class="block py-2 px-4 text-lg font-semibold text-blue-600 rounded-md md:text-base md:px-3 md:py-2 md:hover:bg-transparent hover:bg-blue-100 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-500 transition duration-300">Home</a>
        </li>
        <li>
          <a href="#"
            class="block py-2 px-4 text-lg font-semibold text-gray-700 rounded-md md:text-base md:px-3 md:py-2 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-500 dark:hover:bg-gray-700 transition duration-300">About</a>
        </li>
        <li>
          <a href="#"
            class="block py-2 px-4 text-lg font-semibold text-gray-700 rounded-md md:text-base md:px-3 md:py-2 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-500 dark:hover:bg-gray-700 transition duration-300">Services</a>
        </li>
        <li>
          <a href="#"
            class="block py-2 px-4 text-lg font-semibold text-gray-700 rounded-md md:text-base md:px-3 md:py-2 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-500 dark:hover:bg-gray-700 transition duration-300">Pricing</a>
        </li>
        <li>
          <a href="{{ route('contact') }}"
            class="block py-2 px-4 text-lg font-semibold text-gray-700 rounded-md md:text-base md:px-3 md:py-2 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-500 dark:hover:bg-gray-700 transition duration-300">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<script>
  // تغيير لون الخلفية عند التمرير لتثبيت الشفافية مع ظل أقوى
  window.addEventListener('scroll', () => {
    const navbar = document.getElementById('navbar');
    if(window.scrollY > 50) {
      navbar.classList.add('bg-white/90', 'dark:bg-gray-900/90', 'shadow-xl', 'backdrop-blur-md');
    } else {
      navbar.classList.remove('bg-white/90', 'dark:bg-gray-900/90', 'shadow-xl', 'backdrop-blur-md');
    }
  });
</script>
