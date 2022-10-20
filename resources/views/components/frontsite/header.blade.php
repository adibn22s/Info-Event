<!-- Navbar -->
<nav class="space-x-4 ">
    <div class="navkiri ml-32 lg:py-8">
      <div class="flex justify-between h-16">
        <div class="flex flex-auto justify-between mr-64">
          <a href="" class="flex-shrink-0 flex"><img class="h-10 lg:h-14 w-auto" src="{{ asset('assets/frontsite/images/logo_infoevent.png') }}" width="50" /></a>
        </div>
        <div class="navkanan ml-24 mr-10 mb-5 navbar">
          <a href="{{ route('index') }}" class="px-3 py-2 text-white rounded-lg hover:bg-transparent hover:text-slate-900 font-family:'Poppins' mx-1 text-base">Home</a>
          <a href="{{ ('Event') }}" class="px-3 py-2 text-white rounded-lg hover:bg-transparent hover:text-slate-900 font-family:'Poppins' mx-1 text-base">Event</a>
          <a href="{{ ('Add-Event') }}" class="px-3 py-2 text-white rounded-lg hover:bg-transparent hover:text-slate-900 font-family:'Poppins' mx-1 text-base"
            >Add Event</a
          >
          <a href="/about" class="px-3 py-2 text-white rounded-lg hover:bg-transparent hover:text-slate-900 font-family:'Poppins' mx-1 text-base">About</a>
          <button
            type="button"
            class="text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900 mr-5"
          >
            <a
              href="{{ route('login') }}"
              class="px-3 py-2 text-white rounded-lg hover:bg-transparent hover:text-slate-900 font-family:'Poppins' mx-1 text-base"
              >Login/Register</a
            >
          </button>
        </div>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->