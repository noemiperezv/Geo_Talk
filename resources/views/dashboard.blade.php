<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('GeoTalk') }}
        </h2>
    </x-slot>
    <x-jet-welcome/>
    @include('footer')
</x-app-layout>