    <nav class="w-full flex flex-wrap items-center justify-between px-32 py-3 absolute z-50 navbar-expand-lg">
        <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
            <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
                <a class="text-xl font-bold leading-relaxed inline-block mr-4 py-2 whitespace-no-wrap uppercase text-yellow-500"
                    href="{{ route('home') }}"><img src="{{ asset('frontend/images/logo.png') }}" alt=""
                        class="w-36"></a>
                <button id="menu-btn"
                    class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
                    type="button"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" class="h-10 w-10">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg></button>
            </div>
            <div class="lg:flex flex-grow items-center hidden" id="menu">
                <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
                    <li>
                        <a href="#"
                            class="px-3 py-4 flex items-center text-xs uppercase font-bold text-white hover:underline hover:text-yellow-500 lg:py-2">
                            <i class="fas fa-plane"></i><span class="ml-1">Flights</span>
                        </a>
                    </li>
                    <li>
                        <a class="px-3 py-4 flex items-center text-xs uppercase font-bold text-white hover:underline hover:text-yellow-500  lg:py-2"
                            href="#">
                            <i class="fas fa-hotel"></i><span class="ml-1">Hotels</span></a>
                    </li>
                    <li>
                        <a class="px-3 py-4 flex items-center text-xs uppercase font-bold text-white hover:underline hover:text-yellow-500 lg:py-2"
                            href="#">
                            <i class="fas fa-hiking"></i><span class="ml-2">Tours</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="px-3 py-4 flex items-center text-xs uppercase font-bold text-white hover:underline hover:text-yellow-500 lg:py-2">
                            <i class="fas fa-car"></i><span class="ml-1">Cars</span>
                        </a>
                    </li>

                    <li>
                        <a href="#"
                            class="px-3 py-4 flex items-center text-xs uppercase font-bold text-white hover:underline hover:text-yellow-500 lg:py-2">
                            <i class="fas fa-suitcase"></i><span class="ml-1">Vacations</span>
                        </a>
                    </li>
                    @if (Route::has('login'))
                        @auth
                            <li>
                                <a href="{{ url('/dashboard') }}"
                                    class="px-3 py-4 flex items-center text-xs uppercase font-bold text-white hover:underline hover:text-yellow-500 lg:py-2">
                                    logout
                                </a>
                            </li>
                        @else
                            <li>
                                <a href="{{ route('login') }}"
                                    class="px-3 py-4 flex items-center text-xs uppercase font-bold text-white hover:underline hover:text-yellow-500 lg:py-2">
                                    Log in
                                </a>
                            </li>
                            @if (Route::has('register'))
                                <li>
                                    <a href="{{ route('register') }}"
                                        class="px-3 py-4 flex items-center text-xs uppercase font-bold text-white hover:underline hover:text-yellow-500 lg:py-2">
                                        Register
                                    </a>
                                </li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>


    {{-- <header class="sticky inset-0 z-50 border-b border-slate-100 bg-white/80 backdrop-blur-lg">
        <nav class="mx-auto flex max-w-6xl gap-8 px-6 transition-all duration-200 ease-in-out lg:px-12 py-4">
            <div class="relative flex items-center">
                <a href="/">
                    <img src="https://www.svgrepo.com/show/499831/target.svg" loading="lazy" style="color:transparent"
                        width="32" height="32"></a>
            </div>
            <div class="flex-grow"></div>
            <ul class="hidden items-center justify-center gap-6 md:flex">
                <li class="pt-1.5 font-dm text-sm font-medium text-slate-700">
                    <a href="#">Pricing</a>
                </li>
                <li class="pt-1.5 font-dm text-sm font-medium text-slate-700">
                    <a href="#">Blog</a>
                </li>
                <li class="pt-1.5 font-dm text-sm font-medium text-slate-700">
                    <a href="#">Docs</a>
                </li>
            </ul>
        </nav>
    </header> --}}
