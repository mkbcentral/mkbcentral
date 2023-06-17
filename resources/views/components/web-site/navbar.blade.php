<div  x-data="{
    navbarOpen: false,}">
    <!-- ====== Navbar Section Start -->
    <nav class="flex w-full items-center  text-white relative">

        <div class="container mx-auto inline-block">
            <div class="relative -mx-4 flex items-center justify-between">
                <div class="w-60 max-w-full px-4">
                    <a href="javascript:void(0)" class="block w-full py-5 text-2xl font-bold">
                        MKBcentral
                    </a>
                </div>
                <div class="flex w-full items-center justify-between px-4 md:pl-4">
                    <div>
                        <button @click="navbarOpen = !navbarOpen"
                            id="navbarToggler"
                            class="ring-primary absolute
                            right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] focus:ring-2 lg:hidden">
                            <span class="bg-white relative my-[6px] block h-[2px] w-[30px]"></span>
                            <span class="bg-white relative my-[6px] block h-[2px] w-[30px]"></span>
                            <span class="bg-white relative my-[6px] block h-[2px] w-[30px]"></span>
                        </button>
                        <nav
                            class="absolute right-4  sm:bg-opacity-800 md:bg-opacity-800 top-full
                                 w-full max-w-[250px] rounded-lg
                                  py-5 px-6 shadow lg:static lg:block lg:w-full
                                   lg:max-w-full lg:shadow-none text-slate-300">
                            <ul class="block  lg:flex">

                                <li>
                                    <a href="" class="hover:text-indigo-300 flex items-center space-x-2 py-2
                                    text-lg  font-bold lg:ml-12 lg:inline-flex">Applications</a>
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
    <div class="h-screen w-96 bg-blue-950 absolute top-0 right-0 " x-show="navbarOpen==true">
        <div class="p-4">
            <button @click="navbarOpen = !navbarOpen">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                  </svg>

            </button>
        </div>
    </div>
</div>
