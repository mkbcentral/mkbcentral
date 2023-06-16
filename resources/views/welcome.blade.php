<x-main-layout>
    <main class="">
        <header class="bg-opacity-80 bg-blue-600 bg-center   text-white"
            style="clip-path: polygon(0 0, 100% 0, 100% 100%, 0 86%);">
            <div class="w-full h-full backdrop-brightness-50 e">
                <x-web-site.header />
            </div>
        </header>
        @livewire('section.list-application')
        @livewire('client.list-client')
        @livewire('section.contact-us')
        <x-web-site.footer />
    </main>
</x-main-layout>
