<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
    <title>Document</title>
</head>
<body>
    <nav class="bg-white shadow dark:bg-gray-800">
        <div
          class="
            container
            px-6
            py-3
            mx-auto
            md:flex md:justify-between md:items-center
          "
        >
          <div class="flex items-center justify-between">
            <div>
              <a
                class="
                  text-xl
                  font-bold
                  text-gray-800
                  dark:text-white
                  md:text-2xl
                  hover:text-gray-700
                  dark:hover:text-gray-300
                "
                href="#"
                >CXC</a
              >
            </div>
      
            <!-- Mobile menu button -->
            <div class="flex md:hidden">
              <button
                type="button"
                class="
                  text-gray-500
                  dark:text-gray-200
                  hover:text-gray-600
                  dark:hover:text-gray-400
                  focus:outline-none focus:text-gray-600
                  dark:focus:text-gray-400
                "
                aria-label="toggle menu"
              >
                <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                  <path
                    fill-rule="evenodd"
                    d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"
                  ></path>
                </svg>
              </button>
            </div>
          </div>
      
          <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
          <div class="items-center md:flex">
            <div class="flex flex-col md:flex-row md:mx-6">
              <a
                class="
                  my-1
                  text-gray-700
                  dark:text-gray-200
                  hover:text-indigo-500
                  dark:hover:text-indigo-400
                  md:mx-4 md:my-0
                "
                href="#"
                >Home</a
              >
              <a
                class="
                  my-1
                  text-gray-700
                  dark:text-gray-200
                  hover:text-indigo-500
                  dark:hover:text-indigo-400
                  md:mx-4 md:my-0
                "
                href="#"
                >Shop</a
              >
              <a
                class="
                  my-1
                  text-gray-700
                  dark:text-gray-200
                  hover:text-indigo-500
                  dark:hover:text-indigo-400
                  md:mx-4 md:my-0
                "
                href="#"
                >Contact</a
              >
              <a
                class="
                  my-1
                  text-gray-700
                  dark:text-gray-200
                  hover:text-indigo-500
                  dark:hover:text-indigo-400
                  md:mx-4 md:my-0
                "
                href="#"
                >About</a
              >
            </div>
      
            <div class="flex justify-center md:block">
              <a
                class="
                  relative
                  text-gray-700
                  dark:text-gray-200
                  hover:text-gray-600
                  dark:hover:text-gray-300
                "
                href="#"
              >
                <i class="fas fa-shopping-cart"></i>
      
                <span
                  class="
                    absolute
                    top-0
                    left-0
                    p-1
                    text-xs text-white
                    bg-indigo-500
                    rounded-full
                  "
                ></span>
              </a>
            </div>
          </div>
        </div>
      </nav>
      <div
        class="
          container
          border border-solid border-black 
          w-full
          h-full
          p-20
          m-4
          mx-auto
          my-6
          text-center
          bg-green-800
          rounded-xl
        "
      >
        @yield('content')
      </div>
</body>
</html>