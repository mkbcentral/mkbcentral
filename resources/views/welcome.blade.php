<x-main-layout>
    <main class="">
        <x-web-site.header />
        @livewire('section.list-application')
        @livewire('client.list-client')
        @livewire('section.contact-us')
        <x-web-site.footer />
    </main>
</x-main-layout>
