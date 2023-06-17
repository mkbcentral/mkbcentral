<x-main-layout>
    <main class="">
        <div class="bg-blue-600">
            <x-web-site.navbar />
        <x-web-site.header />
        </div>
        @livewire('section.list-application')
        @livewire('client.list-client')
        @livewire('section.contact-us')
        <x-web-site.footer />
    </main>
</x-main-layout>
