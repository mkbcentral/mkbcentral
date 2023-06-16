<div>
    <li>
        <button @click="dropdownNavbarLinkLogiciel = !dropdownNavbarLinkLogiciel"
            class="hover:text-indigo-300 flex items-center space-x-2 py-2
                text-lg  font-bold lg:ml-12 lg:inline-flex">
            <span>Logiciels</span>
            <span>
                <svg x-show="dropdownNavbarLinkLogiciel==false" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 font-bold">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
                <svg x-show="dropdownNavbarLinkLogiciel==true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 font-bold">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                </svg>
            </span>

        </button>
        <!-- Dropdown menu -->
        <div x-show="dropdownNavbarLinkLogiciel==true"
            class="absolute transition-all ease-in duration-200 bg-white text-base z-10 list-none
             divide-y divide-gray-100 rounded shadow  w-44">
            <ul class="py-12" aria-labelledby="dropdownLargeButton">
                @foreach ($applicationsList as $application)
                    <li>
                        <a href="{{$application->url}}"
                            class="text-sm text-slate-600 hover:bg-gray-100
                            text-gray-700 block px-4 py-2">{{$application->name}}</a>
                    </li>
                @endforeach

            </ul>
        </div>
    </li>
</div>
