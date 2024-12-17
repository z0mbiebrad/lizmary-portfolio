<nav class="bg-white shadow" x-data="{ open:false }">
    <div class="mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 justify-between">
            <div class="flex shrink-0 items-center">
                <a 
                    href="/"
                    class="flex items-center gap-x-2"
                >
                    <img 
                        class="h-12 w-auto" 
                        src="{{ asset('images/camera.png') }}"
                        alt="Your Company"
                    >   
                    Lizmary Evans
                </a>
            </div>
            <div class="-ml-2 mr-2 flex items-center md:hidden">
                <!-- Mobile menu button -->
                <button 
                    type="button"
                    class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                    aria-controls="mobile-menu" 
                    :aria-expanded="open"
                    @click="open = !open"
                >
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <!-- 
                        Icon when menu is closed.
                        Menu open: "hidden", Menu closed: "block"
                    -->
                    <svg 
                        x-show="!open"
                        class="block size-6" 
                        fill="none" viewBox="0 0 24 24" 
                        stroke-width="1.5"
                        stroke="currentColor" 
                        aria-hidden="true" 
                        data-slot="icon"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <!--
                        Icon when menu is open.
                        Menu open: "block", Menu closed: "hidden"
                    -->
                    <svg 
                        x-show="open"
                        xmlns="http://www.w3.org/2000/svg" 
                        fill="none" viewBox="0 0 24 24" 
                        stroke-width="1.5" 
                        stroke="currentColor" 
                        class="size-6"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="hidden md:ml-6 md:flex md:space-x-8">
                <!-- Current: "border-indigo-500 text-gray-900", Default: "border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700" -->
                <a 
                    href="{{ route('about') }}"
                    class="link
                    {{ $route === 'about' ? 'active-link' : 'inactive-link' }}"
                >
                    About
                </a>
                <a 
                    href="{{ route('meet') }}"
                    class="link
                    {{ $route === 'meet' ? 'active-link' : 'inactive-link' }}"
                >
                    Meet The Writer
                </a>
                <a 
                    href="{{ route('contact') }}"
                    class="link
                    {{ $route === 'contact' ? 'active-link' : 'inactive-link' }}"
                >
                    Contact Me
                </a>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div
        x-show="open"
        class="md:hidden" 
        id="mobile-menu"
    >
        <div class="space-y-1 pb-3 pt-2">
            <!-- Current: "bg-indigo-50 border-indigo-500 text-indigo-700", Default: "border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700" -->
            <a href="#"
                class="block border-l-4 border-indigo-500 bg-indigo-50 py-2 pl-3 pr-4 text-base font-medium text-indigo-700 sm:pl-5 sm:pr-6">About</a>
            <a href="#"
                class="block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-gray-500 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-700 sm:pl-5 sm:pr-6">Meet The Writer</a>
            <a href="#"
                class="block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-gray-500 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-700 sm:pl-5 sm:pr-6">Contact</a>
        </div>
    </div>
</nav>