<x-main-layout>
    <main class="">
        <header class="bg-opacity-80 bg-blue-600 bg-center  h-[600px] w-screen text-white"
            style="clip-path: polygon(0 0, 100% 0, 100% 100%, 0 86%);">
            <div class="w-full h-full backdrop-brightness-50 e">
                <!-- ====== Navbar Section Start -->
                <nav x-data="{
                    navbarOpen: false
                }" class="flex w-full items-center bg-transparent text-white">
                    <div class="container mx-auto">
                        <div class="relative -mx-4 flex items-center justify-between">
                            <div class="w-60 max-w-full px-4">
                                <a href="javascript:void(0)" class="block w-full py-5 text-2xl font-bold">
                                    MKBcentral
                                </a>
                            </div>
                            <div class="flex w-full items-center justify-between px-4">
                                <div>
                                    <button @click="navbarOpen = !navbarOpen"
                                        :class="navbarOpen && 'navbarTogglerActive'" id="navbarToggler"
                                        class="ring-primary absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] focus:ring-2 lg:hidden">
                                        <span class="bg-body-color relative my-[6px] block h-[2px] w-[30px]"></span>
                                        <span class="bg-body-color relative my-[6px] block h-[2px] w-[30px]"></span>
                                        <span class="bg-body-color relative my-[6px] block h-[2px] w-[30px]"></span>
                                    </button>
                                    <nav :class="!navbarOpen && 'hidden'" id="navbarCollapse"
                                        class="absolute right-4 top-full w-full max-w-[250px] rounded-lg  py-5 px-6 shadow lg:static lg:block lg:w-full lg:max-w-full lg:shadow-none">
                                        <ul class="block lg:flex">
                                            <li>
                                                <a href="javascript:void(0)"
                                                    class=" hover:text-indigo-300 flex py-2 text-base font-medium lg:ml-12 lg:inline-flex">
                                                    Logociels
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)"
                                                    class=" hover:text-indigo-300 flex py-2 text-base font-medium lg:ml-12 lg:inline-flex">
                                                    Clients
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)"
                                                    class=" hover:text-indigo-300 flex py-2 text-base font-medium lg:ml-12 lg:inline-flex">
                                                    Formations
                                                </a>
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
                <div class="flex container mx-auto justify-between px-5">
                    <div class="w-[1000px]  flex items-start flex-col justify-center">
                        <h1 class="text-3xl text-gray-2">Disponible pour repondre aux des clients</h1>
                        <h2 class="text-5xl">Des logiciels surmesure</h2>
                        <p class="align-baseline pb-12 text-gray-2">Notre plateforme se donne une mission de vous accopanger, dans
                            le
                            domaine de la technlogie en en
                            vous offre des logicile de gestion adéquats</p>
                        <div class="flex justify-between">
                            <a href="javascript:void(0)"
                                class=" rounded-lg bg-blue-500 p-2 pr-4 text-gray text-base font-medium text-dark-700 hover:bg-opacity-90">
                                Commencer, c'est gratuit
                            </a>

                        </div>

                    </div>
                    <img src="{{ asset('images/img1.png') }}" alt="Image">
                </div>
            </div>
        </header>
    </main>

</x-main-layout>
