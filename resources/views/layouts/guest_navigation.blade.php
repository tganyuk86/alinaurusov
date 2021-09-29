<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <!-- <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('gallery') }}">
                        <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
                    </a>
                </div> -->

                <!-- Navigation Links -->        

                <div class="header-nav-item">
                    <x-nav-link :href="route('gallery')" :active="request()->routeIs('gallery')">
                        Gallery
                    </x-nav-link>
                </div>

                <div class="header-nav-item">
                    <x-nav-link :href="route('workuser')" :active="request()->routeIs('workuser')">
                        Work
                    </x-nav-link>
                </div>

                <div class="header-nav-item">
                    <x-nav-link href="https://www.tricera.net/artist/mixed-media-artists/8104004?fbclid=IwAR1d2IjKy68ho5G6ZgJcKAMY-hIwh0QM71j_6Dk_sd5WuMutKx01PdfLWug" >
                        Shop
                    </x-nav-link>
                </div>

                <div class="header-nav-item">
                    <x-nav-link :href="route('contactus')" :active="request()->routeIs('contactus')" >
                        Contact
                    </x-nav-link>
                </div>

                <div class="header-nav-item">
                    <x-nav-link :href="route('about')" :active="request()->routeIs('about')" >
                        About
                    </x-nav-link>
                </div>               
            </div>
                
            <div class="header-title-text">Alina Urusov </div>          
              
            <div class="header-actions-action header-actions-action--social  header-actions--right">
              
            <div>
                <a class="icon icon--fill" href="mailto:alina_urusov@yahoo.com" target="_blank" aria-label="alina_urusov@yahoo.com">
                    <svg viewBox="23 23 64 64">
                        <img src="/images/email_icon.png">
                    </svg>
                </a>
               
                <a class="icon icon--fill" href="https://www.instagram.com/babybeebones/" target="_blank" aria-label="Instagram">
                    <svg viewBox="23 23 64 64">
                        <img src="/images/insta_icon.png">
                    </svg>
                </a>
            </div>
              
            </div>      
      </div>

        

        <!-- Hamburger -->
        <div class="-mr-2 flex items-center sm:hidden">
            <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

    </div>
</nav>
