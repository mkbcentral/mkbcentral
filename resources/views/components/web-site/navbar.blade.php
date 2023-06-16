<div>
    <!-- ====== Navbar Section Start -->
    <nav x-data="{
        navbarOpen: false,
        dropdownNavbarLinkLogiciel: false,
        dropdownNavbarLinkService: false,
    }" class="flex w-full items-center  text-white">
        <div class="container mx-auto">
            <div class="relative -mx-4 flex items-center justify-between">
                <div class="w-60 max-w-full px-4">
                    <a href="javascript:void(0)" class="block w-full py-5 text-2xl font-bold">
                        MKBcentral
                    </a>
                </div>
                <div class="flex w-full items-center justify-between px-4 md:pl-4">
                    <div>
                        <button @click="navbarOpen = !navbarOpen" :class="navbarOpen && 'navbarTogglerActive'"
                            id="navbarToggler"
                            class="ring-primary absolute
                            right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] focus:ring-2 lg:hidden">
                            <span class="bg-white relative my-[6px] block h-[2px] w-[30px]"></span>
                            <span class="bg-white relative my-[6px] block h-[2px] w-[30px]"></span>
                            <span class="bg-white relative my-[6px] block h-[2px] w-[30px]"></span>
                        </button>
                        <nav :class="!navbarOpen && 'hidden'" id="navbarCollapse"
                            class="absolute right-4  sm:bg-opacity-800 md:bg-opacity-800 top-full
                                 w-full max-w-[250px] rounded-lg
                                  py-5 px-6 shadow lg:static lg:block lg:w-full
                                   lg:max-w-full lg:shadow-none text-slate-300">
                            <ul class="block  lg:flex">
                                <x-web-site.navs.application-drop-down />
                                <li>
                                    <button @click="dropdownNavbarLinkService = !dropdownNavbarLinkService"
                                        class="hover:text-indigo-300 flex items-center space-x-2 py-2
                                            text-lg  font-bold lg:ml-12 lg:inline-flex">
                                        <span>Autres service</span>
                                        <span>
                                            <svg x-show="dropdownNavbarLinkService==false"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-4 h-4 font-bold">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                            </svg>
                                            <svg x-show="dropdownNavbarLinkService==true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-4 h-4 font-bold">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                                            </svg>
                                        </span>

                                    </button>
                                    <!-- Dropdown menu -->
                                    <div x-show="dropdownNavbarLinkService==true"
                                        class="absolute transition-all ease-in duration-200 bg-white text-base z-10 list-none
                                         divide-y divide-gray-100 rounded shadow  w-44">
                                        <ul class="py-1" aria-labelledby="dropdownLargeButton">
                                            <li>
                                                <a href="#"
                                                    class="text-sm text-slate-600 hover:bg-gray-100 text-gray-700 block px-4 py-2">Dashboard</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="text-sm text-slate-600 hover:bg-gray-100 text-gray-700 block px-4 py-2">Settings</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="text-sm text-slate-600 hover:bg-gray-100 text-gray-700 block px-4 py-2">Earnings</a>
                                            </li>
                                        </ul>
                                        <div class="py-1">
                                            <a href="#"
                                                class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Sign
                                                out</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="hidden justify-end bg-blue-600 items-center pr-16 sm:flex lg:pr-0 space-x-6 rounded-lg">
                        <a href="javascript:void(0)"
                            class="text-indigo-200 hover:text-primarytext-base font-medium ml-4">
                            Se connecter
                        </a>
                        <a href="javascript:void(0)"
                            class=" rounded-lg bg-white p-2 text-center  text-base font-medium text-dark-700 hover:bg-opacity-90">
                            Essai gratuit
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- ======End Navbar Section Start -->
</div>
