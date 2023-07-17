<div class="flex w-full items-center justify-between px-4">
    <div>
        <button @click="navbarOpen = !navbarOpen" :class="navbarOpen && 'navbarTogglerActive'" id="navbarToggler"
            class=" absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] focus:ring-2 lg:hidden">
            <span class="bg-body-color relative my-[6px] block h-[2px] w-[30px]"></span>
            <span class="bg-body-color relative my-[6px] block h-[2px] w-[30px]"></span>
            <span class="bg-body-color relative my-[6px] block h-[2px] w-[30px]"></span>
        </button>
        <nav x-transition :class="!navbarOpen && 'hidden'" id="navbarCollapse"
            class="absolute right-4 bg-blue-500 sm:bg-blue-500 md:bg-blue-500 lg:bg-transparent top-full w-full max-w-[250px] rounded-lg  py-4 px-6 shadow transition-all lg:static lg:block lg:w-full lg:max-w-full lg:shadow-none">
            <ul class="block lg:flex">
                <li>
                    <a href="javascript:void(0)"
                        class="text-dark hover:text-primary flex py-2 text-base font-medium lg:ml-12 lg:inline-flex">
                        Logiciels
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)"
                        class="text-dark hover:text-primary flex py-2 text-base font-medium lg:ml-12 lg:inline-flex">
                        Clients
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    @auth
        <div class="hidden justify-end pr-16 sm:flex lg:pr-0">
            <a href="javascript:void(0)" class="text-red-500  hover:text-primary py-2 px-7 text-base font-medium">
                Faire un don
            </a>
            <a href="{{ route('login') }}"
                class="bg-primary rounded-lg py-2 px-7 text-base font-medium text-white hover:bg-opacity-90">
                Obtenir la version Pro
            </a>
        </div>
    @else
        <div class="hidden justify-end pr-16 sm:flex lg:pr-0">
            <a href="{{ route('login') }}" class="text-dark hover:text-primary py-2 px-7 text-base font-medium">
                Se conntecter
            </a>
            <a href="{{ route('login') }}"
                class="bg-primary rounded-lg py-2 px-7 text-base font-medium text-white hover:bg-opacity-90">
                Essaie gratuit
            </a>
        </div>
    @endauth
</div>
