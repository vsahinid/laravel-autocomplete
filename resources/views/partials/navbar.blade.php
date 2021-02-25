{{-- https://tailwindcomponents.com/component/responsive-navbar-with-dropdown --}}

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<div
    class="shadow w-full text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800 border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div x-data="{ open: false }"
            class="flex flex-col max-w-screen-xl mx-auto md:items-center md:justify-between md:flex-row">
            <div class="p-4 pl-0 flex flex-row items-center justify-between">
                <a href="/"
                    class="text-lg font-semibold tracking-widest text-blue-600 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">TutorDash</a>
                <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                        <path x-show="!open" fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <nav :class="{'flex': open, 'hidden': !open}"
                class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">
                <a href="#" class="text-gray-400 hover:text-gray-700 px-3 py-3 text-sm font-medium">How
                    it Works</a>
                <a href="#"
                    class="text-gray-400 hover:text-gray-700 hover:text-white px-3 py-3 text-sm font-medium">Pricing</a>
                <a href="#" class="text-gray-400 hover:text-gray-700 hover:text-white px-3 py-3 text-sm font-medium">Log
                    in</a>
                <div class="ml-3 relative">
                    <div>
                        <button
                            class="rounded-md bg-blue-800 flex text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                            id="user-menu" aria-haspopup="true">
                            <a href="#"
                                class="whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-blue-600 hover:bg-blue-700">
                                Sign up
                            </a>
                        </button>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
