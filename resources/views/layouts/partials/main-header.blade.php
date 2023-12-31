<header>
    <nav x-data="{openNavBar:false}" class="bg-white fixed w-full border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="" class="flex items-center">
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">MKB</span>
            </a>
            <div class="flex items-center lg:order-2">
                <a href="#" class="text-gray-800 dark:text-white hover:bg-gray-50
                     focus:ring-4 focus:ring-gray-300 font-medium rounded-lg
                         text-sm px-5 py-2.5 mr-2 dark:hover:bg-gray-700 focus:outline-none
                          dark:focus:ring-gray-800">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                    </svg>
                </a>
                <button @click="openNavBar = !openNavBar" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
            <div class="hidden justify-between items-center w-full transform translate-x-full md:translate-x-0

                lg:flex lg:w-auto lg:order-1" id="mobile-menu-2" >
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                        <a href="#" class="block py-2 pr-4 pl-3 text-white rounded
                             bg-blue-700 lg:bg-transparent lg:text-blue-700 lg:p-0
                              dark:text-white" aria-current="page">Accueil</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b
                         border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent
                         lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-gray-400
                          lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white
                          lg:dark:hover:bg-transparent dark:border-gray-700">Formations</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b
                         border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent
                         lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-gray-400
                          lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white
                          lg:dark:hover:bg-transparent dark:border-gray-700">Services</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b
                         border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent
                         lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-gray-400
                          lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white
                          lg:dark:hover:bg-transparent dark:border-gray-700">A propos</a>
                    </li>

                </ul>
            </div>
        </div>
        <ul :class="{'block': openNavBar, 'hidden': ! openNavBar}" class=" flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0 transform -translate-x-full">
            <li>
                <a href="#" class="block py-2 pr-4 pl-3 text-white rounded
                     bg-blue-700 lg:bg-transparent lg:text-blue-700 lg:p-0
                      dark:text-white" aria-current="page">Accueil</a>
            </li>
            <li>
                <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b
                 border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent
                 lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-gray-400
                  lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white
                  lg:dark:hover:bg-transparent dark:border-gray-700">Formations</a>
            </li>
            <li>
                <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b
                 border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent
                 lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-gray-400
                  lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white
                  lg:dark:hover:bg-transparent dark:border-gray-700">Services</a>
            </li>
            <li>
                <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b
                 border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent
                 lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-gray-400
                  lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white
                  lg:dark:hover:bg-transparent dark:border-gray-700">A propos</a>
            </li>

        </ul>
    </nav>
    <section class="bg-white dark:bg-gray-900 mt-9ack">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold leading-none md:text-5xl xl:text-6xl dark:text-white">Developpement web, Mobile,Desktop</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">Nous mettons à votre disposition un programme de formation Web,Mobile et Desktop, ainsi que des Formations en informatique.</p>
                <a href="#" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Formations
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
                <a href="#" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                    Services
                </a>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="{{ asset('phone-mockup.png') }}" alt="mockup">
            </div>
        </div>
    </section>
</header>
